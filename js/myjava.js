$(function(){
	$('#bd-desde').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = '../php/busca_producto_fecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
	$('#bd-hasta').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = '../php/busca_producto_fecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
	$('#nuevo-producto').on('click',function(){
		$('#formulario')[0].reset();
		$('#pro').val('Registro');
		$('#edi').hide();
		$('#reg').show();
		$('#registra-producto').modal({
			show:true,
			backdrop:'static'
		});
	});
	$('#nuevo-cliente').on('click',function(){
		$('#formulario')[0].reset();
		$('#pro').val('Registro');
		$('#edi').hide();
		$('#reg').show();
		$('#registra-producto').modal({
			show:true,
			backdrop:'static'
		});
	});
	
	$('#nuevo-modelo').on('click',function(){
		$('#formulario')[0].reset();
		$('#pro').val('Registro');
		$('#edi').hide();
		$('#reg').show();
		$('#registra-producto').modal({
			show:true,
			backdrop:'static'
		});
	});
	
	$('#nuevo-marca').on('click',function(){
		$('#formulario')[0].reset();
		$('#pro').val('Registro');
		$('#edi').hide();
		$('#reg').show();
		$('#registra-producto').modal({
			show:true,
			backdrop:'static'
		});
	});
	
	$('#editarProducto').on('click',function(){
		$('#formulario')[0].reset();
		$('#pro').val('Edicion');
		$('#edi').show();
		$('#reg').hide();
		$('#nom_rep').val('#nom_rep');
		$('#registra-producto').modal({
			show:true,
			backdrop:'static'
		});
	});
	
	$('#bs-prod').on('keyup',function(){
		var dato = $('#bs-prod').val();
		var url = '../php/busca_producto.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'dato='+dato,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	$('#bs-cli').on('keyup',function(){
		var dato = $('#bs-cli').val();
		var url = '../php/busca_cli.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'dato='+dato,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
	$('#bs-marca').on('keyup',function(){
		var dato = $('#bs-marca').val();
		var url = '../php/busca_marca.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'dato='+dato,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
	$('#bs-modelo').on('keyup',function(){
		var dato = $('#bs-modelo').val();
		var url = '../php/busca_modelo.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'dato='+dato,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
});
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("ya").deleteRow(i);
}

function AgregarCotizacion(){
	var url = '../php/agrega_cotizacion.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario').serialize(),
		success: function(registro){
			$('#formulario')[0].reset();
			$('#mensaje').addClass('bien').html('Cotizacion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
		}
	});
	return false;
}

function agregaRegistro(){
	var url = '../php/agrega_producto.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario').serialize(),
		success: function(registro){
			if ($('#pro').val() == 'Registro'){
			$('#formulario')[0].reset();
			$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}else{
			$('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}
		}
	});
	return false;
}
function agregaClientes(){
	var url = '../php/agrega_cliente.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario').serialize(),
		success: function(registro){
			if ($('#pro').val() == 'Registro'){
			$('#formulario')[0].reset();
			$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}else{
			$('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}
		}
	});
	return false;
}

function eliminarProducto(id){
	var url = '../php/elimina_producto.php';
	var pregunta = confirm('¿Esta seguro de eliminar este Repuesto?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'id_rep='+id,
		success: function(registro){
			$('#agrega-registros').html(registro);
			return false;
		}
	});
	return false;
	}else{
		return false;
	}
}

function agregaModelo(){
	var url = '../php/agrega_modelo.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario').serialize(),
		success: function(registro){
			if ($('#pro').val() == 'Registro'){
			$('#formulario')[0].reset();
			$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}else{
			$('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}
		}
	});
	return false;
}

function agregaMarca(){
	var url = '../php/agrega_marca.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario').serialize(),
		success: function(registro){
			if ($('#pro').val() == 'Registro'){
			$('#formulario')[0].reset();
			$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}else{
			$('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}
		}
	});
	return false;
}

function agregaVehiculo(){
	var url = '../php/agrega_vehiculo.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario').serialize(),
		success: function(registro){
			if ($('#pro').val() == 'Registro'){
			$('#formulario')[0].reset();
			$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}else{
			$('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}
		}
	});
	return false;
}

function eliminarCliente(id){
	var url = '../php/elimina_cliente.php';
	var pregunta = confirm('¿Esta seguro de eliminar este Cliente?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'rut='+id,
		success: function(registro){
			$('#agrega-registros').html(registro);
			return false;
		}
	});
	return false;
	}else{
		return false;
	}
}

function eliminarModelo(id){
	var url = '../php/elimina_modelo.php';
	var pregunta = confirm('¿Esta seguro de eliminar este Modelo?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'rut='+id,
		success: function(registro){
			$('#agrega-registros').html(registro);
			return false;
		}
	});
	return false;
	}else{
		return false;
	}
}

function eliminarMarca(id){
	var url = '../php/elimina_marca.php';
	var pregunta = confirm('¿Esta seguro de eliminar esta Marca?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'rut='+id,
		success: function(registro){
			$('#agrega-registros').html(registro);
			return false;
		}
	});
	return false;
	}else{
		return false;
	}
}

function editarProducto(id){
	$('#formulario')[0].reset();
	var url = '../php/edita_producto.php';
	var nomrep = $('#nom_rep').val();
		$.ajax({
		type:'POST',
		url:url,
		data:'id_rep='+id,
		success: function(valores){
				var datos = eval(valores);
				$('#reg').hide();
				$('#edi').show();
				$('#pro').val('Edicion');
				$('#id_rep').val(id);
				
				$('#nom_rep').val(datos[0]);
				$('#descripcion').val(datos[1]);
				$('#categoria').val(datos[2]);
				$('#valor').val(datos[3]);
				$('#stock').val(datos[4]);
				$('#fabricante').val(datos[5]);
				$('#registra-producto').modal({
					show:true,
					backdrop:'static'
				});
			return false;
		}
	});
	return false;
}

function editarCliente(id){
	$('#formulario')[0].reset();
	var url = '../php/edita_cliente.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'rut='+id,
		success: function(valores){
				var datos = eval(valores);
				$('#reg').hide();
				$('#edi').show();
				$('#pro').val('Edicion');
				$('#rut').val(id);
				
				$('#nombres ').val(datos[1]);
				$('#apellidos').val(datos[2]);
				$('#correo').val(datos[3]);
				$('#telefono').val(datos[4]);
				$('#registra-producto').modal({
					show:true,
					backdrop:'static'
				});
			return false;
		}
	});
	return false;
}

$(document).ready(function(){  
      $('#marca').change(function(){  
           var marca_id = $(this).val();  
           $.ajax({  
                url:"../php/fetch_modelo.php",  
                method:"POST",  
                data:{marcaId:marca_id},  
                dataType:"text",  
                success:function(data)  
                {  
                     $('#modelo').html(data);  
                }  
           });  
      });  
 });  
 
$(document).ready(function(){  
      $('#modelo').change(function(){  
           var modelo_id = $(this).val();  
           $.ajax({  
                url:"../php/llenatabla2.php",  
                method:"POST",  
                data:{modeloId:modelo_id},  
                dataType:"text",  
                success:function(data)  
                {  
                     $('#tabb').html(data);  
                }  
           });  
      });  
 });  
 
 /* form submit */
    function submitForm()
    {  
    var data = $("#register-form").serialize();
    
    $.ajax({
    
    type : 'POST',
    url  : 'register.php',
    data : data,
    beforeSend: function()
    { 
     $("#error").fadeOut();
     $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; enviando ...');
    },
    success :  function(data)
         {      
        if(data==1){
         
         $("#error").fadeIn(1000, function(){
           
           
           $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Correo en uso !</div>');
           
           $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Crear cuenta');
          
         });
                    
        }
        else if(data=="registered")
        {
         
         $("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Registrando ...');
         setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("success.php"); }); ',5000);
         
        }
        else{
          
         $("#error").fadeIn(1000, function(){
           
      $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
           
         $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Crear Cuenta');
          
         });
           
        }
         }
    });
    return false;
  }
    /* form submit */
	
	
    $("#register-form").validate({
      rules:
   {
   user_name: {
      required: true,
   minlength: 3
   },
   password: {
   required: true,
   minlength: 8,
   maxlength: 15
   },
   cpassword: {
   required: true,
   equalTo: '#password'
   },
   user_email: {
            required: true,
            email: true
            },
    },
       messages:
    {
            user_name: "Falta ingresar nombres ",
            password:{
                      required: "Falta contraseña",
                      minlength: "Contraseña debe ser minimo de 8 caracteres"
                     },
            user_email: "ingresar correo electrónico valido",
   cpassword:{
      required: "Reescriba contraseña",
      equalTo: "Contraseñas Distintas !"
       }
       },
    submitHandler: submitForm 
       });