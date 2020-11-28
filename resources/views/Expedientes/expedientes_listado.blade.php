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
                                    <h2>Expedientes</h2>
                                    <p>Listado de expedientes</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <a href="{{route('reporte_expedientes')}}" target="_blank">
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
                        <div id="ver_todo" style="padding-left:84%;"><span><a style="text-decoration:underline;" href="{{route('expedientes')}}">Limpiar</a></span></div>
                        
                    </div>
                   
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


@endsection
