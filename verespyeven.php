<?php
include("conn.php");
$validacion=$_POST['validar'];
$salida='';
if($validacion>0){
$query=mysqli_query($conn,"SELECT ev.evento,ev.especialidad_idespecialidad,e.especialidad,e.idespecialidad,i.nombre1,i.nombre2,i.apellido1 from evento ev inner join especialidad e on e.idespecialidad=ev.especialidad_idespecialidad inner join instructor i on ev.instructor_idinstructor=i.idinstructor ORDER BY e.especialidad and ev.estado='1'");


$salida.='
<br>
	<table width="50%" class="table table-bordered">
			<tr>
				<td  size="1"><b>Especialidad</b></td>
				<td><b>Evento</b></td>
				<td><b>Instructor</b></td>

			</tr>';
while($datos=mysqli_fetch_array($query)){
	$salida.='
	
				<tr>
				<td  size="1">'.$datos["especialidad"].'</td>
				<td>'.$datos["evento"].'</td>
				<td>'.$datos["nombre1"]." ".$datos["nombre2"]." ".$datos["apellido1"].'</td>
				</tr>';
				
}
$salida.='		

			
		
			
	</table>';
echo $salida;
}
?>