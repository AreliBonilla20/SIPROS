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
                             <!--
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <button data-toggle="tooltip" data-placement="left" title="Descargar reporte" class="btn"><i class="notika-icon notika-sent"></i></button>
                                </div>
                            </div>-->
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
                                    <a href="{{ route('crear_expediente') }}"><button class="btn btn-success notika-btn-success">Agregar</button></a>
                                </div>
                            </div>
                        </div> <br><br><br>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Carnet</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($estudiantes as $estudiante)
                                    <tr>
                                        <td></td>
                                        <td>{{$estudiante->carne}}</td>
                                        <td>{{$estudiante->nombres}}</td>
                                        <td>{{$estudiante->apellidos}}</td>
                                        <td>
                                        <a href="{{route('editar_expediente', $estudiante->carne)}}" class="btn btn-warning notika-btn-warning">Editar</a>
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