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
										<h2>Prórrogas</h2>
										<p>Listado de prórrogas</p>
									</div>
								</div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <a href="{{route('reporte_prorrogas')}}">
                                        <button data-toggle="tooltip" data-placement="left" title="Descargar listado de prórrogas" class="btn"><i class="notika-icon notika-sent"></i> Descargar PDF</button>
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
                                <h2>Nueva prórroga</h2>
                                <p>Agregar una nueva prórroga</p>
                                <div class="form-example-int mg-t-15">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                                        <button type="button" style="color:white;" class="btn btn-success notika-btn-success btn-reco-mg btn-button-mg" data-toggle="modal" data-target="#prorroga"><span class="glyphicon glyphicon-plus"></span> Agregar prórroga</button>
                                        <div class="modal fade" id="prorroga" role="dialog" data-backdrop="static" data-keyboard="false">
                                                <div class="modal-dialog modals-default">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <h3>Solicitud de prorroga</h3>
                                                        Ingrese los datos solicitados.
                                                        <br>
                                                        <div class="modal-body">
                                                            <form action="{{route('guardar_prorroga')}}" method="POST">
                                                            @csrf
                                                            <label for="carne">Estudiante <small style="color:#16D195;" >*</small></label>
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="notika-icon notika-edit"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <select class="selectpicker" data-live-search="true" name="carne" id="carne" required>
                                                                        <option value="" disabled selected>-Seleccione un estudiante-</option>
                                                                        @foreach ($estudiantes as $estudiantes)
                                                                            <option value="{{$estudiantes->carne}}">{{$estudiantes->carne}} - {{$estudiantes->nombres}} {{$estudiantes->apellidos}}</option>
                                                                        @endforeach
                                                                        @foreach ($errors->get('carne') as $mensaje)
                                                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
            
            
                                                            <label for="fecha_solicitud">Fecha de solicitud<small style="color:#16D195;" >*</small></label>
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="notika-icon notika-edit"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="date" class="form-control" name="fecha_solicitud" required>
                                                                    @foreach ($errors->get('fecha_solicitud') as $mensaje)
                                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                    @endforeach  
                                                                </div>
                                                            </div>
            
                                                            <div class="form-example-int mg-t-15" style="position:absolute; right:0%;">
                                                            <button class="btn btn-success notika-btn-success">Guardar prórroga</button>
                                                             </div>
                                                            </form>
                                                            <br>
                                                        </div>
                                                        <br>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        <br><br>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Fecha de solicitud</th>
                                        <th>Fecha de inscripción</th>
                                        <th>Carnet</th>
                                        <th>Estudiante</th>
                                        <th>Estado</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($prorrogas as $prorroga)
                                        <tr>
                                            <td>{{$prorroga->fecha_solicitud}}</td>
                                            <td>{{ \Carbon\Carbon::parse($prorroga->created_at)->format('Y-m-d')}}</td>
                                            <td>{{ $prorroga->carne }}</td>
                                            <td>{{ \App\Estudiante::where(['carne' => $prorroga->carne])->pluck('nombres')->first() }}
                                                {{ \App\Estudiante::where(['carne' => $prorroga->carne])->pluck('apellidos')->first() }}
                                            </td>
                                            <td>{{$prorroga->estado}}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                                                    <button type="button" style="color:white;" class="btn btn-info notika-btn-info btn-reco-mg btn-button-mg" data-toggle="modal" data-target="#actualizar_prorroga_{{$loop->iteration}}"><span class="glyphicon glyphicon-check"></span> Aprobar/Rechazar</button>
                                                    <div class="modal fade" id="actualizar_prorroga_{{$loop->iteration}}" role="dialog" data-backdrop="static" data-keyboard="false">
                                                            <div class="modal-dialog modals-default">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    <h3>Actualización de prórroga</h3>
                                                                    <p>Estudiante:     {{ \App\Estudiante::where(['carne' => $prorroga->carne])->pluck('nombres')->first() }}
                                                                                        {{ \App\Estudiante::where(['carne' => $prorroga->carne])->pluck('apellidos')->first() }}
                                                                    </p>
                                                                    <br>
                                                                    <div class="modal-body">
                                                                        <form action="{{route('actualizar_prorroga', $prorroga->id)}}" method="POST">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <label for="carne">Carné <small style="color:#16D195;" >*</small></label>
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="notika-icon notika-edit"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input type="text" class="form-control" name="carne" value="{{$prorroga->carne}}" readonly>
                                                                                @foreach ($errors->get('carne') as $mensaje)
                                                                                <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                                @endforeach  
                                                                            </div>
                                                                        </div>
                        
                        
                                                                        <label for="fecha_solicitud">Fecha de solicitud<small style="color:#16D195;" >*</small></label>
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="form-ic-cmp">
                                                                                <i class="notika-icon notika-edit"></i>
                                                                            </div>
                                                                            <div class="nk-int-st">
                                                                                <input type="date" class="form-control" name="fecha_solicitud" value="{{$prorroga->fecha_solicitud}}" autofocus required>
                                                                                @foreach ($errors->get('fecha_solicitud') as $mensaje)
                                                                                <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                                @endforeach  
                                                                            </div>
                                                                        </div>

                                                                        <br>
                                                                        <label for="fecha_solicitud">Estado de prórroga: {{$prorroga->estado}}</label>
                                                                        <div class="form-group ic-cmp-int">
                                                                            <div class="nk-int-st">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="form-check-inline">
                                                                                        <label><input type="radio" {{ ($prorroga->estado == "Aprobada" ? "checked":"") }} class="i-checks iradio_square-green" name="estado" value="Aprobada" required> <i></i> Aprobada</label>
                                                                                    </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="form-check-inline">
                                                                                        <label><input type="radio" {{ ($prorroga->estado == "Rechazada" ? "checked":"") }} class="i-checks iradio_square-green" name="estado" value="Rechazada" required> <i></i> Rechazada</label>
                                                                                    </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="form-check-inline">
                                                                                        <label><input type="radio" {{ ($prorroga->estado == "Pendiente" ? "checked":"") }} class="i-checks iradio_square-green" name="estado" value="Pendiente" required> <i></i> Pendiente</label>
                                                                                    </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                        
                                                                        <div class="form-example-int mg-t-15" style="position:absolute; right:10%;">
                                                                        <button class="btn btn-success notika-btn-success">Actualizar prórroga</button>
                                                                        </div>
                                                                        </form>
                                                                        <br>
                                                                    </div>
                                                                    <br>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                </div>
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
    </div> <br><br><br>
@endsection