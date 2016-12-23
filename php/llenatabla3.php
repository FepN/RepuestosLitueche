<?php
include('conexion.php');
$dato="";
$dato = $_SESSION['email'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysqli_query($conexion,"SELECT * FROM clientes WHERE '".$dato."' = correo");
$registro2 = mysqli_fetch_array($registro,MYSQLI_ASSOC);
//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX
    echo       ' <table border="0" width="100%">
               		 <tr>
                        <td colspan="2"><input type="text" required="required" readonly id="id" name="id" readonly="readonly" style="visibility:hidden; height:5px;"/></td>
                    </tr>
                     <tr>
                    	<td width="150"></td>
                        <td><input type="hidden" required="required" readonly id="pro" name="pro"/></td>
                    </tr>
                    <tr>
                    	<td>Rut: </td>
                        <td><input type="text" required="required" name="rut" id="rut" value="'.$registro2['rut'].'"/></td>
                    </tr>
                	<tr>
                    	<td>Nombres: </td>
                        <td><input type="text" required="required" name="nombres" id="nombres" value="'.$registro2['nombres'].'"/></td>
                    </tr>
                    <tr>
                    	<td>Apellidos: </td>
                        <td><input type="text" required="required" name="apellidos" id="apellidos" maxlength="100" value="'.$registro2['apellidos'].'"/></td>
                    </tr>
                    <tr>
                    	<td>Correo Electronico: </td>
                        <td><input type="email" required="required" name="email" id="correo" value="'.$registro2['correo'].'"/></td>
                    </tr>
                    <tr>
                    	<td>Telefono: </td>
                        <td><input type="number"  required="required" name="telefono" id="telefono" value="'.$registro2['telefono'].'"/></td>
                    </tr>
                    <tr>
                    	<td colspan="2">
                        	<div id="mensaje"></div>
                        </td>
                    </tr>
                </table>';

?>