@extends('Sitio.app')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">


          @foreach($avisos as $aviso)
            @if($ultimo->id==$aviso->id)
              @if($aviso->url==null)
              <div class="carousel-item active" style="background-image: url('{{asset('assets/img/equipo.jpg')}}') ">
                <div class="carousel-container">
                  <div class="carousel-content">
                    <div style="background-color:rgba(255, 255, 255, 0.9); border-radius: 25px; padding: 25px" class="col-md-12">
                      <h2 class="animate__animated animate__fadeInDown">{{ $aviso->titulo }}</h2>
                      <p class="animate__animated animate__fadeInUp" align="center">{{ $aviso->descripcion }}</p>
                    </div>  
                  </div>       
                </div>
              </div>
              @else
              <div class="carousel-item active" style="background-image: url('{{Storage::url($aviso->url)}}') ">
                <div class="carousel-container">
                  <div class="carousel-content">
                    <div style="background-color:rgba(255, 255, 255, 0.9); border-radius: 25px; padding: 25px" class="col-md-12">
                      <h2 class="animate__animated animate__fadeInDown">{{ $aviso->titulo }}</h2>
                      <p class="animate__animated animate__fadeInUp" align="center">{{ $aviso->descripcion }}</p>
                    </div>  
                  </div>       
                </div>
              </div>
              @endif
           
          
            @else
              @if($aviso->url==null)
              <div class="carousel-item" style="background-image: url('{{asset('assets/img/equipo.jpg')}}') ">
                <div class="carousel-container">
                  <div class="carousel-content">
                    <div style="background-color:rgba(255, 255, 255, 0.9); border-radius: 25px; padding: 25px" class="col-md-12">
                      <h2 class="animate__animated animate__fadeInDown">{{ $aviso->titulo }}</h2>
                      <p class="animate__animated animate__fadeInUp" align="center">{{ $aviso->descripcion }}</p>
                    </div> 
                  </div>
                </div>
              </div>
              @else
              <div class="carousel-item active" style="background-image: url('{{Storage::url($aviso->url)}}') ">
                <div class="carousel-container">
                  <div class="carousel-content">
                    <div style="background-color:rgba(255, 255, 255, 0.9); border-radius: 25px; padding: 25px" class="col-md-12">
                      <h2 class="animate__animated animate__fadeInDown">{{ $aviso->titulo }}</h2>
                      <p class="animate__animated animate__fadeInUp" align="center">{{ $aviso->descripcion }}</p>
                    </div>  
                  </div>       
                </div>
              </div>
              @endif
              
            @endif
          
          @endforeach

          <!-- Slide 1 -->
          

          

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

<main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          
            <div class="col-lg-6 text-center" onclick="location.href='{{ route('sitio_proyectos') }}'">
              <div class="icon-box">
                <i class="icofont-computer"></i>
                <h1><a href="{{ route('sitio_proyectos') }}"><b>Proyectos</b></a></h1>
                <p style = "font-size:20px">Listado de proyectos disponibles</p>
              </div>
            </div>
          
            <div class="col-lg-6 mt-4 mt-lg-0 text-center" onclick="location.href='{{ route('sitio_blog') }}'">
              <div class="icon-box">
                <i class="icofont-tasks-alt"></i>
                <h1><a href="{{ route('sitio_blog') }}"><b>Noticias</b></a></h1>
                <p style = "font-size:20px">Noticias universitarias relevantes</p>
              </div>
            </div>
        </div>
        

      </div>
    </section><!-- End Featured Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{asset('assets/img/equipo.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Requisitos para realizar el servicio social.</h3>
            <p class="font-italic text-justify">
              Regulado por los articulos 33, 34 y 39 del Reglamento General de Proyección Social de la Universidad de El Salvador y por el Manual de Procedimientos del Servicio Social de la Facultad de Ciencias Económicas.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Contar con el porcentaje requerido </li>
              <li><i class="icofont-check-circled"></i> Apertura tu expediente </li>
              <li><i class="icofont-check-circled"></i> Selecciona e inscribete en un proyecto </li>
              <li><i class="icofont-check-circled"></i> Retira tu carta de asignación </li>
              <li><i class="icofont-check-circled"></i> Inicia tu servicio social </li>
            </ul>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section id="counts" class="counts">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Proyectos por sector</h2>
        </div>
        <div class="row no-gutters">
         @foreach($proyectos_sectores as $proyecto)
          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              
                <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">{{ $proyecto->cantidad }}</span><br>
              <h3>{{ $proyecto->nombre_sector }}</h3>
              
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!--End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Áreas de interés</h2>
        </div>

        
        <div class="row">
          @foreach($areas as $area)
          <div class="col-md-3">
            <div class="icon-box text-left">
              <div class="icon"><i class="far fa-chart-bar"></i></div>
              <h4 align="center">{{ $area->area_interes }}</h4>  

           </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Services Section -->

  

  </main><!-- End #main -->

@endsection