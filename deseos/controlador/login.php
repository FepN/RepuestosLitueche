<?php
include("../modelo/conexion.php");
$user ="";
$pass="";
if (isset($_POST['correo'])) {
$user = $_POST['correo'];
}
if (isset($_POST['clave'])) {
$pass = $_POST['clave'];
}
//echo $user,$pass;
$wish = new conexion; 
$wish->login($user, $pass);
$wish->cerrar(); 




?>