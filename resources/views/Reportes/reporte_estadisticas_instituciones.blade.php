<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Reporte estadístico de instituciones</title>
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
                <h5><strong>REPORTE ESTADÍSTICO DE INSTITUCIONES</strong></h5>
                <p>Del {{$fecha_inicio}} al {{$fecha_final}}</p>
                <br>
                <h5><strong>Datos generales</strong></h5>
                <div class="normal-table-list mg-t-30">
                    
                        <table class="table table-striped font-table" style="text-align:center;">
                            <thead class="table-dark">
                            <tr>
                            <th scope="col">Con proyectos disponibles</th>
                            <th scope="col">Sin proyectos disponibles</th>
                            <th scope="col">Sin proyectos</th>
                            <th scope="col">Total de instituciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td>{{$instituciones_activas}}</td>
                                <td>{{$instituciones_inactivas}}</td>
                                <td>{{$instituciones_sin_proyecto}}</td>
                                <td>{{$instituciones}}</td>
                            </tr>
                        
                            </tbody>
                        </table>
   
                <br><br>
                <h5><strong>Instituciones registradas por sector</strong></h5><br><br>
      
                <img alt="" src="{{$url_grafico_sectores}}" width="75%;" >
                <h5><strong>Tabla de instituciones registradas por sector</strong></h5>
                    <div class="normal-table-list mg-t-20">
                    
                        <table class="table table-striped font-table" style="text-align:center;">
                            <thead class="table-dark">
                            <tr>
                            <th scope="col">Sector</th>
                            <th scope="col">Instituciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($instituciones_sector as $is)
                            <tr>
                                <td>{{$is->nombre_sector}}</td>
                                <td>{{$is->cantidad}}</td>
                            </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            <div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div style="display:flex; flex-direction: column; align-items:center; text-align:center;" >
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <br>
                <h5><strong>Estudiantes inscritos por carrera</strong></h5><br><br>
                <img alt="" src="{{$url_grafico_tipo_instituciones}}" width="90%;">
                <h5><strong>Tabla de estudiantes inscritos por carrera</strong></h5>
                    <div class="normal-table-list mg-t-30">
                        
                        <table class="table table-striped">
                            <thead class="table-dark">
                            <tr>
                            <th scope="col">Tipo de institución</th>
                            <th scope="col">Proyectos</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($instituciones_tipo as $it)
                            <tr>
                                <td>{{$it->tipo_institucion}}</td>
                                <td>{{$it->cantidad}}</td>
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