<?php
//COMBO DEPENDIENTE DE LA ESPECIALIDAD
include("conn.php");

$ref=$_POST['ref'];				
$instructor=mysqli_query($conn,"SELECT idinstructor,nombre1,nombre2,apellido1 FROM instructor i WHERE i.especialidad_idespecialidad='$ref'");
	echo '<option value="">Seleccionar</option>';				
	while($row2=mysqli_fetch_array($instructor)){
	echo '<option value="'.$row2['idinstructor'].'">'.$row2['nombre1']." ".$row2['nombre2']." ".$row2['apellido1'].'</option>';
			}				
?>

