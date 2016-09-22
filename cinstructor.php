<?php
include("conn.php");


//instructor
$especialidad=$_POST['asigna_especialidad'];
$nombre1=$_POST['nombre1'];
$nombre2=$_POST['nombre2'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];

mysqli_query($conn,"INSERT INTO instructor(nombre1,nombre2,apellido1,apellido2,especialidad_idespecialidad) VALUES('$nombre1','$nombre2','$apellido1','$apellido2','$especialidad')");
echo 1;
?>