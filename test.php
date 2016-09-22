<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<header('Content-Type: text/html; charset=UTF-8')>
  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/control.js"></script>
  <script src="js/evaluar.js"></script>
	<title>Cuestionario</title>
</head>
<header>
	<div class="container" align="center">
	<img src="img/bn.jpg" alt="" class="img-responsive" id="encabezado">	
	</div>
	
</header>
<body>
<br>

<div class="container" id="principal">
	
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Información</h3>
  </div>
  		<div class="panel-body">
        <p align="justify">Debera asignar una puntuación de <b>0</b> a <b>3</b>, en los casilleros a cada una de las 
 	     situaciones de una fila determinada, respondiendo a la pregunta del encabezamiento. Coloque 3 puntos
 	     a la situación que le reporte más beneficios cuando aprende; y asigne los puntajes <b>2</b>, 
 	     <b>1</b> y <b>0</b> a las restantes situaciones expuestas en la fila, en función de la efectividad que
 	     tienen éstas en su forma de aprender.
        </p>
        <br>
        <p>No se puede repetir un puntaje para cada pregunta</p>
  		</div>
  		<br>
  		
</div>

  <button type="button" class="btn btn-success btn_mos" id="mos" align="right">Mostrar modal</button>
<div class="panel">
<div class="panel-body">
<p>A continuación debe de seleccionar la especialidad, y el curso correspondiente</p>
<div class="table table-bordered" id="contenedor" >


</div>		
<div class="row well">
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">	
		<label for="especialidad">Seleccione la especialidad</label><br>
		  <select required="required" name="esp" id="esp" >
       	
          </select>
	</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 "> 
    <label for="evento">Instructor </label><br>
      <select required="required" name="instructor" id="instructor" >
        
          </select>
  </div>
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 ">	
		<label for="evento">Seleccione curso </label><br>
		  <select required="required" name="curso" id="curso" >
       	
          </select>
	</div>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " align="right">  
  <br>
    <button type="button" class="btn btn-success btn_iniciar" id="iniciar_test" align="right">Iniciar cuestionario</button>
 
  </div>

</div>
 </div>
 </div>

 <div id="cuestionario"></div>
</div>

<!--VENTANA MODAL MOBILIARIO-->
<div class="modal fade" id="modalparticipante" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Información de participante</b></h4>
            </div>
            <div class="modal-body">
              
            <fieldset><legend>Nombres y apellidos</legend>
        <table class="tbl-registro" width="100%">
                  <tr>
                        
                        <td width="20%">Primer nombre</td>
                        <td aling="left"><input required="required" type="text" class="form-control" id="nombre1" name="nombre1" maxlength="12"/></td>     
                        
                  </tr>
 <tr>
                      
                         <td width="20%">Segundo nombre</td>             
                        <td ><input required="required" type="text" class="form-control" id="nombre2"   /></td> 
                                                                    
                    </tr> 
                  <tr>
                        
                        <td width="20%">Primer apellido</td>
                         <td aling="left"><input type="text" class="form-control" id="apellido1" name="apellido1" maxlength="12" required/></td>    
                        
                  </tr>  
                  <tr>
                      <td width="20%">Segundo apellido</td>
                                      
                        <td ><input required="required" type="text" class="form-control" id="apellido2"   /></td> 
                                                                     
                    </tr>     
                  <tr> <td width="30%">Codigo evento</td></tr>
                                               
                        
                        <!-- correlativo hace refencia al num de inv -->
                        
                        
                   
                     

                    <tr><td ><input required="required" type="text" class="form-control" id="codevento"  /></td></tr>                 
                </table>
                </fieldset><br>
                
                <br />
                <div id="contenidoRegistro"></div>
                <div class="modal-footer">
                  <button type="button" name="save" data-id30="" class="btn btn-sm btn-success btn_almacenar">Enviar resultados</button>
                </div>
            </div>
          </div>
        </div>
      </div>





<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>