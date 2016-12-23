<?php
include('conexion.php');

if (isset($_POST['rut'])) {
$rut = $_POST['rut'];
} else {
$rut = "";
}
if (isset($_POST['nombres'])) {
$nombres = $_POST['nombres'];
} else {
$nombres = "";
}
if (isset($_POST['apellidos'])) {
$apellidos = $_POST['apellidos'];
} else {
$apellidos = "";
}
if (isset($_POST['email'])) {
$correo = $_POST['email'];
} else {
$correo = "";
}

if (isset($_POST['telefono'])) {
$telefono = $_POST['telefono'];
} else {
$telefono = "";
}
if (isset($_POST['pro'])) {
$proceso = $_POST['pro'];
} else {
$proceso = "";
}
if (isset($_POST['dv'])) {
$dv = $_POST['dv'];
} else {
$dv = "";
}

$sqli = "select * from clientes where correo = '".$correo."'";
	$result = mysqli_query($conexion,$sqli);
	$fila = mysqli_num_rows($result);
	
	if($fila >0){
		echo 1;
		}else if($fila =1){
	echo 1;
}
		
?>