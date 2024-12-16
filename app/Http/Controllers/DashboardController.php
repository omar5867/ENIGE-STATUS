<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Obtener los últimos 5 registros de la tabla 'datos'
        $ultimosDatos = Datos::orderBy('created_at', 'desc')->take(5)->get();

        // Extraer los valores de los últimos 5 registros
        $temperatura = $ultimosDatos->isNotEmpty() ? $ultimosDatos->first()->temperatura : 0;
        $humedad = $ultimosDatos->isNotEmpty() ? $ultimosDatos->first()->humedad : 0;
        $vibracion = $ultimosDatos->isNotEmpty() ? $ultimosDatos->first()->vibracion : 0;
        $corriente = $ultimosDatos->isNotEmpty() ? $ultimosDatos->first()->corriente : 0;

        // Datos históricos
        $temperaturasHistoricas = $ultimosDatos->pluck('temperatura')->toArray();
        $humedadesHistoricas = $ultimosDatos->pluck('humedad')->toArray();
        $vibracionesHistoricas = $ultimosDatos->pluck('vibracion')->toArray();
        $corrientesHistoricas = $ultimosDatos->pluck('corriente')->toArray();

        // Manejar fechas nulas al formatear
        $fechasHistoricas = $ultimosDatos->pluck('created_at')->map(function ($date) {
            return $date ? $date->format('d/m/Y H:i') : 'Fecha no disponible';
        })->toArray();

        // Pasar los datos a la vista
        return view('dashboard', compact(
            'temperatura',
            'humedad',
            'vibracion',
            'corriente',
            'temperaturasHistoricas',
            'humedadesHistoricas',
            'vibracionesHistoricas',
            'corrientesHistoricas',
            'fechasHistoricas'
        ));
    }
}
