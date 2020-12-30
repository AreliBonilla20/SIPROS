@extends('layout_usuarios')
@section('title')
    Listado de roles
@endsection
@section('content')
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
                                <h2>Nuevo rol</h2>
                                <p>Agregar un nuevo rol</p>
                                <div class="form-example-int mg-t-15">
                                    <a href="{{ route('crear_rol') }}"><button class="btn btn-success notika-btn-success">Agregar</button></a>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
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
										<h2>Roles</h2>
										<p>Listado de roles</p>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="data-table-basic" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>ID</th>
                                                <th>Nombre</th>                                      
                                                <th>Descripción</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($roles as $rol)
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>{{$rol->id}}</td>
                                                    <td>{{$rol->name}}</td>                                           
                                                    <td>{{$rol->slug}}</td> 

                                                    <td>
                                                    <a class="btn btn-default notika-btn-default" href="{{ route('editar_rol', $rol->id) }}"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
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
		</div>
    </div>
<br><br><br><br><br><br><br>

@endsection