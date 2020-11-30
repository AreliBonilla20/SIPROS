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
        <h4>Reportes estadístico de estudiantes</h4>   
    </div>
    <p style="font-size: 8px">{{$grafico_carreras}}</p>
    <a href="https://quickchart.io/sandbox/#{{$grafico_carreras}}">PROBAR CODIGO</a>

    <div>
        <img alt="" src="" >
        <br><br>
        <img alt="" src="https://quickchart.io/chart?width=500&height=300&c={{$grafico_carreras}}" >
        <a href="https://quickchart.io/chart?width=500&height=300&c={{$grafico_carreras}}">VER GRAFICO</a>
        <br><br>            
    </div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script>

var myChart = new Chart(document.getElementById('estudiantes_genero').getContext('2d'), {
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
    animation: {
      onComplete: function() {
        document.getElementById('grafico_genero').src = myChart.toBase64Image();
      }
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
        options: {
        animation: {
        onComplete: function() {
        document.getElementById('grafico_genero').src = chart;
      }
    }
  }
});

</script>
</body>
</html>
