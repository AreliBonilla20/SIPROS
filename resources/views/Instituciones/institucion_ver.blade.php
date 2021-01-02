@extends('layout')
@section('title')
    Institución: {{$institucion->nombre}}
@endsection
@section('content')
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="{{route('instituciones')}}"><button type="button" style="color:white; position:absolute; right:5%; top:30%;" class="btn notika-btn-blue btn-icon-notika waves-effect"><span class="notika-icon notika-left-arrow"></span> Regresar</button></a>
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Institución</h2>
                                    <p>{{$institucion->nombre}}</p>
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
                        <h4><i class="glyphicon glyphicon-list-alt"></i> Datos de la institución</h4>
                        <a style="position:absolute; right:5%; top:8%;"class="btn btn-default notika-btn-default" href="{{route('editar_institucion', $institucion->id)}}"><span class="glyphicon glyphicon-pencil"></span> Editar</a>

                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                            <strong>Nombre</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$institucion->nombre}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Tipo de institución</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$institucion->tipoInstitucion->tipo_institucion}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Región</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$institucion->region->nombre_region}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Departamento</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$institucion->departamento->nombre_departamento}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Municipio</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$institucion->municipio->nombre_municipio}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                            <strong>Dirección</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$institucion->direccion}}" readonly>
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
                    <h4><i class="glyphicon glyphicon-stats"></i> Cantidad de proyectos ofertados</h4>
                </div>

                <div class="email-statis-wrap" style="text-align:center">

                    <div class="email-ctn-nock">
                        <h3 style="color:#16CC99;" class="glyphicon glyphicon-signal"></h3>
                        <p>Proyectos</p>
                        <h1 style="color:#615E5E;"><span class="counter">{{$cantidad_proyectos}}</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<div class="data-table-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list" style="padding:4%;">
                    <h4><i class="glyphicon glyphicon-list-alt"></i> Listado de proyectos</h4><br><br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Área de conocimiento</th>
                                <th>Encargado</th>
                                <th>Estado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($institucion->proyectos as $proyecto)
                            <tr>
                                <td>{{$proyecto->nombre}}</td>
                                <td>{{$proyecto->area_de_conocimiento}}</td>
                                <td>{{$proyecto->nombre_encargado}}</td>
                                <td>{{$proyecto->estado_proyecto}}</td>
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
@endsection
