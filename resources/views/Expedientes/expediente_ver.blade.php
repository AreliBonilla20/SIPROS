@extends('layout')

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
                                        <h2>Expediente</h2>
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

<div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list" style="padding:4%;">
                        <div class="basic-tb-hd flex">
                            <h2>Datos del estudiante</h2>
                            <a style="position:absolute; right:5%; top:8%;"class="btn btn-default notika-btn-default" href="{{route('editar_expediente', $estudiante->carne)}}"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                                <strong>Nombre</strong>
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$estudiante->nombres}} {{$estudiante->apellidos}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <strong>Carné</strong>
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$estudiante->carne}}" readonly>
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
                                <strong>Fecha de nacimiento [Año/Mes/Día]</strong>
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$estudiante->fecha_nacimiento}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <strong>Edad</strong>
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="25 años" readonly>
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
                            


                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <strong>Correo electrónico</strong>
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="{{$estudiante->email}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <br>

                        <div class="row" style="padding-left:43%;">
                            <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                            <button type="button" style="color:white;" class="btn notika-btn-black btn-reco-mg btn-button-mg" data-toggle="modal" data-target="#asignacion"><span class="glyphicon glyphicon-check"></span> Asignar poyecto</button>
                            <div class="modal fade" id="asignacion" role="dialog" data-backdrop="static" data-keyboard="false">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <h3>Asignación de proyecto</h3>
                                            <p>Alumno: {{$estudiante->nombres}} {{$estudiante->apellidos}}</p>
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
                                                        <input type="text" class="form-control" name="carne" value="{{$estudiante->carne}}" >
                                                        @foreach ($errors->get('carne') as $mensaje)
                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                        @endforeach  
                                                    </div>
                                                </div>

                                                
                                                <label for="id_proyecto" >Proyecto <small style="color:#16D195;" >*</small></label>
                                                <div class="form-example-int mg-t-15">
                                                    <div class="bootstrap-select fm-cmp-mg">
                                                        <select class="selectpicker" name="id_proyecto">
                                                                <option value="">-Seleccione un proyecto-</option>
                                                                @foreach($proyectos as $proyecto)
                                                                <option value="{{$proyecto->id}}">{{$proyecto->nombre}}, {{$proyecto->institucion->nombre}}</option>
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
                                                        <input type="number" class="form-control" name="horas_asignadas" placeholder="Cantidad de horas">
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
                        </div>

                        <div class="row" style="padding-left:43%;">
                            <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                            <button type="button" style="color:white;" class="btn notika-btn-black btn-reco-mg btn-button-mg" data-toggle="modal" data-target="#prorroga"><span class="glyphicon glyphicon-check"></span> Agregar prorroga</button>
                            <div class="modal fade" id="prorroga" role="dialog" data-backdrop="static" data-keyboard="false">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <h3>Solicitud de prorroga</h3>
                                            <p>Alumno: {{$estudiante->nombres}} {{$estudiante->apellidos}}</p>
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
                                                        <input type="date" class="form-control" name="fecha_solicitud">
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
                            </div>    
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
                            <h2>Avance en servicio social</h2>
                    </div>
                        <div class="email-statis-wrap" style="padding-left:45%;">
                            <div class="email-round-nock">
                                <input type="text" class="knob" value="0" data-rel="25" data-linecap="round" data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true">
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
<div class="wizard-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wizard-wrap-int" style="padding:4%;">
                    <div class="basic-tb-hd flex">
                            <h2>Procesos</h2>
                    </div>
                        <div id="rootwizard">
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <div class="container-pro wizard-cts-st">
                                        <ul>
                                        <li><a href="#proyectos" data-toggle="tab"><button class="btn btn-lg btn-warning notika-btn-warning" style="color:white; font-size:17px;">Proyectos</button></a></li>
                                        <li><a href="#certificaciones" data-toggle="tab"><button class="btn btn-lg btn-warning notika-btn-warning" style="color:white; font-size:17px;">Certificaciones</button></a></li>
                                        <li><a href="#prorrogas" data-toggle="tab"><button class="btn btn-lg btn-warning notika-btn-warning" style="color:white; font-size:17px;">Prórrogas</button></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane wizard-ctn" id="proyectos">
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
                                                        <th>Memoria</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($asignaciones as $asignacion)
                                                    <tr>
                                                        <td>{{$asignacion->proyecto->nombre}}</td>
                                                        <td>{{$asignacion->proyecto->institucion->nombre}}</td>
                                                        <td>{{$asignacion->horas_asignadas}}</td>
                                                        <td>{{$asignacion->estado_asignacion}}</td>
                                                        <td><button type="button" style="color:white;" class="btn btn-success notika-btn-success" data-toggle="modal" data-target="#memoria"><span class="glyphicon glyphicon-check"></span> Memoria</button></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="modal fade" id="memoria" role="dialog" data-backdrop="static" data-keyboard="false">
                                                <div class="modal-dialog modals-default">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <h3>Registro de memorias</h3>
                                                        <p>Alumno: {{$estudiante->nombres}} {{$estudiante->apellidos}}</p>
                                                        <p>Institución: {{$asignacion->proyecto->institucion->nombre}}</p>
                                                        <p>Proyecto: {{$asignacion->proyecto->nombre}}</p>
                                                        <br>
                                                        <div class="modal-body">
                                                            <form action="{{route('guardar_memoria')}}" method="POST">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    
                                                                    <label for="asignacion_id">Asignación <small style="color:#16D195;" >*</small></label>
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <i class="notika-icon notika-edit"></i>
                                                                    </div>
                                                                <div class="nk-int-st">
                                                                <input type="text" class="form-control" name="asignacion_id" value="{{$asignacion->id}}" readonly>
                                                                    @foreach ($errors->get('asignacion_id') as $mensaje)
                                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                    @endforeach  
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="col-3">
                                                                    <label for="fecha_inicio">Fecha de inicio <small style="color:#16D195;" >*</small></label>
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <i class="notika-icon notika-edit"></i>
                                                                    </div>
                                                                <div class="nk-int-st">
                                                                    <input type="date" class="form-control" name="fecha_inicio" >
                                                                    @foreach ($errors->get('fecha_inicio') as $mensaje)
                                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                    @endforeach  
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="col-3">
                                                                    <label for="fecha_fin">Fecha de Finalización <small style="color:#16D195;" >*</small></label>
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <i class="notika-icon notika-edit"></i>
                                                                    </div>
                                                                <div class="nk-int-st">
                                                                    <input type="date" class="form-control" name="fecha_fin" >
                                                                    @foreach ($errors->get('fecha_fin') as $mensaje)
                                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                    @endforeach  
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="col-3">
                                                                    <label for="docente_benef_m">Docentes beneficiados masculinos <small style="color:#16D195;" >*</small></label>
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <i class="notika-icon notika-edit"></i>
                                                                    </div>
                                                                <div class="nk-int-st">
                                                                    <input type="numeric" class="form-control" name="docente_benef_m" >
                                                                    @foreach ($errors->get('docente_benef_m') as $mensaje)
                                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                    @endforeach  
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="col-3">
                                                                    <label for="docente_benef_f">Docentes beneficiados femeninos <small style="color:#16D195;" >*</small></label>
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <i class="notika-icon notika-edit"></i>
                                                                    </div>
                                                                <div class="nk-int-st">
                                                                    <input type="numeric" class="form-control" name="docente_benef_f" >
                                                                    @foreach ($errors->get('docente_benef_f') as $mensaje)
                                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                    @endforeach  
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="col-3">
                                                                    <label for="estudiante_benef_m">Estudiantes beneficiados masculinos <small style="color:#16D195;" >*</small></label>
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <i class="notika-icon notika-edit"></i>
                                                                    </div>
                                                                <div class="nk-int-st">
                                                                    <input type="numeric" class="form-control" name="estudiante_benef_m" >
                                                                    @foreach ($errors->get('estudiante_benef_m') as $mensaje)
                                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                    @endforeach  
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="col-3">
                                                                    <label for="estudiante_benef_f">Estudiantes beneficiados femeninos <small style="color:#16D195;" >*</small></label>
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <i class="notika-icon notika-edit"></i>
                                                                    </div>
                                                                <div class="nk-int-st">
                                                                    <input type="numeric" class="form-control" name="estudiante_benef_f" >
                                                                    @foreach ($errors->get('estudiante_benef_f') as $mensaje)
                                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                    @endforeach  
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="col-3">
                                                                    <label for="otros_benef_m">Otros beneficiados masculinos <small style="color:#16D195;" >*</small></label>
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <i class="notika-icon notika-edit"></i>
                                                                    </div>
                                                                <div class="nk-int-st">
                                                                    <input type="numeric" class="form-control" name="otros_benef_m" >
                                                                    @foreach ($errors->get('otros_benef_m') as $mensaje)
                                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                    @endforeach  
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="col-3">
                                                                    <label for="otros_benef_f">Otros beneficiados femeninos <small style="color:#16D195;" >*</small></label>
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <i class="notika-icon notika-edit"></i>
                                                                    </div>
                                                                <div class="nk-int-st">
                                                                    <input type="numeric" class="form-control" name="otros_benef_f" >
                                                                    @foreach ($errors->get('otros_benef_f') as $mensaje)
                                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                    @endforeach  
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="col-3">
                                                                    <label for="inversion_institucion">Inversión de institución($) <small style="color:#16D195;" >*</small></label>
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <i class="notika-icon notika-edit"></i>
                                                                    </div>
                                                                <div class="nk-int-st">
                                                                    <input type="numeric" class="form-control" name="inversion_institucion" >
                                                                    @foreach ($errors->get('inversion_institucion') as $mensaje)
                                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                    @endforeach  
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="col-3">
                                                                    <label for="inversion_estudiante">Inversión de estudiante($) <small style="color:#16D195;" >*</small></label>
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <i class="notika-icon notika-edit"></i>
                                                                    </div>
                                                                <div class="nk-int-st">
                                                                    <input type="numeric" class="form-control" name="inversion_estudiante" >
                                                                    @foreach ($errors->get('inversion_estudiante') as $mensaje)
                                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                    @endforeach  
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="col-3">
                                                                    <label for="horas_completadas">Horas completadas <small style="color:#16D195;" >*</small></label>
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <i class="notika-icon notika-edit"></i>
                                                                    </div>
                                                                <div class="nk-int-st">
                                                                    <input type="numeric" class="form-control" name="horas_completadas" >
                                                                    @foreach ($errors->get('horas_completadas') as $mensaje)
                                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                    @endforeach  
                                                                </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            
            
                                                            
                                                            
                                                            
            
                                                            <div class="form-example-int mg-t-15" style="position:absolute; right:0%;">
                                                            <button class="btn btn-success notika-btn-success">Guardar memoria</button>
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

                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="tab-content">
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
                                                        <td>
                                                            {{$prorroga->fecha_solicitud}}
                                                        </td>
                                                        <td>
                                                            {{ \Carbon\Carbon::parse($prorroga->created_at)->format('Y-m-d')}}
                                                        </td>
                                                        <td>
                                                            {{$prorroga->estado}}
                                                        </td>
                                                        <td>
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                                                            <button type="button" style="color:white;" class="btn btn-info notika-btn-info btn-reco-mg btn-button-mg" data-toggle="modal" data-target="#actualizar_prorroga_{{$loop->iteration}}"><span class="glyphicon glyphicon-check"></span> Aprobar/Rechazar</button>
                                                            <div class="modal fade" id="actualizar_prorroga_{{$loop->iteration}}" role="dialog" data-backdrop="static" data-keyboard="false">
                                                                    <div class="modal-dialog modals-default">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            </div>
                                                                            <h3>Actualización de prórroga</h3>
                                                                            <p>Alumno: {{$estudiante->nombres}} {{$estudiante->apellidos}}</p>
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
                                                                                        <input type="date" class="form-control" name="fecha_solicitud" value="{{$prorroga->fecha_solicitud}}" autofocus>
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
                                                                                                <label><input type="radio" {{ ($prorroga->estado == "Aprobada" ? "checked":"") }} class="i-checks iradio_square-green" name="estado" value="Aprobada"> <i></i> Aprobada</label>
                                                                                            </div>
                                                                                            </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="form-check-inline">
                                                                                                <label><input type="radio" {{ ($prorroga->estado == "Rechazada" ? "checked":"") }} class="i-checks iradio_square-green" name="estado" value="Rechazada"> <i></i> Rechazada</label>
                                                                                            </div>
                                                                                            </div>
                                                                                            </div>
                                                                                        </div>
                                                                                </div>
                                
                                                                                <div class="form-example-int mg-t-15" style="position:absolute; right:10%;">
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
                                <div class="tab-pane wizard-ctn" id="certificaciones">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus purus sapien, cursus et egestas at, volutpat sed dolor. Aliquam sollicitudin dui ac euismod hendrerit. Phasellus quis lobortis dolor. Sed massa massa, sagittis nec fermentum eu, volutpat non lectus. Nullam vitae tristique nunc. Aenean vel placerat augue. Aliquam pharetra mauris neque, sitan amet egestas risus semper non. Proin egestas egestas ex sed gravida. Suspendisse commodo nisl sit amet risus volutpat volutpat. Phasellus vitae turpis a elit tinciduntansan ornare. Praesent non libero quis libero scelerisque eleifend. Ut eleifend laoreet vulputate.</p>
                                    <p class="wizard-mg-ctn">Duis eu eros vitae risus sollicitudin blandit in non nisi. Phasellus rhoncus ullamcorper pretium. Etiam et viverra neque, aliquam imperdiet velit. Nam a scelerisque justo, id tristique diam. Aenean ut vestibulum velit,
                                        vel ornare augue. Nullam eu est malesuada, vehicula ex in, maximus massa. Sed sit amet massa venenatis, tristique orci sed, eleifend arcu.</p>
                                </div>
                                <div class="wizard-action-pro">
                                    <ul class="wizard-nav-ac">
                                        <li><a class="button-first a-prevent" href="#"><i class="notika-icon notika-more-button"></i></a></li>
                                        <li><a class="button-previous a-prevent" href="#"><i class="notika-icon notika-back"></i></a></li>
                                        <li><a class="button-next a-prevent" href="#"><i class="notika-icon notika-next-pro"></i></a></li>
                                        <li><a class="button-last a-prevent" href="#"><i class="notika-icon notika-more-button"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection