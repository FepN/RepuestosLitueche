<?php
include('conexion.php');
if (isset($_POST['rut'])) {
$id = $_POST['rut'];
} else {
$id = "";
}
//OBTENEMOS LOS VALORES DEL PRODUCTO

$valores = mysqli_query($conexion,"SELECT * FROM clientes WHERE rut = '$id'");
$valores2 = mysqli_fetch_array($valores);

$datos = array(
				0 => $valores2['rut'], 
				1 => $valores2['nombres'], 
				2 => $valores2['apellidos'], 
				3 => $valores2['correo'],
				4 => $valores2['telefono'],
				
				);
				// Free result set
mysqli_free_result($valores);

mysqli_close($conexion);
echo json_encode($datos);
?>