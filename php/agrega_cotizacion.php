<?php
include('conexion.php');
if (isset($_POST['nom_rep'])) {
$nomr = $_POST['nom_rep'];
} else {
$nomr = "";
}
if (isset($_POST['id_rep'])) {
$idrep = $_POST['id_rep'];
} else {
$idrep = "";
}
if (isset($_POST['descripcion'])) {
$descripcion = $_POST['descripcion'];
} else {
$descripcion = "";
}
if (isset($_POST['valor'])) {
$valor = $_POST['valor'];
} else {
$valor = "";
}
$dato = $_SESSION['email'];
date_default_timezone_set("Chile/Continental");
$fecha = date("Y-m-d H:i:s");

//BUSCAR DATOS 
$dato2 = mysqli_query($conexion,"SELECT * FROM clientes where correo = '".$dato."'");
$registro6 = mysqli_fetch_array($dato2,MYSQLI_ASSOC);
$rut=$registro6['rut'];


//GUARDAR COTIZACION	
		mysqli_query($conexion,"INSERT INTO cotizacion (rut,total,fecha)VALUES('$rut','$total','$fecha')");
		
		//sacar id_cot
		$registro3 = mysqli_query($conexion,"SELECT id_cot FROM cotizacion where rut = $rut");
		$registro4 = mysqli_fetch_array($registro3,MYSQLI_ASSOC);
        $id_cot=$registro4['id_cot'];
	    mysqli_query($conexion,"INSERT INTO detalle_cotizacion (id_cot,id_rep,cantidad,subtotal)VALUES('$id_cot','$id_rep','$cantidad',$subtotal')");
		
//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS


$registro = mysqli_query($conexion,"SELECT * FROM detalle_cotizacion where id_cot = $id_cot");
echo '<table>';
while($registro2 = mysqli_fetch_array($registro,MYSQLI_ASSOC)){
	echo '<tr>
                        <td>'.$registro2['rut'].'</td>
						<td>'.$registro2['pass'].'</td>
						<td>'.$registro2['nombres'].'</td>
						<td>'.$registro2['apellidos'].'</td>
						<td>'.$registro2['correo'].'</td>
						<td>'.$registro2['telefono'].'</td>	
						</tr>';	
}
echo '</table>';
?>