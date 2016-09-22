$(document).ready(function() {
//solo visualiza el modal oculto del paticipante
$(document).on('click', '.btn_mos', function(){

})

  var sumaec=0;
  var sumaor=0;
  var sumaca=0;
  var sumaea=0;
  
  var bandera1=0;
  var bandera2=0;
  var bandera3=0;
  var bandera4=0;
  var bandera5=0;
  var bandera6=0;
  var bandera7=0;
  var bandera8=0;
  var bandera9=0;
  var bandera10=0;
  var bandera11=0;
  var bandera12=0;

  

  var cola1=0;var colb1=0; var colc1=0; var cold1=0;
  var cola2=0;var colb2=0; var colc2=0; var cold2=0;
  var cola3=0;var colb3=0; var colc3=0; var cold3=0;
  var cola4=0;var colb4=0; var colc4=0; var cold4=0;
  var cola5=0;var colb5=0; var colc5=0; var cold5=0;
  var cola6=0;var colb6=0; var colc6=0; var cold6=0;
  var cola7=0;var colb7=0; var colc7=0; var cold7=0;
  var cola8=0;var colb8=0; var colc8=0; var cold8=0;
  var cola9=0;var colb9=0; var colc9=0; var cold9=0;
  var cola10=0;var colb10=0; var colc10=0; var cold10=0;
  var cola11=0;var colb11=0; var colc11=0; var cold11=0;
  var cola12=0;var colb12=0; var colc12=0; var cold12=0;

      //sumar
$(document).on('click', '.btn_evaluar', function(){
  cola1=document.getElementById("cola1").value;
  cola2=document.getElementById("cola2").value;
  cola3=document.getElementById("cola3").value;
  cola4=document.getElementById("cola4").value;
  cola5=document.getElementById("cola5").value;
  cola6=document.getElementById("cola6").value;
  cola7=document.getElementById("cola7").value;
  cola8=document.getElementById("cola8").value;
  cola9=document.getElementById("cola9").value;
  cola10=document.getElementById("cola10").value;
  cola11=document.getElementById("cola11").value;
  cola12=document.getElementById("cola12").value;

  colb1=document.getElementById("colb1").value;
  colb2=document.getElementById("colb2").value;
  colb3=document.getElementById("colb3").value;
  colb4=document.getElementById("colb4").value;
  colb5=document.getElementById("colb5").value;
  colb6=document.getElementById("colb6").value;
  colb7=document.getElementById("colb7").value;
  colb8=document.getElementById("colb8").value;
  colb9=document.getElementById("colb9").value;
  colb10=document.getElementById("colb10").value;
  colb11=document.getElementById("colb11").value;
  colb12=document.getElementById("colb12").value;

  colc1=document.getElementById("colc1").value;
  colc2=document.getElementById("colc2").value;
  colc3=document.getElementById("colc3").value;
  colc4=document.getElementById("colc4").value;
  colc5=document.getElementById("colc5").value;
  colc6=document.getElementById("colc6").value;
  colc7=document.getElementById("colc7").value;
  colc8=document.getElementById("colc8").value;
  colc9=document.getElementById("colc9").value;
  colc10=document.getElementById("colc10").value;
  colc11=document.getElementById("colc11").value;
  colc12=document.getElementById("colc12").value;

  cold1=document.getElementById("cold1").value;
  cold2=document.getElementById("cold2").value;
  cold3=document.getElementById("cold3").value;
  cold4=document.getElementById("cold4").value;
  cold5=document.getElementById("cold5").value;
  cold6=document.getElementById("cold6").value;
  cold7=document.getElementById("cold7").value;
  cold8=document.getElementById("cold8").value;
  cold9=document.getElementById("cold9").value;
  cold10=document.getElementById("cold10").value;
  cold11=document.getElementById("cold11").value;
  cold12=document.getElementById("cold12").value;
  
   if(cola1==colb1 || cola1==colc1 || cola1==cold1 || colb1==cola1 || colb1==colc1 || colb1==cold1 || colc1==cola1 || colc1==colb1 || colc1==cold1 || cold1==cola1 || cold1==colb1 || cold1==colc1){   
    alert("No pueden repetirse valores");
     bandera1=bandera1+1;
     document.getElementById("cola1").focus();
   }
   if(cola2==colb2 || cola2==colc2 || cola2==cold2 || colb2==cola2 || colb2==colc2 || colb2==cold2 || colc2==cola2 || colc2==colb2 || colc2==cold2 || cold2==cola2 || cold2==colb2 || cold2==colc2){   
    alert("No pueden repetirse valores");
     bandera2=bandera2+1;
     document.getElementById("cola2").focus();
   }
   if(cola3==colb3 || cola3==colc3 || cola3==cold3 || colb3==cola3 || colb3==colc3 || colb3==cold3 || colc3==cola3 || colc3==colb3 || colc3==cold3 || cold3==cola3 || cold3==colb3 || cold3==colc3){   
    alert("No pueden repetirse valores");
     bandera3=bandera3+1;
     document.getElementById("cola3").focus();
   }
   if(cola4==colb4 || cola4==colc4 || cola4==cold4 || colb4==cola4 || colb4==colc4 || colb4==cold4 || colc4==cola4 || colc4==colb4 || colc4==cold4 || cold4==cola4 || cold4==colb4 || cold4==colc4){   
    alert("No pueden repetirse valores");
     bandera4=bandera4+1;
     document.getElementById("cola4").focus();
   }
   if(cola5==colb5 || cola5==colc5 || cola5==cold5 || colb5==cola5 || colb5==colc5 || colb5==cold5 || colc5==cola5 || colc5==colb5 || colc5==cold5 || cold5==cola5 || cold5==colb5 || cold5==colc5){   
    alert("No pueden repetirse valores");
     bandera5=bandera5+1;
     document.getElementById("cola5").focus();
   }  
   if(cola6==colb6 || cola6==colc6 || cola6==cold6 || colb6==cola6 || colb6==colc6 || colb6==cold6 || colc6==cola6 || colc6==colb6 || colc6==cold6 || cold6==cola6 || cold6==colb6 || cold6==colc6){   
    alert("No pueden repetirse valores");
     bandera6=bandera6+1;
     document.getElementById("cola6").focus();
   }  
   if(cola7==colb7 || cola7==colc7 || cola7==cold7 || colb7==cola7 || colb7==colc7 || colb7==cold7 || colc7==cola7 || colc7==colb7 || colc7==cold7 || cold7==cola7 || cold7==colb7 || cold7==colc7){   
    alert("No pueden repetirse valores");
     bandera7=bandera7+1;
     document.getElementById("cola7").focus();
   }  
   if(cola8==colb8 || cola8==colc8 || cola8==cold8 || colb8==cola8 || colb8==colc8 || colb8==cold8 || colc8==cola8 || colc8==colb8 || colc8==cold8 || cold8==cola8 || cold8==colb8 || cold8==colc8){   
    alert("No pueden repetirse valores");
     bandera8=bandera8+1;
     document.getElementById("cola8").focus();
   }  
   if(cola9==colb9 || cola9==colc9 || cola9==cold9 || colb9==cola9 || colb9==colc9 || colb9==cold9 || colc9==cola9 || colc9==colb9 || colc9==cold9 || cold9==cola9 || cold9==colb9 || cold9==colc9){   
    alert("No pueden repetirse valores");
     bandera9=bandera9+1;
     document.getElementById("cola9").focus();
   }  
   if(cola10==colb10 || cola10==colc10 || cola10==cold10 || colb10==cola10 || colb10==colc10 || colb10==cold10 || colc10==cola10 || colc10==colb10 || colc10==cold10 || cold10==cola10 || cold10==colb10 || cold10==colc10){   
    alert("No pueden repetirse valores");
     bandera10=bandera10+1;
     document.getElementById("cola10").focus();
   }  
   if(cola11==colb11 || cola11==colc11 || cola11==cold11 || colb11==cola11 || colb11==colc11 || colb11==cold11 || colc11==cola11 || colc11==colb11 || colc11==cold11 || cold11==cola11 || cold11==colb11 || cold11==colc11){   
    alert("No pueden repetirse valores");
     bandera11=bandera11+1;
     document.getElementById("cola11").focus();
   }  
   if(cola12==colb12 || cola12==colc12 || cola12==cold12 || colb12==cola12 || colb12==colc12 || colb12==cold12 || colc12==cola12 || colc12==colb12 || colc12==cold12 || cold12==cola12 || cold12==colb12 || cold12==colc12){   
    alert("No pueden repetirse valores");
     bandera12=bandera12+1;
     document.getElementById("cola12").focus();
   }

   if( bandera1==0 && bandera2==0 && bandera3==0 && bandera4==0 && bandera5==0 && bandera6==0 && bandera7==0 && bandera8==0 && bandera9==0 && bandera10==0 && bandera11==0 &&bandera12==0) { 
    var a1=parseInt(cola1); var a2=parseInt(cola2); var a3=parseInt(cola3); var a4=parseInt(cola4); var a5=parseInt(cola5); var a6=parseInt(cola6);
    var a7=parseInt(cola7); var a8=parseInt(cola8); var a9=parseInt(cola9); var a10=parseInt(cola10); var a11=parseInt(cola11); var a12=parseInt(cola12);

    var b1=parseInt(colb1); var b2=parseInt(colb2); var b3=parseInt(colb3); var b4=parseInt(colb4); var b5=parseInt(colb5); var b6=parseInt(colb6);
    var b7=parseInt(colb7); var b8=parseInt(colb8); var b9=parseInt(colb9); var b10=parseInt(colb10); var b11=parseInt(colb11); var b12=parseInt(colb12);

    var c1=parseInt(colc1); var c2=parseInt(colc2); var c3=parseInt(colc3); var c4=parseInt(colc4); var c5=parseInt(colc5); var c6=parseInt(colc6);
    var c7=parseInt(colc7); var c8=parseInt(colc8); var c9=parseInt(colc9); var c10=parseInt(colc10); var c11=parseInt(colc11); var c12=parseInt(colc12);

    var d1=parseInt(cold1); var d2=parseInt(cold2); var d3=parseInt(cold3); var d4=parseInt(cold4); var d5=parseInt(cold5); var d6=parseInt(cold6);
    var d7=parseInt(cold7); var d8=parseInt(cold8); var d9=parseInt(cold9); var d10=parseInt(cold10); var d11=parseInt(cold11); var d12=parseInt(cold12);
    
    
  sumaec=a1+a2+a3+a4+a5+a6+a7+a8+a9+a10+a11+a12;
  sumaor=b1+b2+b3+b4+b5+b6+b7+b8+b9+b10+b11+b12;
  sumaca=c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12;
  sumaea=d1+d2+d3+d4+d5+d6+d7+d8+d9+d10+d11+d12;
  //alert(sumaec);
  //alert(sumaor);
  //alert(sumaca);
  //alert(sumaea);
  //mostrar modal
  //boton para el evento de almacenar al participante y sus resultados
  $('#modalparticipante').modal({
      show:true,
      backdrop:'static'
    }); 
$(document).on('click', '.btn_almacenar', function(){

  var irnombre1=document.getElementById("nombre1").value;
  var irnombre2=document.getElementById("nombre2").value;
  var irapellido1=document.getElementById("apellido1").value;
  var irapellido2=document.getElementById("apellido2").value;
  var ircodigo=document.getElementById("codevento").value;
  var curso=document.getElementById("curso").value;
if(ircodigo!=""){
  $.ajax({
      type:'POST',
      url:'evaluar.php',
      data:('1nombre='+irnombre1+'&2nombre='+irnombre2+'&1ape='+irapellido1+'&2ape='+irapellido2+'&ccodigo='+ircodigo+'&notaec='+sumaec+'&notaor='+sumaor+'&notaca='+sumaca+'&notaea='+sumaea+'&elcurso='+curso),
      success:function(res){
      if (res==1){
        alert("Datos enviados al sistema");
        alert("Evaluacion finalizada");
        //redireccionar a pagina de inicio
      }
      if(res==2){
        alert("El codigo del evento no coincide con el codigo dentro del sistema");
      }

      } 

    });//fin ajax 



}//fin envio de datos

});

    }
    //sumaac=(parseInt(cola1))+(parseInt(colb1))+(parseInt(colc1))+(parseInt(cold1));
    //alert(sumaac);

   
/*   var i;
  for (i=0;i<=12;i++){ 
   w=document.getElementById("ress1").value;   
   cola[i]=w;
 }
 */


   //x=document.getElementById("ress1").value;
   //var num1=parseInt(w);
  // var num2=parseInt(x);
   //suma=num1+num2;
   
   /*
   var y=document.getElementById("ress3").value;
   var z=document.getElementById("ress4").value;

   if(w==x || w==y || w==z || x==w || x==y || x==z || y==w || y==x || y==z || z==w || z==x || z==y){
    alert("No pueden repetirse valores")
   }else{
    
   suma=w+x+y+z;
   
   alert(suma);
   } 
  }*/
})

})