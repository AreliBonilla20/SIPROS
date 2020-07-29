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
										<h2>Edición de institución</h2>
										<p>Ingrese los datos a modificar de la institución</p>
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
                            <h2>Editar la institución: {{$institucionActualizar->nombre}}</h2>
                            <p>Complete los campos del formulario</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-wrap">
                                    <form action="{{route('actualizar_institucion', $institucionActualizar->id)}}" method="POST">
                                        @method('PUT')
                                        @csrf

                                        <label for="nombre">Nombre <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{$institucionActualizar->nombre}}" placeholder="Nombre de la institución">
                                                @foreach ($errors->get('nombre') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>

                                        <label for="tipo_institucion_id" >Tipo de institución <small style="color:#16D195;" >*</small></label>
                                        <div class="form-example-int mg-t-15">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker"  data-live-search="true" name="tipo_institucion_id" id="tipo_institucion_id">
                                                    <option value="">-Seleccione una institución-</option>
                                                    @foreach ($tipoInstituciones as $tipoInstitucion)
                                                    <option value="{{$tipoInstitucion->id}}" {{ ($institucionActualizar->tipo_institucion_id == $loop->iteration ? "selected":"") }}>{{$tipoInstitucion->tipo_institucion}}</option>
                                                        @endforeach
                                                    </select>
                                                    @foreach ($errors->get('tipo_institucion_id') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                    @endforeach
                                            </select>   
                                        </div>
                                        </div> 
                                        </div>
                                        <br><br><br>

                                        <label for="sector_id" >Sector <small style="color:#16D195;" >*</small></label>
                                        <div class="form-example-int mg-t-15">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" data-live-search="true" name="sector_id" id="sector_id" >
                                            <option value="">-Seleccione un sector-</option>
                                                        @foreach ($sectores as $sector)
                                                        <option value="{{$sector->id}}" {{ ($institucionActualizar->sector_id == $loop->iteration ? "selected":"") }}>{{$sector->nombre_sector}}</option>
                                                        @endforeach
                                                    </select>
                                                    @foreach ($errors->get('sector_id') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                    @endforeach
                                            </select>   
                                        </div>
                                        </div> 
                                        </div>
                                        <br><br><br>
                                        
                                        <label>Direccion <small style="color:#16D195;" >*</small></label>
                                        <div class="form-example-int mg-t-15">
                                            
                                            <div class="form-example-int mg-t-15">
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select class="selectpicker" data-live-search="true" name="id_region" id="id_region" >
                                                <option value="">-Seleccione una región-</option>
                                                            @foreach ($regiones as $region)
                                                            <option value="{{$region->id}}" {{ ($institucionActualizar->id_region == $loop->iteration ? "selected":"") }}>{{$region->nombre_region}}</option>
                                                            @endforeach
                                                        </select>
                                                        @foreach ($errors->get('id_region') as $mensaje)
                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                        @endforeach
                                                </select>   
                                            </div>
                                            </div> 
                                            </div>
                                            
                                            <div class="form-example-int mg-t-15">
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select class="selectpicker" data-live-search="true" name="id_departamento" id="id_departamento" >
                                                <option value="">-Seleccione un departamento-</option>
                                                        @foreach ($departamentos as $departamento)
                                                        <option value="{{$departamento->id}}" {{ ($institucionActualizar->id_departamento == $loop->iteration ? "selected":"") }}>{{$departamento->nombre_departamento}}</option>
                                                        @endforeach
                                                    </select>
                                                    @foreach ($errors->get('id_departamento') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                    @endforeach
                                                </select>   
                                            </div>
                                            </div> 
                                            </div>


    
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="id_municipio" id="id_municipio" >
                                                    <option value="">-Seleccione un municipio-</option>
                                                        @foreach ($municipios as $municipio)
                                                        <option value="{{$municipio->id}}" {{ ($institucionActualizar->id_municipio == $loop->iteration ? "selected":"") }}> {{$municipio->nombre_municipio}}</option>
                                                        @endforeach
                                                    </select>
                                                    @foreach ($errors->get('id_municipio') as $mensaje)
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
                                                <input type="text" class="form-control" name="direccion" id="direccion" value="{{$institucionActualizar->direccion}}" placeholder="Dirección de la institución">
                                                @foreach ($errors->get('direccion') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>
                                        </div>

                                        <br>
                                            
                                            
                                        
                                        <div class="form-example-int mg-t-15">
                                            <button class="btn btn-success notika-btn-success">Actualizar institución</button>
                                            <a class="btn btn-danger notika-btn-danger" href="{{route('instituciones')}}">Cancelar</a>
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
    </div>
@endsection