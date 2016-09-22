<?php
//COMBO DEPENDIENTE DE LA ESPECIALIDAD
include("conn.php");

$ref=$_POST['ref'];
				
$resultado=mysqli_query($conn,"SELECT idevento,evento,estado,instructor_idinstructor FROM evento e WHERE e.instructor_idinstructor='$ref' and e.estado='1'");
	echo '<option value="">Seleccionar</option>';				
	while($row=mysqli_fetch_array($resultado)){
	echo '<option value="'.$row['idevento'].'">'.$row['evento'].'</option>';
			}			
?>

