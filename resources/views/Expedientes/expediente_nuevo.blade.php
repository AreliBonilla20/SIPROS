@extends('layout')

@section('content')
<div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Expediente</h2>
                            <p>Complete los campos del formulario</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-wrap">
                                    
                                    <div class="form-example-int">
                                        <div class="form-group">
                                            <label><strong>Carnet</strong> </label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Carnet del estudiante">
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Nombres</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Nombres del estudiante">
                                            </div>
                                        </div>
                                    </div>
                             
                                    <div class="form-example-int">
                                        <div class="form-group">
                                            <label><strong>Apellidos</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Apellidos del estudiante">
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Edad</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Edad del estudiante">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                    
                                            <label><strong>Género</strong></label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker">
                                                    <option>-Seleccione una opción-</option>
                                                    <option>Femenino</option>
                                                    <option>Masculino</option>
                                                </select>
                                        </div>
                                        </div>
                                    
                                    </div>
                                    <br><br>
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>DUI</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Documento único de identidad del estudiante">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                    
                                            <label><strong>Dirección</strong></label>
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
                                                    <input type="text" class="form-control input-sm" placeholder="Dirección del estudiante">
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Teléfono</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Teléfono del estudiante">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Área de interés</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Correo electrónico del estudiante">
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