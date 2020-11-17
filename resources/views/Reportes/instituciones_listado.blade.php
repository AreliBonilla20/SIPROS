<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Tabla de estudiantes inscritos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <header style="padding:5%; font-family:Arial, Helvetica, sans-serif; mrgin:5%; text-align:justify;" >
            <div style="text-align:center; line-height: 0.1;">
                <p>UNIVERSIDAD DE EL SALVADOR</p> 
                <p>FACULTAD DE CIENCIAS ECONÓMICAS</p>
                <p>UNIDAD DE PROYECCIÓN SOCIAL</p>
                <p>Teléfono: 2521-0100 y 2521-0220</p>
            </div>
    
            <img style="position:absolute; top:1%; right:20%;"src="{{public_path('assets/img/logo-fce-v1-mixto.png') }}" height="100px">
            <img style="position:absolute; top:1%; left:5%;"src="{{public_path('assets/img/minerva2.jpg') }}" height="100px">
            <hr>
        </header>
    </header>
    <main>
        <div>
            <h5 style="text-align: center"><strong>TABLA DE INSTITUCIONES</strong></h5>
            <table class="table table-striped" align="justify">
                <thead class="table-dark">
                    <tr>
                         <th scope="col"c>#</th>
                         <th scope="col">Nombre</th>
                         <th scope="col">Tipo</th>
                         <th scope="col">Sector</th>
                         <th scope="col">Dirección</th>
                         <th scope="col">Región</th>
                         <th scope="col">Departamento</th>
                         <th scope="col">Municipio</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($instituciones as $institucion)
                    <tr>
                        <td scope="row">{{$institucion->id}}</td>
                        <td>{{$institucion->nombre}}</td>
                        <td>{{ \App\TipoInstitucion::where(['id' => $institucion->tipo_institucion_id])->pluck('tipo_institucion')->first() }}</td>
                        <td>{{ \App\Sector::where(['id' => $institucion->sector_id])->pluck('nombre_sector')->first() }}</td>
                        <td>{{$institucion->direccion}}</td>
                        <td>{{ \App\Region::where(['id' => $institucion->id_region])->pluck('nombre_region')->first() }}</td>
                        <td>{{ \App\Departamento::where(['id' => $institucion->id_departamento])->pluck('nombre_departamento')->first() }}</td>
                        <td>{{ \App\Municipio::where(['id' => $institucion->id_municipio])->pluck('nombre_municipio')->first() }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>                