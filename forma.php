<?php
include("conn.php");
/*obtengo el id del nuevo usuario, especialidad, evento 
y despliego las categorias y las debidas preguntas 
*/
$salida="";
$cat1=mysqli_query($conn,"SELECT * FROM categoria");
$preg=mysqli_query($conn,"SELECT cat.categoria,a.contenidosub1,b.contenidosub2,c.contenidosub3,d.contenidosub4 FROM subcat1 a inner join categoria cat on a.categoria_idcategoria=cat.idcategoria inner join subcat2 b on b.categoria_idcategoria=cat.idcategoria inner join subcat3 c on c.categoria_idcategoria=cat.idcategoria inner join subcat4 d on d.categoria_idcategoria=cat.idcategoria ");
$contador=0;
//$resultado=mysqli_fetch_array($cat1);

$val=$_POST['valor'];


$conteo=mysqli_query($conn,"SELECT COUNT(*) as conteo FROM categoria ");
$resconteo=mysqli_fetch_array($conteo); 



if(mysqli_num_rows($cat1)!= 0) 
{
  
  $salida.='
  <div class="container">
  <div class="row">
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
';

  $datos=mysqli_num_rows($cat1);
  while($row=mysqli_fetch_array($cat1)){
    
  if(mysqli_num_rows($preg)!= 0) {  
  while($row=mysqli_fetch_array($preg)){
    $contador=$contador+1;
  $salida.='
 <div class="panel">
   <div class="panel-heading">
    <h3 class="panel-title">'.$contador.'- '.$row["categoria"].':</h3>
  </div>
<div class="panel-body">
  <table width="50%" class="table table-striped">
  <tr>
            <td size="1" class="text1" data-id1="">'.$row["contenidosub1"].'</td>
  </tr>    
  <tr>      <td size="1" class="text2" data-id2="">'.$row["contenidosub2"].'</td>
  </tr>
  <tr>      <td size="1" class="text3" data-id3="">'.$row["contenidosub3"].'</td>
  </tr>
  <tr>      <td size="1" class="text4" data-id4="">'.$row["contenidosub4"].'</td>                      
  </tr>
  </table>   
 </div>
 </div>

 '
 ;}} 

  
  }
  $salida.='
  </div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
  <div class="panel"> 
   <div class="panel-heading">
    <h3 class="panel-title">Selecciona valor de respuesta:</h3>
  </div>
<div class="panel-body">
  <table widht="50%" class="table table-striped">
 
  <tr> <td><select name="" id="cola1" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colb1" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colc1" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="cold1" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  </table>
 </div>
 
 </div>

<div class="panel"> 
   <div class="panel-heading">
    <h3 class="panel-title">-</h3>
  </div>
<div class="panel-body">
  <table widht="50%" class="table table-striped">
 
  <tr> <td><select name="" id="cola2" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colb2" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colc2" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="cold2" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  </table>
 </div>
 
 </div>


 <div class="panel"> 
   <div class="panel-heading">
    
  </div>
<div class="panel-body">
  <table widht="50%" class="table table-striped">
 
  <tr> <td><select name="" id="cola3" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colb3" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colc3" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="cold3" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  </table>
 </div>
  </div><br>

  <div class="panel"> 
   <div class="panel-heading">
    
  </div>
<div class="panel-body">
  <table widht="50%" class="table table-striped">
 
  <tr> <td><select name="" id="cola4" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colb4" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colc4" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="cold4" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  </table>
 </div>
 </div><br>

 <div class="panel"> 
   <div class="panel-heading">
    
  </div>
<div class="panel-body">
  <table widht="50%" class="table table-striped">
 
  <tr> <td><select name="" id="cola5" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colb5" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colc5" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="cold5" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  </table>
 </div>
 </div>

<div class="panel"> 
   <div class="panel-heading">
    
  </div>
<div class="panel-body">
  <table widht="50%" class="table table-striped">
 
  <tr> <td><select name="" id="cola6" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colb6" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colc6" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="cold6" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  </table>
 </div>
  </div><br>

  <div class="panel"> 
   <div class="panel-heading">

  </div>
<div class="panel-body">
  <table widht="50%" class="table table-striped">
 
  <tr> <td><select name="" id="cola7" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colb7" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colc7" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="cold7" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  </table>
 </div>
 </div><br>
  <div class="panel"> 
   <div class="panel-heading">

  </div>
<div class="panel-body">
  <table widht="50%" class="table table-striped">
 
  <tr> <td><select name="" id="cola8" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colb8" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colc8" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="cold8" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  </table>
 </div>
 </div><br>

 <div class="panel"> 
   <div class="panel-heading">

  </div>
<div class="panel-body">
  <table widht="50%" class="table table-striped">
 
  <tr> <td><select name="" id="cola9" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colb9" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colc9" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="cold9" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  </table>
 </div>
 </div>

 <div class="panel"> 
   <div class="panel-heading">

  </div>
<div class="panel-body">
  <table widht="50%" class="table table-striped">
 
  <tr> <td><select name="" id="cola10" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colb10" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colc10" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="cold10" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  </table>
 </div>
 </div><br>

 <div class="panel"> 
   <div class="panel-heading">

  </div>
<div class="panel-body">
  <table widht="50%" class="table table-striped">
 
  <tr> <td><select name="" id="cola11" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colb11" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colc11" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="cold11" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  </table>
 </div>
 </div>

  <div class="panel"> 
   <div class="panel-heading">

  </div>
<div class="panel-body">
  <table widht="50%" class="table table-striped">
 
  <tr> <td><select name="" id="cola12" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colb12" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="colc12" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  <tr> <td><select name="" id="cold12" >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select></td>  
  </tr>
  </table>
 </div>
 </div>

  </div>

  </div>



  
 </div> 
  <button type="button" name="sumar" data-id20="" class="btn btn-block btn-success btn_evaluar">Evaluar</button>';
  
}//fin if

//$categoria=mysqli_query($conn,"SELECT c.idcategoria,c.categoria FROM categoria c");
//se podria obtener un arreglo de las preguntas y asigarlas a variables segun la posicion
if ($val!=0){
  echo $salida;
  
}
if ($val==0){
  echo "";
}

?>