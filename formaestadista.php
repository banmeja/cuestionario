<?php
include("conn.php");

$salida="";
$salida.='
<script src="js/Chart.js"></script>
<script src="js/jquery.js"></script>


 
';
$contador=0;
$referencia=$_POST['busqueda'];

$busqueda=mysqli_query($conn,"SELECT p.idparticipante,p.pnombre1,p.pnombre2,p.papellido1,p.papellido2,e.evento,p.totalec,p.totalor,p.totalca,p.totalea from participante p inner join resultados r on r.participante_idparticipante=p.idparticipante inner join evento e on r.evento_idevento= e.idevento where e.codigo ='$referencia'");
$sumatoria=mysqli_query($conn,"SELECT sum(p.totalec) as TotalEC, sum(p.totalor)as TotalOR, sum(p.totalca)as TotalCA, sum(p.totalea)as TotalEA from participante p inner join resultados r on r.participante_idparticipante=p.idparticipante where r.evento_codigo ='$referencia'");
$conteo=mysqli_query($conn,"SELECT count(p.idparticipante)as cantidad from participante p inner join resultados r on r.participante_idparticipante=p.idparticipante where r.evento_codigo ='$referencia'");
$evento=mysqli_query($conn,"SELECT e.evento from evento e where e.codigo ='$referencia'");

$faro = 0;
$sal="sal";

while($registrados=mysqli_fetch_array($conteo)){
  $faro=$registrados["cantidad"];
}

//grafica del grupo
  while($fila=mysqli_fetch_array($sumatoria)){
  $var1=$fila["TotalEC"];
  $var2=$fila["TotalOR"];
  $var3=$fila["TotalCA"];
  $var4=$fila["TotalEA"];
  @$promedio1=$var1/$faro;
  @$promedio2=$var2/$faro;
  @$promedio3=$var3/$faro;
  @$promedio4=$var4/$faro;
  
  $porcentual1=($promedio1/36)*50;
  $porcentual2=($promedio2/36)*50;
  $porcentual3=($promedio3/36)*50;
  $porcentual4=($promedio4/36)*50;

  while ($ev=mysqli_fetch_array($evento)){
  $salida.='<div class="container align="center"> <h3>Resultados de evaluacion del evento: '.$ev["evento"].'</h3></div><br> ';
  }
  $salida.='
<canvas id="general"></canvas>
<script>
  var grafo1=document.getElementById("general");

  var circular=new Chart(grafo1,{

      type: "pie",
      data: {
        labels:[
        "EC",
        "OR",
        "CA",
        "AE"
        ],
        datasets: [{          
          data: ['.$porcentual1.','.$porcentual2.','.$porcentual3.','.$porcentual4.'],

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

$salida.='
 <div class="container">
  <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
<table width="50%" class="table table-bordered">
  <tr>
  <label>Lista de alumnos que realizaron la evaluacion:</label>
  </tr>
  ';
while($row=mysqli_fetch_array($busqueda)){
$contador=$contador+1;
$salida.='
  
  <tr>
  <td>'.$contador.'</td>
        <td size="1" class="text1" data-id1="">'.$row["pnombre1"]." ".$row["pnombre2"]." ".$row["papellido1"]." ".$row["papellido2"].'</td>      
        <td><button type="button" name="ver_btn" data-id25="'.$row["idparticipante"].'" class="btn btn-xs btn-info btn_individual">Ver resultado individual</button></td>            
  </tr>                    
    


  ';


}
$salida.='
 </table>
 </div>
 </div></div>
';
$salida.='

';

echo $salida;
?>

