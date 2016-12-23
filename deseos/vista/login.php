<?php
	session_start();
	session_destroy();
?>

<html> 
<head>
	<meta charset = "UTF-8">
	<title>Inicio</title>
	<link href = "../vista/css/login.css" rel = "stylesheet" type = "text/css">
   
 
</head>
<body>

<section id= "formulario">
	<center>
			<h1>Iniciar Sesión<h1>
			<br><br>
			<div class = "login">
			<form action = "../controlador/login.php" method = "POST">

			<fieldset>
				<legend>Login</legend>

				<p>
						<input type = "text" class="correo" placeholder = "Correo" title = "Se nesecita un correo" required>
				</p>

				<p>
						<input type = "password" class="clave" placeholder = "Contraseña" title = "Se nesecita una contraseña" required>
				</p>
				<p>
						<button type="button" id="envia" >Ingresar</button>
						<input type = "reset" value ="Limpiar">
				</p>
                <p id="mensaje" style="color: red;"></p>

				<p>
				<a href = "crear.php">
					Crear Cuenta
				</a>
				</p>



			</fieldset>
			</form>
			</div>


	</center>
</section>
</body>
 <script type="text/javascript" src="/gestion/js/jquery.js"></script>
    <script type="text/javascript" src="/gestion/js/operaciones.js"></script>
</html>