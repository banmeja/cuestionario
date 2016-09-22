<?php

include("conn.php");

$valor1=$_POST['valor1'];
$valor2=$_POST['valor2'];
$valor3=$_POST['valor3'];
$valor4=$_POST['valor4'];

$bandera=0;

//ASignar valores una vez
mysqli_query($conn,"INSERT INTO valores(valor) VALUES('$valor1')");
mysqli_query($conn,"INSERT INTO valores(valor) VALUES('$valor2')");
mysqli_query($conn,"INSERT INTO valores(valor) VALUES('$valor3')");
mysqli_query($conn,"INSERT INTO valores(valor) VALUES('$valor4')");
$bandera=$bandera+4;


if($bandera=4){
	echo 11;
	$bandera=0;
}else{echo 12;}

?>