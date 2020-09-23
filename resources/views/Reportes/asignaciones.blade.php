<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body style="padding:5%; font-family:Arial, Helvetica, sans-serif; mrgin:5%; text-align:justify;" >
    <div style="text-align:center; line-height: 0.1;">
        <h3>UNIVERSIDAD DE EL SALVADOR</h3> 
        <h4>FACULTAD DE CIENCIAS ECONÓMICAS</h4>
        <h4>UNIDAD DE PROYECCIÓN SOCIAL</h4>
        <p>Teléfono: 2521-0100 y 2521-0220</p>
        <hr>
    </div>
    <div style="text-align:center;">
        <h5>Carta Asignación Servicio Social</h5>
        <h3>CARTA ASIGNACIÓN</h3>
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

    <div style="line-height: 0.3;">
       <p>ÁREA: {{$proyecto->area_de_conocimiento}}</p> 
       <p>NOMBRE DEL PROYECTO: {{$proyecto->nombre}}</p> 
    </div>
    <br>
    <p>Se le asigna en servicio social</p>

    <div style="line-height: 0.3;">
        <p>CARNET: {{$estudiante->carne}} </p>
        <p>NOMBRE: {{$estudiante->nombres}}, {{$estudiante->apellidos}} </p>
        <p>CARRERA: {{$estudiante->carrera->nombre_carrera}} </p>
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