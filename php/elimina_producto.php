<?php
include('conexion.php');

if (isset($_REQUEST['id_rep'])) {
$id = $_REQUEST['id_rep'];
} else {
$id = "";
}

//ELIMINAMOS EL PRODUCTO

mysqli_query($conexion,"DELETE FROM repuestos WHERE id_rep = '$id'");

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