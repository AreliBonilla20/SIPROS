@extends('layout')
@section('title')
    Editar proyecto: {{$proyecto_actualizar->nombre}}
@endsection
@section('content')
<div class="breadcomb-area" >
    <div class="container" >
        <div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-form"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Edición de proyecto</h2>
                                    <p>Ingrese los datos a modificar del proyecto</p>
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
                <div class="form-element-list">
                    @if (session('actualizado'))
                    <div class="alert alert-success" role="alert">
                        {{ session('actualizado') }}
                    </div>
                    @endif
                    <div class="basic-tb-hd">
                        <h2>Proyecto</h2>
                        <p>Complete los campos del formulario</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-example-wrap">
                                <form action="{{route('actualizar_proyecto', $proyecto_actualizar->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf

                                    <label for="codigo">Carrera <small style="color:#16D195;" >*</small></label>
                                    <div class="form-example-int mg-t-15">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select class="selectpicker" name="codigo_carrera">
                                                    <option value="">-Seleccione una carrera-</option>
                                                    @foreach($carreras as $carrera)
                                                    <option value="{{$carrera->codigo}}" {{ ($carrera->codigo == $proyecto_actualizar->codigo_carrera ? "selected":"") }}>{{$carrera->codigo}} - {{$carrera->nombre_carrera}}</option>
                                                    @endforeach
                                                </select>
                                                @foreach ($errors->get('codigo_carrera') as $mensaje)
                                                <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                    <br><br>
                                    <label for="nombre">Nombre <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-edit"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" value="{{$proyecto_actualizar->nombre}}" name="nombre" id="nombre" placeholder="Nombre del proyecto">
                                            @foreach ($errors->get('nombre') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>

                                    <label for="duracion">Duración del proyecto</label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-edit"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" value="{{$proyecto_actualizar->duracion}}" name="duracion" id="duracion" placeholder="Duración del proyecto">
                                            @foreach ($errors->get('duracion') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>

                                    <label for="area">Área de conocimiento <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-edit"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" value="{{$proyecto_actualizar->area_de_conocimiento}}" name="area" id="area" placeholder="Área de conocimiento que requiere el proyecto">
                                            @foreach ($errors->get('area') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>
                                    <label for="objetivos">Objetivos <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-edit"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" value="{{$proyecto_actualizar->objetivos}}" name="objetivos" id="objetivos" placeholder="Objetivos del proyecto">
                                            @foreach ($errors->get('objetivos') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>

                                    <label for="logro">Logros <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-edit"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" value="{{$proyecto_actualizar->logros}}" name="logro" id="logro" placeholder="Logros del proyecto">
                                            @foreach ($errors->get('logro') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>
                                    <label for="institucion" >Institución <small style="color:#16D195;" >*</small></label>
                                    <div class="form-example-int mg-t-15">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select class="selectpicker"  name="institucion" class="selectpicker" value="{{$proyecto_actualizar->id_institucion}}">
                                                    <option value="">-Seleccione una opción-</option>                                                    
                                                    @foreach ($instituciones as $institucion)
                                                    <option value="{{$institucion->id}}" {{ ($institucion->id == $proyecto_actualizar->id_institucion ? "selected":"") }}>{{$institucion->nombre}}</option>                                                    
                                                    @endforeach
                                                </select>
                                                @foreach ($errors->get('institucion') as $mensaje)
                                                <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <br><br><br>

                                    <label for="cantidad">Cantidad de estudiantes <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-edit"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="number" value="{{$proyecto_actualizar->cantidad_de_estudiantes}}" class="form-control" min="0" name="cantidad" id="cantidad" placeholder="Cantidad de estudiantes requeridos para el proyecto">
                                            @foreach ($errors->get('cantidad') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>
                                    <label for="encargado">Encargado <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-edit"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" value="{{$proyecto_actualizar->nombre_encargado}}" class="form-control" name="encargado" id="encargado" placeholder="Nombre del encargado del proyecto">
                                            @foreach ($errors->get('encargado') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>
                                    <label for="telefono">Teléfono <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-edit"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" value="{{$proyecto_actualizar->telefono}}" class="form-control" name="telefono" id="telefono" placeholder="Teléfono del encargado del proyecto">
                                            @foreach ($errors->get('telefono') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>
                                    <label for="correo">Correo electrónico <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-edit"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" value="{{$proyecto_actualizar->email}}" class="form-control" name="correo" id="correo" placeholder="Correo electrónico del encargado del proyecto">
                                            @foreach ($errors->get('correo') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>
                                    <label for="estado_proyecto"> Estado del proyecto:</label>
                                    {{$proyecto_actualizar->estado_proyecto}}
                                    <div class="form-group ic-cmp-int">
                                        <div class="nk-int-st">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-check-inline">
                                                        <label><input type="radio" {{ ($proyecto_actualizar->estado_proyecto == "Disponible" ? "checked":"") }} class="i-checks iradio_square-green" name="estado_proyecto" value="Disponible"> <i></i> Disponible</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-check-inline">
                                                    <label><input type="radio" {{ ($proyecto_actualizar->estado_proyecto == "No disponible" ? "checked":"") }} class="i-checks iradio_square-green" name="estado_proyecto" value="No disponible"> <i></i> No disponible</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="form-example-int mg-t-15">
                                    <button type="submit" class="btn btn-success notika-btn-success">Actualizar proyecto</button>
                                    <a class="btn btn-danger notika-btn-danger" href="{{route('ver_proyecto', $proyecto_actualizar->id)}}">Cancelar</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>
</div>
@endsection
