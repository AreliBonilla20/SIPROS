@extends('layout')
@section('title')
    Estadísticas de estudiantes
@endsection
@section('content')
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Estadísticas</h2>
                                    <p>Estudiantes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
                                    <form action="{{route('reporte_estadisticas_expedientes')}}" method="POST">
                                        @csrf
                                        <input id="url_grafico_generos" name="url_grafico_generos" type="text" hidden>
                                        <input id="url_grafico_carreras" name="url_grafico_carreras" type="text" hidden>
                                    <button formtarget="_blank" data-toggle="tooltip" data-placement="left"
                                    class="btn btn-default"><i class="notika-icon notika-down-arrow"></i> Generar PDF</button>
                                    </form>
								</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="form-element-area">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list" >
                <br>
                <div style="text-align:center">
                    <h2 >Estadísticas</h2>
                    <p>Datos calculados hasta el {{$fecha_actual}}</p>
                </div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter">{{$estudiantes_inscritos}}</span></h2>
                                <p>Inscritos</p>
                            </div>
                            <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter">{{$estudiantes_servicio_iniciado}}</span></h2>
                                <p>Servicio iniciado</p>
                            </div>
                            <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter">{{$estudiantes_servicio_no_iniciado}}</span></h2>
                                <p>Servicio no iniciado</p>
                            </div>
                            <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                        
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter">{{$estudiantes_servicio_terminado}}</span></h2>
                                <p>Servicio terminado</p>
                            </div>
                            <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                        </div>
                    </div>
                </div>
             
         
                
                <br><br>
                <div style="display:flex; flex-direction: column; align-items:center;">
                <h4>ESTUDIANTES POR GÉNERO</h4>
                    <div id="grafico_genero" style="width: 900px; height: 500px;"></div>
                    <div id="grafico_genero_imagen" style="width: 900px; height: 500px;" hidden></div>
                    <h4>Tabla de estudiantes por género</h4>
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        
                        <table class="table table-striped" style="text-align:center;">
                        <thead>
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
                
                <br><br><br>
             
                    <h4>ESTUDIANTES POR CARRERA</h4>
                    <div id="grafico_carrera" style="width: 100%; height: 500px; padding-left:10%;"></div><br><br><br><br><br><br>
                    <div id="grafico_carrera_imagen" style="width: 900px; height: 500px;" hidden></div>
                    <h4>Tabla de estudiantes por carrera</h4>
            
                    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="normal-table-list mg-t-30">
                            <div class="basic-tb-hd">
                    
                                <p></p>
                            </div>
                            <table class="table table-striped">
                            <thead>
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
           
            </div>
    
        </div>
        
    </div>
</div>
</div>




<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Sexo', 'Porcentaje'],
        @foreach($estudiantes_genero as $eg)
        ['{{$eg->sexo}}:{{$eg->porcentaje}}',{{$eg->porcentaje}}],
        @endforeach
        ]);

        var options = {
          pieHole: 0.4,
          colors: ['#ff5464', '#5ec9ff']
        };

        var chart = new google.visualization.PieChart(document.getElementById('grafico_genero'));   //Div del grafico animado
        var imagen_grafico_generos = document.getElementById('grafico_genero_imagen');                      //De la imagen generada a partir del grafico

        // Wait for the chart to finish drawing before calling the getImageURI() method.
        google.visualization.events.addListener(chart, 'ready', function () {
        imagen_grafico_generos.innerHTML = '<img src="' + chart.getImageURI() + '">';
        document.getElementById('url_grafico_generos').value = chart.getImageURI();
      });
        chart.draw(data, options);
      }
      
    </script>

<script type="text/javascript">

    google.charts.load("current", {packages:["bar"]});
    google.charts.setOnLoadCallback(drawChart);

    var cont = 0
    function colores_grafico_carreras(){
        var aux = cont
        var colores = ['#B5EAD7','#d1f0e5', '#B5EAD7', '#d1f0e5','#B5EAD7', '#d1f0e5','#B5EAD7','#d1f0e5', '#B5EAD7', '#d1f0e5'];
        cont++
        return colores[aux]
    }

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Carrera', 'Estudiantes', { role: 'style' } ],
        @for($i=0; $i<count($estudiantes_carrera); $i++)
        ['{{$estudiantes_carrera[$i]->nombre_carrera}}',{{$estudiantes_carrera[$i]->cantidad}}, colores_grafico_carreras()],
        @endfor
     
        
      ]);
      var view = new google.visualization.DataView(data);
      
      var options = {
        title: "Cantidad de estudiantes por carrera",
        width: 900,
        height: 600,
        bar: {groupWidth: "85%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("grafico_carrera"));
      var imagen_grafico_carreras = document.getElementById('grafico_carrera_imagen');
      google.visualization.events.addListener(chart, 'ready', function () {
        imagen_grafico_carreras.innerHTML = '<img src="' + chart.getImageURI() + '">';
        document.getElementById('url_grafico_carreras').value = chart.getImageURI();
      });
      chart.draw(view, options);
  }
  </script>




@endsection