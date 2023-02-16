<?php require_once  "php/conexion.php"; 
			$iddr="";
			session_start();
			if (!isset($_SESSION['usuarioactivo'])) {
  		 		//header('location: logindr.php');
  		 		$iddr="";
  		}
  		else
  		{
  			$iddr=$_SESSION['usuarioactivo'];
  		}

		
		
?>	
<!DOCTYPE html> 
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Ket</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.php" class="navbar-brand logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.php" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="has-submenu active">	<a href="">Inicio <i class="fas fa-chevron-down"></i></a>
							<ul class="submenu">
									<li><a href="index.php">Inicio</a></li>
									
							</ul>
						</li>
						<li class="has-submenu">	<a href="">Doctores <i class="fas fa-chevron-down"></i></a>
							<ul class="submenu">
								<li><a href="search.php">Busca de doctores</a>
								</li>
								
								
							</ul>
						</li>
						<li class="has-submenu">	<a href="">Procedimientos <i class="fas fa-chevron-down"></i></a>
							<ul class="submenu">
								<li><a href="product-all.php">Búsqueda de procedimientos</a>
								</li>
								
								
							</ul>
						</li>
						
						<li><a href="promociones.php">Promociones de temporada</a>
								</li>
						</ul>
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
						<div class="header-contact-img">	<i class="far fa-hospital"></i>	
						</div>
						<div class="header-contact-detail">
							<p class="contact-header">Contacto</p>
							<p class="contact-info-header">442 367 1095 </p>
						</div>
					</li>

					<?php 

					if (strlen($iddr)===0)
					{
						echo "
					
					<li class=\"nav-item\">
							<a class=\"nav-link header-login\" href=\"logindr.php\">Doctores</a>
						</li>

						<li class=\"nav-item\">
							<a class=\"nav-link header-login\" href=\"login.php\">Pacientes </a>
						</li> ";
					}
					else
					{
						echo " <li class=\"nav-item dropdown has-arrow logged-item\">
								<input type=\"hidden\" id=\"iddr\" name=\"iddr\" value=".$iddr.">
												
							<a href=\"#\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
								<span class=\"user-img\">
									<img class=\"rounded-circle\" src=\"assets/img/patients/patient.jpg\" width=\"31\" alt=\"Ryan Taylor\">
								</span>
							</a>
							<div class=\"dropdown-menu dropdown-menu-right\">
								<div class=\"user-header\">
									<div class=\"avatar avatar-sm\">
										<img src=\"assets/img/patients/patient.jpg\" alt=\"User Image\" class=\"avatar-img rounded-circle\">
									</div>
									<div class=\"user-text\">
										<h6>Richard Wilson</h6>
										<p class=\"text-muted mb-0\">Patient</p>
									</div>
								</div>
								<a class=\"dropdown-item\" href=\"patient-dashboard.php\">Dashboard</a>
								<a class=\"dropdown-item\" href=\"profile-settings.php\">Profile Settings</a>
								<a class=\"dropdown-item\" href=\"login.php\">Cerrar sesión</a>
							</div>
						</li> ";

						  $stmt = $conn->prepare("SELECT count(id) id  FROM ket_auxpedidos where id_usuario=:id ");
			 					        			 $stmt->bindValue(':id', $iddr, PDO::PARAM_STR);
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
											          	echo"

					<li class=\"nav-item view-cart-header mr-3\">
						<a href=\"#\" class=\"\" id=\"cart\"><i class=\"fas fa-shopping-cart\"></i> <small class=\"unread-msg1\">".$country['id']."</small></a>		<!-- Shopping Cart -->
							";
						}


						echo "
							<div class=\"shopping-cart\">
								<ul class=\"shopping-cart-items list-unstyled\">
								";

						  $stmt = $conn->prepare("SELECT fot1_paquete,nombre_paquete,total,cantidad  FROM ket_auxpedidos join ket_paquetes on ket_paquetes.id=ket_auxpedidos.id_paquete where id_usuario=:id ");
			 					        			 $stmt->bindValue(':id', $iddr, PDO::PARAM_STR);
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
											          	$fotos='admin/'.$country['fot1_paquete'];
											          	echo"
									<li class=\"clearfix\">
										<div class=\"close-icon\"><i class=\"far fa-times-circle\"></i></div>
									    <img class=\"avatar-img rounded\" src='".$fotos."' alt=\"User Image\">
									    <span class=\"item-name\">".$country['nombre_paquete']."</span>
									    <span class=\"item-price\">$".$country['total']."</span>
									    <span class=\"item-quantity\">Cantidad: ".$country['cantidad']."</span>
									</li>
";
}
echo "
									
								</ul>
								<div class=\"booking-summary pt-3\">
									<div class=\"booking-item-wrap\">
										<ul class=\"booking-date\">";
										  $stmt = $conn->prepare("SELECT sum(total)total   FROM ket_auxpedidos where id_usuario=:id ");
			 					        			 $stmt->bindValue(':id', $iddr, PDO::PARAM_STR);
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
echo "
											
												<li>Total <span>$".$country['total']."</span></li>

"; }										

echo "
										</ul>
										<div class=\"booking-total\">
											<ul class=\"booking-total-list text-align\">
												<li>
													<div class=\"clinic-booking pt-4\">
														<a class=\"apt-btn\" href=\"cart.php\">Ver Carrito</a>
													</div>
												</li>
												<li>
													<div class=\"clinic-booking pt-4\">
														<a class=\"apt-btn\" href=\"product-checkout.php\">Pagar</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- /Shopping Cart -->	
						</li>
"


						;
					}

						?>
					</ul>
				</nav>
			</header>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Promociones</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Promociones</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">
             
					<div class="row">
					
						<div class="col-lg-6 col-md-12">
<?php 

			 					        $stmt = $conn->prepare("SELECT *  FROM ket_paquetes WHERE promocion=1  ORDER BY id");
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
												$fotos='admin/'.$country['fot1_paquete'];
												$fotos2='admin/'.$country['fot2_paquete'];
												$fotos3='admin/'.$country['fot3_paquete'];
												$fotos4='admin/'.$country['fot4_paquete'];
						echo "

							<!-- Blog Post -->
							<div class=\"blog\">
								<div class=\"blog-image\">
									<a href=\"product-description.php?paquete=".$country['id']. "\"><img class=\"img-fluid\" src='".$fotos."' alt=\"Post Image\"></a>
								</div>
								<h3 class=\"blog-title\"><a href=\"product-description.php?paquete=".$country['id']. "\">".$country['nombre_paquete']."</a></h3>
								<div class=\"blog-info clearfix\">
									<div class=\"post-left\">
										<ul>
											<li> " ;
											   $stmt = $conn->prepare("SELECT ket_doctores.id,Nombre,imagen  FROM ket_doctorpaquetes join  ket_doctores on ket_doctores.id=ket_doctorpaquetes.id_doctor where id_paquete=:id ORDER BY id_paquete");
			 					        			 $stmt->bindValue(':id', (int)$country['id'], PDO::PARAM_INT);
											          $stmt->execute();
											          $countriesList2 = $stmt->fetchAll();
											          	  foreach($countriesList2 as $country2){
												$fotos='admin/'.$country2['imagen'];
echo "

													<div class=\"post-author\">
													<a href=\"doctor-profile.php?iddr=".$country2['id']."\"><img src='".$fotos."' 
														alt=\"Post Author\"> <span>".$country2['Nombre']."</span></a>
												</div>
												
																<input type=\"hidden\" id=\"id_doctor\" name=\"id_doctor\" value=".$country2['id'].">
														";

															}

																echo " 
												
											</li>
											
										</ul>
									</div>
								</div>
								<div class=\"blog-content\">
									<p>".$country['desccorta']."</p>
									<a href=\"product-description.php?paquete=".$country['id']. "\" class=\"read-more\">Más información</a>
								</div>
							</div> 
							";
							}
							?>
							<!-- /Blog Post -->

						
							<!-- /Blog Post -->

							<!-- Blog Post -->
							
							<!-- /Blog Post -->

								
							<!-- /Blog Post -->

							<!-- Blog Pagination -->
							
							<!-- /Blog Pagination -->
							
						</div>
						
						<!-- Blog Sidebar -->
						
						<!-- /Blog Sidebar -->
						
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			<footer class="footer">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-about">
								<div class="footer-logo">
									<img src="assets/img/footer-logo.png" alt="logo">
								</div>
								<div class="footer-about-content">
									<p>KET Medical es el punto de reunión de promociones en belleza con doctores de confianza.</p>
									<div class="social-icon">
										<ul>
											<li>	<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
											</li>
											<li>	<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
											</li>
											<li>	<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
											</li>
											<li>	<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
											</li>
											<li>	<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">Doctores</h2>
								<ul>
									<li><a href="search.php">Buscar Doctor</a>
									</li>
									
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">Paquetes</h2>
								<ul>
									<li><a href="product-all.php">Buscar Paquete</a>
									</li>
									
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-contact">
								<h2 class="footer-title">Contactanos</h2>
								<div class="footer-contact-info">
									<div class="footer-address">	<span><i class="fas fa-map-marker-alt"></i></span>
										<p>Queretaro,
											<br>Queretaro</p>
									</div>
									<p>	<i class="fas fa-phone-alt"></i>
										4423671095 </p>
									<p class="mb-0">	<i class="fas fa-envelope"></i>
										ket@ketmedical.com.mx</p>
								</div>
							</div>
							<!-- /Footer Widget -->
						</div>
					</div>
				</div>
			</div>
			<!-- /Footer Top -->
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container-fluid">
					<!-- Copyright -->
					<div class="copyright">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="copyright-text">
									<p class="mb-0">&copy; 2020 Ket. All rights reserved.</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<!-- Copyright Menu -->
								<div class="copyright-menu">
									
								</div>
								<!-- /Copyright Menu -->
							</div>
						</div>
					</div>
					<!-- /Copyright -->
				</div>
			</div>
				<!-- /Footer Bottom -->
				
			</footer>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>
</html>