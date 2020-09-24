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
                                        <h2>Avisos</h2>
                                        <p>Listado de avisos</p>
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
                                <h2>Nuevo aviso</h2>
                                <p>Agregar un nuevo aviso</p>
                                <div class="form-example-int mg-t-15">
                                    <a href="{{ route('sitio_aviso') }}"><button class="btn btn-success notika-btn-success"><span class="glyphicon glyphicon-plus"></span> Agregar</button></a>
                                </div>
                            </div>
                        </div> <br><br><br>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Titulo</th>
                                        <th>Descripción</th>
                                        <th>Fecha</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($avisos as $aviso)
                                    
                                        <tr>
                                            <td>{{$aviso->titulo}}</td>
                                            <td>{{$aviso->descripcion}}</td>
                                            <td>{{date('d/m/Y h:i', strtotime( $aviso->created_at))}}</td>
                                            <td>
                                            <a class="btn btn-default notika-btn-default" href="{{ route('sitio_editar_aviso', $aviso->id)}}"><span class="glyphicon glyphicon-pencil"></span> </a>
                                            </td>
                                            <td>
                                                <form method="POST" id="formulario{{$aviso->id}}" action="{{route('sitio_eliminar_aviso', $aviso->id)}}" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" onClick="confirmar({{$aviso->id}})" class="btn btn-danger notika-btn-danger"><span class="glyphicon glyphicon-trash"></span> Eliminar</button>
                                                </form>
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('js/avisos.js') }}"></script>

@endsection