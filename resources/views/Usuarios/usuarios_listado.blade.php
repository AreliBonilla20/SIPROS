@extends('layout_usuarios')

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
										<h2>Usuarios</h2>
										<p>Listado de usuarios</p>
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
                                <h2>Nuevo usuario</h2>
                                <p>Agregar un nuevo usuario</p>
                                <div class="form-example-int mg-t-15">
                                    <a href="{{ route('crear_usuario') }}"><button class="btn btn-success notika-btn-success">Agregar</button></a>
                                </div>
                            </div>
                        </div> <br><br><br>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Correo electrónico</th>
                                        <th>Rol</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $usuario)
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>{{$usuario->id}}</td>
                                            <td>{{$usuario->name}}</td>
                                            <td>{{$usuario->email}}</td>
                                            <td>
                                            <a onmouseover="this.style.background=' #73D6E3';" onmouseout="this.style.background=' #0FB5CC';" 
                                            style="color:white;" href="{{ route('users.edit', $usuario->id) }}" class="btn notika-btn-cyan"><span style="color:white;" class="glyphicon glyphicon-list-alt"></span>  Asignar rol</a>
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

@endsection