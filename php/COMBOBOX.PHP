
/* ARCHIVO COMBOBOX.PHP */
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include('conexion.php');
if ($_GET[buscar]=="modelos")
{
$consulta="SELECT nom_modelo FROM modelo WHERE idmarca='".mysqli_real_escape_string($conexion,intval($_GET["idmarca"]))."' order by nom_modelo";
mysqli_select_db($conexion,'repuestosbd');
$todos=mysqli_query($conexion,$consulta);
// Comienzo a imprimir el select
echo "<label>Modelo:</label><select name='idmodelo' id='idmodelo'>";
echo "<option value=''>Modelo...</option>";
while($registro=mysqli_fetch_array($conexion,$todos))
{
// Convierto los caracteres conflictivos a sus entidades HTML correspondientes para su correcta visualizacion
// Imprimo las opciones del select
echo "<option value='".$registro["idmodelo"]."'";
if ($registro["idmodelo"]==$valoractual) echo " selected";
echo ">".utf8_encode($registro["modelo"])."</option>";
}
echo "</select>";
}


if ($_GET[buscar]=="años")
{
$consulta="SELECT año FROM año WHERE idmodelo='".mysql_real_escape_string($conexion,intval($_GET[idmodelo]))."' order by año";
mysqli_select_db($conexion,'repuestosbd');
$todos=mysqli_query($conexion,$consulta);
// Comienzo a imprimir el select
echo "<label>Año:</label><select name='año' id='año'>";
echo "<option value=''>Año...</option>";
while($registro=mysqli_fetch_array($conexion,$todos))
{
// Convierto los caracteres conflictivos a sus entidades HTML correspondientes para su correcta visualizacion
// Imprimo las opciones del select
echo "<option value='".$registro["año"]."'";
if ($registro["año"]==$valoractual) echo " selected";
echo ">".utf8_encode($registro["año"])."</option>";
}
echo "</select>";
}
?>