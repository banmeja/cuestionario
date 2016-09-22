<?php
include("conn.php");

$salida="";
$salida.='
<script src="js/Chart.js"></script>
 
';
$contador=0;
$referencia=$_POST['individuo'];

$sumatoria=mysqli_query($conn,"SELECT p.totalec,p.totalor,p.totalca,p.totalea from participante p inner join resultados r on r.participante_idparticipante=p.idparticipante where  p.idparticipante='$referencia'");


//grafica individual
  while($fila=mysqli_fetch_array($sumatoria)){
 
  
  
  $salida.='

<canvas id="ind"></canvas>
<script>
  var grafoind=document.getElementById("ind");

  var circular=new Chart(grafoind,{

      type: "pie",
      data: {
        labels:[
        "EC",
        "OR",
        "CA",
        "AE"
        ],
        datasets: [{          
          data: ['.$fila["totalec"].','.$fila["totalor"].','.$fila["totalca"].','.$fila["totalea"].'],

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

';

}

echo $salida;
?>

