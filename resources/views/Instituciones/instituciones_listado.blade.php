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
                                    <h2>Instituciones</h2>
                                    <p>Listado de instituciones</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <a href="{{route('reporte_instituciones')}}" target="_blank">
                                    <button data-toggle="tooltip" data-placement="left" title="Descargar reporte" class="btn"><i class="notika-icon notika-sent"></i> Descargar PDF</button>
                                </a>
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
                            <h2>Nueva institución</h2>
                            <p>Agregar una nueva institución</p>
                            <div class="form-example-int mg-t-15">
                                <a href="{{ route('crear_institucion') }}"><button class="btn btn-success notika-btn-success"><span class="glyphicon glyphicon-plus"></span> Agregar</button></a>
                            </div>
                        </div>
                    </div> <br><br><br>
                    <div class="col-10">
                    <label style="padding-left:2%;">Buscar instituciones por fecha de creación <small style="color:#16D195;" ></small></label>
                        <form style="padding-left:10%;" method="GET" action="{{route('buscar_instituciones')}}">
                            <div class="form-example-int mg-t-15">
                                <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
                                <input type="date" class="form-control" name="fecha_inicio" value="{{old('fecha_inicio')}}">
                                @foreach ($errors->get('fecha_inicio') as $mensaje)
                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                @endforeach
                                </div>

                                <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
                                <input type="date" class="form-control" name="fecha_final" value="{{old('fecha_final')}}">
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
                        <div id="ver_todo" style="padding-left:84%;"><span><a style="text-decoration:underline;" href="{{route('instituciones')}}">Limpiar</a></span></div>
                        
                    </div>
                   
                    <br><br>    
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Tipo</th>
                                    <th>Sector</th>
                                    <th>Departamento</th>
                                    <th>Editar</th>
                                    <th>Consultar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($instituciones as $institucion)
                                <tr>
                                    <td>{{$institucion->nombre}}</td>
                                    <td>{{$institucion->tipoInstitucion->tipo_institucion}}</td>
                                    <td>{{$institucion->sector->nombre_sector}}</td>
                                    <td>{{$institucion->departamento->nombre_departamento}}</td>
                                    <td>
                                        <a class="btn btn-default notika-btn-default" href="{{route('editar_institucion', $institucion->id)}}"><span class="glyphicon glyphicon-pencil"></span> </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning notika-btn-warning" href="{{route('ver_institucion', $institucion->id)}}"><span class="glyphicon glyphicon-th-list"></span> Consultar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
