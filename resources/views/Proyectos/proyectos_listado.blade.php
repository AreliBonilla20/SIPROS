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
										<h2>Proyectos</h2>
										<p>Listado de proyectos</p>
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
                                <h2>Nuevo proyecto</h2>
                                <p>Agregar un nuevo proyecto</p>
                                <div class="form-example-int mg-t-15">
                                    <a href="{{ route('crear_proyecto') }}"><button class="btn btn-success notika-btn-success">Agregar</button></a>
                                </div>
                            </div>
                        </div> <br><br><br>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Área de conocimiento</th>
                                        <th>Objetivos</th>
                                        <th>Logros</th>
                                        <th>Institución</th>
                                        <th>Cantidad de estudiantes</th>
                                        <th>Encargado</th>
                                        <th>Teléfono</th>
                                        <th>Correo electrónico</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proyectos as $proyecto)
                                        <tr>
                                            {{-- <td>{{$institucion->id}}</td> --}}
                                            <td>{{$proyecto->nombre}}</td>
                                            <td>{{$proyecto->area_de_conocimiento}}</td>
                                            <td>{{$proyecto->objetivos}}</td>
                                            <td>{{$proyecto->logros}}</td>
                                            <td>{{$proyecto->institucion->nombre}}</td>
                                            <td>{{$proyecto->cantidad_de_estudiantes}}</td>
                                            <td>{{$proyecto->nombre_encargado}}</td>
                                            <td>{{$proyecto->telefono}}</td>
                                            <td>{{$proyecto->email}}</td>

                                            <td>
                                                <a href="{{route('editar_proyecto', $proyecto->id)}}" class="btn btn-warning notika-btn-warning">Editar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Área de conocimiento</th>
                                        <th>Objetivos</th>
                                        <th>Logros</th>
                                        <th>Institución</th>
                                        <th>Cantidad de estudiantes</th>
                                        <th>Encargado</th>
                                        <th>Teléfono</th>
                                        <th>Correo electrónico</th>
                                        <th>Acción</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection