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
										<h2>Edición de proyecto</h2>
										<p>Ingrese los datos a modificar del proyecto</p>
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
                    @if (session('actualizado'))
                    <div class="alert alert-success" role="alert">
                        {{ session('actualizado') }}
                    </div>                   
                    @endif
                        <div class="basic-tb-hd">
                            <h2>Proyecto</h2>
                            <p>Complete los campos del formulario</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-wrap">
                                    <form action="{{route('actualizar_proyecto', $proyectoUpdate->id)}}" method="POST">
                                        @method('PUT')
                                        @csrf

                                        <label for="nombre">Nombre <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" value="{{$proyectoUpdate->nombre}}" name="nombre" id="nombre" placeholder="Nombre del proyecto">
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
                                                <input type="text" class="form-control" value="{{$proyectoUpdate->area_de_conocimiento}}" name="area" id="area" placeholder="Área de conocimiento que requiere el proyecto">
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
                                                <input type="text" class="form-control" value="{{$proyectoUpdate->objetivos}}" name="objetivos" id="objetivos" placeholder="Objetivos del proyecto">
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
                                                <input type="text" class="form-control" value="{{$proyectoUpdate->logros}}" name="logro" id="logro" placeholder="Logros del proyecto">
                                                @foreach ($errors->get('logro') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>

                                        <label for="institucion" >Tipo de institución <small style="color:#16D195;" >*</small></label>
                                        <div class="form-example-int mg-t-15">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker"  name="institucion" class="selectpicker" value="{{$proyectoUpdate->id_institucion}}">
                                                        <option value="">-Seleccione una opción-</option>
                                                        @foreach ($instituciones as $institucion)
                                                        <option value="{{$institucion->id}}" @if ($proyectoUpdate->id_institucion === $institucion->id) selected @endif>{{$institucion->nombre}}</option>
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
                                                <input type="number" value="{{$proyectoUpdate->cantidad_de_estudiantes}}" class="form-control" min="0" name="cantidad" id="cantidad" placeholder="Cantidad de estudiantes requeridos para el proyecto">
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
                                                <input type="text" value="{{$proyectoUpdate->nombre_encargado}}" class="form-control" name="encargado" id="encargado" placeholder="Nombre del encargado del proyecto">
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
                                                <input type="text" value="{{$proyectoUpdate->telefono}}" class="form-control" name="telefono" id="telefono" placeholder="Teléfono del encargado del proyecto">
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
                                                <input type="text" value="{{$proyectoUpdate->email}}" class="form-control" name="correo" id="correo" placeholder="Correo electrónico del encargado del proyecto">
                                                @foreach ($errors->get('correo') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>
                                         
                                        <br>
                             
                                        <div class="form-example-int mg-t-15">
                                            <button type="submit" class="btn btn-success notika-btn-success">Actualizar proyecto</button>
                                            <a class="btn btn-danger notika-btn-danger" href="{{route('proyectos')}}">Cancelar</a>                                    
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