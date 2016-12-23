<?php
include('conexion.php');


if (isset($_POST['id_marca'])) {
$id_marca = $_POST['id_marca'];
} else {
$id_marca = "";
}
if (isset($_POST['nom_marca'])) {
$nom_marca = $_POST['nom_marca'];
} else {
$nom_marca = "";
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
		mysqli_query($conexion,"INSERT INTO marca (id_marca, nom_marca)VALUES('$id_marca','$nom_marca')");
	break;
	
	case 'Edicion':
		mysqli_query($conexion,"UPDATE marca SET id_marca = '$id_marca',nom_marca ='$nom_marca' WHERE id_marca ='$id_marca'");
	break;
}}else{
	echo 'gg';
	$proceso='';}


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysqli_query($conexion,"SELECT * FROM marca ORDER BY id_marca ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
				<th width="200">Id_Marca</th>
                <th width="200">Marca</th>
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