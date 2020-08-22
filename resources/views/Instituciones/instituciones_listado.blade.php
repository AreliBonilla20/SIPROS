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
                                    <a href="{{route('reporte_instituciones')}}">
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
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Tipo</th>
                                        <th>Sector</th>
                                        <th>Región</th>
                                        <th>Departamento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($instituciones as $institucion)
                                        <tr>
                                            <td>{{$institucion->nombre}}</td>
                                            <td>{{$institucion->tipoInstitucion->tipo_institucion}}</td>
                                            <td>{{$institucion->sector->nombre_sector}}</td>
                                            <td>{{$institucion->region->nombre_region}}</td>
                                            <td>{{$institucion->departamento->nombre_departamento}}</td>
                                            <td>
                                            <a class="btn btn-default notika-btn-default" href="{{route('editar_institucion', $institucion->id)}}"><span class="glyphicon glyphicon-pencil"></span> </a>
                                            </td>
                                            <td>
                                            <a class="btn btn-warning notika-btn-warning" href=""><span class="glyphicon glyphicon-th-list"></span> Consultar</a>
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