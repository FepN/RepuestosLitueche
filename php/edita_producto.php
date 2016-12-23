<?php
include('conexion.php');
if (isset($_POST['id_rep'])) {
$id = $_POST['id_rep'];
} else {
$id = "";
}
//OBTENEMOS LOS VALORES DEL PRODUCTO

$valores = mysqli_query($conexion,"SELECT * FROM repuestos WHERE id_rep = '$id'");
$valores2 = mysqli_fetch_array($valores);

$datos = array(
				0 => $valores2['nom_rep'], 
				1 => $valores2['descripcion'], 
				2 => $valores2['categoria'], 
				3 => $valores2['valor'],
				4 => $valores2['stock'],
				5 => $valores2['fabricante']
				
				);
				// Free result set
mysqli_free_result($valores);

mysqli_close($conexion);
echo json_encode($datos);
?>