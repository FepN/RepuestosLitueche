<?php session_start();

//if($_SESSION['validacion'] == 0 or $_SESSION['validacion'] == 0)
//{
//header("Location: ../deseos/vista/login.php");
//}
$correo=$_SESSION['email'];


 function load_marca()  
 {  
      $connect = mysqli_connect("localhost", "root", "", "repuestosbd");  
      $output = '';  
      $sql = "SELECT * FROM marca ORDER BY nom_marca";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option class="caret"value="'.$row["id_marca"].'">'.$row["nom_marca"].'</option>';  
		 
      } 
	  
	  return $output;  
 }  
 ?>  

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="ANSII">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inicio | Repuestos Litueche</title>
<script type="text/javascript" src="jquery.js"></script>
<script>
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
    <link href="../Eshopper/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Eshopper/css/font-awesome.min.css" rel="stylesheet">
    <link href="../Eshopper/css/prettyPhoto.css" rel="stylesheet">
    <link href="../Eshopper/css/price-range.css" rel="stylesheet">
    <link href="../Eshopper/css/animate.css" rel="stylesheet">
	<link href="../Eshopper/css/main.css" rel="stylesheet">
	<link href="../Eshopper/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="../Eshopper/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../Eshopper/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../Eshopper/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../Eshopper/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../Eshopper/images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="stylesheet" href="../Eshopper/css/style.css">
    
    
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +56985629455</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> repuestoslitueche@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/profile.php?id=100011471891553&fref=ts"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="indexe.php"><img src="../Eshopper/images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Marca
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Cuenta</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Historial</a></li>
								<li><a href="../Eshopper/checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="../Eshopper/cart.html"><i class="fa fa-shopping-cart"></i> Cotizacion</a></li>
								<li><a href="../Eshopper/index.php"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
        <div class="container">
    <div class='alert alert-success'>
  <button class='close' data-dismiss='alert'>&times;</button>
   
    </div>
</div>
	
		<div class="header-bottom"><!--header-bottom-->
			
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categorias</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Filtros
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Nike </a></li>
											<li><a href="#">Under Armour </a></li>
											<li><a href="#">Adidas </a></li>
											<li><a href="#">Puma</a></li>
											<li><a href="#">ASICS </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
											<li><a href="#">Armani</a></li>
											<li><a href="#">Prada</a></li>
											<li><a href="#">Dolce and Gabbana</a></li>
											<li><a href="#">Chanel</a></li>
											<li><a href="#">Gucci</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Fashion</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Households</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Interiors</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Clothing</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-r6ange-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					
					
					<div class="category-tab"><!--category-tab-->
						
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#datos" >Datos</a></li>
								<li><a data-toggle="tab" href="#agrega-registros" >Historial</a></li>
								<li><a data-toggle="tab" href="#vehiculo"  >Vehiculos</a></li>
								<li><a data-toggle="tab" href="#contacto">contacto</a></li>
								
							</ul>
					
                        
<div class="tab-content">
	<!--datos-->						
	<div id="datos" class="tab-pane fade in active">
				  <!-- MODAL PARA EL REGISTRO DE PRODUCTOS-->
            <form id="formulario" class="formulario" onsubmit="return agregaClientes();">
				 <?php include('llenatabla3.php'); ?>   
            			<div class="modal-footer">
                			<input type="submit" value="Editar" class="btn btn-warning"  id="edi"/>
            			</div>
           </form>
	</div>
    <!--datos-->
    
	<!--historial-->	
	<div class="tab-pane fade" id="agrega-registros">
    	
        
	</div>
    <!--historial-->
    
    <!--vehiculo-->
    <div class="tab-pane fade" id="vehiculo">
    <div class="registros" id="agrega-registros">
   	<?php include('llenatabla4.php'); ?>
         <!-- MODAL PARA EL REGISTRO DE PRODUCTOS-->
    <div class="modal fade" id="registra-producto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Registra o Edita un Repuesto</b></h4>
            </div>
            <form id="formulario" class="formulario" onsubmit="return agregaVehiculo();">
            <div class="modal-body">
				<table border="0" width="100%">
               		 <tr>
                        <td colspan="2"><input type="text" required="required" readonly id="id" name="id" readonly="readonly" style="visibility:hidden; height:5px;"/></td>
                    </tr>
                     <tr>
                    	<td width="150"></td>
                        <td><input type="text" required="required" readonly id="pro" name="pro"/></td>
                    </tr>
                    <tr>
                    	<td>Patente </td>
                        <td><input type="text" required="required" name="nom_rep" id="nom_rep" maxlength="100"/></td>
                    </tr>
                	<tr><td>Modelo: </td>	
                        <td><input type="number" required="required" name="modelo" id="modelo" maxlength="20"/></td>
                    </tr>
                    <tr>
                    	<td>Año: </td>
                        <td><input type="number" required="required" name="valor2" id="valor2"/></td>
                    </tr>
                    <tr>
                    	<td>Color: </td>
                        <td><input type="text" required="required" name="color" id="color"/></td>
                    </tr>
                    <tr>
                    	<td>Cilindrada: </td>
                        <td><input type="number"  required="required" name="stock" id="stock"/></td>
                    </tr>
                    <tr>
                    	<td colspan="2">
                        	<div id="mensaje"></div>
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="modal-footer">
            	<input type="submit" value="Registrar" class="btn btn-success" id="reg"/>
                <input type="submit" value="Editar" class="btn btn-warning"  id="edi"/>
            </div>
                        </form>
          </div>
        </div>
      </div> <!--modal-->
      
      
        				<div class="modal-footer">
                            <td width="100"><button id="nuevo-producto" class="btn btn-primary">Agregar</button></td>
            			</div>
	</div>
    </div>
    <!--vehiculo-->
    
    <!--contacto-->
    <div class="tab-pane fade" id="contacto">

	<form method="POST" action="send_form_email.php">
    	<table>
        	<tr>
            	<td class='alert alert-success'> Asunto:</td>
                <td><input type="text" name="asunto"></td>
            </tr>
            <tr> 
            <td class='alert alert-success'>Mensaje:</td>
            <td><textarea name="mensaje" type="text" cols="30" rows="10"></textarea></td>
            </tr>
        
        </table>
        <input type="hidden" name="phpmailer">
        <button class="btn btn-success" type="submit" name="btn_send">
                <span class="glyphicon glyphicon-envelope"></span> Enviar
     </form>   
	</div>
    <!--comtacto-->												
</div><!--tabcomtemt-->
        
					</div><!--/category-tab-->
					
					
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="../Eshopper/js/jquery.js"></script>
	<script src="../Eshopper/js/bootstrap.min.js"></script>
	<script src="../Eshopper/js/jquery.scrollUp.min.js"></script>
	<script src="../Eshopper/js/price-range.js"></script>
    <script src="../Eshopper/js/jquery.prettyPhoto.js"></script>
    <script src="../Eshopper/js/main.js"></script>
    <script src="../js/myjava.js"></script>
</body>








<div class="container">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div class='col-md-12'>
    <div class='row'>
      <div class='col-md-12' style='margin-top: -50px;'>
        <ul class='nav nav-pills'>
          <li class='active'><a data-toggle='tab' href='#vis_opgave1'>Vis opgave</a>

          </li>
          <li><a data-toggle='tab' href='#rediger_opgave1'>Rediger Tekst</a>

          </li>
          <li><a data-toggle='tab' href='#admin_opgave_billeder1'>Administrer billeder</a>

          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="tab-content">
    <div id='vis_opgave1' class='tab-pane fade in active'>
      <div class='row'>aaaaaaaa11111111111</div>
    </div>
    <div id='rediger_opgave1' class='tab-pane fade'>
      <div class='row'>bbbbbbb11111111</div>
    </div>
    <div id='admin_opgave_billeder1' class='tab-pane fade'>
      <div class='row'>cccccccccc1111111</div>
    </div>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div class='col-md-12'>
    <div class='row'>
      <div class='col-md-12' style='margin-top: -50px;'>
        <ul class='nav nav-pills'>
          <li class='active'><a data-toggle='tab' href='#vis_opgave2'>Vis opgave</a>

          </li>
          <li><a data-toggle='tab' href='#rediger_opgave2'>Rediger Tekst</a>

          </li>
          <li><a data-toggle='tab' href='#admin_opgave_billeder2'>Administrer billeder</a>

          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="tab-content">
    <div id='vis_opgave2' class='tab-pane fade in active'>
      <div class='row'>aaaaaaaa22222222</div>
    </div>
    <div id='rediger_opgave2' class='tab-pane fade'>
      <div class='row'>bbbbbbb222222222</div>
    </div>
    <div id='admin_opgave_billeder2' class='tab-pane fade'>
      <div class='row'>cccccccccc2222222</div>
    </div>
  </div>
</div>
</html>