@extends('layouts.app')

@section('title', 'Vista Principal')

@section('contents')
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- tamaño del texto -->
        <h1 class="h3 mb-0 text-gray-500 font-weight-bold">MOTOR 1: Últimos datos tomados</h1>
        <div class="container mt-4 text-right">
            <!--  tamaño del texto  -->
            <h1 class="h3 mb-0 text-gray-500 font-weight-bold">Reporte de Puntos y Datos</h1>
            <p>Descarga el archivo CSV con los datos del reporte:</p>
            <!-- Botón de descarga -->
            <a href="{{ route('reporte.descargar') }}" class="btn btn-success">
                <i class="fa fa-download"></i> Descargar Reporte
            </a>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

         <!-- Temperatura Card -->
         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Temperatura</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $temperatura }}°Celcius</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-temperature-low fa-3x text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Humedad Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Humedad</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $humedad }} %</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cloud-rain fa-3x text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vibración Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Aceleración
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $vibracion }} m/s^2 </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-wifi fa-3x text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Corriente Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Corriente</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $corriente }} A</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-3x text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row for Graphs -->
    <div class="row">
        <!-- Gráfico de Temperatura -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Gráfico de Temperatura</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area" style="height: 300px;">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfico de Humedad -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Gráfico de Humedad</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area" style="position: relative; height: 300px; width: 100%;">
                        <canvas id="myHumidityChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Segunda fila para los gráficos restantes -->
    <div class="row">
        <!-- Gráfico de Vibración -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Gráfico de Vibración</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area" style="height: 300px;">
                        <canvas id="myAreaChartH"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfico de Corriente -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Gráfico de Corriente</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area" style="height: 300px;">
                        <canvas id="myCurrentChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script para agregar gráficos con datos reales -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de Temperatura
        const ctxArea = document.getElementById('myAreaChart').getContext('2d');
        const fechesHistoricas = {!! json_encode($fechasHistoricas) !!};
        const temperaturasHistoricas = {!! json_encode($temperaturasHistoricas) !!};

        const myAreaChart = new Chart(ctxArea, {
            type: 'line',
            data: {
                labels: fechesHistoricas, // Usar las fechas históricas como etiquetas
                datasets: [{
                    label: 'Temperatura (°C)',
                    data: temperaturasHistoricas, // Datos históricos de temperatura
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: { // Configuración de la escala X
                        title: {
                            display: true,
                            text: 'Fecha y Hora'
                        },
                        ticks: {
                            autoSkip: true, // Saltar etiquetas si hay demasiadas
                            maxTicksLimit: 7 // Máximo número de etiquetas visibles
                        }
                    },
                    y: { // Configuración de la escala Y
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Temperatura (°Celsius)'
                        }
                    }
                }
            }
        });

        const ctxHumidity = document.getElementById('myHumidityChart').getContext('2d');
        const humedadesHistoricas = {!! json_encode($humedadesHistoricas) !!};

        const myHumidityChart = new Chart(ctxHumidity, {
            type: 'line',
            data: {
                labels: fechesHistoricas, // Usar las fechas históricas como etiquetas
                datasets: [{
                    label: 'Humedad (%)',
                    data: humedadesHistoricas, // Datos históricos de humedad
                    backgroundColor: 'rgba(46, 204, 113, 0.2)',
                    borderColor: 'rgba(46, 204, 113, 1)',
                    borderWidth: 1,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: { // Configuración de la escala X
                    title: {
                        display: true,
                        text: 'Fecha y Hora'
                    },
                    ticks: {
                        autoSkip: true, // Saltar etiquetas si hay demasiadas
                        maxTicksLimit: 7 // Máximo número de etiquetas visibles
                        }
                    },
                    y: { // Configuración de la escala Y
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Humedad (%)'
                    }
                }
            }
        }
    });

        // Gráfico de Vibración
        const ctxAreaH = document.getElementById('myAreaChartH').getContext('2d');
        const vibracionesHistoricas = {!! json_encode($vibracionesHistoricas) !!};

        const myAreaChartH = new Chart(ctxAreaH, {
            type: 'line',
            data: {
                labels: fechesHistoricas, // Usar las fechas históricas como etiquetas
                datasets: [{
                    label: 'Aceleración (m/s^2)',
                    data: vibracionesHistoricas, // Datos históricos de vibración
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: { // Configuración de la escala X
                    title: {
                        display: true,
                        text: 'Fecha y Hora'
                    },
                    ticks: {
                        autoSkip: true, // Saltar etiquetas si hay demasiadas
                        maxTicksLimit: 7 // Máximo número de etiquetas visibles
                        }
                    },
                    y: { // Configuración de la escala Y
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Humedad (%)'
                    }
                }
            }
        }
        });

        // Gráfico de Corriente
        const ctxCurrent = document.getElementById('myCurrentChart').getContext('2d');
        const corrientesHistoricas = {!! json_encode($corrientesHistoricas) !!};

        const myCurrentChart = new Chart(ctxCurrent, {
            type: 'line',
            data: {
                labels: fechesHistoricas, // Usar las fechas históricas como etiquetas
                datasets: [{
                    label: 'Corriente (A)',
                    data: corrientesHistoricas, // Datos históricos de corriente
                    backgroundColor: 'rgba(255, 159, 64, 0.2)', // Color de fondo
                borderColor: 'rgba(255, 159, 64, 1)', // Color del borde
                borderWidth: 1,
                fill: true
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: { // Configuración de la escala X
                title: {
                    display: true,
                    text: 'Fecha y Hora'
                },
                ticks: {
                    autoSkip: true, // Saltar etiquetas si hay demasiadas
                    maxTicksLimit: 7 // Máximo número de etiquetas visibles
                }
            },
            y: { // Configuración de la escala Y
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Corriente (A)'
                }
            }
        }
    }
});
    </script>
</div>
@endsection
