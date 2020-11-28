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
                                <button type="button" onclick="deshabilitar_selects()" class="btn" data-placement="left" data-toggle="modal" data-target="#generar_reporte" ><i class="notika-icon notika-sent"></i> Generar PDF</button>
                            </div>

                            <div class="modal fade" id="generar_reporte" role="dialog">
                                <div class="modal-dialog modals-default">
                                    <div class="modal-content">
                                    <form action="{{route('reporte_instituciones')}}" method="post">
                                    @csrf

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <h4 class="text-center">Generación de reporte de Instituciones</h4>
                                        <p>Seleccione los criterios de filtrado que desea incluir en el reporte.<br>Puede seleccionar más de uno.</p>
                                        <div class="modal-body">


                                                <label for="tipo_institucion_id" >Tipo de institución <small style="color:#16D195;" >*</small></label>
                                                <div class="form-example-int mg-t-15">
                                                        <div class="bootstrap-select fm-cmp-mg">
                                                            <label><input type="radio" onclick="alternar_select_tipos()" id="radio_tipo_institucion_1" name="tipo_institucion_id[]" value="0" checked> Todos los tipos.</label> <br>
                                                            <label><input type="radio" onclick="alternar_select_tipos()" id="radio_tipo_institucion_2" name="tipo_institucion_id[]" value=""> Selección personalizada.</label>
                                                            <select class="selectpicker" data-live-search="true" name="tipo_institucion_id[]" id="tipo_institucion_id" multiple required>
                                                                {{$tipo_instituciones = \App\TipoInstitucion::all()}}
                                                                @foreach ($tipo_instituciones as $tipo_institucion)
                                                                <option value="{{$tipo_institucion->id}}">{{$tipo_institucion->tipo_institucion}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                </div><br>

                                                <label for="sector_id" >Sector <small style="color:#16D195;" >*</small></label>
                                                <div class="form-example-int mg-t-15">
                                                        <div class="bootstrap-select fm-cmp-mg">
                                                            <label><input type="radio" onclick="alternar_select_sectores()" id="radio_sectores_1" name="sector_id[]" value="0" checked> Todos los sectores.</label> <br>
                                                            <label><input type="radio" onclick="alternar_select_sectores()" id="radio_sectores_2" name="sector_id[]" value=""> Selección personalizada.</label>
                                                            <select class="selectpicker" data-live-search="true" name="sector_id[]" id="sector_id" multiple required>
                                                                {{$sectores = \App\Sector::all()}}
                                                                @foreach ($sectores as $sector)
                                                                <option value="{{$sector->id}}">{{$sector->nombre_sector}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                </div><br>

                                                <label for="id_departamento">Departamento <small style="color:#16D195;" >*</small></label>
                                                <div class="form-example-int mg-t-15">
                                                        <div class="bootstrap-select fm-cmp-mg">
                                                            <label><input type="radio" onclick="alternar_select_departamentos()" id="radio_departamentos_1" name="id_departamento[]" value="0" checked> Todos los departamentos.</label> <br>
                                                            <label><input type="radio" onclick="alternar_select_departamentos()" id="radio_departamentos_2" name="id_departamento[]" value=""> Selección personalizada.</label>
                                                            <select class="selectpicker" data-live-search="true" name="id_departamento[]" id="id_departamento" multiple required>
                                                                {{$departamentos= \App\Departamento::all()}}
                                                                @foreach ($departamentos as $departamento)
                                                                <option value="{{$departamento->id}}">{{$departamento->nombre_departamento}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                </div>
                                        </div>

                                        <br><br>
                                        <div class="modal-footer">
                                                <button formtarget="_blank" data-toggle="tooltip" data-placement="left" title="Descargar reporte" class="btn btn-default"><i class="notika-icon notika-down-arrow"></i> Descargar PDF</button>
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

<script>
    function alternar_select_tipos(){
        var radio_button_1 = document.getElementById('radio_tipo_institucion_1');
        var radio_button_2 = document.getElementById('radio_tipo_institucion_2');

        if(radio_button_1.checked){
            document.getElementById('tipo_institucion_id').disabled = true;
        }
        
        if(radio_button_2.checked){
            document.getElementById('tipo_institucion_id').disabled = false;
        }
    }


    function alternar_select_sectores(){
        var radio_button_1 = document.getElementById('radio_sectores_1');
        var radio_button_2 = document.getElementById('radio_sectores_2');

        if(radio_button_1.checked){
            document.getElementById('sector_id').disabled = true;
        }
        
        if(radio_button_2.checked){
            document.getElementById('sector_id').disabled = false;
        }
    }


    function alternar_select_departamentos(){
        var radio_button_1 = document.getElementById('radio_departamentos_1');
        var radio_button_2 = document.getElementById('radio_departamentos_2');

        if(radio_button_1.checked){
            document.getElementById('id_departamento').disabled = true;
        }
        
        if(radio_button_2.checked){
            document.getElementById('id_departamento').disabled = false;
        }
    }

    function deshabilitar_selects(){
        document.getElementById('tipo_institucion_id').disabled = true;
        document.getElementById('sector_id').disabled = true;
        document.getElementById('id_departamento').disabled = true;
    }
</script>


@endsection
