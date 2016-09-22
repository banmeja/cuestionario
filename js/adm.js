//Archivo para cargar la especialidad, crear y asignar eventos/cursos a dicha especialidad

$(document).ready(function() {

  //Eventos sobre botones para administrador de busqueda
  //Mostrar panel de busqueda
  $("#btn_mostrar").click(function(){
    $("#consultor").show();
  });
  //Ocultar panel de busqueda
  $("#btn_ocultar").click(function(){
    $("#consultor").hide();
  });
  //Mostrar administrador de preguntas
  $("#btn_veradmon").click(function(){
    $("#admon_cuestionario").show();
  });
  //Ocultar administrador de preguntas
  $("#btn_ocultaradmon").click(function(){
    $("#admon_cuestionario").hide();
  });
 //Boton ver todos
  $("#vertodos").click(function(){
    //ejecutar funcion de cargar especialidad y eventos
    cargar_espeven();
  });   
//enviar solicitud para mostrar directamente la tabla con un valor booleano
  var observar=0;
  //Funcion para realizar el fitro de administrador de busquedas
 $('#busqueda').keyup(function(){
    var envio = $('#busqueda').val();

      $('#ensistema').html('<div align="center"><img src="preloader.gif"/></div>');

      $.ajax({
        type: 'POST',
        url: 'buscador.php',
        data: ('busqueda='+envio),
        success: function(resp){
          if(resp!=""){
            $('#ensistema').html(resp);
          }
        }
      })
  });

  //Fin funcion del administrador de busquedas


    //Si hay datos almacenados, cargar el selector de especialidad
    function cargar_esp(){
       $( "#asigna_esp" ).load( "cargaesp.php" );  
       $( "#asigna_especialidad" ).load( "cargaesp.php" );                         
    }
    cargar_esp();
    
   //Elegir especialidad y mostrar instructores
      $("#asigna_esp").change(function(){
      var id=$("#asigna_esp").val();           
        $.post("cargainst.php",{ref:id})      
        .done(function(dato){      
        $("#encargado").html(dato);
       })              
    });
    
   //Cargar si hay datos en categorias, para asignar preguntas
   function cargar_categoria(){
       $( "#sel_categoria" ).load( "vcategoria.php" );                         
    }
    cargar_categoria();

    //mostrar datos de especialidad y cursos
     function cargar_espeven(){
      observar=observar+1;
        $.ajax({
      type:'POST',
      url:'verespyeven.php',  // c -> crear  cx->  c->crear x->nombredelarchivo
      data:('validar='+observar),
      success:function(resp){                                  
                           if (resp!=""){
                            $("#ensistema").html(resp);
                                        }
                            }
    });//fin ajax
    }
    cargar_espeven();

//boton creacion de instructores
$(document).on('click', '.btn_instructor', function(){
var asignacion=document.getElementById("asigna_especialidad").value;
var primern=document.getElementById("nombre1").value;
var segundon=document.getElementById("nombre2").value;
var primera=document.getElementById("apellido1").value;
var segundoa=document.getElementById("apellido2").value;

if(asignacion==""){alert("Especialidad requerida para asignacion de instructor");}
if(primern=="" || segundoa=="" || primera=="" || segundoa==""){
  alert("Campos vacios, campos requeridos");
}

if(asignacion!="" && primern!="" & segundon!="" && primera!="" && segundoa!=""){
 $.ajax({
      type:'POST',
      url:'cinstructor.php',  // c -> crear  cx->  c->crear x->nombredelarchivo
      data:('asigna_especialidad='+asignacion+'&nombre1='+primern+'&nombre2='+segundon+'&apellido1='+primera+'&apellido2='+segundoa),
      success:function(resp){                                  
                           if (resp=="1"){                           
                              alert("Instructor asignado");
                              //
                              }
                            }
    });//fin ajax
}

});//fin creacion de instructor

 $(document).on('click', '.btn_especialidad', function(){
// Tomar el valor de input especialidad, utilizar ajax y almacenarlo
 	
 var esp=document.getElementById("especialidad").value;	
 if(esp==""){alert("Campo especialidad vacio. Campo requerido");document.getElementById("especialidad").focus();}
 if(esp!=""){

 $.ajax({
      type:'POST',
      url:'cespecialidad.php',  // c -> crear  cx->  c->crear x->nombredelarchivo
      data:('especialidad='+esp),
      success:function(resp){                                  
                         	 if (resp=="1"){ 
                          		//$("#datos").html(borradom);
                          		alert("Especialidad almacenada");
                          		//cargar el selector para asignar los nuevos eventos
                                cargar_esp();

                          		}
                           	}
    });//fin ajax
 }

  });//fin evento sobre el boton -crear especilidad

$(document).on('click', '.btn_asignar', function(){

  //obtener el valor del selector principal
  var guia=document.getElementById("asigna_esp").value;
  var selector=document.getElementById("encargado").value;
  // prueba alert("El valor del selector es:"+selector);
  //obtener el valor del input nuevo_evento
  var nuevo=document.getElementById("nuevo_evento").value;
  var codigo=document.getElementById("codigo_nuevo").value;
  if (nuevo==""){alert("Campo requerido");}
  if((nuevo!="") && (selector>0)&& (guia>0)&&(codigo!="")){
  $.ajax({
      type:'POST',
      url:'cevento.php',  // c -> crear  cx->  c->crear x->nombredelarchivo
      data:('especialidad='+guia+'&encargado='+selector+'&evento='+nuevo+'&codigo='+codigo),
      success:function(resp){                                  
                         	 if (resp=="1"){ 
                          		//$("#datos").html(borradom);
                          		alert("Evento asignado y almacenado");
                          		//cargar el selector para asignar los nuevos eventos  
                              //cargar y mostrar evento en tabla administrador consultor
                              cargar_espeven();                              
                          		}
                           	}
    });//fin ajax
  } 
});

//Evento sobre el boton para crear categorias de preguntas
$(document).on('click', '.btn_categoria', function(){
var categoria=document.getElementById("nueva_categoria").value;
if(categoria==""){alert("Se requiere una categoria de pregunta");}
if(categoria!=""){
    $.ajax({
      type:'POST',
      url:'ccategoria.php',  // c -> crear  cx->  c->crear x->nombredelarchivo
      data:('nueva_categoria='+categoria),
      success:function(resp){                                  
                           if (resp=="1"){ 
                              //$("#datos").html(borradom);
                              alert("Nueva categoria de pregunta creada");
                              cargar_categoria();
                              //cargar el selector para asignar los nuevos eventos                                
                              }
                            }
    });//fin ajax
}

});// fin boton categoria

//Evento sobre el boton para definir valores
$(document).on('click', '.btn_definir', function(){
  //valores
var v1=document.getElementById("valor1").value;
var v2=document.getElementById("valor2").value;
var v3=document.getElementById("valor3").value;
var v4=document.getElementById("valor4").value;
//condicional
if(v1==""){alert("Casilla vacia");document.getElementById("valor1").focus();}
if(v2==""){alert("Casilla vacia");document.getElementById("valor2").focus();}
if(v3==""){alert("Casilla vacia");document.getElementById("valor3").focus();}
if(v4==""){alert("Casilla vacia");document.getElementById("valor4").focus();}

if(v1!="" && v2!="" && v3!="" && v4!=""){
   $.ajax({
      type:'POST',
      url:'cvalores.php',  // c -> crear  cx->  c->crear x->nombredelarchivo
      data:('valor1='+v1+'&valor2='+v2+'&valor3='+v3+'&valor4='+v4),
      success:function(resp){                                  
                           if (resp=="11"){                             
                              alert("Valores definidos");                                                
                              }
                              if(resp=="12"){alert("No almacenado");}
                            }
    });//fin ajax
}//fin condicional
});
//fin boton de definicion de valores

//Evento sobre el boton para crear categorias de preguntas
$(document).on('click', '.btn_cpregunta', function(){
//capturar la categoria
var asignar_cat=document.getElementById("sel_categoria").value;
//capturar las preguntas
var ecpregunta=document.getElementById("ecpregunta").value;
var orpregunta=document.getElementById("orpregunta").value;
var capregunta=document.getElementById("capregunta").value;
var eapregunta=document.getElementById("eapregunta").value;

//condicionales
if(asignar_cat==""){alert("Se requiere una categoria de pregunta");}
if(ecpregunta==""){alert("Se requiere pregunta en campo EC");document.getElementById("ecpregunta").focus();}
if(orpregunta==""){alert("Se requiere pregunta en campo OR");document.getElementById("orpregunta").focus();}
if(capregunta==""){alert("Se requiere pregunta en campo CA");document.getElementById("capregunta").focus();}
if(eapregunta==""){alert("Se requiere pregunta en campo EA");document.getElementById("eapregunta").focus();}

//campos llenos
if(asignar_cat!="" && ecpregunta!="" && orpregunta!="" && capregunta!="" && eapregunta!=""){
    $.ajax({
      type:'POST',
      url:'cpregunta.php',  // c -> crear  cx->  c->crear x->nombredelarchivo
      data:('sel_categoria='+asignar_cat+'&ecpregunta='+ecpregunta+'&orpregunta='+orpregunta+'&capregunta='+capregunta+'&eapregunta='+eapregunta),
      success:function(resp){                                  
                           if (resp=="1"){ 
                              //$("#datos").html(borradom);
                              alert("Preguntas creadas");
                                                 
                              }
                              if(resp=="2"){alert("No almacenado");}
                            }
    });//fin ajax
}

});// fin boton categoria






});