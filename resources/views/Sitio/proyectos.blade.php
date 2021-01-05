@extends('Sitio.app')
@section('title')
    Proyectos - Unidad de Proyección Social FCE
@endsection
@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ route('sitio_index') }}">Inicio</a></li>
          <li>Proyectos</li>
        </ol>
        <h2>Proyectos</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              @foreach($carreras as $carrera)
                <li data-filter=".{{ $carrera->codigo }}">{{ $carrera->nombre_carrera }}</li>                
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container blog">
          @foreach($proyectos as $proyecto)
          <div class="col-lg-4 col-md-6 portfolio-item {{ $proyecto->codigo_carrera }}">
            <article class="entry">
              
              <h2 class="entry-title">
                {{ $proyecto->nombre }}
              </h2>
              <div class="entry-content">
                <p><b><i class="fas fa-university" style="color: #e96b56"></i> Institucion: </b> {{ $proyecto->Institucion->nombre }}</p>
                <p><b><i class="fas fa-bullseye" style="color: #e96b56"></i> Objetivo:</b> {{ $proyecto->objetivos }}</p>
                <p><b><i class="bx bx-file" style="color: #e96b56"></i> Area de conocimiento:</b> {{ $proyecto->area_de_conocimiento }}</p>
                <p><b><i class="fas fa-trophy" style="color: #e96b56"></i> Logros:</b> {{ $proyecto->logros }}</p>
                <p><b><i class="fas fa-users" style="color: #e96b56"></i> Cantidad de estudiantes:</b> {{ $proyecto->cantidad_de_estudiantes }}</p>
              </div>
            </article>
            
          </div>
          @endforeach

          

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
@endsection
