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
            <div class="carousel-item active" style="background-image: url('{{$aviso->url}}') ">
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown">{{ $aviso->titulo }}</h2>
                  <p class="animate__animated animate__fadeInUp">{{ $aviso->descripcion }}</p>
                  
                </div>
              </div>
            </div>
            @else
            <div class="carousel-item" style="background-image: url('{{$aviso->url}}') ">
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown">{{ $aviso->titulo }}</h2>
                  <p class="animate__animated animate__fadeInUp">{{ $aviso->descripcion }}</p>
                  
                </div>
              </div>
            </div>
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
          
            <div class="col-lg-6 text-center" onclick="location.href='{{ route('sitio.proyectos') }}'">
              <div class="icon-box">
                <i class="icofont-computer"></i>
                <h1><a href="{{ route('sitio.proyectos') }}"><b>Proyectos</b></a></h1>
                <p style = "font-size:20px">Listado de proyectos disponibles</p>
              </div>
            </div>
          
            <div class="col-lg-6 mt-4 mt-lg-0 text-center" onclick="location.href='{{ route('sitio.blog') }}'">
              <div class="icon-box">
                <i class="icofont-tasks-alt"></i>
                <h1><a href="{{ route('sitio.blog') }}"><b>Noticias</b></a></h1>
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
            <img src="{{asset('assets/img/estudiantes.jpg')}}" class="img-fluid" alt="">
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

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Áreas de interes</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

  

  </main><!-- End #main -->

@endsection