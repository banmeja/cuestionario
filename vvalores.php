<?php
include("conn.php");

$resultado=mysqli_query($conn,"SELECT * FROM valores");
	echo '<option value="">Seleccionar</option>';				
	while($row=mysqli_fetch_array($resultado)){
	
	echo '<option value="'.$row['idvalores'].'">'.$row['valor'].'</option>';

			}


?>