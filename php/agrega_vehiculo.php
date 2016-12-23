<?php session_start();
include('conexion.php');

if (isset($_POST['nom_rep'])) {
$pat = $_POST['nom_rep'];
} else {
$pat = "";
}
if (isset($_POST['modelo'])) {
$modelo = $_POST['modelo'];
} else {
$modelo = "";
}
if (isset($_POST['valor2'])) {
$año = $_POST['valor2'];
} else {
$año = "";
}
if (isset($_POST['color'])) {
$color = $_POST['color'];
} else {
$color = "";
}

if (isset($_POST['stock'])) {
$cili = $_POST['stock'];
} else {
$cili = "";
}

if (isset($_SESSION['email'])) {
$corre = $_SESSION['email'];
} else {
$corre = "";
}

echo $corre;


$registro3 = mysqli_query($conexion,"SELECT rut FROM clientes where correo = '".$corre."' ");

$registro4 = mysqli_fetch_array($registro3,MYSQLI_ASSOC);
$dat =$registro4['rut'];



//VERIFICAMOS EL PROCESO
if (!empty($_POST)) {
		mysqli_query($conexion,"INSERT INTO vehiculo (patente, rut, id_modelo, aa, color,cilindrada)VALUES('$pat','$dat','$modelo','$año','$color','$cili')");
	
}else{
	echo 'error en la consulta';
	$proceso='';}


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysqli_query($conexion,"SELECT * FROM vehiculo where rut = '".$dat."' ");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX
	$registro2 = mysqli_fetch_array($registro,MYSQLI_ASSOC);
	
				 echo       ' <table border="0" width="100%">
               		 <tr>
                    	<td>Patente: </td>
                        <td>'.$registro2['patente'].'</td>
                    	<td>Modelo: </td>
                        <td>'.$registro2['id_modelo'].'</td>
                    	<td>Año: </td>
                        <td>'.$registro2['aa'].'</td>
                    	<td>Color: </td>
                        <td>'.$registro2['color'].'</td>
                    	<td>Cilindrada:</td>
                        <td>'.$registro2['cilindrada'].'</td>
                    </tr>
      
                </table>';
			
				
	
?>