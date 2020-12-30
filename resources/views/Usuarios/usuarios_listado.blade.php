@extends('layout_usuarios')
@section('title')
    Listado de usuarios
@endsection
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
                    </div> <br>
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
                                    <th>Asignar rol</th>

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
                                    <td>@if ($usuario->nombre_rol())
                                            {{$usuario->nombre_rol()}}
                                        @else
                                            <strong>Rol no asignado</strong>
                                        @endif
                                    </td>
                                    <td>
                                        <button type="button" style="color:white;" class="btn btn-info notika-btn-info btn-reco-mg btn-button-mg" data-toggle="modal" data-target="#actualizar_prorroga_{{$loop->iteration}}"><span class="glyphicon glyphicon-check"></span> Asignar rol</button>

                                        <div class="modal fade" id="actualizar_prorroga_{{$loop->iteration}}" role="dialog">
                                            <div class="modal-dialog modals-default">
                                                <div class="modal-content">
                                                    <form action="{{route('users.update', $usuario->id)}}" method="POST">
                                                        @method('PUT')
                                                        @csrf
                                        
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <h4 class="text-center">Asignación de rol.</h4>
                                                        <p>Asigne el rol que tendrá el usuario.</p>


                                                        <div class="modal-body">
                                                            <label for="name">Usuario <small style="color:#16D195;" >*</small></label>
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="notika-icon notika-support"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" value="{{$usuario->name}}" class="form-control input-sm" name="name" id="name" placeholder="Nombre del usuario"  readonly>
                                                                </div>
                                                            </div>
                                                            <label for="role_id" >Rol de usuario <small style="color:#16D195;" >*</small></label>
                                                            <div class="form-example-int mg-t-15">
                                                                <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="bootstrap-select fm-cmp-mg">
                                                                        <select class="selectpicker" data-live-search="true" name="role_id" id="role_id" >
                                                                            <option value="">--Seleccione un rol-</option>
                                                                            @foreach ($roles as $rol)
                                                                            <option value="{{$rol->id}}" {{ $rol->id == $usuario->id_rol() ? "selected" : "" }}>{{$rol->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        @foreach ($errors->get('role_id') as $mensaje)
                                                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br><br><br>
                                                        </div>

                                                        <br><br>
                                                        <div class="modal-footer">
                                                            <button data-toggle="tooltip" data-placement="left"
                                                                class="btn btn-default"><i class="notika-icon notika-form"></i> Guardar asignación</button>
                                                        </div>
                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

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
