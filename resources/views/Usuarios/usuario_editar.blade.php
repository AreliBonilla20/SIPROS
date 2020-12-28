@extends('layout_usuarios')
@section('title')
    Editar usuario: {{$usuario->name}}
@endsection
@section('content')
<div class="form-element-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd">
                        <h2>Usuario</h2>
                        <p>Complete los campos del formulario</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-example-wrap">
                                <form action="{{route('actualizar_usuario', $usuario->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf

                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Nombre</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" value="{{$usuario->name}}" class="form-control input-sm" name="name" id="name" placeholder="Nombre del usuario" value="{{old('name')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Correo electrónico</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" value="{{$usuario->email}}" class="form-control input-sm" name="email" id="email" placeholder="Correo electrónico del usuario" value="{{old('email')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label><strong>Contraseña</strong></label>
                                            <div class="nk-int-st">
                                                <input type="text" value="{{$usuario->password}}" class="form-control input-sm" name="password" id="password" placeholder="Contraseña del usuario" value="{{old('password')}}" required>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-example-int mg-t-15">
                                        <button type="submit" class="btn btn-success notika-btn-success">Actualizar</button>
                                        <a class="btn btn-danger notika-btn-danger" href="{{route('usuarios')}}">Regresar</a>
                                    </div>
                                </form>
                                <br>
                                @if (session('actualizado'))
                                <div class="alert alert-success mt-3">
                                    {{ session('actualizado') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
    <br><br><br><br><br><br><br>
    @endsection
