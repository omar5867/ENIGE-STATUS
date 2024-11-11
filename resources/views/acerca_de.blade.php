@extends('layouts.app')
@section('title', 'DISEÑO DE UN SISTEMA DE MONITOREO UTILIZANDO TECNOLOGÍA LORA PARA GESTIONAR EL MANTENIMIENTO PREDICTIVO DE MOTORES ELÉCTRICOS DE UNA EMPRESA HOTELERA')

@section('contents')
<style>
  /* Estilos para fondo de la página */
  .background-page {
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
      url('{{ asset("admin_assets/img/creditos.png") }}') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
    padding: 2rem;
    color: white;
  }

  /* Estilos para los títulos */
  .main-title, .section-title {
    text-align: center;
    text-transform: uppercase;
    color: #ffffff;
  }
  
  .main-title {
    font-size: 2.5rem;
    font-weight: bold;
    margin-top: 2rem;
    line-height: 1.3;
  }
  
  .section-title {
    font-size: 2rem;
    margin: 1.5rem 0;
  }

  /* Estilos de secciones */
  .content-section {
    background-color: rgba(0, 0, 0, 0.7);
    padding: 1.5rem;
    border-radius: 10px;
    margin: 2rem 0;
  }

  /* Imagenes centradas */
  .image-center {
    display: block;
    margin: 1rem auto;
    width: 80%;
    max-width: 600px;
  }

  /* Separador */
  .divider {
    border-top: 2px solid #2B3852;
    width: 50%;
    margin: 2rem auto;
  }

</style>

<div class="background-page">
  <!-- Título del proyecto -->
  <h1 class="main-title">¿DE QUÉ TRATA NUESTRO PROYECTO?</h1>
  <div class="content-section">
    <p>El proyecto se centra en el diseño de un sistema de monitoreo basado en tecnología LoRa para gestionar el mantenimiento predictivo de motores eléctricos en una empresa hotelera. Este sistema detecta y previene fallas mediante la recopilación continua de datos sobre temperatura, vibración y corriente en los motores. Los datos son analizados en un servidor, alertando al área de mantenimiento ante posibles anomalías y mejorando la eficiencia operativa. El diseño incorpora una red de sensores y una plataforma web para visualización de datos.</p>
  </div>

  <img src="{{ asset('admin_assets/img/creditos.png') }}" alt="Descripción del proyecto" class="image-center">

  <!-- Separador -->
  <hr class="divider" />

  <!-- Funcionamiento del proyecto -->
  <h1 class="main-title">¿CÓMO FUNCIONA NUESTRO PROYECTO?</h1>
  <div class="content-section">
    <p>El sistema utiliza sensores conectados a un microcontrolador que recopila, procesa y envía los datos al servidor, donde se almacenan y se visualizan en una página web, facilitando la monitorización en tiempo real.</p>
  </div>

  <img src="{{ asset('admin_assets/img/funcionamiento.png') }}" alt="Funcionamiento del sistema" class="image-center">

  <!-- Separador -->
  <hr class="divider" />

  <!-- Herramientas utilizadas -->
  <h1 class="main-title">¿QUÉ HERRAMIENTAS USAMOS?</h1>

  <div class="content-section">
    <h2 class="section-title">Microcontrolador ESP32-WROOM-32</h2>
    <p>Módulo potente y versátil, ideal para proyectos de monitoreo remoto como el de mantenimiento predictivo de motores eléctricos. Equipado con un procesador dual-core, conectividad Wi-Fi y Bluetooth, este microcontrolador permite recibir, procesar y enviar datos de sensores de temperatura, vibración y corriente a través de LoRa. Su capacidad de procesamiento y bajo consumo energético lo hacen adecuado para gestionar múltiples sensores y asegurar la transmisión de datos al servidor central en tiempo real, facilitando la detección de anomalías en el funcionamiento de los motores.</p>
  </div>

  <img src="{{ asset('admin_assets/img/ESP32.png') }}" alt="Microcontrolador ESP32" class="image-center">

  <div class="content-section">
    <h2 class="section-title">Módulo Transceptor LoRa E220-900T30D</h2>
    <p>Permite comunicación inalámbrica de largo alcance (hasta 10 km) en 900 MHz, ideal para monitoreo en el proyecto de mantenimiento predictivo. Con potencia de salida de 1W y modulación LoRa, ofrece alta penetración de señal, bajo consumo de energía, y transmisión confiable de datos de temperatura, vibración y corriente desde los motores al servidor central, facilitando la detección de fallas y la gestión de mantenimiento.</p>
  </div>

  <img src="{{ asset('admin_assets/img/LORA.png') }}" alt="Módulo LoRa" class="image-center">

  <div class="content-section">
    <h2 class="section-title">Sensor de Temperatura DHT22</h2>
    <p>Es un sensor digital de alta precisión ideal para medir temperatura y humedad en proyectos de monitoreo como el de mantenimiento predictivo de motores eléctricos. Este sensor ofrece un rango de medición de temperatura de -40°C a 80°C con una precisión de ±0.5°C, y de humedad de 0% a 100% con una precisión de ±2-5%. Su salida digital facilita la integración con sistemas LoRa, permitiendo enviar datos precisos al servidor central para analizar condiciones de operación y detectar posibles anomalías.</p>
  </div>

  <img src="{{ asset('admin_assets/img/TEMPERATURA.png') }}" alt="Sensor de Temperatura DHT22" class="image-center">
  <div class="content-section">
    <h2 class="section-title">Sensor de Vibración ADXL 345</h2>
    <p>Acelerómetro de tres ejes de alta sensibilidad que mide vibraciones y movimientos, ideal para monitorear el estado de motores eléctricos en el proyecto de mantenimiento predictivo. Tiene un rango de medición de ±2g a ±16g y salida digital I2C/SPI, lo que facilita su integración con sistemas de monitoreo basados en LoRa. Este sensor permite detectar variaciones en vibración que podrían indicar fallas mecánicas, transmitiendo los datos al servidor central para un análisis continuo y la generación de alertas preventivas.</p>
  </div>

  <img src="{{ asset('admin_assets/img/VIBRACION.png') }}" alt="Sensor de Temperatura DHT22" class="image-center">
  <div class="content-section">
    <h2 class="section-title">Sensor de Corriente SCT013</h2>
    <p>Sensor tipo transformador de corriente no invasivo, diseñado para medir la corriente en cables sin necesidad de conexión directa, lo que lo hace ideal para monitoreo seguro de motores eléctricos. Este sensor puede medir corrientes de hasta 100A y emite una señal de voltaje proporcional, facilitando su integración en sistemas de monitoreo LoRa. En el proyecto de mantenimiento predictivo, el SCT013 permite registrar cambios en el consumo de corriente que podrían indicar problemas en el motor, enviando estos datos al servidor central.</p>
  </div>

  <img src="{{ asset('admin_assets/img/CORRIENTE.png') }}" alt="Sensor de Temperatura DHT22" class="image-center">
  <div class="content-section">
    <h2 class="section-title">Laravel</h2>
    <p>Laravel es un framework de desarrollo web en PHP que ofrece numerosas características y ventajas que fueron beneficiosas para nuestro proyecto de recopilación y visualización de datos de temperatura y humedad. Laravel nos proporcionó una estructura robusta, herramientas potentes y una sintaxis elegante que puede acelerar el desarrollo y mejorar la calidad de tu aplicación web.</p>
  </div>

  <img src="{{ asset('admin_assets/img/laravel_logo.png') }}" alt="Sensor de Temperatura DHT22" class="image-center">
  <div class="content-section">
    <h2 class="section-title">Bootstrap</h2>
    <p>La combinación de Laravel con Bootstrap nos ofreció beneficios significativos para el desarrollo de tu página web, proporcionándonos un entorno de desarrollo eficiente y potente para crear aplicaciones web con una interfaz de usuario atractiva y funcional.</p>
  </div>

  <img src="{{ asset('admin_assets/img/bootstrap_logo.png') }}" alt="Sensor de Temperatura DHT22" class="image-center">
 </div>

@endsection


