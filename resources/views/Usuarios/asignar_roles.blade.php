@extends('layout_usuarios')
@section('title')
    Asignación de rol
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
                                    <h2>Asignación de rol</h2>
                                    <p>Asigne el rol que tendrá el usuario</p>
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
                    @if (session('actualizado'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>{{ session('actualizado') }}
                    </div>
                    @endif
                    <div class="basic-tb-hd">
                        <h2>Asignar rol</h2>
                        <p>Seleccione el rol correspondiente</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-example-wrap">
                                <form action="{{route('users.update', $user->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf

                                    <label for="name">Usuario <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" value="{{$user->name}}" class="form-control input-sm" name="name" id="name" placeholder="Nombre del usuario"  readonly>
                                        </div>
                                    </div>
                                    <label for="role_id" >Rol de usuario <small style="color:#16D195;" >*</small></label>
                                    <div class="form-example-int mg-t-15">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select class="selectpicker" data-live-search="true" name="role_id" id="role_id" >
                                                    <option value="">--Seleccione un rol-</option>
                                                    @foreach ($roles as $rol)
                                                    <option value="{{$rol->id}}">{{$rol->name}}</option>
                                                    @endforeach
                                                </select>
                                                @foreach ($errors->get('role_id') as $mensaje)
                                                <small style="color:#B42020;">{{ $mensaje }}</small>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                    <br><br><br>
                                    <div class="form-example-int mg-t-15">
                                        <button type="submit" class="btn btn-success notika-btn-success">Asignar rol</button>
                                        <a class="btn btn-danger notika-btn-danger" href="{{route('usuarios')}}">Cancelar</a>
                                    </div>
                                </form>
                                <br>

                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    @endsection
