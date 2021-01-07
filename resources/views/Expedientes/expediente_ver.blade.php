@extends('layout')
@section('title')
    Expediente: {{$estudiante->carne}} - {{$estudiante->nombres}} {{$estudiante->apellidos}}
@endsection
@section('content')
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="{{route('expedientes')}}"><button type="button" style="color:white; position:absolute; right:5%; top:30%;" class="btn notika-btn-blue btn-icon-notika waves-effect"><span class="notika-icon notika-left-arrow"></span> Regresar</button></a>
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Expediente</h2>
                                    <p>{{$estudiante->carne}} - {{$estudiante->nombres}} {{$estudiante->apellidos}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="form-element-area">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list" style="padding:4%;">
                    <div class="basic-tb-hd flex">
                        <h4><i class="glyphicon glyphicon-list-alt"></i> Datos del estudiante</h4>
                        <a style="position:absolute; right:5%; top:8%;"class="btn btn-default notika-btn-default" href="{{route('editar_expediente', $estudiante->carne)}}"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Carné</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$estudiante->carne}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                            <strong>Nombre</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$estudiante->nombres}} {{$estudiante->apellidos}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Género</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$estudiante->sexo->sexo}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Fecha de nacimiento</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{date('d/m/Y', strtotime($estudiante->fecha_nacimiento))}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Edad</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$edad}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                            <strong>Carrera</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$estudiante->carrera->nombre_carrera}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>DUI</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$estudiante->dui}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                            <strong>Dirección</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$estudiante->direccion}}, {{$estudiante->departamento->nombre_departamento}}, {{$estudiante->municipio->nombre_municipio}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Teléfono</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$estudiante->telefono}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                            <strong>Correo electrónico</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$estudiante->email}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Área de interés</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$estudiante->area->area_interes}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                            <strong>Estado servicio social</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$estudiante->estado_servicio}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Horas registradas</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$estudiante->horas_registradas}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" style="padding-left:25%;">
                        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                            <button type="button" style="color:white;" class="btn btn-success notika-btn-success btn-button-mg" data-toggle="modal" data-target="#asignacion"><span class="glyphicon glyphicon-check"></span> Asignar proyecto</button>
                            <button type="button" style="color:white;" class="btn notika-btn-black btn-reco-mg btn-button-mg" data-toggle="modal" data-target="#prorroga"><span class="glyphicon glyphicon-check"></span> Registrar prórroga</button>
                            <a href="{{route('crear_memoria', $estudiante->carne)}}"><button type="button" style="color:white;" class="btn btn-info notika-btn-info btn-button-mg"><span class="glyphicon glyphicon-check"></span> Registrar memoria</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="wizard-wrap-int" style="padding:4%;">
                <div class="basic-tb-hd flex" >
                    <h4><i class="glyphicon glyphicon-stats"></i> Avance en servicio social</h4>
                </div>
                <div class="email-statis-wrap" style="padding-left:45%;">
                    <div class="email-round-nock">
                        <input type="text" class="knob" value="0" data-rel="{{$porcentaje_avance}}" data-linecap="round" data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true">
                    </div>
                    <div class="email-ctn-nock">
                        <p>Porcentaje de avance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<!--Inicio de modal para asignar proyecto-->
<div class="modal fade" id="asignacion" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <h3>Asignación de proyecto</h3>
            <p>Estudiante: {{$estudiante->nombres}} {{$estudiante->apellidos}}</p>
            <br>
            <div class="modal-body">
                <form action="{{route('guardar_asignacion')}}" method="POST">
                    @csrf
                    <label for="carne">Carné <small style="color:#16D195;" >*</small></label>
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                            <i class="notika-icon notika-edit"></i>
                        </div>
                        <div class="nk-int-st">
                            <input type="text" class="form-control" name="carne" value="{{$estudiante->carne}}" readonly>
                            @foreach ($errors->get('carne') as $mensaje)
                            <small style="color:#B42020;">{{ $mensaje }}</small>
                            @endforeach
                        </div>
                    </div>
                    <label for="id_proyecto" >Proyecto <small style="color:#16D195;" >*</small></label>
                    <div class="form-example-int mg-t-15">
                        <div class="bootstrap-select fm-cmp-mg">
                            <select class="selectpicker" name="id_proyecto" data-live-search="true" required>
                                <option value="">-Seleccione un proyecto-</option>
                                @foreach($proyectos as $proyecto)
                                <option value="{{$proyecto->id}}" {{ (old('id_proyecto') == $loop->iteration ? "selected":"") }}>{{$proyecto->nombre}}, {{$proyecto->institucion->nombre}}</option>
                                @endforeach
                            </select>
                            @foreach ($errors->get('id_proyecto') as $mensaje)
                            <small style="color:#B42020;">{{ $mensaje }}</small>
                            @endforeach
                        </div>
                    </div>
                    <br>
                    <label for="horas_asignadas"> Cantidad de horas asignadas <small style="color:#16D195;" >*</small></label>
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                            <i class="notika-icon notika-edit"></i>
                        </div>
                        <div class="nk-int-st">
                            <input type="number" class="form-control" name="horas_asignadas" value="{{old('horas_asignadas')}}" placeholder="Cantidad de horas" required>
                            @foreach ($errors->get('horas_asignadas') as $mensaje)
                            <small style="color:#B42020;">{{ $mensaje }}</small>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-example-int mg-t-15" style="position:absolute; right:0%;">
                        <button class="btn btn-success notika-btn-success">Guardar asignación</button>
                    </div>
                </form>
                <br>
            </div>
            <br>
        </div>

    </div>
</div>
</div>
</div>
<!--Fin de modal para asignar proyecto-->

<!--Inicio de modal para registrar prorroga-->
<div class="modal fade" id="prorroga" role="dialog" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modals-default">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <h3>Solicitud de prorroga</h3>
    <p>Estudiante: {{$estudiante->nombres}} {{$estudiante->apellidos}}</p>
    <br>
    <div class="modal-body">
        <form action="{{route('guardar_prorroga')}}" method="POST">
            @csrf
            <label for="carne">Carné <small style="color:#16D195;" >*</small></label>
            <div class="form-group ic-cmp-int">
                <div class="form-ic-cmp">
                    <i class="notika-icon notika-edit"></i>
                </div>
                <div class="nk-int-st">
                    <input type="text" class="form-control" name="carne" value="{{$estudiante->carne}}" readonly>
                    @foreach ($errors->get('carne') as $mensaje)
                    <small style="color:#B42020;">{{ $mensaje }}</small>
                    @endforeach
                </div>
            </div>
            <label for="fecha_solicitud">Fecha de solicitud<small style="color:#16D195;" >*</small></label>
            <div class="form-group ic-cmp-int">
                <div class="form-ic-cmp">
                    <i class="notika-icon notika-edit"></i>
                </div>
                <div class="nk-int-st">
                    <input type="date" class="form-control" name="fecha_solicitud" required>
                    @foreach ($errors->get('fecha_solicitud') as $mensaje)
                    <small style="color:#B42020;">{{ $mensaje }}</small>
                    @endforeach
                </div>
            </div>
            <div class="form-example-int mg-t-15" style="position:absolute; right:0%;">
                <button class="btn btn-success notika-btn-success">Guardar prorroga</button>
            </div>
        </form>
        <br>
    </div>
    <br>
</div>

</div>
</div>
</div>
<!--Fin de modal para guardar prorroga-->
<br>
<div class="wizard-area">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="wizard-wrap-int" style="padding:4%">
        <div class="basic-tb-hd flex">
            <h2>Procesos</h2>
        </div>
        <div id="rootwizard">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container-pro wizard-cts-st">
                        <ul>
                            <li><a href="#asignaciones" data-toggle="tab"><button class="btn btn-lg btn-warning notika-btn-warning" style="color:white; font-size:17px;">Asignaciones</button></a></li>
                            <li><a href="#prorrogas" data-toggle="tab"><button class="btn btn-lg btn-warning notika-btn-warning" style="color:white; font-size:17px;">Prórrogas</button></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane wizard-ctn" id="asignaciones">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="normal-table-list mg-t-30">
                                <div class="bsc-tbl-hvr">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nombre del proyecto</th>
                                                <th>Institución</th>
                                                <th>Horas asignadas</th>
                                                <th>Estado</th>
                                                <th>Editar</th>
                                                <th>Memoria</th>
                                                <th>Asignación</th>
                                                <th>Certificación</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($asignaciones as $asignacion)
                                            <tr>
                                                <td>{{$asignacion->proyecto->nombre}}</td>
                                                <td>{{$asignacion->proyecto->institucion->nombre}}</td>
                                                <td>{{$asignacion->horas_asignadas}}</td>
                                                <td>{{$asignacion->estado_asignacion}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-default notika-btn-default" data-toggle="modal" data-target="#actualizar_asignacion_{{$asignacion->id}}"><span class="glyphicon glyphicon-pencil"></span> Editar</button>

                                                    <!--Inicio de modal para modificar asignación de proyecto proyecto-->
                                                    <div class="modal fade" id="actualizar_asignacion_{{$asignacion->id}}" role="dialog" data-backdrop="static" data-keyboard="false">
                                                        <div class="modal-dialog modals-default">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <h3>Actualización de asignación de proyecto</h3>
                                                                <p>Estudiante: {{$estudiante->nombres}} {{$estudiante->apellidos}}</p>
                                                                <br>
                                                                <div class="modal-body">
                                                                    <form action="{{route('actualizar_asignacion', $asignacion->id)}}" method="POST">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <label for="carne">Carné <small style="color:#16D195;" >*</small></label>
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="notika-icon notika-edit"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input type="text" class="form-control" name="carne" value="{{$estudiante->carne}}" readonly>
                                                                                @foreach ($errors->get('carne') as $mensaje)
                                                                                <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                        <label for="id_proyecto" >Proyecto <small style="color:#16D195;" >*</small></label>
                                                                        <div class="form-example-int mg-t-15">
                                                                            <div class="bootstrap-select fm-cmp-mg">
                                                                                <select class="selectpicker" name="id_proyecto" required>
                                                                                    <option value="">-Seleccione un proyecto-</option>
                                                                                    @foreach($proyectos as $proyecto)
                                                                                    <option value="{{$proyecto->id}}" {{ $proyecto->id == $asignacion->id_proyecto ? "selected" : ""}}>{{$proyecto->nombre}}, {{$proyecto->institucion->nombre}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                                @foreach ($errors->get('id_proyecto') as $mensaje)
                                                                                <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <label for="horas_asignadas"> Cantidad de horas asignadas <small style="color:#16D195;" >*</small></label>
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="notika-icon notika-edit"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input type="number" class="form-control" name="horas_asignadas" placeholder="Cantidad de horas" value="{{$asignacion->horas_asignadas}}" required>
                                                                                @foreach ($errors->get('horas_asignadas') as $mensaje)
                                                                                <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <label for="horas_asignadas"> Estado de servicio social <small style="color:#16D195;" >*</small></label>
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="notika-icon notika-edit"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <select class="selectpicker" name="estado_asignacion" required>
                                                                                    <option value="Iniciado" {{$asignacion->estado_asignacion == "Iniciado" ? "selected" : ""}}>Iniciado</option>
                                                                                    <option value="No iniciado" {{$asignacion->estado_asignacion == "No iniciado" ? "selected" : ""}}>No iniciado</option>
                                                                                </select>
                                                                                @foreach ($errors->get('estado_asignacion') as $mensaje)
                                                                                <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-example-int mg-t-15" style="position:absolute; right:0%;">
                                                                            <button class="btn btn-success notika-btn-success">Actualizar asignación</button>
                                                                        </div>
                                                                    </form>
                                                                    <br>
                                                                </div>
                                                                <br>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <!--Fin de modal para modificar asignación de proyecto-->


                                                </td>
                                                <td><a href="{{route('ver_memoria', $asignacion->id)}}"><button type="button" style="color:white;" class="btn btn-info notika-btn-info" data-toggle="modal" data-target="#memoria"><span class="glyphicon glyphicon-th"></span> Consultar memoria</button></td></a>
                                                <td><a href="{{route('asignacion_estudiante', $asignacion->id)}}" target="_blank"><button type="button" style="color:white;" class="btn btn-primary notika-btn-primary"><span class="glyphicon glyphicon-envelope"></span> Asignación</button></td></a>
                                                <td><a href="{{route('certificacion_estudiante', $asignacion->id)}}" target="_blank"><button type="button" style="color:white;" class="btn btn-primary notika-btn-primary"><span class="glyphicon glyphicon-envelope"></span> Certificación</button></td></a>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane wizard-ctn" id="prorrogas">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="normal-table-list mg-t-30">
                                <div class="bsc-tbl-hvr">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Fecha de solicitud</th>
                                                <th>Fecha de inscripción</th>
                                                <th>Estado</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($prorrogas as $prorroga)
                                            <tr>
                                                <td>{{\Carbon\Carbon::parse($prorroga->fecha_solicitud)->format('d/m/Y ')}}</td>
                                                <td>{{\Carbon\Carbon::parse($prorroga->created_at)->format('d/m/Y ')}}</td>
                                                <td>{{$prorroga->estado}}</td>
                                                <td>
                                                    <button type="button" style="color:white;" class="btn btn-info notika-btn-info btn-reco-mg btn-button-mg" data-toggle="modal" data-target="#actualizar_prorroga_{{$loop->iteration}}"><span class="glyphicon glyphicon-check"></span> Aprobar/Rechazar</button>
                                                    <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">

                        <div class="modal fade" id="actualizar_prorroga_{{$loop->iteration}}" role="dialog" data-backdrop="static" data-keyboard="false">
                            <div class="modal-dialog modals-default">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <h3>Actualización de prórroga</h3>
                                    <p>Estudiante: {{$estudiante->nombres}} {{$estudiante->apellidos}}</p>
                                    <br>
                                    <div class="modal-body">
                                        <form action="{{route('actualizar_prorroga', $prorroga->id)}}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <label for="carne">Carné <small style="color:#16D195;" >*</small></label>
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                    <i class="notika-icon notika-edit"></i>
                                                </div>
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control" name="carne" value="{{$estudiante->carne}}" readonly>
                                                    @foreach ($errors->get('carne') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                    @endforeach
                                                </div>
                                            </div>


                                            <label for="fecha_solicitud">Fecha de solicitud<small style="color:#16D195;" >*</small></label>
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                    <i class="notika-icon notika-edit"></i>
                                                </div>
                                                <div class="nk-int-st">
                                                    <input type="date" class="form-control" name="fecha_solicitud" value="{{$prorroga->fecha_solicitud}}" autofocus required>
                                                    @foreach ($errors->get('fecha_solicitud') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <br>
                                            <label for="fecha_solicitud">Estado de prórroga: {{$prorroga->estado}}</label>
                                            <div class="form-group ic-cmp-int">
                                                <div class="nk-int-st">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-check-inline">
                                                                <label><input type="radio" {{ ($prorroga->estado == "Aprobada" ? "checked":"") }} class="i-checks iradio_square-green" name="estado" value="Aprobada" required> <i></i> Aprobada</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-check-inline">
                                                            <label><input type="radio" {{ ($prorroga->estado == "Rechazada" ? "checked":"") }} class="i-checks iradio_square-green" name="estado" value="Rechazada" required> <i></i> Rechazada</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-check-inline">
                                                            <label><input type="radio" {{ ($prorroga->estado == "Pendiente" ? "checked":"") }} class="i-checks iradio_square-green" name="estado" value="Pendiente" required> <i></i> Pendiente</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-example-int mg-t-15" style="position:absolute; right:10%;">
                                            <button class="btn btn-success notika-btn-success">Guardar prórroga</button>
                                        </div>
                                    </form>
                                    <br>
                                </div>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>
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
        </div>
       
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
