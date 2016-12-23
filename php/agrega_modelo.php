<?php
include('conexion.php');

if (isset($_POST['id_modelo'])) {
$id_modelo = $_POST['id_modelo'];
} else {
$id_modelo = "";
}
if (isset($_POST['id_marca'])) {
$id_marca = $_POST['id_marca'];
} else {
$id_marca = "";
}
if (isset($_POST['nom_modelo'])) {
$nom_modelo = $_POST['nom_modelo'];
} else {
$nom_modelo = "";
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
		mysqli_query($conexion,"INSERT INTO modelo (id_modelo, id_marca, nom_modelo)VALUES('$id_modelo','$id_marca','$nom_modelo')");
	break;
	
	case 'Edicion':
		mysqli_query($conexion,"UPDATE modelo SET id_modelo = '$id_modelo', id_marca = '$id_marca',nom_modelo ='$nom_modelo' WHERE id_modelo ='$id_modelo'");
	break;
}}else{
	echo 'gg';
	$proceso='';}


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysqli_query($conexion,"SELECT * FROM modelo ORDER BY id_modelo ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="200">Id_Modelo</th>
				<th width="200">Id_Marca</th>
                <th width="200">Modelo</th>
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