@extends('layouts.app')
@section('title', 'DISEÑO DE UN SISTEMA DE MONITOREO UTILIZANDO TECNOLOGÍA LORA PARA GESTIONAR EL MANTENIMIENTO PREDICTIVO DE MOTORES ELÉCTRICOS DE UNA EMPRESA HOTELERA')

@section('contents')
<style>
  body {
    background: linear-gradient(to bottom, #cfe8fc, #a0cfee);
    min-height: 100vh;
  }
  .content-container {
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
  }
</style>

<div class="content-container">
  <div class="row">
    <h2>¿DE QUÉ TRATA NUESTRO PROYECTO?</h2>
    <p>El proyecto se centra en el diseño de un sistema de monitoreo basado en tecnología LoRa para gestionar el mantenimiento predictivo de motores eléctricos en una empresa hotelera. Este sistema detecta y previene fallas mediante la recopilación continua de datos sobre temperatura, vibración y corriente en los motores. Los datos son analizados en un servidor, alertando al área de mantenimiento ante posibles anomalías y mejorando la eficiencia operativa. El diseño incorpora una red de sensores y una plataforma web para visualización de datos.</p>
  </div>

  <div class="row justify-content-center">
    <img src="{{ asset('admin_assets/img/') }}" alt="" style="width: 600px; height: auto;">
  </div>

  <hr size="5" width="50%" color="#2B3852"/>

  <div class="row">
    <h2>¿CÓMO FUNCIONA NUESTRO PROYECTO?</h2>
    <p>El funcionamiento de nuestro sistema comienza con el sensor que fue sometido a la temperatura ambiente y también fue conectado al microcontrolador (cerebro del sistema), para recopilar, procesar y enviar los datos del sensor al servidor para su almacenamiento en una base de datos (mediante el método POST) y así al fin poder visualización en nuestra página web.</p>
  </div>

  <div class="row justify-content-center">
    <img src="{{ asset('admin_assets/img/funcionamiento.png') }}" alt="Logo" style="width: 600px; height: auto;">
  </div>

  <hr size="5" width="50%" color="#2B3852"/>

  <div class="row">
    <h2>¿QUÉ HERRAMIENTAS USAMOS?</h2>
  </div>

  <div class="row">
    <h3>Microcontrolador ESP32-WROOM-32</h3>
    <p>Módulo potente y versátil, ideal para proyectos de monitoreo remoto como el de mantenimiento predictivo de motores eléctricos. Equipado con un procesador dual-core, conectividad Wi-Fi y Bluetooth, este microcontrolador permite recibir, procesar y enviar datos de sensores de temperatura, vibración y corriente a través de LoRa. Su capacidad de procesamiento y bajo consumo energético lo hacen adecuado para gestionar múltiples sensores y asegurar la transmisión de datos al servidor central en tiempo real, facilitando la detección de anomalías en el funcionamiento de los motores.</p>
  </div>

  <div class="row justify-content-center">
    <img src="{{ asset('admin_assets/img/ESP32.png') }}" alt="Logo" style="width: 300px; height: auto;">
  </div>

  <div class="row">
    <h3>Modulo transceptora Lora E220-900t30D</h3>
    <p>Permite comunicación inalámbrica de largo alcance (hasta 10 km) en 900 MHz, ideal para monitoreo en el proyecto de mantenimiento predictivo. Con potencia de salida de 1W y modulación LoRa, ofrece alta penetración de señal, bajo consumo de energía, y transmisión confiable de datos de temperatura, vibración y corriente desde los motores al servidor central, facilitando la detección de fallas y la gestión de mantenimiento.</p>
  </div>

  <div class="row justify-content-center">
    <img src="{{ asset('admin_assets/img/LORA.png') }}" alt="Logo" style="width: 300px; height: auto;">
  </div>

  <div class="row">
    <h3>Sensor de Temperatura DHT22</h3>
    <p>Es un sensor digital de alta precisión ideal para medir temperatura y humedad en proyectos de monitoreo como el de mantenimiento predictivo de motores eléctricos. Este sensor ofrece un rango de medición de temperatura de -40°C a 80°C con una precisión de ±0.5°C, y de humedad de 0% a 100% con una precisión de ±2-5%. Su salida digital facilita la integración con sistemas LoRa, permitiendo enviar datos precisos al servidor central para analizar condiciones de operación y detectar posibles anomalías.</p>
  </div>

  <div class="row justify-content-center">
    <img src="{{ asset('admin_assets/img/TEMPERATURA.png') }}" alt="Logo" style="width: 300px; height: auto;">
  </div>

  <div class="row">
    <h3>Sensor de Vibración ADXL 345</h3>
    <p>Acelerómetro de tres ejes de alta sensibilidad que mide vibraciones y movimientos, ideal para monitorear el estado de motores eléctricos en el proyecto de mantenimiento predictivo. Tiene un rango de medición de ±2g a ±16g y salida digital I2C/SPI, lo que facilita su integración con sistemas de monitoreo basados en LoRa. Este sensor permite detectar variaciones en vibración que podrían indicar fallas mecánicas, transmitiendo los datos al servidor central para un análisis continuo y la generación de alertas preventivas.</p>
  </div>

  <div class="row justify-content-center">
    <img src="{{ asset('admin_assets/img/VIBRACION.png') }}" alt="Logo" style="width: 300px; height: auto;">
  </div>

  <div class="row">
    <h3>Sensor de Corriente SCT013</h3>
    <p>Sensor tipo transformador de corriente no invasivo, diseñado para medir la corriente en cables sin necesidad de conexión directa, lo que lo hace ideal para monitoreo seguro de motores eléctricos. Este sensor puede medir corrientes de hasta 100A y emite una señal de voltaje proporcional, facilitando su integración en sistemas de monitoreo LoRa. En el proyecto de mantenimiento predictivo, el SCT013 permite registrar cambios en el consumo de corriente que podrían indicar problemas en el motor, enviando estos datos al servidor central.</p>
  </div>

  <div class="row justify-content-center">
    <img src="{{ asset('admin_assets/img/CORRIENTE.png') }}" alt="Logo" style="width: 500px; height: auto;">
  </div>

  <div class="row">
    <h3>Laravel</h3>
    <p>Laravel es un framework de desarrollo web en PHP que ofrece numerosas características y ventajas que fueron beneficiosas para nuestro proyecto de recopilación y visualización de datos de temperatura y humedad. Laravel nos proporcionó una estructura robusta, herramientas potentes y una sintaxis elegante que puede acelerar el desarrollo y mejorar la calidad de tu aplicación web.</p>
  </div>

  <div class="row justify-content-center">
    <img src="{{ asset('admin_assets/img/laravel_logo.png') }}" alt="Logo" style="width: 600px; height: auto;">
  </div>

  <div class="row">
    <h3>Bootstrap</h3>
    <p>La combinación de Laravel con Bootstrap nos ofreció beneficios significativos para el desarrollo de tu página web, proporcionándonos un entorno de desarrollo eficiente y potente para crear aplicaciones web con una interfaz de usuario atractiva y funcional.</p>
  </div>

  <div class="row justify-content-center">
    <img src="{{ asset('admin_assets/img/bootstrap_logo.png') }}" alt="Logo" style="width: 500px; height: auto;">
  </div>
</div>
@endsection

