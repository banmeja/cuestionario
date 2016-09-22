$(document).ready(function() {
  
  var promedio=0;   
  var w=0;
  var x=0;
  var iniciado=0;
  var cola=[];

 
    //Si hay datos almacenados, cargar el selector de especialidad
    function cargar_esp(){
       $( "#esp" ).load( "cargaesp.php" ); 
                         
    }
    cargar_esp();

      		
  $("#esp").change(function(){
      var id=$("#esp").val();
        $.post("cargainst.php",{ref:id})
     
         .done(function(data){      
        $("#instructor").html(data);
       })    
                       
    });

      $("#instructor").change(function(){
      var id=$("#instructor").val();
        $.post("cargaeven.php",{ref:id})
     
         .done(function(dato){      
        $("#curso").html(dato);
       })    
                       
    });

   	$(document).on('click', '.btn_iniciar', function(){
   	var a=document.getElementById("esp").value;
   	var b=document.getElementById("curso").value;
    var c=document.getElementById("instructor").value;
    
    if(a==""){alert("Seleccione especialidad"); iniciado=0;}
    if(b==""){alert("Seleccione instructor");iniciado=0;}
    if(c==""){alert("Seleccione curso");iniciado=0;}
    if((a!="")&&(b!="")&&(c!="")){
    	iniciado=iniciado+1;
   				
    $.ajax({
      type:'POST',
      url:'forma.php',
      data:('valor='+iniciado),
      success:function(res){
      if (res!=""){
        $("#cuestionario").html(res);
      }

      } 

    });//fin ajax                      
   	}
   });

})