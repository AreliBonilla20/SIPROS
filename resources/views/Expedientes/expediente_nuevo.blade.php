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
										<h2>Registro de expediente</h2>
										<p>Ingrese los datos del estudiante</p>
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
                    @if (session('agregado'))
                    <div class="alert alert-success" role="alert">
                        {{ session('agregado') }}
                    </div>                   
                    @endif
                        <div class="basic-tb-hd">
                            <h2>Expediente</h2>
                            <p>Complete los campos del formulario</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-wrap">
                                    <form action="{{route('guardar_expediente')}}" method="POST">
                                    @csrf
                                        @if($errors->any())
                                         <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                 <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                     @endif
                                     
                                    <div class="form-example-int">
                                        <div class="form-group">
                                            <label><strong>Carnet</strong> </label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Carnet del estudiante" name="carne">
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Nombres</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Nombres del estudiante" name="nombres">
                                            </div>
                                        </div>
                                    </div>
                             
                                    <div class="form-example-int">
                                        <div class="form-group">
                                            <label><strong>Apellidos</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Apellidos del estudiante" name="apellidos">
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Edad</strong></label>
                                            <div class="nk-int-st">
                                                <input type="number" class="form-control input-sm" placeholder="Edad del estudiante" name="edad">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                         <label><strong>Género</strong></label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="sexo">
                                                    <option>-Seleccione una opción-</option>
                                                    @foreach($sexos as $sexo)
                                                    <option value="{{$sexo->id}}">{{$sexo->sexo}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        </div>
                                    
                                    </div>
                                    <br><br>

                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                         <label><strong>Carrera</strong></label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="carrera">
                                                    <option>-Seleccione una opción-</option>
                                                    @foreach($carreras as $carrera)
                                                    <option value="{{$carrera->codigo}}">{{$carrera->codigo}}-{{$carrera->nombre_carrera}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        </div>
                                    
                                    </div>
                                    <br><br>


                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>DUI</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Documento único de identidad del estudiante" name="dui">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                                <label><strong>Dirección</strong></label>
                                            </div>
                                            
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="departamento" id="departamento" required>
                                                        <option value="">-Departamento-</option>
                                                        @foreach ($departamentos as $departamento)
                                                            <option value="{{$departamento->id}}">{{$departamento->nombre_departamento}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="municipio" id="municipio" required>
                                                        <option value="">-Municipio-</option>
                                                        @foreach ($municipios as $municipio)
                                                            <option value="{{$municipio->id}}">{{$municipio->nombre_municipio}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <br><br>

                                            <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                               
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" placeholder="Dirección del estudiante" name="direccion">
                                                </div>
                                            </div>
                                        </div>
                                    
                                        
                                        
                                       

                                       
                                    </div>

                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Teléfono</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Teléfono del estudiante" name="telefono">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Correo Electrónico</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Correo electrónico del estudiante"  name="email">
                                            </div>
                                        </div>
                                    </div>

                                   
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Área de interés</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Área de interés"  name="area">
                                            </div>
                                        </div>
                                    </div>
                             
                                    <div class="form-example-int mg-t-15">
                                        <button class="btn btn-success notika-btn-success">Guardar</button>
                                        <a class="btn btn-danger notika-btn-danger" href="{{route('expedientes')}}">Cancelar</a>
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