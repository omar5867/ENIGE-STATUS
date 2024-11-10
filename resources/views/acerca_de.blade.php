@extends('layouts.app')
@section('title', 'DISEÑO DE UN SISTEMA DE MONITOREO UTILIZANDO TECNOLOGÍA LORA PARA GESTIONAR EL MANTENIMIENTO PREDICTIVO DE MOTORES ELÉCTRICOS DE UNA EMPRESA HOTELERA')

@section('contents')
<div class="container py-5">
  <div class="row text-center mb-5">
    <h2 class="display-5">¿DE QUÉ TRATA NUESTRO PROYECTO?</h2>
    <p class="lead">
      Ambient Track fue creada para mapear la temperatura y humedad de distintos lugares, registrando estos datos en una base de datos para su análisis y monitoreo.
    </p>
  </div>
  
  <div class="row justify-content-center mb-5">
    <div class="col-md-6 text-center">
      <img src="{{ asset('admin_assets/img/') }}" alt="" class="img-fluid rounded-circle shadow-lg" style="width: 300px; height: 300px; transition: transform 0.3s ease;">
    </div>
  </div>

  <hr class="my-4" style="border: 2px solid #2B3852; width: 50%;" />

  <div class="row text-center mb-5">
    <h2 class="display-5">¿CÓMO FUNCIONA NUESTRO PROYECTO?</h2>
    <p class="lead">
      Nuestro sistema comienza con un sensor conectado al microcontrolador (cerebro del sistema), que recopila y envía datos al servidor para almacenamiento y visualización en la web.
    </p>
  </div>

  <div class="row justify-content-center mb-5">
    <div class="col-md-6 text-center">
      <img src="{{ asset('admin_assets/img/conec.png') }}" alt="Conexión" class="img-fluid rounded-circle shadow-lg" style="width: 300px; height: 300px; transition: transform 0.3s ease;">
    </div>
  </div>

  <hr class="my-4" style="border: 2px solid #2B3852; width: 50%;" />

  <div class="row text-center mb-5">
    <h2 class="display-5">¿QUÉ HERRAMIENTAS USAMOS?</h2>
  </div>

  <div class="row align-items-center mb-5">
    <div class="col-md-4 text-center">
      <img src="{{ asset('admin_assets/img/ESP32.png') }}" alt="ESP32" class="img-fluid rounded-circle shadow-lg" style="width: 150px; height: 150px; transition: transform 0.3s ease;">
    </div>
    <div class="col-md-8">
      <h3>Microcontrolador ESP32</h3>
      <p>El ESP32 es un microcontrolador versátil y de bajo costo, adecuado para proyectos de IoT y sistemas de control. Su conectividad y capacidad de procesamiento lo hacen ideal para aplicaciones complejas.</p>
    </div>
  </div>

  <div class="row align-items-center mb-5">
    <div class="col-md-4 text-center">
      <img src="{{ asset('admin_assets/img/DHT11.png') }}" alt="DHT11" class="img-fluid rounded-circle shadow-lg" style="width: 150px; height: 150px; transition: transform 0.3s ease;">
    </div>
    <div class="col-md-8">
      <h3>Sensor DHT11</h3>
      <p>El sensor DHT11, usado en este proyecto, nos proporciona datos de temperatura y humedad. Su bajo costo y facilidad de uso lo hacen ideal para nuestro sistema de monitoreo ambiental.</p>
    </div>
  </div>

  <div class="row align-items-center mb-5">
    <div class="col-md-4 text-center">
      <img src="{{ asset('admin_assets/img/laravel_logo.png') }}" alt="Laravel" class="img-fluid rounded-circle shadow-lg" style="width: 150px; height: 150px; transition: transform 0.3s ease;">
    </div>
    <div class="col-md-8">
      <h3>Laravel</h3>
      <p>Laravel es un framework robusto que permite desarrollar aplicaciones web de forma rápida y estructurada. Nos ofrece herramientas avanzadas para la recopilación y visualización de datos en nuestra web.</p>
    </div>
  </div>

  <div class="row align-items-center mb-5">
    <div class="col-md-4 text-center">
      <img src="{{ asset('admin_assets/img/bootstrap_logo.png') }}" alt="Bootstrap" class="img-fluid rounded-circle shadow-lg" style="width: 150px; height: 150px; transition: transform 0.3s ease;">
    </div>
    <div class="col-md-8">
      <h3>Bootstrap</h3>
      <p>Bootstrap nos facilita la creación de una interfaz moderna y responsiva, mejorando la experiencia de usuario y acelerando el desarrollo de la página.</p>
    </div>
  </div>
</div>

<script>
  document.querySelectorAll('.img-fluid').forEach((img) => {
    img.addEventListener('mouseover', () => {
      img.style.transform = 'scale(1.1)';
    });
    img.addEventListener('mouseout', () => {
      img.style.transform = 'scale(1)';
    });
  });
</script>
@endsection

