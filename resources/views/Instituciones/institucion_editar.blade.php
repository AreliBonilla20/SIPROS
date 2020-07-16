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

                                        <div class="form-example-int">
                                            <div class="form-group">
                                                <label for="nombre"><strong>Nombre</strong> </label>
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" name="nombre" id="nombre" placeholder="Nombre de la institución" value="{{$institucionActualizar->nombre}}" required>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                                <label><strong>Tipo de institución</strong></label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="tipo_institucion_id" id="tipo_institucion_id" required>
                                                        <option value="">-Seleccione una opción-</option>
                                                        @foreach ($tipoInstituciones as $tipoInstitucion)
                                                            <option value="{{$tipoInstitucion->id}}" {{ ($institucionActualizar->tipo_institucion_id == $loop->iteration ? "selected":"") }}>{{$tipoInstitucion->tipo_institucion}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                                <label for="sector_id"><strong>Sector</strong></label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="sector_id" id="sector_id" required>
                                                        @foreach ($sectores as $sector)
                                                            <option value="{{$sector->id}}" {{ ($institucionActualizar->sector_id == $loop->iteration ? "selected":"") }}>{{$sector->nombre_sector}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                                <label><strong>Dirección</strong></label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="id_region" id="id_region" required>
                                                        <option value="">-Región-</option>
                                                        @foreach ($regiones as $region)
                                                            <option value="{{$region->id}}" {{ ($institucionActualizar->id_region == $loop->iteration ? "selected":"") }}>{{$region->nombre_region}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="id_departamento" id="id_departamento" required>
                                                        <option value="">-Departamento-</option>
                                                        @foreach ($departamentos as $departamento)
                                                            <option value="{{$departamento->id}}" {{ ($institucionActualizar->id_departamento == $loop->iteration ? "selected":"") }}>{{$departamento->nombre_departamento}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="id_municipio" id="id_municipio" required>
                                                        <option value="">-Municipio-</option>
                                                        @foreach ($municipios as $municipio)
                                                            <option value="{{$municipio->id}}" {{ ($institucionActualizar->id_municipio == $loop->iteration ? "selected":"") }}> {{$municipio->nombre_municipio}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="form-example-int mg-t-15">
                                                <div class="form-group">
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control input-sm" name="direccion" id="direccion" placeholder="Dirección de la institución" value="{{$institucionActualizar->direccion}}" required>
                                                    </div>
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
                                    @if (session('actualizada'))
                                        <div class="alert alert-success mt-3">
                                            {{ session('actualizada') }}
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
@endsection