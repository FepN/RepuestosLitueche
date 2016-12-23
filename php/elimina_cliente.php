<?php
include('conexion.php');

if (isset($_REQUEST['rut'])) {
$id = $_REQUEST['rut'];
} else {
$id = "";
}

//ELIMINAMOS EL PRODUCTO

mysqli_query($conexion,"DELETE FROM clientes WHERE rut = '$id'");

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