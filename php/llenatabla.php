<?php
            include('../php/conexion.php');
            $registro = mysqli_query($conexion,"SELECT * FROM repuestos"); 
            while($registro2 = mysqli_fetch_array($registro,MYSQLI_ASSOC)){
                echo '<tr>
                        <td>'.$registro2['id_rep'].'</td>
                        <td>'.$registro2['id_modelo'].'</td>
                        <td>'.$registro2['nom_rep'].'</td>
                        <td>'.$registro2['categoria'].'</td>
						 <td>'.$registro2['descripcion'].'</td>
						  <td>$ '.$registro2['valor'].'</td>
						   <td>'.$registro2['stock'].'</td>
						    <td>'.$registro2['fabricante'].'</td>
                        <td><a href="javascript:editarProducto('.$registro2['id_rep'].');" class="glyphicon glyphicon-edit"></a> <a href="javascript:eliminarProducto('.$registro2['id_rep'].');" class="glyphicon glyphicon-remove-circle"></a></td>
                    </tr>';       
            }
        ?>