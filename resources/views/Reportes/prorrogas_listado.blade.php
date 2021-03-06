<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Tabla de estudiantes inscritos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>

<body>
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
    <main>
        <div>
            <h5 style="text-align: center;"><strong>TABLA DE PRÓRROGAS</strong></h5>
            <table class="table table-striped" align="justify">
                <thead class="table-dark">
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
</body>
</html>
