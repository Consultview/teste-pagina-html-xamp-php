<!DOCTYPE html>
<html>
<head>
    	<title>Gráfico de Pizza</title>
	<!-- Inclua os arquivos CSS e JavaScript do Chart.js -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<style>
		canvas {
			max-width: 400px;
			margin: 0 auto;
		}
	</style>
</head>
<body>

<?php
 include '../database/conexao.php';

 $conexao = new mysqli($servername, $username, $password, $dbname);

// Total number of users
$sql_total = "SELECT COUNT(*) as total_usuarios FROM teste";
$resultado_total = mysqli_query($conexao, $sql_total);
$dados_total = mysqli_fetch_assoc($resultado_total);
$total_usuarios = $dados_total['total_usuarios'];

// Number of active users
$sql_ativos = "SELECT COUNT(*) as total_ativos FROM teste WHERE status='ativo'";
$resultado_ativos = mysqli_query($conexao, $sql_ativos);
$dados_ativos = mysqli_fetch_assoc($resultado_ativos);
$total_ativos = $dados_ativos['total_ativos'];

// Number of inactive users
$sql_inativos = "SELECT COUNT(*) as total_inativos FROM teste WHERE status='inativo'";
$resultado_inativos = mysqli_query($conexao, $sql_inativos);
$dados_inativos = mysqli_fetch_assoc($resultado_inativos);
$total_inativos = $dados_inativos['total_inativos'];

?>

<div id="grafico-container" style="width: 400px; height: 400px;">
  <canvas id="grafico"></canvas>
  <canvas id="pizza"></canvas>
</div>



<script>

//grafico de pizza	
// Obtenha o contexto do canvas
// Get the canvas context
var ctx = document.getElementById('pizza').getContext('2d');

// Configure the chart container
var container = document.getElementById('grafico-container');
container.style.width = '400px';
container.style.height = '400px';

// Create the pie chart
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ['Ativos', 'Inativos'],
    datasets: [{
      label: 'Número de usuários',
      data: [<?php echo $total_ativos; ?>, <?php echo $total_inativos; ?>],
      backgroundColor: [
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)'
      ],
      borderColor: [
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false
  }
});
</script>




<script>
//grafico de barras

// Obtenha o contexto do canvas
// Obtenha o contexto do canvas
// Get the canvas context
var ctx = document.getElementById('grafico').getContext('2d');

// Configure the chart container
var container = document.getElementById('grafico-container');
container.style.width = '400px';
container.style.height = '400px';

// Create the bar chart
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Total', 'Ativos', 'Inativos'],
    datasets: [{
      label: 'Número de usuários',
      data: [<?php echo $total_usuarios; ?>, <?php echo $total_ativos; ?>, <?php echo $total_inativos; ?>],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});


</script>


</body>
</html>
