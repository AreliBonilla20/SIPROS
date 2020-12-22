@extends('layout')
@section('content')
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="{{route('proyectos')}}"><button type="button" style="color:white; position:absolute; right:5%; top:30%;" class="btn notika-btn-blue btn-icon-notika waves-effect"><span class="notika-icon notika-left-arrow"></span> Regresar</button></a>
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Proyecto</h2>
                                    <p>{{$proyecto->nombre}}</p>
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
                        <h4><i class="glyphicon glyphicon-list-alt"></i> Datos del proyecto</h4>
                        <a style="position:absolute; right:5%; top:8%;"class="btn btn-default notika-btn-default" href="{{route('editar_proyecto', $proyecto->id)}}"><span class="glyphicon glyphicon-pencil"></span> Editar</a>

                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                            <strong>Nombre</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$proyecto->nombre}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Institución</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$proyecto->institucion->nombre}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                            <strong>Carrera</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$proyecto->carrera->nombre_carrera}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Duración</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$proyecto->duracion}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Área de conocimiento</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$proyecto->area_de_conocimiento}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Objetivos</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$proyecto->objetivos}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Logros</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$proyecto->logros}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Cantidad de estudiantes</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$proyecto->cantidad_de_estudiantes}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Encargado</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$proyecto->nombre_encargado}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Correo del encargado</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$proyecto->email}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Teléfono de contacto</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$proyecto->telefono}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Estado del proyecto</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$proyecto->estado_proyecto}}" readonly>
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
                    <h4><i class="glyphicon glyphicon-stats"></i> Cantidad de estudiantes inscritos</h4>
                </div>

                <div class="email-statis-wrap" style="text-align:center">

                    <div class="email-ctn-nock">
                        <h3 style="color:#16CC99;" class="glyphicon glyphicon-signal"></h3>
                        <p>Estudiantes</p>
                        <h1 style="color:#615E5E;"><span class="counter">{{$proyecto->estudiantes_inscritos}}</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="data-table-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list" style="padding:4%;">
                    <h4><i class="glyphicon glyphicon-list-alt"></i> Institución </h4><br><br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Sector</th>
                                <th>Departamento</th>
                                <th>Consultar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$proyecto->institucion->nombre}}</td>
                                <td>{{$proyecto->institucion->tipoInstitucion->tipo_institucion}}</td>
                                <td>{{$proyecto->institucion->sector->nombre_sector}}</td>
                                <td>{{$proyecto->institucion->departamento->nombre_departamento}}</td>
                                <td>
                                    <a class="btn btn-warning notika-btn-warning" href="{{route('ver_institucion', $proyecto->institucion->id)}}"><span class="glyphicon glyphicon-th-list"></span> Consultar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
