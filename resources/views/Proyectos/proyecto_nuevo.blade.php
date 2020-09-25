@extends('layout')

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
										<h2>Registro de proyectos</h2>
										<p>Ingrese los datos del proyecto</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Proyecto</h2>
                            <p>Complete los campos del formulario</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-wrap">
                                    <form action="{{route('guardar_proyecto')}}" method="POST">
                                        @csrf

                                        <label for="codigo">Carrera <small style="color:#16D195;" >*</small></label>
                                         <div class="form-example-int mg-t-15">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="codigo_carrera">
                                                    <option value="">-Seleccione una carrera-</option>
                                                    @foreach($carreras as $carrera)
                                                    <option value="{{$carrera->codigo}}">{{$carrera->codigo}}-{{$carrera->nombre_carrera}}</option>
                                                    @endforeach
                                            </select>
                                            @foreach ($errors->get('codigo_carrera') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                        </div>
                                    
                                    </div>
                                    <br><br>
   
                                        <label for="nombre">Nombre <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del proyecto">
                                                @foreach ($errors->get('nombre') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>

                                        <label for="area">Área de conocimiento <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" name="area" id="area" placeholder="Área de conocimiento que requiere el proyecto">
                                                @foreach ($errors->get('area') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>

                                        <label for="objetivos">Objetivos <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" name="objetivos" id="objetivos" placeholder="Objetivos del proyecto">
                                                @foreach ($errors->get('objetivos') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>

                                        <label for="logro">Logros <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" name="logro" id="logro" placeholder="Logros del proyecto">
                                                @foreach ($errors->get('logro') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>

                                        <label for="institucion" >Institución <small style="color:#16D195;" >*</small></label>
                                        <div class="form-example-int mg-t-15">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker"  name="institucion" class="selectpicker">
                                                        <option value="">-Seleccione una opción-</option>
                                                        @foreach ($instituciones as $institucion)
                                                        <option value="{{$institucion->id}}">{{$institucion->nombre}}</option>
                                                        @endforeach
                                            </select>
                                                    @foreach ($errors->get('institucion') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                    @endforeach
                        
                                        </div>
                                        </div> 
                                        </div>
                                        <br><br><br>

                                        <label for="cantidad">Cantidad de estudiantes <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="number" class="form-control" min="0" name="cantidad" id="cantidad" placeholder="Cantidad de estudiantes requeridos para el proyecto">
                                                @foreach ($errors->get('cantidad') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>

                                        <label for="encargado">Encargado <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" name="encargado" id="encargado" placeholder="Nombre del encargado del proyecto">
                                                @foreach ($errors->get('encargado') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>

                                        <label for="telefono">Teléfono <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono del encargado del proyecto">
                                                @foreach ($errors->get('telefono') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>

                                        <label for="correo">Correo electrónico <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo electrónico del encargado del proyecto">
                                                @foreach ($errors->get('correo') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>
                                        <br>
                             
                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                            <button type="submit" class="btn btn-success notika-btn-success">Guardar proyecto</button>
                                            <a class="btn btn-danger notika-btn-danger" href="{{route('proyectos')}}">Cancelar</a>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    
                     
                </div>
            </div>
       
        
        </div>
    </div>

@endsection