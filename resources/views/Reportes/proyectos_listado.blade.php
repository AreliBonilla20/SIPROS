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
            <h5 style="text-align: center"><strong>TABLA DE PROYECTOS</strong></h5>
            <table class="table table-striped" align="justify">
                <thead class="table-dark">
                    <tr>
                         <th scope="col"c>N°</th>
                         <th scope="col">Nombre</th>
                         <th scope="col">Área de conocimiento</th>
                         <th scope="col">Objetivos</th>
                         <th scope="col">Logros</th>
                         <th scope="col">Institución</th>
                         <th scope="col">Cantidad de estudiantes</th>
                         <th scope="col">Encargado</th>
                         <th scope="col">Correo</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($proyectos as $proyecto)
                    <tr>
                     <td>{{$proyecto->id}}</td>
                     <td>{{$proyecto->nombre}}</td>
                     <td>{{$proyecto->area_de_conocimiento}}</td>
                     <td>{{$proyecto->objetivos}}</td>
                     <td>{{$proyecto->logros}}</td>
                     <td>{{$proyecto->institucion->nombre}}</td>
                     <td>{{$proyecto->cantidad_de_estudiantes}}</td>
                     <td>{{$proyecto->nombre_encargado}}</td>
                     <td>{{$proyecto->email}}</td>
                 </tr>
                @endforeach
            </tbody>    
            </table>
        </div>
    </main>

</body>
</html>                