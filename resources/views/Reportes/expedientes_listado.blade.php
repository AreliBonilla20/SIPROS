<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TABLA DE ESTUDIANTES INSCRITOS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
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
            background-color: #46C66B;
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
            background-color: #46C66B;
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
            <h5 style="text-align: left;"><strong>TABLA DE ESTUDIANTES INSCRITOS</strong></h5>
            <table class="table table-striped text-center" align="left">
                <thead>
                    <tr>
                        <th scope="col">Carne</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Carrera</th>
                    </tr>
                </thead>
               <tbody>
                @foreach($estudiantes as $estudiante)
                    <tr>
                        <th scope="row">{{ $estudiante->carne}}</th>
                        <td>{{ $estudiante->nombres }}</td>
                        <td>{{ $estudiante->apellidos }}</td>
                        <td>{{ \App\Carrera::where(['codigo' => $estudiante->codigo])->pluck('nombre_carrera')->first() }}</td>
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