<?php
include('conexion.php');

$dato = $_POST['dato'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysqli_query($conexion,"SELECT * FROM repuestos WHERE nom_rep LIKE '%$dato%' OR categoria LIKE '%$dato%' ORDER BY id_rep ASC");

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
if(mysqli_num_rows($registro)>0){
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
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>