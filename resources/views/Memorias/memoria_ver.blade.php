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

                                    <h2>Memoria</h2>
                                    @if($memoria)
                                    <p>{{$memoria->asignacion->estudiante->nombres}} {{$memoria->asignacion->estudiante->apellidos}}</p>

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
                        <h4><i class="glyphicon glyphicon-list-alt"></i> Datos de la memoria</h4>
                        <a style="position:absolute; right:5%; top:8%;"class="btn btn-default notika-btn-default" href="{{route('editar_memoria', $memoria->id)}}"><span class="glyphicon glyphicon-pencil"></span> Editar</a><br>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Carnet</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->asignacion->estudiante->carne}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Estudiante</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->asignacion->estudiante->nombres}} {{$memoria->asignacion->estudiante->apellidos}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Carrera</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->asignacion->estudiante->carrera->nombre_carrera}}" readonly>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Proyecto</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->asignacion->proyecto->nombre}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Institución</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->asignacion->proyecto->institucion->nombre}}" readonly>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br><br>
                    <h4>Memoria</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Fecha de inicio</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->fecha_inicio}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Fecha de finalización</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->fecha_fin}}" readonly>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Docentes beneficiados (Masculino)</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->docente_benef_m}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Docentes beneficiados (Femenino)</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->docente_benef_f}}" readonly>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Personal beneficiado (Masculino)</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->personal_benef_m}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Personal beneficiado (Femenino)</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->personal_benef_f}}" readonly>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Estudiantes beneficiados (Masculino)</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->estudiante_benef_m}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Estudiantes beneficiados (Femenino)</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->estudiante_benef_f}}" readonly>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Otros beneficiados (Masculino)</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->otros_benef_m}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Otros beneficiados (Femenino)</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->otros_benef_f}}" readonly>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Inversión del estudiante</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="$ {{$memoria->inversion_estudiante}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Inversión de la institución</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="$ {{$memoria->inversion_institucion}}" readonly>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Horas completadas</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->horas_completadas}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <strong>Estado de la certificación</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->estado_constancia}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Total beneficiados (Masculinos)</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->total_benef_m}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Total beneficiados (Femenino)</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->total_benef_f}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <strong>Total beneficiados</strong>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="{{$memoria->total_benef}}" readonly>
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
    <div class="wizard-wrap-int">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="wizard-wrap-int" style="padding-top:4%; text-align:center">
                    <div class="basic-tb-hd flex" >
                        <h4><i class="glyphicon glyphicon-stats"></i> Beneficiarios</h4>
                    </div>

                    <div class="email-statis-wrap" >

                        <div class="email-ctn-nock">
                            <h3 style="color:#16CC99;" class="glyphicon glyphicon-user"></h3>
                            <p>Total de beneficiados</p>
                            <h1 style="color:#615E5E;"><span class="counter">{{$memoria->total_benef}}</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="wizard-wrap-int" style="padding:4%; text-align:center">
                    <div class="basic-tb-hd flex" >
                        <h4><i class="glyphicon glyphicon-stats"></i> Horas completadas</h4>
                    </div>

                    <div class="email-statis-wrap">

                        <div class="email-ctn-nock">
                            <h3 style="color:#16CC99;" class="glyphicon glyphicon-dashboard"></h3>
                            <p>Total de horas completadas</p>
                            <h1 style="color:#615E5E;"><span class="counter">{{$memoria->horas_completadas}}</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <p>No se han registrado memorias aún para este proyecto</p>
            @endif
        </div>
    </div>

</div>
<br>
@endsection
