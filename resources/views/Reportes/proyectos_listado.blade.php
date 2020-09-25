<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TABLA DE PROYECTOS</title>
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
            <table class="table table-striped text-center" align="right">
                <thead>
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
    <footer>
        <p><strong>Universidad de El Salvador</strong></p>
    </footer>
</body>
</html>                