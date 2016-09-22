<?php

$servidor="localhost";
$usuario="root";
$pass="";
$db_name="test";


$conn = mysqli_connect("localhost","root","")or die("Error al conectar con el servidor.");
mysqli_select_db($conn,$db_name)or die("Error al conectar con la base de datos.");


?>