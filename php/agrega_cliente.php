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






//VERIFICAMOS EL PROCESO
if (!empty($_POST)) {
switch($proceso){
	case 'Registro':
		mysqli_query($conexion,"INSERT INTO clientes (rut, nombres, apellidos, correo, telefono)VALUES('$rut','$nombres','$apellidos','$correo','$telefono')");
	break;
	
	case 'Edicion':
		mysqli_query($conexion,"UPDATE clientes SET rut = '$rut', nombres = '$nombres', apellidos = '$apellidos', correo = '$correo', telefono = '$telefono' WHERE rut = '$rut'");
	break;
}}else{
	echo 'gg';
	$proceso='';}


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysqli_query($conexion,"SELECT * FROM clientes ORDER BY rut ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="200">Rut</th>
                <th width="200">Nombres</th>
                <th width="200">Apellidos</th>
                <th width="200">Correo</th>
				<th width="200">Telefono</th>
            </tr>';
	while($registro2 = mysqli_fetch_array($registro,MYSQLI_ASSOC)){
		echo '<tr>
				<td>'.$registro2['rut'].'</td>
				<td>'.$registro2['nombres'].'</td>
				<td>'.$registro2['apellidos'].'</td>
				<td>'.$registro2['correo'].'</td>
				<td>'.$registro2['telefono'].'</td>
			
				<td><a href="javascript:editarCliente('.$registro2['rut'].');" class="glyphicon glyphicon-edit"></a> <a href="javascript:eliminarCliente('.$registro2['rut'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
echo '</table>';
?>