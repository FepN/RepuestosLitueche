//validacion Login
 $( document ).ready(function() {
    
  $('#envia').click(function(){
      var user = $('.correo').val();
      var pass = $('.clave').val();
   
      if(user != '' && pass != ''){
 
       $.ajax({
          url: '../controlador/login.php',
          method: 'POST',
          data: {correo: user, clave: pass},
          success: function(msg){

           if(msg=='1'){

          $('#mensaje').html('Datos incorrectos');
        }else{

          window.location = msg;
        }
      }

        });
    
      }else{
         $('#mensaje').html('Ingrese los datos');
      }
  });

});

//Registro de usuario

$( document ).ready(function(e) {  
  $('#registrar').click(function(){
      
      var cedula = $('#cedula').val();
      var nombre = $('#nombre').val();
      var apellido = $('#apellido').val();
      var usuario = $('#usuario').val();
      var pass1 = $('#pass1').val();
      var pass2 = $('#pass2').val();
	  var telef = $('#telef').val();
   var sEmail = $('#usuario').val();
   
  
   
if (validateEmail(sEmail)) {

}
else {
alert('Correo invalido');
e.preventDefault();
}
      if(cedula != '' && nombre != '' && apellido != '' && usuario != '' && pass1 != '' && pass2 != '' && telef != ''){
 
       $.ajax({
          url: '../controlador/crear.php',
          method: 'POST',
          data: {cedula: cedula, nombre: nombre, apellido: apellido, usuario: usuario, pass1: pass1, pass2: pass2,telef: telef},
          success: function(msg){
           if(msg=='1'){

          $('#mensaje').html('Error en los datos');
        }else if(msg == '2'){
            
            $('#mensaje').html('Las claves ingresadas no coincidenxx');
         
        }else{
             window.location = msg;
        }
      }

        });
    
      }else{
         $('#mensaje').html('Ingrese los datos');
      }
  });

});

//edit.usuario
$(function(){

    //acknowledgement message

    var message_status = $("#status");

    $("td[contenteditable=true]").blur(function(){

        var field_userid = $(this).attr("id") ;

        var value = $(this).text() ;

        $.post('ajax.php' , field_userid + "=" + value, function(data){

            if(data != '')

            {

                message_status.show();
             message_status.text(data);

                //hide the message

                setTimeout(function(){message_status.hide()},3000);

            }

        });

    });

});







// Function that validates email address through a regular expression.
function validateEmail(sEmail) {
var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
if (filter.test(sEmail)) {
return true;
}
else {
return false;
}
}

