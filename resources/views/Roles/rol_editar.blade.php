@extends('layout_usuarios')
@section('title')
    Editar rol: {{$rolActualizar->name}}
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
										<h2>Edición de rol</h2>
										<p>Ingrese los datos que desea modificar del rol</p>
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
                    @if (session('actualizado'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>{{ session('actualizado') }}

                    </div>
                    @endif
                    <div class="basic-tb-hd">
                            <h2>Editar rol {{$rolActualizar->name}}</h2>
                            <p>Complete los campos del formulario</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-wrap">
                                <form action="{{route('actualizar_rol', $rolActualizar->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf


                                        <label for="name">Nombre del rol <small style="color:#16D195;" >*</small></label>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm  @error('name') is-invalid @enderror" id="name" value="{{$rolActualizar->name}}" name="name" placeholder="Nombre del rol" >
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
                                            <input type="text" class="form-control" value="{{$rolActualizar->slug}}" id="slug" name="slug" placeholder="Identificador del rol" >
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
                                            <input type="text"  class="form-control" value="{{$rolActualizar->description}}" id="description" name="description" placeholder="Ingrese la descripción" ></textarea>
                                                @foreach ($errors->get('description') as $mensaje)
                                                    <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach
                                            </div>
                                        </div>


                                        <div class="floating-numner form-rlt-mg">
                                            <p><strong>Permisos especiales</strong></p>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="i-checks" name="special" value="all-access" {{  ($rolActualizar->special == 'all-access' ? ' checked' : '') }}>Acceso Total
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="i-checks" name="special" value="no-access" {{  ($rolActualizar->special == 'no-access' ? ' checked' : '') }}>Ningun Acceso
                                        </label>
                                    </div>
                                    <br>
                                    <hr>
                                    <h4>Lista de Permisos</h4>

                                    @for($i=0; $i<count($permissions); $i++)
                                            <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="fm-checkbox">
                                            <label><input type="checkbox" class="i-checks" name="permissions[]" value="{{ $permissions[$i]->id }}" {{  ($permissions[$i]->id == $permisos[$i] ? ' checked' : '') }}><strong>{{ $permissions[$i]->name }} : </strong> {{  $permissions[$i]->description ?: 'N/A' }}</label>
                                            
                                            </div>
                                            </div>
                                            </div>
                                    @endfor
                                    <br>
                                    <button type="submit" class="btn btn-success notika-btn-success">Actualizar rol</button>
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

