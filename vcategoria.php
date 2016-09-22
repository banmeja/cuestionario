<?php
include("conn.php");
				
$resultado=mysqli_query($conn,"SELECT * FROM categoria");
	echo '<option value="">Seleccionar</option>';				
	while($row=mysqli_fetch_array($resultado)){
	
	echo '<option value="'.$row['idcategoria'].'">'.$row['categoria'].'</option>';

			}
					
?>