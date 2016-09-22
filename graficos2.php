<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prueba grafico circular |2|</title>
	<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/Chart.js"></script>
</head>
<body>
	<canvas id="grafica1"></canvas>
	<canvas id="grafica2"></canvas>

	<script>
	var grafo1=document.getElementById("grafica1");

	var circular=new Chart(grafo1,{
      type: 'pie',
      data: {
      	labels:[
        "EA",
        "OR",
        "CA",
        "AE"
      	],
      	datasets: [
      	{
      		data: [300,50,100,175],
      		  backgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56",
                "#42ff33"
            ],
            hoverBackgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56",
                "#42ff33"
            ]
      	}
      	]
      },
      
	});

	</script>
		
</body>
</html>