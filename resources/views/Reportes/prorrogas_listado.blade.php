<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listado de prórrogas</title>
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
            background-color: #00BCD4;
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
            background-color: #00BCD4;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>

<body>
    <header>
        <br>
        <p><strong>Departamento de Proyección Social. Facultad de Ciencias Económicas.</strong></p>
    </header>
    <main>
        <div class="container">
            <h5 style="text-align: center;"><strong>TABLA DE PRÓRROGAS</strong></h5>
            <table class="table table-striped text-center" align="left" style="font-size:90%">
                <thead>
                    <tr>
                        <th scope="col">Fecha de solicitud</th>
                        <th scope="col">Fecha de inscripción</th>
                        <th scope="col">Carnet</th>
                        <th scope="col">Estudiante</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
               <tbody>
                @foreach($prorrogas as $prorroga)
                    <tr>
                        <td>{{ $prorroga->fecha_solicitud }}</th>
                        <td>{{ \Carbon\Carbon::parse($prorroga->created_at)->format('Y-m-d')}}</td>
                        <td>{{$prorroga->carne}}</td>
                        <td>                            
                            {{ \App\Estudiante::where(['carne' => $prorroga->carne])->pluck('nombres')->first() }}
                            {{ \App\Estudiante::where(['carne' => $prorroga->carne])->pluck('apellidos')->first() }}
                        </td>
                        <td>{{ $prorroga->estado }}</td>
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
