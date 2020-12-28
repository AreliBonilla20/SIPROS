@extends('layout')
@section('title')
    Agregar aviso
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
										<h2>Administración de avisos</h2>
										<p>Ingrese los avisos a publicar en el sitio web</p>
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
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Aviso</h2>
                            <p>Complete los campos del formulario</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-wrap">
                                    <form action="{{route('sitio_aviso_post')}}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                       
                                    <label for="titulo">Título <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="far fa-newspaper"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="titulo" placeholder="Titulo del aviso" required value="{{old('titulo')}}">
                                            @foreach ($errors->get('titulo') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>

                                    <label for="descripcion">Descripcion <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="far fa-file-alt"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="descripcion" placeholder="Descripción del aviso" value="{{old('descripcion')}}">
                                            @foreach ($errors->get('descripcion') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                        </div>
                                    </div>
                                  
                                    <!--label for="imagen">Imágen <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="far fa-image"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <div class="col-md-6">
                                                <input type="file" class="form-control" name="imagen" accept="image/*">
                                            @foreach ($errors->get('imagen') as $mensaje)
                                            <small style="color:#B42020;">{{ $mensaje }}</small>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div!-->

                                   
                                        <div class="form-example-int mg-t-15">
                                            <button type="submit" class="btn btn-success notika-btn-success">Guardar aviso</button>
                                            <a class="btn btn-danger notika-btn-danger" href="{{route('sitio_avisos')}}">Cancelar</a>
                                        </div>
 
                                    </div>
                                    </form>
                                   
                                </div>
                            </div>
                        </div>
                    
                     
                </div>
            </div>
       
        
        </div>
    </div>
@endsection