<?php

namespace App\Http\Controllers;

use App\Models\Datos; // Asegúrate de usar el modelo correcto
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

        // Datos históricos (puedes obtenerlos de la base de datos o definirlos manualmente)
        $temperaturasHistoricas = $ultimosDatos->pluck('temperatura')->toArray();
        $humedadesHistoricas = $ultimosDatos->pluck('humedad')->toArray();
        $vibracionesHistoricas = $ultimosDatos->pluck('vibracion')->toArray();
        $corrientesHistoricas = $ultimosDatos->pluck('corriente')->toArray(); // Datos históricos de corriente
        
        // Obtener las fechas de los registros y formatearlas
        $fechasHistoricas = $ultimosDatos->pluck('created_at')->map(function ($date) {
            return $date->format('d/m/Y H:i'); // Formato de fecha que desees
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
            'corrientesHistoricas', // Pasar los datos históricos de corriente
            'fechasHistoricas' // Agregar la variable de fechas
        ));
    }
}
