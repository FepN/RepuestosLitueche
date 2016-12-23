<?php session_start();
   $connect = mysqli_connect("localhost", "root", "", "repuestosbd");  
 $output = '';  
			
	$sql = "SELECT * FROM repuesto where id_modelo = '".$_POST["modeloId"]."' ORDER BY nom_modelo";  
 $result = mysqli_query($connect, $sql);  
 
 while($registro2 = mysqli_fetch_array($result,MYSQLI_ASSOC))  
 {  
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
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>'
				
			;       
		
 } 		
			
        ?>