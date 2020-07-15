@extends('layout_usuarios')

@section('content')

<div class="breadcomb-area" >
		<div class="container" >
			<div class="row" >
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-form"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Registro de usuario</h2>
										<p>Ingrese los datos del usuario</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Usuario</h2>
                            <p>Complete los campos del formulario</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-wrap">
                                    <form action="{{route('guardar_usuario')}}" method="POST">
                                        @csrf

                                        <div class="form-example-int">
                                            <div class="form-group">
                                                <label for="nombre"><strong>Nombre</strong> </label>
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" name="name" id="name" placeholder="Nombre del usuario" value="{{old('name')}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-example-int">
                                            <div class="form-group">
                                                <label for="nombre"><strong>Correo electrónico</strong> </label>
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" name="email" id="email" placeholder="Correo electrónico del usuario" value="{{old('email')}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-example-int">
                                            <div class="form-group">
                                                <label for="nombre"><strong>Contraseña</strong> </label>
                                                <div class="nk-int-st">
                                                    <input type="password" class="form-control input-sm" name="password" id="password" placeholder="Contraseña del usuario" value="{{old('password')}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-example-int mg-t-15">
                                            <button class="btn btn-success notika-btn-success">Guardar usuario</button>
                                        </div>
                                    </form>
                                    <br>
                                    <br>
                                    @if (session('agregado'))
                                        <div class="alert alert-success mt-3">
                                
                                            {{ session('agregado') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
@endsection
