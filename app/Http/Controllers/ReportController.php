<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ReportController extends Controller
{
    public function downloadReport()
    {
        // Nombre del archivo del reporte
        $fileName = 'reporte_puntos_datos.csv';

        // Crear un StreamedResponse para exportar datos en tiempo real
        $response = new StreamedResponse(function () {
            $handle = fopen('php://output', 'w');

            // Cabeceras del archivo CSV
            fputcsv($handle, ['ID Punto', 'Ubicación', 'Descripción', 'Estado', 'Vibración', 'Temperatura', 'Humedad', 'Corriente']);

            // Obtener datos combinados de las tablas `puntos` y `datos`
            $datos = DB::table('puntos')
                ->join('datos', 'puntos.ubicacion', '=', 'datos.punto')
                ->select('puntos.id', 'puntos.ubicacion', 'puntos.descripcion', 'puntos.estado', 'datos.vibracion', 'datos.temperatura', 'datos.humedad', 'datos.corriente')
                ->get();

            // Agregar cada fila de la base de datos al archivo CSV
            foreach ($datos as $fila) {
                fputcsv($handle, [
                    $fila->id,
                    $fila->ubicacion,
                    $fila->descripcion,
                    $fila->estado,
                    $fila->vibracion,
                    $fila->temperatura,
                    $fila->humedad,
                    $fila->corriente,

                ]);
            }

            fclose($handle);
        });

        // Configuración de los encabezados HTTP para la descarga
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', "attachment; filename={$fileName}");

        return $response;
    }
}
