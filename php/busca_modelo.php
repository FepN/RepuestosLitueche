<?php
include('conexion.php');

$dato = $_POST['dato'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysqli_query($conexion,"SELECT * FROM modelo WHERE id_modelo LIKE '%$dato%' ORDER BY id_modelo ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="200">Id_Modelo</th>
				<th width="200">Id_Marca</th>
                <th width="200">Modelo</th>

            </tr>';
if(mysqli_num_rows($registro)>0){
	while($registro2 = mysqli_fetch_array($registro,MYSQLI_ASSOC)){
		echo '<tr>
				<td>'.$registro2['id_modelo'].'</td>
				<td>'.$registro2['id_marca'].'</td>
				<td>'.$registro2['nom_modelo'].'</td>

			
				<td><a href="javascript:editarModelo('.$registro2['id_modelo'].');" class="glyphicon glyphicon-edit"></a> <a href="javascript:eliminarModelo('.$registro2['id_modelo'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>