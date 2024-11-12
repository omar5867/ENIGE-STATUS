@extends('layouts.app')
@section('contents')
<style>
  /* Estilos para el fondo de toda la página */
  .background-page {
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
      url('{{ asset("admin_assets/img/creditos.png") }}') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
    padding: 0;
    margin: 0;
    color: white;
  }

  /* Estilo del título principal */
  .main-title {
    font-size: 3rem;
    font-weight: bold;
    text-align: center;
    color: #ffffff;
    text-transform: uppercase;
    margin: 1rem auto;
    padding-top: 2rem;
    line-height: 1.3;
    max-width: 90%;
  }

  /* Estilo del texto de créditos y otros títulos */
  .section-title, .text-muted {
    color: #ffffff !important;
  }

  /* Estilo de los elementos de la lista de créditos */
  .list-group-item {
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    border: none;
  }

  .list-group-item a {
    color: #ffc107;
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
  <!-- Título del Proyecto, alineado al centro y separado del borde superior -->
  <h1 class="main-title">DISEÑO DE UN SISTEMA DE MONITOREO UTILIZANDO TECNOLOGÍA LORA PARA GESTIONAR EL MANTENIMIENTO PREDICTIVO DE MOTORES ELÉCTRICOS DE UNA EMPRESA HOTELERA</h1>

  <!-- Créditos Section -->
  <section id="credits" class="text-center my-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="section-title mb-4 text-uppercase">Créditos</h1>
          <p class="text-muted mb-4">Este proyecto fue desarrollado como parte del diseño de sistemas de monitoreo. Agradecemos a las siguientes personas por su contribución:</p>

          <div class="list-group shadow-lg rounded">
            <!-- Lista de personas en créditos -->
            <div class="list-group-item py-3">
              <strong>Junior Evert Cabana Taco:</strong> Coordinador general y analista de sistemas <a href="mailto:jcabanat@unsa.edu.pe" class="contact-link">jcabanat@unsa.edu.pe</a>
            </div>
            <div class="list-group-item py-3">
              <strong>Roy Huber Cabrera Flores:</strong> Desarrolladora de software y diseñador gráfico <a href="mailto:rcabreraf@unsa.edu.pe" class="contact-link">rcabreraf@unsa.edu.pe</a>
            </div>
            <div class="list-group-item py-3">
              <strong>Cynthia Nikolle Charca Torres:</strong> Desarrolladora de software y diseñadora gráfica <a href="mailto:ccharcat@unsa.edu.pe" class="contact-link">ccharcat@unsa.edu.pe</a>
            </div>
            <div class="list-group-item py-3">
              <strong>Bryan Omar Mamani Ccopa:</strong> Coordinador general y analista de sistemas <a href="mailto:bomamani@unsa.edu.pe" class="contact-link">bmamamicc@unsa.edu.pe</a>
            </div>
            <div class="list-group-item py-3">
              <strong>Ronal Edward Palaco Pequeña:</strong> Desarrolladora de software y diseñadora gráfica <a href="mailto:repalaco@unsa.edu.pe" class="contact-link">rpalacop@unsa.edu.pe</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Divider -->
  <hr class="my-5 divider" />

  <!-- Agradecimientos Section -->
  <section id="acknowledgments" class="text-center mb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="section-title mb-4 text-uppercase">Agradecimientos</h1>
          <p class="text-muted mb-4">Agradecemos sinceramente a todas las personas que han contribuido de diversas maneras a este proyecto. Su apoyo y dedicación han sido elementos esenciales para alcanzar los objetivos propuestos y asegurar el éxito de esta iniciativa. Reconocemos que su colaboración ha sido invaluable y ha permitido que este proyecto se desarrolle con el más alto nivel de calidad y compromiso.</p>
          <p>Asimismo, queremos expresar nuestro más profundo agradecimiento al Ingeniero, quien nos ha guiado con su experiencia y conocimiento desde el inicio del proyecto. Su orientación, apoyo constante y compromiso han sido fundamentales para el desarrollo exitoso de esta iniciativa:</p>

          <div class="list-group shadow-lg rounded">
            <div class="list-group-item py-3">
              <strong>JORGE EUSEBIO RENDULICH TALAVERA</strong>
            </div>
          </div>

          <p class="mt-4">Si tienes alguna pregunta o comentario sobre este proyecto, no dudes en ponerte en contacto con nosotros.</p>
          <p>Correo electrónico: <a href="mailto:TemyHum@unsa.edu.pe" class="contact-link">TemyHum@unsa.edu.pe</a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Logo Section -->
  <section class="text-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
          <img src="{{ asset('admin_assets/img/logunsa.png') }}" alt="Logo UNSA" class="img-fluid logo-img shadow-lg rounded">
        </div>
      </div>
    </div>
  </section>
</div>
@endsection



