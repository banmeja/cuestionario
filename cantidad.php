<?php
include("conn.php");

$conteo = mysqli_query($conexion,"SELECT COUNT(*) as conteo FROM categoria ");
//$result2 = mysqli_query($conexion, $query); 
$fila = mysqli_fetch_array($conteo); 

echo $fila;
?>