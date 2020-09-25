<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Certificación de servicio social</title>
</head>

<body style="padding:5%; font-family:Arial, Helvetica, sans-serif; mrgin:5%; text-align:justify;" >
    <div style="text-align:center; line-height: 0.1;">
        <h4>UNIVERSIDAD DE EL SALVADOR</h4> 
        <h5>FACULTAD DE CIENCIAS ECONÓMICAS</h5>
        <h5>UNIDAD DE PROYECCIÓN SOCIAL</h5>
        <p>Teléfono: 2521-0100 y 2521-0220</p>
        <hr>
    </div>
    <img style="position:absolute; top:6%; right:20%;"src="{{public_path('assets/img/logo-fce-v1-mixto.png') }}" height="100px">
    <div style="text-align:center;">
        <h4>Certificación de servicio social</h4>   
    </div>

    <p>Para efectos legales y administrativos, la infrascrita jefatura de unidad de proyección social certifica que: </p> 
    <div style="line-height: 0.3;padding-left:5%;">
        <p>NOMBRE: <strong>{{$estudiante->nombres}}, {{$estudiante->apellidos}}</strong> </p>
        <p>CARNET: <strong>{{$estudiante->carne}}</strong> </p>
        <p>CARRERA: <strong>{{$estudiante->carrera->codigo}} - {{$estudiante->carrera->nombre_carrera}}</strong> </p>
    </div>
    <p>Ha cumplido <strong> ({{$proyecto->horas_completadas}})</strong> horas sociales, legalmente establecidas en el Art. 60 2° del Reglamento General De La Ley Orgánica
       de la Universidad de El Salvador, en el proyecto denominado :</p>
    <br>
       <div style="line-height: 0.3;padding-left:5%; text-align:center;">
        <p><strong>{{$proyecto->nombre_proyecto}}</strong></p>
        <p>Apoyo en el área de {{$proyecto->area_de_conocimiento}}</p><br>
    </div>

    <div style="line-height: 0.3;">
        <p>INSTITUCIÓN: <strong>{{$proyecto->nombre_institucion}}</strong></p>
        <p>FECHA DE INICIO : <strong>{{$fecha_inicio}}</strong></p>
        <p>FECHA DE FINALIZACIÓN: <strong>{{$fecha_fin}}</strong></p>
    </div>
    

    <br>
    <p>Se extiende la presente en {{$fecha_actual}}</p>
    <p>Es conforme: </p>
    <div style="text-align:center; line-height: 0.3;">
        <p>_____________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  _____________________________ </p>
        <p> <strong>  MARVIN WILFREDO CRESPIN ELIAS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CARMEN ISABEL RIVAS VÁSQUEZ</p> </strong>
        <p>Vice-decano &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jefe servicio social</p>
    </div>
</body>
</html>