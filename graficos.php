<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pruebas de graficos</title>
	<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/Chart.js"></script>
</head>
<body>

<canvas style="display: block; width: 387px; height: 193px;" width="387" height="193" id="migrafico"></canvas>

	<script>
	var grafo=document.getElementById("migrafico");
     var migrafico= new Chart(grafo,{
     	type: 'bar',
     	data: {
     			labels:["Rojo","Azul","Amarillo","Verde"],
     			datasets:[{
     				label: '# de votos',
     				data: [18,12,6,9],
     				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
                	'rgba(54, 162, 235, 0.2)',
                	'rgba(255, 206, 86, 0.2)',
                	'rgba(75, 192, 192, 0.2)'
     				],
     				borderColor: [
     				'rgba(255,99,132,1)',
                	'rgba(54, 162, 235, 1)',
                	'rgba(255, 206, 86, 1)',
                	'rgba(75, 192, 192, 1)'
     				],
     				borderWidth: 1
     			}]
     	},
     	options: {
     		scales: {
     			yAxes: [{
     				ticks: {
     					beginAtZero:true
     				}
     			}]
     		}
     	}



     })
	</script>
</body>
</html>