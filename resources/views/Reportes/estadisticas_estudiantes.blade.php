<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Reporte estadístico de estudiantes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    

</head>
<style>
    *{
        font-size: 13px;
        font-family: Arial, Helvetica, sans-serif;
    }

</style>
<body style="font-family:Arial, Helvetica, sans-serif;">
    <header style="padding:5%; text-align:justify;" >
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
        
        <div style="display:flex; flex-direction: column; align-items:center; text-align:center;" >
            
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h5><strong>REPORTE ESTADÍSTICO DE ESTUDIANTES</strong></h5>
                <p>Datos calculados hasta el {{$fecha_actual}}</p>
                <br>
                <h5><strong>Datos generales</strong></h5>
                <div class="normal-table-list mg-t-30">
                    
                        <table class="table table-striped font-table" style="text-align:center;">
                            <thead class="table-dark">
                            <tr>
                            <th scope="col">Servicio iniciado</th>
                            <th scope="col">Servicio no iniciado</th>
                            <th scope="col">Servicio terminado</th>
                            <th scope="col">Total inscritos</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td>{{$estudiantes_servicio_iniciado}}</td>
                                <td>{{$estudiantes_servicio_no_iniciado}}</td>
                                <td>{{$estudiantes_servicio_terminado}}</td>
                                <td>{{$estudiantes_inscritos}}</td>
                            </tr>
                        
                            </tbody>
                        </table>
   
                <h5><strong>Estudiantes por género</strong></h5><br><br>
              
                <img alt="" src="{{$url_grafico_generos}}" width="90%;" >
                <h5><strong>Tabla de estudiantes por género</strong></h5>
                    <div class="normal-table-list mg-t-20">
                    
                        <table class="table table-striped font-table" style="text-align:center;">
                            <thead class="table-dark">
                            <tr>
                            <th scope="col">Género</th>
                            <th scope="col">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($estudiantes_genero as $eg)
                            <tr>
                                <td>{{$eg->sexo}}</td>
                                <td>{{$eg->porcentaje}}</td>
                            </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            <div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

            <div style="display:flex; flex-direction: column; align-items:center; text-align:center;" >
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
                <h5><strong>Estudiantes por carrera</strong></h5><br><br><br>
                <img alt="" src="{{$url_grafico_carreras}}" width="90%;">
                <h5><strong>Tabla de estudiantes por carrera</strong></h5>
                    <div class="normal-table-list mg-t-30">
                        
                        <table class="table table-striped">
                            <thead class="table-dark">
                            <tr>
                            <th scope="col">Carrera</th>
                            <th scope="col">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($estudiantes_carrera as $ec)
                            <tr>
                                <td>{{$ec->nombre_carrera}}</td>
                                <td>{{$ec->cantidad}}</td>
                            </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
    </main>
</body>
</html>                