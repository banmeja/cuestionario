<?php
include("conn.php");

$especialidad=$_POST['especialidad'];
$encargado=$_POST['encargado'];
$evento=$_POST['evento'];
$codigo=$_POST['codigo'];

mysqli_query($conn,"INSERT INTO evento(evento,estado,codigo,especialidad_idespecialidad,instructor_idinstructor) VALUES('$evento','1','$codigo','$especialidad','$encargado')");
echo 1;


?>