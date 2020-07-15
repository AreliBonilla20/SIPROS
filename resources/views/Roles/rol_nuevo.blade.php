@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro de nuevo rol</div>


                    <form class="form-horizontal" action="{{ route('roles.store') }}" id="frmnuevorol" name="frmnuevorol" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Nombre de rol</label>
                                        <input type="text"  class="form-control  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nombre del rol" required>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="slug">Slug(identificador del rol)</label>
                                        <input type="text"  class="form-control  @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="xxxx.xxxx" required>
                                        @if ($errors->has('slug'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('slug') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="description">Descripción del rol</label>
                                        <textarea type="text"  class="form-control  @error('description') is-invalid @enderror" id="description" name="description" placeholder="Ingrese la descripción" required></textarea>
                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <h4>Permisos especiales</h4>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="special" value="all-access">Acceso Total
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="special" value="no-access">Ningun Acceso
                                        </label>
                                    </div>
                            
                                    <hr>
                                    <h4>Lista de Permisos</h4>
                                    
                                    <div id="permissions-group" class="form-group">
                                        <ul id="permissions" class="list-group-item scrollbar">
                                            @foreach ($permissions as $permission)
                                            <li>
                                                    <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" name="permissions[]" value="{{ $permission->id }}"><spam class="font-weight-bold">{{ $permission->name }}  </spam>
                                                              <em>{{  $permission->description ?: 'N/A' }}</em>
                                                    </label>
                                            </li>
                                            @endforeach
                
                                        </ul>
                                    </div>

            
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Guardar nuevo Rol</button>
                        </div>
                    </form>

            </div>
        </div>
    </div>
</div>
@endsection
