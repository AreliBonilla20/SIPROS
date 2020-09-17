<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificado de estudiante</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
         body {
            margin: 3cm 2cm 2cm;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 0cm;
            color: black;
            text-align: center;
            line-height: 30px;
        }

    </style>
       
</head>

<body>
     <header>
        <br>
        Universidad de El Salvador<br>
        Facultad de Ciencias Económicas<br>
        Unidad de Proyección Social<br>
        Teléfono:2521-0100 y 2521-0220<br>
        ________________________________________________________________________
    </header>
    <br><br><br>
    <h5>Certificación de sericio social</h5>
    <p>Para efectos legales y administrativos, la insfrascrita jefatura de Unidad de Proyección Social certfica que:</p>
    <br>
    <div class="row">
        
        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
            <div style="line-height:20px">
               Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$estudiante->nombres}} {{$estudiante->apellidos}}<br>
               
               Carne:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$estudiante->carne}}<br>
               
               Carrera:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$estudiante->carrera->nombre_carrera}}<br>

               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$estudiante->carrera->codigo}}<br>
            </div>
            

            <p>Ha cumplido({{$proyecto->horas_asignadas}}) horas sociales, legalmente establecidas en el Art.60 2° del Reglamento General de la Ley Organica de la Universidad de El Salvador, en el proyecto denominado:</p>

            <div style="line-height:20px">
              
                {{$proyecto->nombre_proyecto}}<br>

                {{$proyecto->area_de_conocimiento}}<br><br>

                Lugar:
                {{$proyecto->nombre_institucion}}<br>
                
                Fecha de inicio:{{$proyecto->fecha_inicio}}<br>

                Fecha de finalización:
                {{$proyecto->fecha_fin}}
            </div>
        </div>
    </div>
</body>
</html>                