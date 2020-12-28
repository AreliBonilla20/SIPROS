<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    @yield('title')
  </title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <link href="{{asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna - v2.1.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      

      <div class="logo mr-auto">

        <div class="row"> 	
          <div class="col-md-2">
            <a href="{{  route('sitio_index')  }}"><img src="{{asset('assets/img/logo-fce-v1-mixto.png') }}" alt="" class="img-fluid"></a> 	
          </div> 	
          <div class="col-md-10"> 		
                <h1 class="text-light"><a href="{{  route('sitio_index')  }}"><span>Universidad de El Salvador</span></a></h1> 	
          </div>
        </div>
    
       
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{  route('sitio_index')  }}">Inicio</a></li>

        <!--li class="drop-down"><a href="#">About</a>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="team.html">Team</a></li>

              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li!-->

          <li><a href="{{ route('sitio_proyectos') }}">Proyectos</a></li>
          <li><a href="{{ route('sitio_blog') }}">Noticias</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-md-3 col-sm-6 text-center" style="border-right:1px solid #cdcdcd">
            <!--<a href="http://www.ues.edu.sv" target="_blank"><img src="http://fce.ues.edu.sv/themes/jtherczeg-corlate/assets/images/logos/ues-logo-gray.svg" width="100"></a><br>
            Universidad de El Salvador<br>
            <small>Hacia la Libertad por la Cultura</small>-->
            <a href="http://www.ues.edu.sv" target="_blank"><img src="http://fce.ues.edu.sv/themes/jtherczeg-corlate/assets/images/logos/logo-fce-v1-mixto.png" width="100"></a><br>
            Universidad de El Salvador<br>
            <small>Facultad de Ciencias Económicas</small>
        </div>


          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contáctanos</h4>
            <p>
              
              Final, 25 Av Norte, San Salvador <br><br>
              <strong>Teléfono:</strong> +503 2521-0100<br><br>

              <div class="social-links mt-3">
                <a href="https://twitter.com/fceues" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/fce.ues.oficial/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/fce.ues.oficial/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.youtube.com/c/FacultaddeCienciasEconómicasUES/" class="linkedin"><i class="bx bxl-youtube"></i></a>
              </div>
              
            </p>

          </div>

        </div>
      </div>
      
    </div>
    <div class="container">
      <div class="copyright"> Derechos reservados &copy; 2020. <a href="{{ route('sitio_index') }}"> Proyeccción social FCE Universidad de El Salvador.</a>
      </div>
  </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js')  }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
  <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>