<?php
include('conexion.php');

if (isset($_REQUEST['id_rep'])) {
$id = $_REQUEST['id_rep'];
} else {
$id = "";
}
if (isset($_REQUEST['id_modelo'])) {
$idm = $_REQUEST['id_modelo'];
} else {
$idm = "";
}



//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysqli_query($conexion,"SELECT * FROM repuestos where id_rep <> '$id' and id_modelo = '$idm' ORDER BY id_rep ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX
echo '<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Producto</td>
							<td class="description"></td>
							<td class="price">Descripción</td>
							<td class="quantity">Cantidad</td>
							<td class="total">SubTotal</td>
							<td></td>
						</tr>
					</thead>
					<tbody id="tabb">';
	while($registro2 = mysqli_fetch_array($registro,MYSQLI_ASSOC)){
		echo '<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">'.$registro2['nom_rep'].'</a></h4>
								<p>ID: '.$registro2['id_rep'].'</p>
							</td>
							<td class="cart_price">
								<p> '.$registro2['descripcion'].'</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="'.$registro2['stock'].'" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$'.$registro2['valor'].'</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="javascript:eliminararray('.$registro2['id_rep'].','.$registro2['id_modelo'].');"><i class="fa fa-times"></i></a>
							</td>
							<td>
							<a href="javascript:eliminararray('.$registro2['id_rep'].','.$registro2['id_modelo'].');" class="glyphicon glyphicon-remove-circle"></a>
							</td>
						</tr>';       
	}
echo '</table>';
?>