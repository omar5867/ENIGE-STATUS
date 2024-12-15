@extends('layouts.app')

@section('title', 'Vista Principal')



@section('contents')
  <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-500">MOTOR 1 : Últimos datos tomados</h1>

                    </div>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Temperatura</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">15°C</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-temperature-low fa-3x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Humedad</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">46 %RH</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-cloud-rain fa-3x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Vibración
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">400 Hz</div>
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

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Corriente</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">40 A</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-3x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                            <!-- Area Chart -->
                               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                 <div class="card shadow mb-4">
                                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Gráfico de Temperatura</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-area" style="height: 200px;">
                                             <canvas id="myAreaChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- Pie Chart -->
                             <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Gráfico de la Humedad</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-area" style="height: 200px;">
                                            <canvas id="myPieChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Area Chart -->
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="card shadow mb-4">
                                     <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                       <h6 class="m-0 font-weight-bold text-primary">Gráfico de Vibración</h6>
                                   </div>
                                   <div class="card-body">
                                       <div class="chart-area" style="height: 200px;">
                                            <canvas id="myAreaChartH"></canvas>
                                       </div>
                                   </div>
                               </div>
                           </div>
                        </div>

                        <!-- Script para agregar gráficos con datos aleatorios -->
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>

                        // Gráfico de área (Temperatura)
                        const ctxArea = document.getElementById('myAreaChart').getContext('2d');
                        const myAreaChart = new Chart(ctxArea, {
                            type: 'line',
                            data: {
                                labels: ['Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre'],
                                datasets: [{
                                    label: 'Temperatura (°C)',
                                    data: Array.from({length: 7}, () => Math.floor(Math.random() * 35) + 5), // Datos aleatorios entre 5 y 40°C
                                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                    borderColor: 'rgba(54, 162, 235, 1)',
                                    borderWidth: 1,
                                    fill: true
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });

                        const ctxPie = document.getElementById('myPieChart').getContext('2d');
const myPieChart = new Chart(ctxPie, {
    type: 'pie',
    data: {
        labels: ['Alta Humedad', 'Media Humedad', 'Baja Humedad'],
        datasets: [{
            label: 'Humedad',
            data: Array.from({length: 3}, () => Math.floor(Math.random() * 100)),
            backgroundColor: [
                'rgba(75, 192, 192, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(255, 205, 86, 0.6)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 205, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'right', // Mantiene la leyenda en la parte derecha
                labels: {
                    font: {
                        size: 12 // Tamaño de fuente menor para evitar que se corte el texto
                    },
                    padding: 15, // Espaciado ajustado para mejorar la legibilidad
                    boxWidth: 20 // Ajusta el tamaño del cuadro de color
                }
            }
        },
        layout: {
            padding: {
                left: 0,
                right: 20, // Añade un margen derecho para más espacio en la leyenda
            }
        }
    }
});





                        // Gráfico de área (Temperatura)
                        const ctxAreaH = document.getElementById('myAreaChartH').getContext('2d');
                        const myAreaChartH = new Chart(ctxAreaH, {
                            type: 'line',
                            data: {
                                labels: ['Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre'],
                                datasets: [{
                                    label: '(Hz)',
                                    data: Array.from({length: 7}, () => Math.floor(Math.random() * 35) + 5), // Datos aleatorios entre 5 y 40°C
                                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                    borderColor: 'rgba(54, 162, 23, 1)',
                                    borderWidth: 1,
                                    fill: true
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                        </script>

                        <div class="row">
                            <!-- Corriente Chart -->
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
                                <div class="card shadow">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Gráfico de Corriente</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-area" style="height: 200px;">
                                            <canvas id="myCurrentChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Estado del Motor Chart -->
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
                                <div class="card shadow">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Gráfico de Estado del Motor</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-area" style="height: 200px;">
                                            <canvas id="myMotorStateChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            // Gráfico de Corriente (línea)
                            const ctxCurrent = document.getElementById('myCurrentChart').getContext('2d');
                            const myCurrentChart = new Chart(ctxCurrent, {
                                type: 'line',
                                data: {
                                    labels: ['Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre'],
                                    datasets: [{
                                        label: 'Corriente (A)',
                                        data: Array.from({length: 7}, () => Math.floor(Math.random() * 50) + 10), // Datos aleatorios entre 10 y 60 A
                                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                                        borderColor: 'rgba(153, 102, 255, 1)',
                                        borderWidth: 1,
                                        fill: true
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });

                            // Gráfico de Estado del Motor (barras horizontales con leyenda a la derecha)
                            const ctxMotorState = document.getElementById('myMotorStateChart').getContext('2d');
                            const myMotorStateChart = new Chart(ctxMotorState, {
                                type: 'bar',
                                data: {
                                    labels: ['Activo', 'En Espera', 'Inactivo'],
                                    datasets: [{
                                        label: '',
                                        data: Array.from({length: 3}, () => Math.floor(Math.random() * 100)), // Datos aleatorios para cada estado
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.6)',
                                            'rgba(54, 162, 235, 0.6)',
                                            'rgba(75, 192, 192, 0.6)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(75, 192, 192, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    indexAxis: 'y', // Cambia las barras a orientación horizontal
                                    responsive: true,
                                    plugins: {
                                        legend: {
                                            position: 'right', // Posiciona la leyenda a la derecha
                                            labels: {
                                                boxWidth: 20
                                            }
                                        }
                                    },
                                    scales: {
                                        x: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>

@endsection
