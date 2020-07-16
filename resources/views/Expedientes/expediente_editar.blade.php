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
                                    <form action="{{route('actualizar_expediente', $estudianteActualizar->carne)}}" method="POST">
                                    @method('PUT')
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
                                                <input type="text" class="form-control input-sm" value="{{$estudianteActualizar->carne}}" placeholder="Carnet del estudiante" name="carne">
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Nombres</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" value="{{$estudianteActualizar->nombres}}" placeholder="Nombres del estudiante" name="nombres">
                                            </div>
                                        </div>
                                    </div>
                             
                                    <div class="form-example-int">
                                        <div class="form-group">
                                            <label><strong>Apellidos</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" value="{{$estudianteActualizar->apellidos}}" placeholder="Apellidos del estudiante" name="apellidos">
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Edad</strong></label>
                                            <div class="nk-int-st">
                                                <input type="number" class="form-control input-sm" value="{{$estudianteActualizar->edad}}" placeholder="Edad del estudiante" name="edad">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                         <label><strong>Género</strong></label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="sexo_id">
                                                    <option>-Seleccione una opción-</option>
                                                    @foreach($sexos as $sexo)
                                                    <option value="{{$estudianteActualizar->sexo_id}}" {{ ($estudianteActualizar->sexo_id == $loop->iteration ? "selected":"") }}>{{$sexo->sexo}}</option>
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
                                            <select class="selectpicker" name="codigo">
                                                    <option>-Seleccione una opción-</option>
                                                    @foreach($carreras as $carrera)
                                                    <option value="{{$estudianteActualizar->codigo}}" {{ ($estudianteActualizar->codigo == $loop->iteration ? "selected":"") }}>{{$carrera->codigo}}-{{$carrera->nombre_carrera}}</option>
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
                                                <input type="text" class="form-control input-sm" value="{{$estudianteActualizar->dui}}" placeholder="Documento único de identidad del estudiante" name="dui">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                                <label><strong>Dirección</strong></label>
                                            </div>
                                            
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="departamento_id" id="departamento_id" required>
                                                        <option value="">-Departamento-</option>
                                                        @foreach ($departamentos as $departamento)
                                                            <option value="{{$estudianteActualizar->departamento_id}}"{{ ($estudianteActualizar->departamento_id == $loop->iteration ? "selected":"") }}>{{$departamento->nombre_departamento}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="municipio_id" id="municipio_id" required>
                                                        <option value="">-Municipio-</option>
                                                        @foreach ($municipios as $municipio)
                                                            <option value="{{$estudianteActualizar->municipio_id}}"{{ ($estudianteActualizar->municipio_id == $loop->iteration ? "selected":"") }}>{{$municipio->nombre_municipio}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <br><br>

                                            <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                               
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" value="{{$estudianteActualizar->direccion}}" placeholder="Dirección del estudiante" name="direccion">
                                                </div>
                                            </div>
                                        </div>
                                    
                                      
                                    </div>

                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Teléfono</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" value="{{$estudianteActualizar->telefono}}" placeholder="Teléfono del estudiante" name="telefono">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Correo Electrónico</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" value="{{$estudianteActualizar->email}}" placeholder="Correo electrónico del estudiante"  name="email">
                                            </div>
                                        </div>
                                    </div>

                                   
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Área de interés</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" value="{{$estudianteActualizar->area}}" placeholder="Área de interés"  name="area">
                                            </div>
                                        </div>
                                    </div>
                             
                                    <div class="form-example-int mg-t-15">
                                        <button class="btn btn-success notika-btn-success">Guardar</button>
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
@endsection