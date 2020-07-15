@extends('layout_usuarios')

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
                                    <a href="{{ url('rol_nuevo') }}"><button class="btn btn-success notika-btn-success">Agregar</button></a>
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
                                                <th>ID</th>
                                                <th>Nombre</th>                                      
                                                <th>Editar</th>
                                                <th>Suspender</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($roles as $rol)
                                                <tr>
                                                    <td></td>
                                                    <td>{{$rol->id}}</td>
                                                    <td>{{$rol->name}}</td>                                           
                                                    <td><a href=""><button class="btn btn-warning notika-btn-warning">Editar</button></a></td>
                                                    <td><a href=""><button class="btn btn-danger notika-btn-danger">Suspender</button></a></td>
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
<<<<<<< HEAD
<br><br><br><br>
=======
    
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
                                    <a href="{{ url('roles/create') }}"><button class="btn btn-success notika-btn-success">Agregar</button></a>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
>>>>>>> b0bf36a12d45018b0f1bccffe3894f2682044f4b

@endsection