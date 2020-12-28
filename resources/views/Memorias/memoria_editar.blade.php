@extends('layout')
@section('title')
    Editar memoria
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
                                    <h2>Edición de memoria</h2>
                                    <p>Ingrese los datos a modificar de la memoria</p>
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
                <div class="form-element-list" style="padding-left:6%;">
                    <div class="basic-tb-hd">
                        <h2>Memoria</h2>
                        <p>Complete los campos del formulario</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-example-wrap">
                                <form action="{{route('actualizar_memoria', $memoria_actualizar->id)}}" method="POST" >
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                            <label for="asignacion_id" >Proyecto <small style="color:#16D195;" >*</small></label>
                                            <div class="form-example-int mg-t-15">

                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker"  name="asignacion_id" id="asignacion_id" readonly>

                                                        <option value="{{$memoria_actualizar->asignacion_id}}">{{$memoria_actualizar->asignacion->proyecto->nombre}}, {{$memoria_actualizar->asignacion->proyecto->institucion->nombre}}</option>

                                                    </select>
                                                    @foreach ($errors->get('asignacion_id') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                    @endforeach
                                                </div>

                                            </div>
                                            <br>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <label for="fecha_inicio">Fecha inicio <small style="color:#16D195;" >*</small></label>
                                                <div class="form-example-int mg-t-15">
                                                    <div class="bootstrap-select fm-cmp-mg">

                                                        <input type="date" class="form-control" name="fecha_inicio" value="{{$memoria_actualizar->fecha_inicio}}">
                                                        @foreach ($errors->get('fecha_inicio') as $mensaje)
                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <label for="fecha_fin">Fecha de finalización <small style="color:#16D195;" >*</small></label>
                                                <div class="form-example-int mg-t-15">
                                                    <div class="bootstrap-select fm-cmp-mg">

                                                        <input type="date" class="form-control" name="fecha_fin" value="{{$memoria_actualizar->fecha_fin}}">
                                                        @foreach ($errors->get('fecha_fin') as $mensaje)
                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <label for="docente_benef_m">Docentes beneficiados (Masculino)</label>
                                                <div class="form-group ic-cmp-int">
                                                    <div class="form-ic-cmp">
                                                        <i class="notika-icon notika-support"></i>
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" name="docente_benef_m" placeholder="Cantidad de beneficiados" value="{{$memoria_actualizar->docente_benef_m}}">
                                                        @foreach ($errors->get('docente_benef_m') as $mensaje)
                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <label for="docente_benef_f">Docentes beneficiados (Femenino)</label>
                                                <div class="form-group ic-cmp-int">
                                                    <div class="form-ic-cmp">
                                                        <i class="notika-icon notika-support"></i>
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" name="docente_benef_f" placeholder="Cantidad de beneficiados" value="{{$memoria_actualizar->docente_benef_f}}">
                                                        @foreach ($errors->get('docente_benef_f') as $mensaje)
                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <label for="personal_benef_m">Personal beneficiado (Masculino)</label>
                                                <div class="form-group ic-cmp-int">
                                                    <div class="form-ic-cmp">
                                                        <i class="notika-icon notika-support"></i>
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" name="personal_benef_m" placeholder="Cantidad de beneficiados" value="{{$memoria_actualizar->personal_benef_m}}">
                                                        @foreach ($errors->get('personal_benef_m') as $mensaje)
                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <label for="personal_benef_f">Personal beneficiado (Femenino)</label>
                                                <div class="form-group ic-cmp-int">
                                                    <div class="form-ic-cmp">
                                                        <i class="notika-icon notika-support"></i>
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" name="personal_benef_f" placeholder="Cantidad de beneficiados" value="{{$memoria_actualizar->personal_benef_f}}">
                                                        @foreach ($errors->get('personal_benef_f') as $mensaje)
                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <label for="estudiante_benef_m">Estudiantes beneficiados (Masculino)</label>
                                                <div class="form-group ic-cmp-int">
                                                    <div class="form-ic-cmp">
                                                        <i class="notika-icon notika-support"></i>
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" name="estudiante_benef_m" placeholder="Cantidad de beneficiados" value="{{$memoria_actualizar->estudiante_benef_m}}">
                                                        @foreach ($errors->get('estudiante_benef_m') as $mensaje)
                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <label for="estudiante_benef_f">Estudiantes beneficiados (Femenino)</label>
                                                <div class="form-group ic-cmp-int">
                                                    <div class="form-ic-cmp">
                                                        <i class="notika-icon notika-support"></i>
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" name="estudiante_benef_f" placeholder="Cantidad de beneficiados" value="{{$memoria_actualizar->estudiante_benef_f}}">
                                                        @foreach ($errors->get('estudiante_benef_f') as $mensaje)
                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <br>


                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <label for="otros_benef_m">Otros beneficiados (Masculino)</label>
                                                <div class="form-group ic-cmp-int">
                                                    <div class="form-ic-cmp">
                                                        <i class="notika-icon notika-support"></i>
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" name="otros_benef_m" placeholder="Cantidad de beneficiados" value="{{$memoria_actualizar->otros_benef_m}}">
                                                        @foreach ($errors->get('otros_benef_m') as $mensaje)
                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <label for="otros_benef_f">Otros beneficiados (Femenino)</label>
                                                <div class="form-group ic-cmp-int">
                                                    <div class="form-ic-cmp">
                                                        <i class="notika-icon notika-support"></i>
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" name="otros_benef_f" placeholder="Cantidad de beneficiados" value="{{$memoria_actualizar->otros_benef_f}}">
                                                        @foreach ($errors->get('otros_benef_f') as $mensaje)
                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <label for="inversion_institucion">Inversión de la institución ($)<small style="color:#16D195;" > *</small></label>
                                                <div class="form-group ic-cmp-int">
                                                    <div class="form-ic-cmp">
                                                        <i class="notika-icon notika-support"></i>
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" name="inversion_institucion" placeholder="Costo de la inversión de la institución" value="{{$memoria_actualizar->inversion_institucion}}">
                                                        @foreach ($errors->get('inversion_institucion') as $mensaje)
                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <label for="inversion_estudiante">Inversión del estudiante ($)<small style="color:#16D195;" > *</small></label>
                                                <div class="form-group ic-cmp-int">
                                                    <div class="form-ic-cmp">
                                                        <i class="notika-icon notika-support"></i>
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" name="inversion_estudiante" placeholder="Costo de la inversión del estudiante" value="{{$memoria_actualizar->inversion_estudiante}}">
                                                        @foreach ($errors->get('inversion_estudiante') as $mensaje)
                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <label for="horas_completadas">Horas completadas<small style="color:#16D195;" > *</small></label>
                                                <div class="form-group ic-cmp-int">
                                                    <div class="form-ic-cmp">
                                                        <i class="notika-icon notika-support"></i>
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" name="horas_completadas" placeholder="Cantidad de horas completadas" value="{{$memoria_actualizar->horas_completadas}}">
                                                        @foreach ($errors->get('horas_completadas') as $mensaje)
                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-example-int mg-t-15">
                                            <button class="btn btn-success notika-btn-success">Actualizar memoria</button>
                                            <a class="btn btn-danger notika-btn-danger" href="{{route('expedientes')}}">Cancelar</a>
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
    @endsection
