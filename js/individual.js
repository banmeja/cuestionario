$(document).ready(function(){
//individual
        $(document).on('click', '.btn_individual', function(){          	
           var id=$(this).data("id25"); 
           
     
           //alert(id);
         $.ajax({
			type: 'POST',
			url: 'individual.php',
			data: ('individuo='+id),
			success: function(res){
				if(res!=""){
					 $("#individual").show();
					$("#resindividual").html(res);
				}
			}


		});           
      });
  
  $("#btn_ocultar").click(function(){
    $("#individual").hide();
  });

})