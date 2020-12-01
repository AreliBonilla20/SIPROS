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
                                        <input id="url_grafico_sectores" name="url_grafico_sectores" type="text" hidden>
                                        <input id="url_grafico_tipo_instituciones" name="url_grafico_tipo_instituciones" type="text" hidden>
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
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter">{{$instituciones}}</span></h2>
                                <p>Instituciones</p>
                            </div>
                            <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter">{{$instituciones_activas}}</span></h2>
                                <p>Con proyectos activos</p>
                            </div>
                            <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2><span class="counter">{{$instituciones_inactivas}}</span></h2>
                                <p>Sin proyectos activos</p>
                            </div>
                            <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                        
                        </div>
                    </div>
                    
                </div>
             
         
                
                <br><br>
                <div style="flex-direction: column; align-items:center; text-align:center;">
                <h5>INSTITUCIONES POR SECTOR</h5>
                    <div id="grafico_sector" style="width: 900px; height: 500px; padding-left:25%;" ></div>
                    <div id="grafico_sector_imagen" style="width: 900px; height: 500px;" hidden></div>
                <h5>INSTITUCIONES POR TIPO</h5>
                    <div id="grafico_tipo_institucion" style="width: 100%; height: 500px; padding-left:10%;"></div>
                    <div id="grafico_tipo_institucion_imagen" style="width: 900px; height: 500px;" hidden></div>
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
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function randomColor(){
        var randomColor = Math.floor(Math.random()*16777215).toString(16);
        return "#"+randomColor;
    }

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Sector", "Cantidad", { role: "style" }],
        @foreach($instituciones_sector as $sector)
        ["{{$sector->nombre_sector}}", {{$sector->cantidad}}, randomColor()],
        @endforeach
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Cantidad de instituciones por sector",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("grafico_sector"));
      var imagen_grafico_sectores = document.getElementById('grafico_sector_imagen');               //De la imagen generada a partir del grafico

        // Wait for the chart to finish drawing before calling the getImageURI() method.
        google.visualization.events.addListener(chart, 'ready', function () {
        imagen_grafico_sectores.innerHTML = '<img src="' + chart.getImageURI() + '">';
        document.getElementById('url_grafico_sectores').value = chart.getImageURI();
      });
      chart.draw(view, options);
  }
  </script>

<script type="text/javascript">

    google.charts.load("current", {packages:["bar"]});
    google.charts.setOnLoadCallback(drawChart);
    function randomColor(){
        var randomColor = Math.floor(Math.random()*16777215).toString(16);
        return "#"+randomColor;
    }

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Tipo de institución', 'Cantidad', { role: 'style' } ],
        @foreach($instituciones_tipo as $tipo)
        ["{{$tipo->tipo_institucion}}", {{$tipo->cantidad}}, randomColor()],
        @endforeach
      ]);
      var view = new google.visualization.DataView(data);
      
      var options = {
        title: "Cantidad de instituciones por tipo",
        width: 900,
        height: 600,
        bar: {groupWidth: "85%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("grafico_tipo_institucion"));
      var imagen_grafico_tipo_instituciones = document.getElementById('grafico_tipo_institucion_imagen');
      google.visualization.events.addListener(chart, 'ready', function () {
        imagen_grafico_tipo_instituciones.innerHTML = '<img src="' + chart.getImageURI() + '">';
        document.getElementById('url_grafico_tipo_instituciones').value = chart.getImageURI();
      });
      chart.draw(view, options);
  }
  </script>




@endsection