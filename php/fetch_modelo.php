<?php session_start();
            		
 //fetch_modelo.php  
 $connect = mysqli_connect("localhost", "root", "", "repuestosbd");  
 $output = '';  
 $sql = "SELECT * FROM modelo where id_marca = '".$_POST["marcaId"]."' ORDER BY nom_modelo";  
 $result = mysqli_query($connect, $sql);  
 $output = '<option value="">Modelo</option>'; 
 
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '<option value="'.$row["id_modelo"].'">'.$row["nom_modelo"].'</option>'; 
		
 } 
 $_SESSION["varmodelo"] =$row["id_modelo"];
 echo $output;  
 ?>  