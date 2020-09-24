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
        UNIVERSIDAD DE EL SALVADOR<br>
        FACULTAD DE CIENCIAS ECONÓMICAS<br>
        UNIDAD DE PROYECCIÓN SOCIAL<br>
        Teléfono:2521-0100 y 2521-0220<br>
        ________________________________________________________________________
    </header>
    <br><br><br>
    <h5>CERTIFICACIÓN DE SERVICIO SOCIAL</h5>
    <p>PARA EFECTOS LEGALES Y ADMINISTRATIVOS, LA INFRASCRITA JEFATURA DE UNIDAD DE PROYECCIÓN SOCIAL CERTIFICA QUE:</p>
    <br>
    <div class="row">
        
        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
            <div style="line-height:20px">
                <font style="text-transform: uppercase;">
                  NOMBRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$estudiante->nombres}} {{$estudiante->apellidos}}<br>
               
                  CARNE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$estudiante->carne}}<br>
               
                 CARRERA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$estudiante->carrera->nombre_carrera}}<br>

                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$estudiante->carrera->codigo}}<br> 
                </font>
            </div>
            <br>

            <p>HA CUMPLIDO({{$proyecto->horas_asignadas}}) HORAS SOCIALES, LEGALMENTE ESTABLECIDAS EN EL ART.60 2° DEL REGLAMENTO GENERAL DE LA LEY ORGANICA DE LA UNIVERSIDAD DE EL SALVADOR, EN EL PROYECTO DENOMINADO:</p>

            <div style="line-height:20px">
                <div style="width: 500;height: 500px; position: relative;">
                   <div style="position: absolute; left: 150px;">
                        <font style="text-transform: uppercase;">
                            {{$proyecto->nombre_proyecto}}<br>
                            {{$proyecto->area_de_conocimiento}}<br><br> 
                        </font>
                    </div> 

                    <div style="position: absolute;left: 200px;top: 60px;">
                        <font style="text-transform: uppercase;">
                            {{$proyecto->nombre_institucion}}<br>
                            {{$fecha_inicio}}<br>
                            {{$fecha_fin}}  
                        </font>
                    </div>

                    <div>
                        <br><br><br>
                        LUGAR:<br>
                        FECHA DE INICIO:<br>
                        FECHA DE FINALIZACIÓN:<br>
                    </div>
                    <br>
                    <p style="text-transform: uppercase;">SE EXTIENDE LA PRESENTE EN {{$fecha_actual}}</p><br>
                    <p>ES CONFORME.</p><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________<br>
                    MARVIN WILFREDO CRESPIN ELIAS&nbsp;&nbsp;&nbsp;&nbsp;CARMEN ISABEL RIVAS VASQUEZ<br>
                </div>        
            </div>
        </div>
    </div>
</body>
</html>                