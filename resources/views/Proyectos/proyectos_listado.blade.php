@extends('layout')
@section('title')
    Listado de proyectos
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
                                    <h2>Proyectos</h2>
                                    <p>Listado de proyectos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <div class="breadcomb-report">
                                    <button type="button" onclick="deshabilitar_selects()" class="btn" data-placement="left" data-toggle="modal" data-target="#generar_reporte" ><i class="notika-icon notika-sent"></i> Generar PDF</button>
                                </div>
                            </div>

                            <div class="modal fade" id="generar_reporte" role="dialog">
                                <div class="modal-dialog modals-default">
                                    <div class="modal-content">
                                        <form action="{{route('reporte_proyectos')}}" method="post">
                                            @csrf
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <h4 class="text-center">Generación de reporte de Proyectos</h4>
                                            <p>Seleccione los criterios de filtrado que desea incluir en el reporte.<br>Puede seleccionar más de
                                                uno.</p>
                                            <div class="modal-body">

                                                <label for="select_instituciones">Institución<small style="color:#16D195;">*</small></label>
                                                <div class="form-example-int mg-t-15">
                                                    <div class="bootstrap-select fm-cmp-mg">
                                                        <label><input type="radio" onclick="alternar_select_instituciones()" id="radio_instituciones_1"
                                                                name="id_instituciones[]" value="0" checked> Todas las instituciones.</label> <br>
                                                        <label><input type="radio" onclick="alternar_select_instituciones()" id="radio_instituciones_2"
                                                                name="id_instituciones[]" value=""> Selección personalizada.</label>
                                                        <select class="selectpicker" data-live-search="true" name="id_instituciones[]" id="select_instituciones" multiple required>
                                                            {{$instituciones = \App\Institucion::all()}}
                                                            @foreach($instituciones as $institucion)
                                                            <option value="{{$institucion->id}}">{{$institucion->nombre}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div><br>


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

                                                
                                                <label for="select_estado_proyecto">Estado de disponibilidad.<small style="color:#16D195;">*</small></label>
                                                <div class="form-example-int mg-t-15">
                                                    <div class="bootstrap-select fm-cmp-mg">
                                                        <label><input type="radio" onclick="alternar_select_estado_proyectos()" id="radio_estado_proyecto_1"
                                                                name="estado_proyecto[]" value="0" checked> Todos los estados.</label> <br>
                                                        <label><input type="radio" onclick="alternar_select_estado_proyectos()" id="radio_estado_proyecto_2"
                                                                name="estado_proyecto[]" value=""> Selección personalizada.</label>
                                                        <select class="selectpicker" data-live-search="true" name="estado_proyecto[]" id="select_estado_proyecto" multiple required>
                                                            <option value="Disponible">Disponible</option>
                                                            <option value="No disponible">No disponible</option>
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
                            <h2>Nuevo proyecto</h2>
                            <p>Agregar un nuevo proyecto</p>
                            <div class="form-example-int mg-t-15">
                                <a href="{{ route('crear_proyecto') }}"><button class="btn btn-success notika-btn-success"> <span class="glyphicon glyphicon-plus"></span> Agregar</button></a>
                            </div>
                        </div>
                        </div>
                        <br><br>

                        
                        <div class="col-10">
                        <label style="padding-left:2%;">Buscar proyectos por fecha de creación <small style="color:#16D195;" ></small></label>
                        <form style="padding-left:10%;" method="GET" action="{{route('buscar_proyectos')}}">
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
                                <a href="{{ route('proyectos') }}"><button type="submit" class="btn btn-danger notika-btn-danger" > <span class="glyphicon glyphicon-remove"></span> Limpiar búsqueda</button> </a>
                        </span>
                        @endif
                        
                   

                    </div> <br><br>

                    @if($inicio || $final)
                    <div style="text-align:center;">
                        <h5>Instituciones inscritos desde {{$inicio_formato}} al {{$final_formato}}</h5>
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Institución</th>
                                    <th>Área de conocimiento</th>
                                    <th>Encargado</th>
                                    <th>Disponible</th>
                                    <th>Editar</th>
                                    <th>Consultar</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proyectos as $proyecto)
                                <tr>
                                    <td>{{$proyecto->nombre}}</td>
                                    <td>{{$proyecto->institucion->nombre}}</td>
                                    <td>{{$proyecto->area_de_conocimiento}}</td>
                                    <td>{{$proyecto->nombre_encargado}}</td>
                                    <td>{{$proyecto->estado_proyecto}}</td>
                                    <td>
                                        <a class="btn btn-default notika-btn-default" href="{{route('editar_proyecto', $proyecto->id)}}"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning notika-btn-warning" href="{{route('ver_proyecto', $proyecto->id)}}"><span class="glyphicon glyphicon-th-list"></span> Consultar</a>
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

<script>
    function deshabilitar_selects(){
    document.getElementById('select_instituciones').disabled = true;
    document.getElementById('select_carreras').disabled = true;
    document.getElementById('select_estado_proyecto').disabled = true;
}

function alternar_select_instituciones(){
    var radio_button_1 = document.getElementById('radio_instituciones_1');
    var radio_button_2 = document.getElementById('radio_instituciones_2');

    if(radio_button_1.checked){
        document.getElementById('select_instituciones').disabled = true;
    }
    
    if(radio_button_2.checked){
        document.getElementById('select_instituciones').disabled = false;
    }
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


function alternar_select_estado_proyectos(){
    var radio_button_1 = document.getElementById('radio_estado_proyecto_1');
    var radio_button_2 = document.getElementById('radio_estado_proyecto_2');

    if(radio_button_1.checked){
        document.getElementById('select_estado_proyecto').disabled = true;
    }
    
    if(radio_button_2.checked){
        document.getElementById('select_estado_proyecto').disabled = false;
    }
}

</script>
@endsection
