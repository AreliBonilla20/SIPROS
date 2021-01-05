@extends('layout_usuarios')
@section('title')
    Agregar rol
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
										<h2>Registro de rol</h2>
										<p>Ingrese los datos y permisos que contendrá el rol</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                    @if (session('agregado'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>{{ session('agregado') }}

                    </div>
                    @endif
                        <div class="basic-tb-hd">
                            <h2>Rol</h2>
                            <p>Complete los campos del formulario</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-wrap">
                                    <form action="{{route('guardar_rol')}}" method="POST" enctype="multipart/form-data">
                                        @csrf


                                        <label for="name">Nombre del rol <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nombre del rol" value="{{old('name')}}">
                                                @foreach ($errors->get('name') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>

                                        <label for="slug">Slug o identificador del rol <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm  @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="Identificador del rol" value="{{old('slug')}}">
                                                @foreach ($errors->get('slug') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>

                                        <label for="description">Descripción del rol <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                            <input type="text"  class="form-control input-sm @error('description') is-invalid @enderror" id="description" name="description" placeholder="Ingrese la descripción" value="{{old('description')}}"></textarea>
                                                @foreach ($errors->get('description') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>


                                        <div class="floating-numner form-rlt-mg">
                                            <p><strong>Permisos especiales</strong></p>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="i-checks" name="special" value="all-access">Acceso Total
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="i-checks" name="special" value="no-access">Ningun Acceso
                                        </label>
                                    </div>
                                    <br>
                                    <hr>
                                    <h4>Lista de Permisos</h4>
                                    
                                    
                                            @foreach ($permissions as $permission)
                                            
                                            <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="fm-checkbox">
                                            <label><input type="checkbox" class="i-checks" name="permissions[]" value="{{ $permission->id }}"> <i></i>  <strong>{{ $permission->name }} : </strong> {{  $permission->description ?: 'N/A' }}</label>
                                            </div>
                                            </div>
                                            </div>
                                            @endforeach
                
                                    

                                    <button type="submit" class="btn btn-success notika-btn-success">Guardar</button>
                                    <a class="btn btn-danger notika-btn-danger" href="{{route('roles')}}">Cancelar</a>
                                    </form>
                            </div>
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
@endsection
