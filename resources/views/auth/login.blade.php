
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Iniciar sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('inicio/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('inicio/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('inicio/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('inicio/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('inicio/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('inicio/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('inicio/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('inicio/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('inicio/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('inicio/css/main.css') }}">
<!--===============================================================================================-->
</head>

<body>
	<div class="container-fluid">
	<div class="row">
	<div class="col-lg-4 col-sm-6 col-md-8" style="padding: 0%;">
	<div class="limiter" >
		<div class="container-login100" style="background: #2d2e2e;" >
			<div class="wrap-login100 p-t-85 p-b-20" style="background: #2d2e2e;">
				<form  method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="login100-form validate-form">
                    @csrf
                    <span style="color: white; font-size: 25px;" class="login100-form-title p-b-70">
						Bienvenido
					</span>
					<span class="login100-form-avatar">
						<img src="{{ asset('inicio/images/user.png') }}" alt="AVATAR">
						<br>
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingrese el correo electrónico">
						<input style="background: white; color: #2d2e2e;" id="email" type="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocustype="text">
						<span class="focus-input100" data-placeholder="Usuario"></span>
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Ingrese la contraseña">
						<input  style="background: white; color: #2d2e2e;" id="password" type="password" name="password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
						<span class="focus-input100" data-placeholder="Contraseña"></span>
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" style="background: #23b8a4;">
                        {{ __('Iniciar sesión') }}
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-8 col-sm-6 col-md-8" style="text-align: center; font-size: 30; padding: 0%;" >
	<br><br><br><br><br><br><br><br>
	<img src="{{ asset('inicio/images/logo.jpg') }}" alt="AVATAR" width="20%;">
	<br><br>
	<h3>Departamento de proyección social</h3>
	<h2>Facultad de ciencias económicas</h2><br>
	<h1>Universidad de El Salvador</h1><br>
	<span> <i>Hacia la libertad, por la cultura</i> </span>
	<br><br><br>
	
</div>
</div>
</div>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('inicio/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('inicio/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('inicio/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('inicio/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('inicio/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('inicio/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('inicio/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('inicio/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('inicio/js/main.js') }}"></script>

</body>
</html>
