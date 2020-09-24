<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Carta de asignación</title>
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
        <h5>Carta Asignación Servicio Social</h5>
        <h4>CARTA DE ASIGNACIÓN</h4>
    </div>
    <br>
    <div style="line-height: 0.3;">
        <p style="text-align:right">Ciudad Universitaria, {{$fecha}}</p><br>
        <p><strong>{{$proyecto->nombre_encargado}}</strong></p>
        <P>{{$proyecto->institucion->nombre}}</P>
        <p> <strong>Presente:</strong> </p><br>
    </div>
    
    <p>Reciba un fraternal saludo, esperando que las gestiones que realiza, sean tal cual como fueron proyectadas;
    de acuerdo a la solicitud de apoyo al proyecto:</p>

    <div style="line-height: 0.3; padding-left:5%;">
       <p>ÁREA: <strong>{{$proyecto->area_de_conocimiento}}</strong></p> 
       <p>NOMBRE DEL PROYECTO: <strong>{{$proyecto->nombre}}</strong></p> 
    </div>
    <br>
    <p>Se le asigna en servicio social</p>

    <div style="line-height: 0.3;padding-left:5%;">
        <p>CARNET: <strong>{{$estudiante->carne}}</strong> </p>
        <p>NOMBRE: <strong>{{$estudiante->nombres}}, {{$estudiante->apellidos}}</strong> </p>
        <p>CARRERA: <strong>{{$estudiante->carrera->nombre_carrera}}</strong> </p>
    </div>

    <div>En beneficio de su institución {{$proyecto->institucion->nombre}}</div>
    <br>
    <p>La evaluación y asignación de las horas sociales, será llevada a cabo por la Unidad de Proyección Social</p>
    <br><br>
    <div style="text-align:center; line-height: 0.3;">
        <p>_____________________________</p>
        <p> <strong> CARMEN ISABEL RIVAS VÁSQUEZ</p> </strong>
        <p>Coordinador</p>
    </div>
</body>
</html>