<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TABLA DE INSTITUCIONES</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
            position: left;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #F93855;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #F93855;
            color: white;
            text-align: center;
            line-height: 35px;
        }

   </style>
    

</head>
<body>
    <header>
        <br>
        <p><strong>Unidad de Proyección Facultad de Ciencias Economicas</strong></p>
    </header>
    <main>
        <div class="container">
            <h5 style="text-align: center"><strong>TABLA DE PROYECTOS</strong></h5>
            <table class="table table-striped text-center">
                <thead>
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
    <footer>
        <p><strong>Universidad de El Salvador</strong></p>
    </footer>
</body>
</html>                