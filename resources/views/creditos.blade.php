@extends('layouts.app')
@section('title', 'DISEÑO DE SISTEMAS SOFTWARE PARA MONITOREO DE TEMPERATURA Y HUMEDAD EN TIEMPO REAL CON IoT')

@section('contents')
  <div class="row">
    <h2>CRÉDITOS</h2>
    <p>Este proyecto fue desarrollado como parte del diseño de sistemas software para monitoreo de
      temperatura y humedad en tiempo real con IoT. Agradecemos a las siguientes personas por su contribución:</p>

<ul>
  <li><strong>Arotaipe Suni, Nayeli Virginia:</strong> Desarrollador de software y Diseñador gráfico <a href="mailto:narotaipe@unsa.edu.pe">narotaipe@unsa.edu.pe</a></li>
  <li><strong>Gonzales Rodriguez, Ciolymar Johanna:</strong> Desarrollador de software y Diseñador gráfico <a href="mailto:cgonzalesro@unsa.edu.pe">cgonzalesro@unsa.edu.pe</a></li>
  <li><strong>Idme Cutipa, Ronaldiño Junior:</strong> Desarrollador de software y Diseñador gráfico <a href="mailto:ridmecu@unsa.edu.pe">ridmecu@unsa.edu.pe</a></li>
  <li><strong>Mamani Ccopa, Bryan Omar:</strong> Desarrollador de software y Diseñador gráfico <a href="mailto:bmamanicc@unsa.edu.pe">bmamanicc@unsa.edu.pe</a></li>
  <!-- Agrega más nombres según sea necesario -->
</ul>
</div> <!-- Cierre de la primera fila -->

<hr size=”5px” width= “50%” color="#2B3852"/>
<div class="row">
    <h2>AGRADECIMIENTOS</h2>

    <p>En esta sección, agradecemos a todas las personas que han contribuido al proyecto de diversas maneras. Su apoyo y dedicación han sido fundamentales para el éxito del proyecto.</p>
    
    <p>También queremos expresar nuestro agradecimiento especial al profesor:</p>
    <ul>
      <li><strong>Profesor EFRAIN TITO MAYHUA LOPEZ:</strong> Por su orientación, apoyo y valiosas sugerencias que contribuyeron significativamente al desarrollo y la calidad de este proyecto.</li>
    </ul>

        <p class="mt-4">Si tienes alguna pregunta o comentario sobre este proyecto, no dudes en ponerte en contacto con nosotros.</p>
        <p>Correo electrónico: <a href="mailto:TemyHum@unsa.edu.pe" class="text-decoration-none text-primary">TemyHum@unsa.edu.pe</a></p>
      </div>
    </div>
  </section>

  <!-- Logo Section -->
  <section class="text-center">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4">
        <img src="{{ asset('admin_assets/img/logunsa.png') }}" alt="Logo" class="img-fluid shadow-lg rounded" style="max-width: 100%; height: auto;">
      </div>
    </div>
  </section>
</div>
@endsection

