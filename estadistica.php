<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Administrador de cuestionario</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estil.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/adm.js"></script>
    <script src="js/fil.js"></script>
    <script src="js/individual.js"></script>
 
</head>

<body>
<header>
	<div class="container" align="center">
	<img src="img/bn.jpg" alt="" class="img-responsive" id="encabezado">	
	</div>
	
			<nav class="navbar navbar-inverse navbar-static-top" role="navigation" id="menu">
				<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#minavegacion">
					<span class="sr-only">Desplegar / Ocultar Menu </span>
					<span class="icon-bar">-</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<a href="#" class="navbar-brand">HOME</a>
			</div>
					<!-- Menu-->
						<div class="collapse navbar-collapse" id="minavegacion">
		<ul class="nav navbar-nav">
		        <li> <a href="adm.php"><span ></span>Administrar cuestionario</a> 	
				<li> <a href="estadistica.php"><span ></span>Ver resultados</a> 	
				<li> <a href="#"><span ></span>Cerrar sesion</a> 	

			</ul>
				
		</div>
	  <!--Fin contenedor menu -->

		</nav>	
</header><br>

<!--FORMULARIO DE CREACION Y ASIGNACION DE EVENTOS ACTIVOS -->
<div class="container">
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Administrador de resultados sobre evaluaciones</h3>
  </div>
  		<div class="panel-body">
       <br>
       <label for="filtro">Filtro de resultados por codigo de evento</label><br>
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
       	<input type="text" class="form-control" id="filtro">
       	
       </div>
       
				</div><!-- fin cuerpo panel 2 -->
			</div>

  		<br>
  		
</div><!-- fin del row-->
       
	



<div id="mostrar_resultados"></div>

<div class="container">
	<div class="panel panel-success" style="display: none;" id="individual">
		<div class="panel-heading">
		<h4 class="panel-tittle">Resultados de participante</h4>
		</div>
	<button type="button" class="btn btn-warning btn_ocultar" id="btn_ocultar">Ocultar</button>		
</div>
			<div class="panel-body">
				
				
				<div id="resindividual"> </div><!--Contenedor del resultado de la busqueda interactiva-->
			</div>
</div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
</body>
</html>