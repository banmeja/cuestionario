$(document).ready(function(){
//funcion sobre el input filtro
	$("#filtro").keyup(function(){
		var valor=$("#filtro").val();

		$.ajax({
			type: 'POST',
			url: 'formaestadista.php',
			data: ('busqueda='+valor),
			success: function(res){
				if(res!=""){
					$("#mostrar_resultados").html(res);
				}
			}


		});

	})



})