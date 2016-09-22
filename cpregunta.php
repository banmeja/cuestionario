<?php
include("conn.php");

$lacategoria=$_POST['sel_categoria'];
$ECpregunta=$_POST['ecpregunta'];
$ORpregunta=$_POST['orpregunta'];
$CApregunta=$_POST['capregunta'];
$EApregunta=$_POST['eapregunta'];


$tester=0;


mysqli_query($conn,"INSERT INTO subcat1(categoria_idcategoria,contenidosub1) VALUES('$lacategoria','$ECpregunta')");
mysqli_query($conn,"INSERT INTO subcat2(categoria_idcategoria,contenidosub2) VALUES('$lacategoria','$ORpregunta')");
mysqli_query($conn,"INSERT INTO subcat3(categoria_idcategoria,contenidosub3) VALUES('$lacategoria','$CApregunta')");
mysqli_query($conn,"INSERT INTO subcat4(categoria_idcategoria,contenidosub4) VALUES('$lacategoria','$EApregunta')");


//obtener el id de la pregunta, para asignarle sus valores
/*$max1= mysqli_query($conn,"SELECT MAX(idsubcat1) FROM subcat1");
			if ($row = mysqli_fetch_row($max1)) {
				$ultima1 = trim($row[0]);
			}
			$max2= mysqli_query($conn,"SELECT MAX(idsubcat2) FROM subcat2");
			if ($row = mysqli_fetch_row($max2)) {
				$ultima2 = trim($row[0]);
			}
			$max3= mysqli_query($conn,"SELECT MAX(idsubcat3) FROM subcat3");
			if ($row = mysqli_fetch_row($max3)) {
				$ultima3 = trim($row[0]);
			}
			$max4= mysqli_query($conn,"SELECT MAX(idsubcat4) FROM subcat4");
			if ($row = mysqli_fetch_row($max4)) {
				$ultima4 = trim($row[0]);
			}
			
mysqli_query($conn,"INSERT INTO valores(valorec,valoror,valorca,valorea,subcat1_idsubcat1) VALUES('$valor1','$valor2','$valor3','$valor4','$ultima1')");

mysqli_query($conn,"INSERT INTO valores(valorec,valoror,valorca,valorea,subcat2_idsubcat2) VALUES('$valor1','$valor2','$valor3','$valor4','$ultima2')");

mysqli_query($conn,"INSERT INTO valores(valorec,valoror,valorca,valorea,subcat3_idsubcat3) VALUES('$valor1','$valor2','$valor3','$valor4','$ultima3')");

mysqli_query($conn,"INSERT INTO valores(valorec,valoror,valorca,valorea,subcat4_idsubcat4) VALUES('$valor1','$valor2','$valor3','$valor4','$ultima4')");
4:36 p. m. 8/09/2016 Se va a cambiar el formato, valores tendra solo el id del valor y un campo, id para cada valor, se queda el codigo para estudiarlo o mejorarlo
*/
$tester=$tester+8;

if($tester=8){
	echo 1;
	$tester=0;
}else{echo 2;} //falta algun campo para guardar la informacion}
//1:06 p. m. 8/09/2016
//LO ANTERIOR, SE HIZO, PARA QUE PUEDAN INGRESARSE LAS PREGUNTAS Y SUS VALORES
//AHORA BIEN, ¿Y SI SE REGISTRA UNA SOLA VEZ LOS VALORES, Y QUE CADA PREGUNTA OBTENGA ESE VALOR AL INSERTARSE?,
//LA INSERCION SERIA AL REVEZ, SE CONSULTA PRIMERO LOS VALORES Y SE ASIGNAN EN LAS TABLAS DE PREGUNTAS 


?>