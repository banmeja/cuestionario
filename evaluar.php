<?php
include("conn.php");

//participante

//identificar si el codigo ingresado del evento, es el mismo registrado en el sistema
$curso=$_POST['elcurso'];
$codigoref=$_POST['ccodigo'];
$comparar="";
$buscar=mysqli_query($conn,"SELECT codigo,idevento from evento where idevento=$curso");
while($analiza=mysqli_fetch_array($buscar)){
	
	if($codigoref==$analiza["codigo"]){
		//si es igual al codigo entonces
		$nombre1=$_POST['1nombre'];
$nombre2=$_POST['2nombre'];
$apellido1=$_POST['1ape'];
$apellido2=$_POST['2ape'];
$notaec=$_POST['notaec'];
$notaor=$_POST['notaor'];
$notaca=$_POST['notaca'];
$notaea=$_POST['notaea'];


mysqli_query($conn,"INSERT INTO participante(pnombre1,pnombre2,papellido1,papellido2,refcodigo,totalec,totalor,totalca,totalea) VALUES('$nombre1','$nombre2','$apellido1','$apellido2','$codigoref','$notaec','$notaor','$notaca','$notaea')");

	$max = mysqli_query($conn,"SELECT MAX(idparticipante) FROM participante");
	if ($row = mysqli_fetch_row($max)) {
				$ultimo = trim($row[0]);
					}
	mysqli_query($conn,"INSERT INTO resultados(participante_idparticipante,evento_idevento,evento_codigo) VALUES ('$ultimo','$curso','$codigoref')");
//extraer participante y agregar tabla de n-n
echo 1;
	}
	else{echo 2;}
}



?>