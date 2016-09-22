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
    <h3 class="panel-title">Administración y asignación de eventos a especialidades</h3>
  </div>
  		<div class="panel-body">
       
        <div class="row" id="creacion">
			<div class="col-xs-6 col-sm-5 col-md-5 col-lg-5" id="creacion_especialidad">

         			<div class="panel-heading">
    					<h3 class="panel-title ">Creación de especialidades del centro</h3>
  					</div>
  				<div class="panel-body"><br>
  					<label for="n_espe">Nombre de la especialidad</label>
		        <input type="text" required="required" class="form-control" id="especialidad" ><br>
		        <button type="button" class="btn btn-primary btn_especialidad" id="crear_especialidad">Crear especialidad</button>
				</div><!-- fin cuerpo panel 1-->
			</div>

				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="creacion_evento_asignacion_esp">
         			<div class="panel-heading">
    					<h3 class="panel-title">Creación de evento y asignación a especialidad</h3>
  					</div>
  				<div class="panel-body">
  					<label for="Seleccion">Seleccion de especialidad</label>
		      <select required="required" name="" id="asigna_esp"></select><br>
		      <label for="Seleccion">Seleccion de instructor encargado</label>
		      <select required="required" name="" id="encargado"></select>
		      <br>
		      <label for="n_eve">Nombre del evento</label>
		      <input type="text" required="required" class="form-control" id="nuevo_evento"><br>
		      <label for="n_eve">Codigo del evento |3|</label>
		      <input type="text" required="required" class="form-control" id="codigo_nuevo"><br>
		      <button type="button" class="btn btn-success btn_asignar" id="crear_evento">Crear y asignar eventos</button>
				</div><!-- fin cuerpo panel 2 -->
			</div>

  		<br>
  		
</div><!-- fin del row-->
       <div class="row" id="creacionins">
			<div class="col-xs-12 col-sm-7 col-md-6 col-lg-6" id="creacion_especialidad">

         			<div class="panel-heading">
    					<h3 class="panel-title ">Información y creacion de instructores</h3>
  					</div>
  				<div class="panel-body">  			
  					<table>
  				<tr><label for="">Asignar a especialidad:</label> <select required="required" name="" id="asigna_especialidad"></select> </tr>	<br>
  				<tr><label for="nombre1">Primer nombre</label> <input type="text" required="required" class="form-control" id="nombre1" ></tr>
		        <tr><label for="nombre2">Segundo nombre</label> <input type="text" required="required" class="form-control" id="nombre2" ></tr>
		        <tr><label for="ape1">Primer apellido</label> <input type="text" required="required" class="form-control" id="apellido1" ></tr>
		        <tr><label for="ape2">Segundo apellido</label> <input type="text" required="required" class="form-control" id="apellido2" ></tr><br>
		        <td><button type="button" class="btn btn-primary btn_instructor" id="crear_instructor">Guardar datos de instructor</button></td>
		    </tr>
		    <tr>
		        
		    </tr>
				</table>
				</div><!-- fin cuerpo panel 1-->
			</div>


  		
  		
</div><!-- fin del row-->
<br>
<div id="espeven"></div>


</div><!-- fin del cuerpo panel administracion-->
</div><!-- fin del panel  administracion-->
<!--DIV para mostrar una tabla de las especialidades y los eventos correspondientes, si se requiere  -->
<div id="mostrar_eventos"></div>
</div><!-- fin del contendor-->

<!--Contendor busquedas inteligentes-->
<div class="container">
	<div class="row">
		<button type="button" class="btn btn-info btn_mostrar" id="btn_mostrar">Ver especialidades y eventos</button>
		<button type="button" class="btn btn-info btn_veradmon" id="btn_veradmon">Administrar preguntas</button>
	</div>
	<div class="panel panel-success" style="display: none;" id="consultor">
				<div class="panel-heading">
			<h4 class="panel-tittle">Informacion sobre especialidades y eventos activos</h4>
		</div>
		<button type="button" class="btn btn-warning btn_ocultar" id="btn_ocultar">Ocultar informacion</button>		
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<label for="indicador_busqueda">Filtro para busqueda de especialidad</label>
					</div>
					<!-- Barra de busqueda-->
					<div class="col-xs-10 col-sm-6 col-md-6 col-lg-7">
						<input type="text" class="form-control" id="busqueda">
					</div>
					<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
						<button type="button" class="btn btn-sm btn-info" id="vertodos">Ver todos</button>
					</div>
				</div>
				<div id="ensistema"></div>
				<div id="resultado"> </div><!--Contenedor del resultado de la busqueda interactiva-->
			</div><!--Fin cuerpo del panel-->
	</div>
</div><br>

<!-- Administracion: categorias, preguntas -->
<div class="container">
<div class="panel panel-primary" style="display: none;" id="admon_cuestionario">
<div class="panel-heading">
    <h3 class="panel-title">Administración de cuestionario. Creacion de categorias y preguntas.</h3>
  </div>

  <div class="panel-body">
  <!-- Dentro del cuerpo del panel, debera de diseñarse el formulario de creacion de categorias, creacion
       de preguntas, y los valores correspondientes
  -->
  <button type="button" class="btn btn-warning btn_ocultar" id="btn_ocultaradmon">Ocultar informacion</button>		
<div class="row">

	<!--Columna para nueva categoria -->
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 well">
		<label for="indica_categorias">Crear categoria de pregunta</label><br>
		<input type="text" required="required" class="form-control" id="nueva_categoria"><br>
		<button type="button" class="btn btn-primary btn_categoria">Crear categoria de pregunta</button><br>
	</div>

	</div>
    <!--Columna para creacion de preguntas y asignacion de categorias |2|-->  
    <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3	 well">
    <label for="indica_asignacioncat">Elegir categoria de pregunta</label><br>
    <select required="required" name="categoria" id="sel_categoria"></select><br>	
    </div>
</div>
<div class="row">    
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 well">    
    <label for="cat_pregunta">EC</label><br>
    <label for="crear_preguntaacategoria">Crear pregunta para categoria seleccionada </label>
    <input type="text" required="required" class="form-control" id="ecpregunta"></td>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 well">    
    <label for="cat_pregunta">OR</label><br>
    <label for="crear_preguntaacategoria">Crear pregunta para categoria seleccionada</label>
    <input type="text" required="required" class="form-control" id="orpregunta"></td>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 well">    
    <label for="cat_pregunta">CA</label><br>
    <label for="crear_preguntaacategoria">Crear pregunta para categoria seleccionada</label>
    <input type="text" required="required" class="form-control" id="capregunta"></td>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 well">    
    <label for="cat_pregunta">EA</label><br>
    <label for="crear_preguntaacategoria">Crear pregunta para categoria seleccionada</label>
    <input type="text" required="required" class="form-control" id="eapregunta"></td>
    </div>
  <button type="button" class="btn btn-block btn-success btn_cpregunta">Crear preguntas</button>
    
   
</div>

  	
  </div><!-- fin cuerpo de panel de cuestionario-->
</div><!-- fin panel de creacion categorias, preguntas y valor de respuestas	

</div><!--Fin contenedor de categorias y preguntas -->

<div id="mostrar_cuestionario"></div>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
</body>
</html>