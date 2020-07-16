@extends('layout_usuarios')

@section('content')

<div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
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
                                 
   
                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                                <label><strong>Usuario</strong></label>
                                                <div class="nk-int-st">
                                                <input type="text" value="{{$user->name}}" class="form-control input-sm" name="name" id="name" placeholder="Nombre del usuario" required readonly>
                                                </div>
                                            </div>
                                        </div>

                                       

                                        <div class="form-example-int mg-t-15">
                                            <div class="form-group">
                                                <label for="role_id"><strong>Rol de usuario</strong></label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true" name="role_id" id="role_id" required>
                                                        @foreach ($roles as $rol)
                                                            <option value="{{$rol->id}}">{{$rol->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <br><br><br>                         
                                        <div class="form-example-int mg-t-15">
                                            <button type="submit" class="btn btn-success notika-btn-success">Guardar</button>
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
<br><br><br><br><br><br><br><br><br><br>
@endsection