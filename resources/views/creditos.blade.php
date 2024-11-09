@extends('layouts.app')
@section('contents')
<style>
  /* Estilos para el fondo de toda la página */
  .background-page {
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
      url('{{ asset("admin_assets/img/creditos.png") }}') no-repeat center center fixed;
    background-size: cover;
    background-position: center;
    min-height: 100vh; /* Hace que la sección ocupe toda la altura de la página */
    padding: 5rem 2rem; /* Ajusta el padding para dar espacio interno */
    width: 100%;
    color: white; /* Asegura que el texto sea blanco y visible */
  }

  /* Estilo del título principal (aumentar tamaño y centrar) */
  .main-title {
    font-size: 4rem; /* Tamaño más grande para el título */
    font-weight: bold; /* Añadir peso al texto */
    text-align: center; /* Centrado del texto */
    color: #ffffff !important; /* Blanco fuerte */
    text-transform: uppercase;
    margin-bottom: 4rem; /* Espacio inferior */
  }

  /* Estilo del texto de créditos y otros títulos */
  .section-title, .text-muted {
    color: #ffffff !important; /* Blanco más fuerte */
  }

  /* Estilo de los elementos de la lista de créditos */
  .list-group-item {
    background-color: rgba(0, 0, 0, 0.7); /* Fondo oscuro con algo de transparencia */
    color: white;
    border: none;
  }

  .list-group-item a {
    color: #ffc107; /* Color para los enlaces */
    text-decoration: none;
  }

  .list-group-item a:hover {
    text-decoration: underline;
  }

  /* Logo */
  .logo-img {
    max-width: 100%;
    height: auto;
  }
</style>

<div class="background-page">
  <!-- Contenedor con fondo específico -->
  <div class="container my-5 position-relative">
    <!-- Título del Proyecto -->
    <section class="text-center">
      <h1 class="main-title">DISEÑO DE SISTEMAS SOFTWARE PARA MONITOREO DE TEMPERATURA Y HUMEDAD EN TIEMPO REAL CON IoT</h1>
    </section>

    <!-- Créditos Section -->
    <section id="credits" class="text-center mb-5">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="section-title mb-4 text-uppercase">Créditos</h1>
          <p class="text-muted mb-4">Este proyecto fue desarrollado como parte del diseño de sistemas software para monitoreo de temperatura y humedad en tiempo real con IoT. Agradecemos a las siguientes personas por su contribución:</p>
          
          <div class="list-group shadow-lg rounded">
            <div class="list-group-item py-3">
              <strong>Arotaipe Suni, Nayeli Virginia:</strong> Desarrollador de software y Diseñador gráfico 
              <a href="mailto:narotaipe@unsa.edu.pe" class="contact-link">narotaipe@unsa.edu.pe</a>
            </div>
            <div class="list-group-item py-3">
              <strong>Gonzales Rodriguez, Ciolymar Johanna:</strong> Desarrollador de software y Diseñador gráfico 
              <a href="mailto:cgonzalesro@unsa.edu.pe" class="contact-link">cgonzalesro@unsa.edu.pe</a>
            </div>
            <div class="list-group-item py-3">
              <strong>Idme Cutipa, Ronaldiño Junior:</strong> Desarrollador de software y Diseñador gráfico 
              <a href="mailto:ridmecu@unsa.edu.pe" class="contact-link">ridmecu@unsa.edu.pe</a>
            </div>
            <div class="list-group-item py-3">
              <strong>Mamani Ccopa, Bryan Omar:</strong> Desarrollador de software y Diseñador gráfico 
              <a href="mailto:bmamanicc@unsa.edu.pe" class="contact-link">bmamanicc@unsa.edu.pe</a>
            </div>
            <div class="list-group-item py-3">
              <strong>Cabana Taco, Junior Evert:</strong> Desarrollador de software y Diseñador gráfico 
              <a href="mailto:bmamanicc@unsa.edu.pe" class="contact-link">bmamanicc@unsa.edu.pe</a>
            </div>
            <div class="list-group-item py-3">
              <strong>Cabrera Flores, Roy Huber:</strong> Desarrollador de software y Diseñador gráfico 
              <a href="mailto:bmamanicc@unsa.edu.pe" class="contact-link">bmamanicc@unsa.edu.pe</a>
            </div>
            <div class="list-group-item py-3">
              <strong>Charca Torres, Cynthia Nikolle:</strong> Desarrollador de software y Diseñador gráfico 
              <a href="mailto:bmamanicc@unsa.edu.pe" class="contact-link">bmamanicc@unsa.edu.pe</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Divider with Custom Style -->
  <hr class="my-5 divider" />

  <!-- Agradecimientos Section -->
  <section id="acknowledgments" class="text-center mb-5">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <h1 class="section-title mb-4 text-uppercase">Agradecimientos</h1>
        <p class="text-muted mb-4">Agradecemos a todas las personas que han contribuido al proyecto de diversas maneras. Su apoyo y dedicación han sido fundamentales para el éxito del proyecto.</p>
        <p>También queremos expresar nuestro agradecimiento especial al Ingeniero:</p>
        
        <div class="list-group shadow-lg rounded">
          <div class="list-group-item py-3">
            <strong>JORGE EUSEBIO RENDULICH TALAVERA:</strong> Por su orientación, apoyo y valiosas sugerencias que contribuyeron significativamente al desarrollo y la calidad de este proyecto.
          </div>
        </div>

        <p class="mt-4">Si tienes alguna pregunta o comentario sobre este proyecto, no dudes en ponerte en contacto con nosotros.</p>
        <p>Correo electrónico: <a href="mailto:TemyHum@unsa.edu.pe" class="contact-link">TemyHum@unsa.edu.pe</a></p>
      </div>
    </div>
  </section>

  <!-- Logo Section -->
  <section class="text-center">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4">
        <img src="{{ asset('admin_assets/img/logunsa.png') }}" alt="Logo UNSA" class="img-fluid logo-img shadow-lg rounded">
      </div>
    </div>
  </section>
</div>
@endsection




