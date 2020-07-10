@extends('layout')

@section('content')

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
                                    
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Nombre</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Nombre del proyecto">
                                            </div>
                                        </div>
                                    </div>
                                    
                             
                                    <div class="form-example-int">
                                        <div class="form-group">
                                            <label><strong>Área de conocimiento</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Área de conocimiento que requiere el proyecto">
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Objetivos</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Objetivos del proyecto">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Logros</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Logros del proyectos">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                    
                                            <label><strong>Institución</strong></label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker">
                                                    <option>-Seleccione una opción-</option>
                                                    <option>Ministerio de economía</option>
                                                    <option>Universidad de El Salvador</option>
                                                </select>
                                        </div>
                                        </div>
                                    
                                    </div>
                                    <br><br>
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Cantidad de estudiantes</strong></label>
                                            <div class="nk-int-st">
                                                <input type="number" class="form-control input-sm" placeholder="Cantidad de estudiantes requeridos para el proyecto">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Encargado</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Nombre del encargado del proyecto">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Teléfono</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Teléfono del encargado del proyecto">
                                            </div>
                                        </div>
                                    </div>

                     
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Correo electrónico</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Correo electrónico del encargado del proyecto">
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