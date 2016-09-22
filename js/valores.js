$(document).ready(function() {

   //Cargar valores del cuestionario
    function cargar_valores(){
       $( "#res1" ).load( "vvalores.php" ); 
       $( "#res2" ).load( "vvalores.php" ); 
       $( "#res3" ).load( "vvalores.php" ); 
       $( "#res4" ).load( "vvalores.php" ); 
                               
    }
    cargar_valores();

  function cantidad(){
       $( "#cantidad" ).load( "cantidad.php" ); 
   
                               
    }
    cantidad();


});