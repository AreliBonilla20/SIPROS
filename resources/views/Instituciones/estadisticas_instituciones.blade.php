@extends('layout')
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
                                    <p>Instituciones</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
                                    <form action="{{route('reporte_estadisticas_instituciones')}}" method="POST">
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
                <h3 style="text-align:center">Estadísticas</h3>
                
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter"></span></h2>
                                <p>Inscritos</p>
                            </div>
                            <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter"></span></h2>
                                <p>Servicio iniciado</p>
                            </div>
                            <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter"></span></h2>
                                <p>Servicio no iniciado</p>
                            </div>
                            <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                        
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter"></span></h2>
                                <p>Servicio terminado</p>
                            </div>
                            <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                        </div>
                    </div>
                </div>
             
         
                
                <br><br>
                <div style="flex-direction: column; align-items:center; text-align:center;">
                <h5>ESTUDIANTES POR GÉNERO</h5>
                    <div id="grafico_genero" style="width: 900px; height: 500px; padding-left:10%;" ></div>
                    <div id="grafico_genero_imagen" style="width: 900px; height: 500px;" hidden></div>
                <h5>ESTUDIANTES POR CARRERA</h5>
                    <div id="grafico_carrera" style="width: 100%; height: 500px; padding-left:10%;"></div>
                    <div id="grafico_carrera_imagen" style="width: 900px; height: 500px;" hidden></div>
                    <br><br><br><br><br>
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
        
        
        ]);

        var options = {
          pieHole: 0.4,
          colors: ['#ffb3ba', '#C5EBFE']
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
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Carrera', 'Estudiantes', { role: 'style' } ],
        
     
        
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