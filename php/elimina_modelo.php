<?php
include('conexion.php');

if (isset($_REQUEST['id_rep'])) {
$id = $_REQUEST['id_rep'];
} else {
$id = "";
}

//ELIMINAMOS EL PRODUCTO

mysqli_query($conexion,"DELETE FROM modelo WHERE id_modelo = '$id'");

//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysqli_query($conexion,"SELECT * FROM modelo ORDER BY id_modelo ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="300">Cod_Modelo</th>
                <th width="200">Cod_Marca</th>
                <th width="150">Modelo</th>

				
            </tr>';
	while($registro2 = mysqli_fetch_array($registro,MYSQLI_ASSOC)){
		echo '<tr>
				<td>'.$registro2['id_modelo'].'</td>
				<td>'.$registro2['id_marca'].'</td>
				<td>'.$registro2['nom_modelo'].'</td>

				<td><a href="javascript:editarModelo('.$registro2['id_modelo'].');" class="glyphicon glyphicon-edit"></a> <a href="javascript:eliminarModelo('.$registro2['id_modelo'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
echo '</table>';
?>