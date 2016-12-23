<?php session_start();
?>
<html>

<head>
<meta charset="UTF-8">
<link href="../Eshopper/css/bootstrap.min.css" rel="stylesheet">
	<link href="fc.css" rel="stylesheet">
    <link href="../Eshopper/css/font-awesome.min.css" rel="stylesheet">
    <link href="../Eshopper/css/prettyPhoto.css" rel="stylesheet">
    <link href="../Eshopper/css/price-range.css" rel="stylesheet">
    <link href="../Eshopper/css/animate.css" rel="stylesheet">
	<link href="../Eshopper/css/main.css" rel="stylesheet">
	<link href="../Eshopper/css/responsive.css" rel="stylesheet">
 <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../Eshopper/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../Eshopper/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../Eshopper/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../Eshopper/images/ico/apple-touch-icon-57-precomposed.png">
    <script src="../js/jquery.js"></script>
</head>

<body>
<H1> Cotización</H1>
<table class="table table-condensed" id="ya">
					<thead>
						<tr class="cart_menu">
							<td class="image">Producto</td>
							<td class="price">Descripción</td>
							<td class="quantity">Cantidad</td>
							<td class="total">Detalle</td>
						</tr>
					</thead>
					<tbody id="tabb">
                    
       <?php $d1[][]='';
	           for($i=0;$i<count($_SESSION['ids']);$i++){
				  $d1[$i]=$_SESSION['ids'][$i];
				 
					$connect = mysqli_connect("localhost", "root", "", "repuestosbd");  
 					$dato = ''; 
					$sql = "SELECT * FROM repuestos where id_rep = '".$d1[$i]."' ORDER BY nom_modelo";  
 					$result = mysqli_query($connect, $sql);  
 					if ($result) {	
 					$registro2 = mysqli_fetch_array($result,MYSQLI_ASSOC);  	
    			 echo '<tr >
							<td class="cart_description">
								<h4><a href="">'.$registro2['nom_rep'].'</a></h4>
								
								<p>ID: '.$registro2['id_rep'].'</p>
							</td>
							<td class="cart_price">
								<p> '.$registro2['descripcion'].'</p>
							</td>
							<td class="cart_total">	
								<p class="cart_total_price">$'.$registro2['valor'].'</p>
							</td>						
				
					</tr>';   	
					 } 
					 $dato = $registro2['valor']+$dato;
					 
					 }		
					?>
                   

</table>
<p style="margin-left:830px;margin-top:10px;font-size: 120%;" >Total<p>
 <H3 style="margin-left:830px;color:blue;" > <?php echo $dato; ?><H3>
                    </tbody>                    
<p style="margin-left:830px;margin-bottom:220px;font-size: 70%;" >RepuestosLitueche@gmail.com<p>                  
</body>

</html>


<?php
use Dompdf\Dompdf;
use Dompdf\Options;
require_once '../dompdf/autoload.inc.php';


// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->load_html(ob_get_clean());

// (Optional) Setup the paper size and orientation
$dompdf->set_paper('legal', 'landscape');

// Render the HTML as PDF
$dompdf->render();
$pdf = $dompdf->output();
$filename= 'mam.pdf';
// Output the generated PDF to Browser
$dompdf->stream($filename, array("Attachment" => 0));
?>

// ... Finish creating your PDF ...?>