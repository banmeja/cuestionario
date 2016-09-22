<?php
include("conn.php");

$especialidad=$_POST['especialidad'];
mysqli_query($conn,"INSERT INTO especialidad(especialidad) VALUES('$especialidad')");
echo 1;


?>