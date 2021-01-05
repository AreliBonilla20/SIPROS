@extends('layout')
@section('title')
    Roles
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                    Roles
                    @can('roles.create')
                    <a href="{{ route('roles.create') }}"
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>

                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>NombresASas</th>
                                <th colspan="5">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    @can('roles.show')
                                    <a href="{{ route('roles.show', $role->id) }}"
                                        class="btn btn-sm btn-default">
                                        Ver
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('roles.edit')
                                    <a href="{{ route('roles.edit', $role->id) }}"
                                        class="btn btn-sm btn-default">
                                        Ver
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('roles.destroy')
                                    <a href="{{ route('roles.destroy', $role->id) }}"
                                        class="btn btn-sm btn-danger">
                                        Ver
                                    </a>
                                    @endcan
                                </td>
                            </tr>
                                
                            @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection