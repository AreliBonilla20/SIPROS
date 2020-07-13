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
                                <h2>Nueva institución</h2>
                                <p>Agregar una nueva institución</p>
                                <div class="form-example-int mg-t-15">
                                    <a href="{{ route('crearInstitucion') }}"><button class="btn btn-success notika-btn-success">Agregar</button></a>
                                </div>
                            </div>
                        </div> <br><br><br>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        {{-- <th>ID</th> --}}
                                        <th>Nombre</th>
                                        <th>Tipo</th>
                                        <th>Dirección</th>
                                        <th>Región</th>
                                        <th>Departamento</th>
                                        <th>Municipio</th>
                                        <th>Sector</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($instituciones as $institucion)
                                        <tr>
                                            {{-- <td>{{$institucion->id}}</td> --}}
                                            <td>{{$institucion->nombre}}</td>
                                            <td>{{ \App\TipoInstitucion::where(['id' => $institucion->tipo_institucion_id])->pluck('tipoInstitucion')->first() }}</td>
                                            <td>{{$institucion->direccion}}</td>
                                            <td>{{ \App\Region::where(['id' => $institucion->id_region])->pluck('nombre_region')->first() }}</td>
                                            <td>{{ \App\Departamento::where(['id' => $institucion->id_departamento])->pluck('nombre_departamento')->first() }}</td>
                                            <td>{{ \App\Municipio::where(['id' => $institucion->id_municipio])->pluck('nombre_municipio')->first() }}</td>
                                            <td>{{ \App\Sector::where(['id' => $institucion->sector_id])->pluck('nombreSector')->first() }}</td>
                                            <td>
                                                <a href="{{route('editarInstitucion', $institucion->id)}}" class="btn btn-warning">Editar</a>
                                                {{-- <form action="{{route('eliminarInstitucion', $institucion->id)}}" class="d-inline" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        {{-- <th>ID</th> --}}
                                        <th>Nombre</th>
                                        <th>Tipo</th>
                                        <th>Dirección</th>
                                        <th>Región</th>
                                        <th>Departamento</th>
                                        <th>Municipio</th>
                                        <th>Sector</th>
                                        <th>Acción</th>
                                    </tr>
                                </tfoot>
                            </table>
                            @if (session('eliminada'))
                                <div class="alert alert-success mt-3">
                                    {{session('eliminada')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection