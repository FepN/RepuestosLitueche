<?php
include('conexion.php');

if (isset($_REQUEST['id_marca'])) {
$id = $_REQUEST['id_marca'];
} else {
$id = "";
}

//ELIMINAMOS EL PRODUCTO

mysqli_query($conexion,"DELETE FROM marca WHERE id_marca = '$id'");

//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysqli_query($conexion,"SELECT * FROM modelo ORDER BY id_modelo ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>

                <th width="200">Cod_Marca</th>
                <th width="150">Marca</th>

				
            </tr>';
	while($registro2 = mysqli_fetch_array($registro,MYSQLI_ASSOC)){
		echo '<tr>

				<td>'.$registro2['id_marca'].'</td>
				<td>'.$registro2['nom_marca'].'</td>

				<td><a href="javascript:editarMarca('.$registro2['id_marca'].');" class="glyphicon glyphicon-edit"></a> <a href="javascript:eliminarMarca('.$registro2['id_marca'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
echo '</table>';
?>