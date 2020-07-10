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
										<h2>Registro de institución</h2>
										<p>Ingrese los datos de la institución</p>
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
                            <h2>Institución</h2>
                            <p>Complete los campos del formulario</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-wrap">
                                    
                                    <div class="form-example-int">
                                        <div class="form-group">
                                            <label><strong>Nombre</strong> </label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Nombre de la institución">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                    
                                            <label><strong>Tipo</strong></label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker">
                                                    <option>-Seleccione una opción-</option>
                                                    <option>Industria</option>
                                                    <option>Finanzas</option>
                                                </select>
                                        </div>
                                        </div>
                                    
                                    </div>
                                    <br><br>
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                    
                                            <label><strong>Sector</strong></label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select class="selectpicker">
                                                        <option>Sector</option>
                                                        <option>Público</option>
                                                        <option>Privado</option>
                                                        <option>Social</option>
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
                                                <select class="selectpicker">
                                                        <option>Región</option>
                                                        <option>Occidental</option>
                                                        <option>Oriental</option>
                                                        <option>Central</option>
                                                    </select>
                                            </div>
                                        </div>

                 
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker">
                                                    <option>Departamento</option>
                                                    <option>Ahuachapán</option>
                                                    <option>La Libertad</option>
                                                </select>
                                        </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select class="selectpicker">
                                                        <option>Municipio</option>
                                                        <option>Mejicanos</option>
                                                        <option>San Salvador</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                               
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" placeholder="Dirección de la empresa">
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>

                                   
                                    <br>
                             
                                    <div class="form-example-int mg-t-15">
                                        <button class="btn btn-success notika-btn-success">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                     
                </div>
            </div>
       
        
        </div>
    </div>
@endsection