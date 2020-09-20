<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Proyección social FCE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
       
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/wave/button.css') }}">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu/meanmenu.min.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- summernote CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/summernote/summernote.css') }}">
    <!-- Range Slider CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/themesaller-forms.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/notika-custom-icon.css') }}">
    <!-- bootstrap select CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select/bootstrap-select.css') }}">
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/datapicker/datepicker3.css') }}">
    <!-- Color Picker CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/color-picker/farbtastic.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/chosen/chosen.css') }}">
    <!-- notification CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/notification/notification.css') }}">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
     <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/notika-custom-icon.css') }}">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/dropzone/dropzone.css') }}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/wave/waves.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/wave/button.css') }}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    
    <!-- modernizr JS
        ============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
   
</head>

<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area" style="background: #2d2e2e;">
        <div class="container" >
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="{{ url ('home') }}"><img src="{{ asset('img/logo/logo.png') }}" width="350px"/></a>
                    </div>
                </div>
                <br><br><br><br><br>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" >
                        <div class="header-top-menu">
                            <ul class="nav navbar-nav notika-top-nav">


                                <!-- Authentication Links -->
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @else
                                <li style="background: black," onmouseover="this.style.background=' #2d2e2e';" onmouseout="this.style.background=' #2d2e2e';" class="nav-item dropdown">
                                    <a style="font-size: 15px;" onmouseover="this.style.background=' #2d2e2e';" onmouseout="this.style.background=' #2d2e2e';" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                        @can('usuario')

                                        <a  style="font-size: 15px; color: #908C8C; padding:5%; padding-left:5%;"; class="dropdown-item" href = "{{ route('usuarios') }}">
                                            <i class="notika-icon notika-support"></i> Usuarios
                                        </a>
                                        <br>
                                        @endcan

                                        @can('roles')

                                        <a style="font-size: 15px; color: #908C8C; padding:5%; padding-left:5%;" class="dropdown-item" href="{{ route('roles') }}">
                                            <i class="notika-icon notika-menus"></i> {{ __('Roles') }}
                                        </a>
                                        <br>

                                        @endcan
                                        <a style="font-size: 15px; color: #908C8C; padding:5%; padding-left:5%;" class="dropdown-item" href="{{ route('sitio.index') }}">
                                            <i class="notika-icon notika-search"></i> {{ __('Sitio web') }}
                                        </a>

                                        <hr>
                                        <a style="font-size: 15px; color: #908C8C; padding:5%; padding-left:5%;" class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="notika-icon notika-left-arrow"></i> Cerrar sesión
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Inicio" href="#">Inicio</a>
                                    <ul id="{{ url ('home') }}"class="collapse dropdown-header-top">
                                        <li><a href="index.html">Inicio</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Expedientes" href="#">Expedientes</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="{{ route('expedientes') }}">Listado expedientes</a></li>
                                        <li><a href="{{ route('crear_expediente') }}">Agregar expediente</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Instituciones" href="#">Instituciones</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="{{ route('instituciones') }}">Listado instituciones</a></li>
                                        <li><a href="{{ route('crear_institucion') }}">Agregar institución</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Proyectos" href="#">Proyectos</a>
                                    <ul  class="collapse dropdown-header-top">
                                        <li><a href="{{ url('proyectos') }}">Listado proyectos</a></li>
                                        <li><a href="{{ url('proyecto_nuevo') }}">Agregar Proyecto</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Usuarios" href="#">Usuarios</a>
                                    <ul  class="collapse dropdown-header-top">
                                        <li><a href="{{ url('usuarios_listado') }}">Listado usuarios</a></li>
                                        <li><a href="{{ url('usuario_nuevo') }}">Agregar usuarios</a></li>
                                    </ul>
                                </li>
                               
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a href="{{ url ('home')}}"><i class="notika-icon notika-house"></i> Inicio</a>
                        </li>
                         <li><a data-toggle="tab" href="#Expediente"><i class="notika-icon notika-form"></i> Expediente</a>
                        </li>
                        <li><a data-toggle="tab" href="#Instituciones"><i class="notika-icon notika-edit"></i> Instituciones</a>
                        </li>
                        <li><a data-toggle="tab" href="#Proyectos"><i class="notika-icon notika-windows"></i> Proyectos</a>
                        </li>
                        <li><a data-toggle="tab" href="#Usuarios"><i class="notika-icon notika-support"></i> Usuarios</a>
                        </li>
                        <li><a  href="{{route('prorrogas')}}"><i class="notika-icon notika-refresh"></i> Prórrogas</a>
                        </li>
                        <li><a href="{{route('sitio.avisos')}}"><i class="notika-icon notika-app"></i> Avisos</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Expediente" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ route('expedientes') }}">Listado expedientes</a></li>
                            <li><a href="{{ route('crear_expediente') }}">Agregar expediente</a></li>
                            </ul>
                        </div>
                        <div id="Instituciones" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{ route('instituciones') }}">Listado instituciones</a></li>
                                <li><a href="{{ route('crear_institucion') }}">Agregar institución</a></li>
                            </ul>
                        </div>
                         <div id="Proyectos" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{ route('proyectos') }}">Listado proyectos</a></li>
                                <li><a href="{{ route('crear_proyecto') }}">Agregar Proyecto</a></li>
                            </ul>
                        </div>
                        <div id="Usuarios" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{ route('usuarios') }}">Listado proyectos</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <br><br>
    @yield('content')

  <!-- jquery
		============================================ -->
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{ asset('js/jquery-price-slider.js') }}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{ asset('js/meanmenu/jquery.meanmenu.js') }}"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="{{ asset('js/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/counterup/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/counterup/counterup-active.js') }}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <!-- sparkline JS
            ============================================ -->
        <script src="{{ asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('js/sparkline/sparkline-active.js') }}"></script>
        <!-- flot JS
            ============================================ -->
        <script src="{{ asset('js/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('js/flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('js/flot/flot-active.js') }}"></script>
        <!-- knob JS
            ============================================ -->
        <script src="{{ asset('js/knob/jquery.knob.js') }}"></script>
        <script src="{{ asset('js/knob/jquery.appear.js') }}"></script>
        <script src="{{ asset('js/knob/knob-active.js') }}"></script>
        <!-- Input Mask JS
            ============================================ -->
        <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
        <!-- icheck JS
            ============================================ -->
        <script src="{{ asset('js/icheck/icheck.min.js') }}"></script>
        <script src="{{ asset('js/icheck/icheck-active.js') }}"></script>
        <!-- rangle-slider JS
            ============================================ -->
        <script src="{{ asset('js/rangle-slider/jquery-ui-1.10.4.custom.min.js') }}"></script>
        <script src="{{ asset('js/rangle-slider/jquery-ui-touch-punch.min.js') }}"></script>
        <script src="{{ asset('js/rangle-slider/rangle-active.js') }}"></script>
        <!-- datapicker JS
            ============================================ -->
        <script src="{{ asset('js/datapicker/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('js/datapicker/datepicker-active.js') }}"></script>
        <!-- bootstrap select JS
            ============================================ -->
        <script src="{{ asset('js/bootstrap-select/bootstrap-select.js') }}"></script>
        <!--  color-picker JS
            ============================================ -->
        <script src="{{ asset('js/color-picker/farbtastic.min.js') }}"></script>
        <script src="{{ asset('js/color-picker/color-picker.js') }}"></script>
        <!--  notification JS
            ============================================ -->
        <script src="{{ asset('js/notification/bootstrap-growl.min.js') }}"></script>
        <script src="{{ asset('js/notification/notification-active.js') }}"></script>
        <!--  summernote JS
            ============================================ -->
        <script src="{{ asset('js/summernote/summernote-updated.min.js') }}"></script>
        <script src="{{ asset('js/summernote/summernote-active.js') }}"></script>
        <!-- dropzone JS
            ============================================ -->
        <script src="{{ asset('js/dropzone/dropzone.js') }}"></script>
        <!--  wave JS
            ============================================ -->
        <script src="{{ asset('js/wizard/jquery.bootstrap.wizard.min.js') }}"></script>
        <script src="{{ asset('js/wizard/wizard-active.js') }}"></script>
         <!--  wizard
            ============================================ -->
            <script src="{{ asset('js/wave/waves.min.js') }}"></script>
        <script src="{{ asset('js/wave/wave-active.js') }}"></script>
        <!--  chosen JS
            ============================================ -->
        <script src="{{ asset('js/chosen/chosen.jquery.js') }}"></script>
       
        <!--  todo JS
            ============================================ -->
        <script src="{{ asset('js/todo/jquery.todo.js') }}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{ asset('js/plugins.js') }}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{ asset('js/main.js') }}"></script>
        <!-- tawk chat JS
            ============================================ -->

        <!-- Data Table JS
            ============================================ -->
        <script src="{{ asset('js/data-table/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/data-table/data-table-act.js') }}"></script>
        <script src="{{ asset('js/dropdown.js') }}"></script>
         @include('sweetalert::alert') 

</html>