<?php
include("conn.php");
				
$resultado=mysqli_query($conn,"SELECT * FROM especialidad");
	echo '<option value="">Seleccionar</option>';				
	while($row=mysqli_fetch_array($resultado)){
	
	echo '<option value="'.$row['idespecialidad'].'">'.$row['especialidad'].'</option>';

			}
					
?>