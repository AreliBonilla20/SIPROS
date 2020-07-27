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
   
                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                                <label><strong>Nombre</strong></label>
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" name="nombre" id="nombre" placeholder="Nombre del proyecto" value="{{old('nombre')}}">
                                                    @foreach ($errors->get('nombre') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    
                             
                                        <div class="form-example-int">
                                            <div class="form-group">
                                                <label><strong>Área de conocimiento</strong></label>
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" name="area" id="area" placeholder="Área de conocimiento que requiere el proyecto" value="{{old('area')}}" required>
                                                </div>
                                            </div>
                                        </div>
                                  
                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                                <label><strong>Objetivos</strong></label>
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" name="objetivos" id="objetivo" placeholder="Objetivos del proyecto" value="{{old('objetivo')}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                                <label><strong>Logros</strong></label>
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" name="logro" id="logro" placeholder="Logros del proyecto" value="{{old('logro')}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                        
                                                <label><strong>Institución</strong></label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select type='integer' name="institucion" class="selectpicker" required>
                                                        <option value="" selected>-Seleccione una opción-</option>
                                                        @foreach ($instituciones as $institucion)
                                                        <option value="{{$institucion->id}}">{{$institucion->nombre}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            </div>
                                        
                                        </div>
                                        <br><br>
                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                                <label><strong>Cantidad de estudiantes</strong></label>
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" name="cantidad" id="cantidad" placeholder="Cantidad de estudiantes requeridos para el proyecto" value="{{old('cantidad')}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                                <label><strong>Encargado</strong></label>
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" name="encargado" id="encargado" placeholder="Nombre del encargado del proyecto" value="{{old('encargado')}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                                <label><strong>Teléfono</strong></label>
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" name="telefono" id="telefono" placeholder="Teléfono del encargado del proyecto" value="{{old('encargado')}}" required>
                                                </div>
                                            </div>
                                        </div>

                     
                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                                <label><strong>Correo electrónico</strong></label>
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" name="correo" id="correo" placeholder="Correo electrónico del encargado del proyecto" value="{{old('correo')}}" required>
                                                </div>
                                            </div>
                                        </div>
                                   
                                        <br>
                             
                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                            <button type="submit" class="btn btn-success notika-btn-success">Guardar</button>
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