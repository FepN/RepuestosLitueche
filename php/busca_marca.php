<?php
include('conexion.php');

$dato = $_POST['dato'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysqli_query($conexion,"SELECT * FROM marca WHERE nom_marca LIKE '%$dato%' ORDER BY id_marca ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="200">Id_Marca</th>
                <th width="200">Marca</th>

            </tr>';
if(mysqli_num_rows($registro)>0){
	while($registro2 = mysqli_fetch_array($registro,MYSQLI_ASSOC)){
		echo '<tr>
				<td>'.$registro2['id_marca'].'</td>
				<td>'.$registro2['nom_marca'].'</td>

			
				<td><a href="javascript:editarMarca('.$registro2['id_marca'].');" class="glyphicon glyphicon-edit"></a> <a href="javascript:eliminarMarca('.$registro2['id_marca'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>