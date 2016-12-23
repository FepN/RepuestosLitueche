<?php
include('conexion.php');
$dato="";
$dato2="";
$dato3="";
$dato = $_SESSION['email'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysqli_query($conexion,"SELECT * FROM clientes WHERE '".$dato."' = correo");
$registro2 = mysqli_fetch_array($registro,MYSQLI_ASSOC);
$dato2=$registro2['rut'];



$registro3 = mysqli_query($conexion,"SELECT * FROM vehiculo WHERE '".$dato2."' = rut");
//if
$registro4 = mysqli_fetch_array($registro3,MYSQLI_ASSOC);
$dato3=$registro4['id_modelo'];
$registro5 = mysqli_query($conexion,"SELECT nom_modelo FROM modelo WHERE '".$dato3."' = id_modelo");
$registro6 = mysqli_fetch_array($registro5,MYSQLI_ASSOC);
$dato4=$registro6['nom_modelo'];

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX
    echo       ' <table border="0" width="100%">
               		 <tr>
                        <td colspan="2"><input type="text" required="required" b id="id" name="id" readonly="readonly" style="visibility:hidden; height:5px;"/></td>
                    </tr>
                     <tr>
                    	<td width="150"></td>
                        <td><input type="hidden" required="required" readonly id="pro" name="pro"/></td>
                    </tr>
                    <tr>
                    	
                        <td><p word-spacing: 30px;>Patente : &nbsp;  &nbsp;  &nbsp;         '.$registro4['patente'].'</p></td>
                    </tr>
                    <tr>
                    	
                        <td><p word-spacing: 30px;>Modelo: &nbsp;&nbsp;  &nbsp;  &nbsp;         '.$dato4.'<p/></td>
                    </tr>
                    <tr>
                    	
                        <td><p word-spacing: 30px;>Año: &nbsp;&nbsp;  &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         '.$registro4['aa'].'<p/></td>
                    </tr>
                    <tr>
                    	
                        <td><p word-spacing: 30px;>Color: &nbsp;&nbsp;  &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        '.$registro4['color'].'<p/></td>
                    </tr>
					<tr>
                    	
                        <td><p word-spacing: 30px;>Cilindrada: &nbsp;&nbsp;            '.$registro4['cilindrada'].'<p/></td>
                    </tr>
                    <tr>
                    	<td colspan="2">
                        	<div id="mensaje"></div>
                        </td>
                    </tr>
                </table>';

?>