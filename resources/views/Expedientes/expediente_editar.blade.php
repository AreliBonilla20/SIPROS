@extends('layouts.app')

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
                                    <form action="/Expedientes/{{$estudiante->carne}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                        @if($errors->any())
                                         <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                 <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div
                                     @endif
                                     
                                    <div class="form-example-int">
                                        <div class="form-group">
                                            <label><strong>Carnet</strong> </label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Carnet del estudiante" name="carne" value="{{$estudiante->carne}}">
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Nombres</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Nombres del estudiante" name="nombres" value="{{$estudiante->nombres}}">
                                            </div>
                                        </div>
                                    </div>
                             
                                    <div class="form-example-int">
                                        <div class="form-group">
                                            <label><strong>Apellidos</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Apellidos del estudiante" name="apellidos" value="{{$estudiante->apellidos}}">
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Edad</strong></label>
                                            <div class="nk-int-st">
                                                <input type="number" class="form-control input-sm" placeholder="Edad del estudiante" name="edad" value="{{$estudiante->edad}}">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Genero</strong></label>
                                            <div class="nk-int-st">
                                                    @foreach($sexos as $sexo)
                                                    <input type="radio" name="sexo" value="{{$sexo->id}}">{{$sexo->sexo}}
                                                    @endforeach
                                            </div>
                                        </div>
                                    </div>

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
                                                <input type="text" class="form-control input-sm" placeholder="Documento único de identidad del estudiante" name="dui" value="{{$estudiante->dui}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                    
                                            <label><strong>Dirección</strong></label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                        </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select class="selectpicker" name="departamento">
                                                    <option>Seleccione el departamento</option>
                                                    @foreach($departamentos as $departamento)
                                                    <option value="{{$departamento->id}}">{{$departamento->nombre_departamento}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <br><br>


                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select class="selectpicker" name="municipio">
                                                    <option>Seleccione el municipio</option>
                                                    @foreach($municipios as $municipio)
                                                    <option value="{{$municipio->id}}">{{$municipio->nombre_municipio}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <br><br>

                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                               
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" placeholder="Dirección del estudiante" name="direccion" value="{{$estudiante->direccion}}">
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Teléfono</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Teléfono del estudiante" name="telefono" value="{{$estudiante->telefono}}">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Correo Electrónico</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Correo electrónico del estudiante"  name="email" value="{{$estudiante->email}}">
                                            </div>
                                        </div>
                                    </div>

                                    <!--div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select class="selectpicker" name="institucion">
                                                    <option>Seleccione la institucion</option>
                                                    @foreach($instituciones as $institucion)
                                                    <option value="{{$institucion->id}}">{{$institucion->nombre}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <br><br>


                                       <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select class="selectpicker" name="area">
                                                    <option>Seleccione el área</option>
                                                    @foreach($areas as $area)
                                                    <option value="{{$area->id}}">{{$area->nombre_area}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <br><br-->
                                    <br>
                                    <br>
                                     <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Área de interés</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Área de interés"  name="area" value="{{$estudiante->area}}">
                                            </div>
                                        </div>
                                    </div>
                             
                                    <div class="form-example-int mg-t-15">
                                        <button class="btn btn-success notika-btn-primary">Actualizar</button>
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