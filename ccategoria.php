<?php
include("conn.php");

$categoria=$_POST['nueva_categoria'];
mysqli_query($conn,"INSERT INTO categoria(categoria) VALUES('$categoria')");
echo 1;

?>