@extends('layout')
@section('title')
    Listado de expedientes
@endsection
@section('content')
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Expedientes</h2>
                                    <p>Listado de expedientes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <button type="button" onclick="deshabilitar_selects()" class="btn" data-placement="left" data-toggle="modal" data-target="#generar_reporte" ><i class="notika-icon notika-sent"></i> Generar PDF</button>
                            </div>
                        </div>

                        <div class="modal fade" id="generar_reporte" role="dialog">
                            <div class="modal-dialog modals-default">
                                <div class="modal-content">
                                    <form action="{{route('reporte_expedientes')}}" method="post">
                                        @csrf
                        
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <h4 class="text-center">Generación de reporte de Estudiantes</h4>
                                        <p>Seleccione los criterios de filtrado que desea incluir en el reporte.<br>Puede seleccionar más de
                                            uno.</p>
                                        <div class="modal-body">
                        
                        
                                            <label for="select_carreras">Carrera<small style="color:#16D195;">*</small></label>
                                            <div class="form-example-int mg-t-15">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <label><input type="radio" onclick="alternar_select_carreras()" id="radio_carreras_1"
                                                            name="codigo[]" value="0" checked> Todos las carreras.</label> <br>
                                                    <label><input type="radio" onclick="alternar_select_carreras()" id="radio_carreras_2"
                                                            name="codigo[]" value=""> Selección personalizada.</label>
                                                    <select class="selectpicker" name="codigo[]" id="select_carreras" multiple required>
                                                        {{$carreras = \App\Carrera::all()}}
                                                        @foreach($carreras as $carrera)
                                                        <option value="{{$carrera->codigo}}">{{$carrera->codigo}}-{{$carrera->nombre_carrera}}</option-->
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><br>


                                            <label for="select_sexos">Sexo<small style="color:#16D195;">*</small></label>
                                            <div class="form-example-int mg-t-15">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <label><input type="radio" onclick="alternar_select_sexos()" id="radio_sexos_1"
                                                            name="sexo_id[]" value="0" checked> Ambos sexos.</label> <br>
                                                    <label><input type="radio" onclick="alternar_select_sexos()" id="radio_sexos_2"
                                                            name="sexo_id[]" value=""> Selección personalizada.</label>
                                                    <select class="selectpicker" name="sexo_id[]" id="select_sexos" multiple required>
                                                        {{$sexos = \App\Sexo::all()}}
                                                        @foreach($sexos as $sexo)
                                                        <option value="{{$sexo->id}}" >{{$sexo->sexo}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><br>


                                            <label for="select_estado_servicio">Estado de servicio social.<small style="color:#16D195;">*</small></label>
                                            <div class="form-example-int mg-t-15">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <label><input type="radio" onclick="alternar_select_estado_servicios()" id="radio_estado_servicio_1"
                                                            name="estado_servicio[]" value="0" checked> Todos los estados.</label> <br>
                                                    <label><input type="radio" onclick="alternar_select_estado_servicios()" id="radio_estado_servicio_2"
                                                            name="estado_servicio[]" value=""> Selección personalizada.</label>
                                                    <select class="selectpicker" name="estado_servicio[]" id="select_estado_servicio" multiple required>
                                                        <option value="Iniciado">Iniciado</option>
                                                        <option value="No iniciado">No iniciado</option>
                                                        <option value="Terminado">Terminado</option>
                                                    </select>
                                                </div>
                                            </div><br>


                                        </div>
                        
                                        <br><br>
                                        <div class="modal-footer">
                                            <button formtarget="_blank" data-toggle="tooltip" data-placement="left" title="Descargar reporte"
                                                class="btn btn-default"><i class="notika-icon notika-down-arrow"></i> Descargar PDF</button>
                                        </div>
                        
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="data-table-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="breadcomb-wp">
                        <div class="breadcomb-icon">
                            <i class="notika-icon notika-edit"></i>
                        </div>
                        <div class="breadcomb-ctn">
                            <h2>Nuevo expediente</h2>
                            <p>Agregar un nuevo expediente</p>
                            <div class="form-example-int mg-t-15">
                                <a href="{{ route('crear_expediente') }}"><button class="btn btn-success notika-btn-success"><span class="glyphicon glyphicon-plus"></span> Agregar</button></a>
                            </div>
                        </div>
                    </div> <br><br><br>

                    <div class="col-10">
                    <label style="padding-left:2%;">Buscar expedientes por fecha de creación <small style="color:#16D195;" ></small></label>
                        <form style="padding-left:10%;" method="GET" action="{{route('buscar_expedientes')}}">
                            <div class="form-example-int mg-t-15">
                                <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
                                <input type="date" class="form-control" name="fecha_inicio" value="{{$inicio}}">
                                @foreach ($errors->get('fecha_inicio') as $mensaje)
                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                @endforeach
                                </div>

                                <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
                                <input type="date" class="form-control" name="fecha_final" value="{{$final}}">
                                @foreach ($errors->get('fecha_final') as $mensaje)
                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                @endforeach
                                </div>
                            </div>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-success notika-btn-success"> <i class="fa fa-search"></i> </button>
                            </span>
                        </form>
                        <br>
                        @if($inicio || $final)
                        <span class="input-group-btn" style="padding-left:74%;">
                                <a href="{{ route('expedientes') }}"><button type="submit" class="btn btn-danger notika-btn-danger" > <span class="glyphicon glyphicon-remove"></span> Limpiar búsqueda</button> </a>
                        </span>
                        @endif
                    </div>

                    <br>
                    @if($inicio || $final)
                    <div style="text-align:center;">
                        <br>
                        <h5>Estudiantes inscritos desde {{$inicio_formato}} al {{$final_formato}}</h5>
                    </div>
                    @endif

                    <br><br>    

                   

                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Carnet</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Carrera</th>
                                    <th>Editar</th>
                                    <th>Consultar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($estudiantes as $estudiante)
                                <tr>
                                    <td>{{$estudiante->carne}}</td>
                                    <td>{{$estudiante->nombres}}</td>
                                    <td>{{$estudiante->apellidos}}</td>
                                    <td>{{$estudiante->carrera->nombre_carrera}}</td>
                                    <td>
                                        <a class="btn btn-default notika-btn-default" href="{{route('editar_expediente', $estudiante->carne)}}"><span class="glyphicon glyphicon-pencil"></span> </a>
                                    </td>
                
                                    <td>
                                        <a class="btn btn-warning notika-btn-warning" href="{{route('ver_expediente', $estudiante->carne)}}"><span class="glyphicon glyphicon-th-list"></span> Consultar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

<script>
    function deshabilitar_selects(){
    document.getElementById('select_carreras').disabled = true;
    document.getElementById('select_sexos').disabled = true;
    document.getElementById('select_estado_servicio').disabled = true;
}


function alternar_select_carreras(){
    var radio_button_1 = document.getElementById('radio_carreras_1');
    var radio_button_2 = document.getElementById('radio_carreras_2');

    if(radio_button_1.checked){
        document.getElementById('select_carreras').disabled = true;
    }
    
    if(radio_button_2.checked){
        document.getElementById('select_carreras').disabled = false;
    }
}


function alternar_select_sexos(){
    var radio_button_1 = document.getElementById('radio_sexos_1');
    var radio_button_2 = document.getElementById('radio_sexos_2');

    if(radio_button_1.checked){
        document.getElementById('select_sexos').disabled = true;
    }
    
    if(radio_button_2.checked){
        document.getElementById('select_sexos').disabled = false;
    }
}


function alternar_select_estado_servicios(){
    var radio_button_1 = document.getElementById('radio_estado_servicio_1');
    var radio_button_2 = document.getElementById('radio_estado_servicio_2');

    if(radio_button_1.checked){
        document.getElementById('select_estado_servicio').disabled = true;
    }
    
    if(radio_button_2.checked){
        document.getElementById('select_estado_servicio').disabled = false;
    }
}

</script>

@endsection
