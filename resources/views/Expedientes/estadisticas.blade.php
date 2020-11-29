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
                                    <p>Estudiantes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a href="{{route('reporte_estadisticas_expedientes')}}"><button data-toggle="tooltip" data-placement="left" class="btn"><i class="notika-icon notika-sent"></i> Generar PDF</button></a>
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
                <h3 style="text-align:center">Gráficos</h3>
                <br>
                <div >
             
                    <canvas id="estudiantes_genero" width="600" height="250"></canvas>
                    <br><br>
                    <canvas id="estudiantes_carreras" width="600" height="250"></canvas>
                    <br><br>
                    
                    </div>
                </div>

                </div>
           
            </div>
        
        </div>
        
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script>

new Chart(document.getElementById("estudiantes_carreras"), {
    type: 'horizontalBar',
    data: {
      labels: [
          @foreach($estudiantes_carrera as $carrera)
          '{{$carrera->nombre_carrera}}',
          @endforeach
      ],
      datasets: [
        {
          label: "Estudiantes",
          backgroundColor: ["#85DBEA", "#F8B075","#C9E5AA","#E5AAE0","#F7F082","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [
          @foreach($estudiantes_carrera as $carrera)
          {{$carrera->cantidad}},
          @endforeach
          ]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Estudiantes por carrera'
      }
    }
});
</script>

<script>

var ctx = document.getElementById('estudiantes_genero').getContext('2d');
var chart = new Chart(ctx, {
    type: 'doughnut',
    data:{
	datasets: [{
		data: [
          @foreach($estudiantes_genero as $genero)
          {{$genero->porcentaje}},
          @endforeach
        ],
		backgroundColor: ['#EB97F1', '#42a5f5'],
		label: 'Estudiantes inscritos por género'}],
		labels: [
         @foreach($estudiantes_genero as $genero)
          '{{$genero->sexo}}',
          @endforeach
        ]},
    options: {responsive: true,
        title: {
        display: true,
        text: 'Estudiantes por género'
      }
    }
});
</script>

@endsection