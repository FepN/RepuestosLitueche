<?php
include('conexion.php');

$dato = $_POST['dato'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysqli_query($conexion,"SELECT * FROM clientes WHERE nombres LIKE '%$dato%' OR rut LIKE '%$dato%' OR correo LIKE '%$dato%' ORDER BY rut ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="200">Rut</th>
                <th width="200">Nombres</th>
                <th width="200">Apellidos</th>
                <th width="200">Correo</th>
				<th width="200">Telefono</th>
            </tr>';
if(mysqli_num_rows($registro)>0){
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
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>