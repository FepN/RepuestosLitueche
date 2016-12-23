<?php
include('conexion.php');

if (isset($_POST['id_rep'])) {
$id = $_POST['id_rep'];
$mod=$_POST['id_rep'];
} else {
$id = "";
}
if (isset($_POST['nom_rep'])) {
$nombre = $_POST['nom_rep'];
} else {
$nombre = "";
}
if (isset($_POST['descripcion'])) {
$descr = $_POST['descripcion'];
} else {
$descr = "";
}
if (isset($_POST['tipo'])) {
$tipo = $_POST['tipo'];
} else {
$tipo = "";
}

if (isset($_POST['valor'])) {
$valor = $_POST['valor'];
} else {
$valor = "";
}

if (isset($_POST['stock'])) {
$stock = $_POST['stock'];
} else {
$stock = "";
}
if (isset($_POST['fabricante'])) {
$fabricante = $_POST['fabricante'];
} else {
$fabricante = "";
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
		mysqli_query($conexion,"INSERT INTO repuestos (id_modelo,nom_rep, descripcion, categoria, valor, stock,fabricante)VALUES('$mod','$nombre','$descr','$tipo','$valor','$stock', '$fabricante')");
	break;
	
	case 'Edicion':
		mysqli_query($conexion,"UPDATE repuestos SET nom_rep = '$nombre', descripcion = '$descr', categoria = '$tipo', valor = '$valor', stock = '$stock',fabricante = '$fabricante' WHERE id_rep = '$id'");
	break;
}}else{
	echo 'gg';
	$proceso='';}


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysqli_query($conexion,"SELECT * FROM repuestos ORDER BY id_rep ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="300">Cod Rep</th>
                <th width="200">Cod Modelo</th>
                <th width="150">Nom Rep</th>
                <th width="150">Categoriar</th>
				<th width="50">Descripcion</th>
				<th width="150">Valor</th>
				<th width="150">Stock</th>
				<th width="150">Fabricante</th>
            </tr>';
	while($registro2 = mysqli_fetch_array($registro,MYSQLI_ASSOC)){
		echo '<tr>
				<td>'.$registro2['id_rep'].'</td>
				<td>'.$registro2['id_modelo'].'</td>
				<td>'.$registro2['nom_rep'].'</td>
				<td>'.$registro2['categoria'].'</td>
				<td>'.$registro2['descripcion'].'</td>
				<td>'.$registro2['valor'].'</td>
				<td>'.$registro2['stock'].'</td>
				<td>'.$registro2['fabricante'].'</td>
				<td><a href="javascript:editarProducto('.$registro2['id_rep'].');" class="glyphicon glyphicon-edit"></a> <a href="javascript:eliminarProducto('.$registro2['id_rep'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
echo '</table>';
?>