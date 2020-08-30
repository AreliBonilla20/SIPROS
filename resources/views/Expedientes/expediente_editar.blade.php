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
										<h2>Edición del expediente</h2>
										<p>Ingrese los datos a modificar del estudiante</p>
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
                            <h2>Editar el expediente {{$estudianteActualizar->carne}}</h2>
                            <p>Complete los campos del formulario</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-wrap">
                                    <form action="{{route('actualizar_expediente', $estudianteActualizar->carne)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    
                                    <label for="carne">Carnet <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" value="{{$estudianteActualizar->carne}}" name="carne" placeholder="AA#####" readonly>
                                            @foreach ($errors->get('carne') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>

                                    <label for="nombres">Nombres <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" value="{{$estudianteActualizar->nombres}}" name="nombres" placeholder="Nombres del estudiante">
                                            @foreach ($errors->get('nombres') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>

                                    <label for="apellidos">Apellidos <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" value="{{$estudianteActualizar->apellidos}}" name="apellidos" placeholder="Apellidos del estudiante" >
                                            @foreach ($errors->get('apellidos') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>             

                                    <label>Fecha de nacimiento<small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="date" value="{{$estudianteActualizar->fecha_nacimiento}}" class="form-control" name="fecha_nacimiento" readonly>
                                            @foreach ($errors->get('fecha_nacimiento') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>

                                    <label for="sexo_id" >Género <small style="color:#16D195;" >*</small></label>
                                    <div class="form-example-int mg-t-15">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="sexo_id">
                                                    <option value="">-Seleccione un género-</option>
                                                    @foreach($sexos as $sexo)
                                                    <option value="{{$sexo->id}}" {{ ($estudianteActualizar->sexo_id == $loop->iteration ? "selected":"") }}>{{$sexo->sexo}}</option>
                                                    @endforeach
                                            </select>
                                            @foreach ($errors->get('sexo_id') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                        </div> 
                                    </div>
                                    <br><br><br>
                                    

                                    <label for="codigo">Carrera <small style="color:#16D195;" >*</small></label>
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                        
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="codigo">
                                                    <option value="">-Seleccione una carrera-</option>
                                                    @foreach($carreras as $carrera)
                                                    <option value="{{$carrera->codigo}}" {{ ($carrera->codigo == $estudianteActualizar->codigo ? "selected":"") }}>{{$carrera->codigo}} - {{$carrera->nombre_carrera}}</option>
                                                    @endforeach
                                            </select>
                                            @foreach ($errors->get('codigo') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                        </div>
                                    
                                    </div>
                                    <br><br><br>

                                    <label for="dui">DUI</label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control"  value="{{$estudianteActualizar->dui}}" name="dui" placeholder="00000000-0" readonly>
                                            @foreach ($errors->get('dui') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>

                                    <label>Dirección <small style="color:#16D195;" >*</small></label>
                                    <div class="form-example-int mg-t-15">

                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="departamento_id" id="departamento_id" >
                                                        <option value="">-Seleccione un departamento-</option>
                                                        @foreach ($departamentos as $departamento)
                                                        <option value="{{$departamento->id}}"{{ ($estudianteActualizar->departamento_id == $loop->iteration ? "selected":"") }}>{{$departamento->nombre_departamento}}</option>
                                                        @endforeach
                                                    </select>
                                                    @foreach ($errors->get('departamento_id') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                    @endforeach
                                                    
                                                </div>
                                            </div>
    
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="municipio_id" id="municipio_id" >
                                                        <option value="">-Seleccione un municipio-</option>
                                                        @foreach ($municipios as $municipio)
                                                        <option value="{{$municipio->id}}"{{ ($estudianteActualizar->municipio_id == $loop->iteration ? "selected":"") }}>{{$municipio->nombre_municipio}}</option>
                                                        @endforeach
                                                    </select>
                                                    @foreach ($errors->get('municipio_id') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <br><br><br>

                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                <i class="notika-icon notika-house"></i>
                                                </div>
                                                <div class="nk-int-st">
                                                <input type="text" class="form-control" value="{{$estudianteActualizar->direccion}}" name="direccion" placeholder="Dirección del estudiante">
                                                @foreach ($errors->get('direccion') as $mensaje)
                                                <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <label for="telefono">Teléfono <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-phone"></i>
                                            </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" value="{{$estudianteActualizar->telefono}}" name="telefono" placeholder="0000-0000">
                                            @foreach ($errors->get('telefono') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                        </div>
    
                                        <label for="email">Correo electrónico <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-mail"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" value="{{$estudianteActualizar->email}}" name="email" placeholder="Correo electrónico del estudiante">
                                                @foreach ($errors->get('email') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                            </div>
                                        </div>

                                       <label for="area">Área de interés <small style="color:#16D195;" >*</small></label>
                                        <br>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="area_id">
                                                        <option value="">-Seleccione una área-</option>
                                                        @foreach ($areas as $area)
                                                            <option value="{{$area->id}}"{{ ($estudianteActualizar->area_id == $loop->iteration ? "selected":"") }}>{{$area->area_interes}}</option>
                                                        @endforeach 

                                                    </select>
                                                    @foreach ($errors->get('area_id') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                    @endforeach
                                                </div>
                                            </div>
                                    <div class="form-example-int mg-t-15">
                                        <button class="btn btn-success notika-btn-success">Actualizar expediente</button>
                                        <a class="btn btn-danger notika-btn-danger" href="{{route('expedientes')}}">Cancelar</a>
                                    </div>
                                    </form>
                                    <br>
                                   
                                   
                                </div>
                            </div>
                        </div>
                    
                     
                </div>
            </div>
       
        
        </div>
    </div>
@endsection