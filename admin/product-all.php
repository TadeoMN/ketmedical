<?php require_once  "php/conexion.php"; 
	//$paquete  = $_REQUEST["paquete"];
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
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7RYW0FYPWC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7RYW0FYPWC');
</script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Ket</title>
		
		<!-- Favicons -->
		<link type="image/x-icon" href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
		
		<!-- Fancybox CSS -->
		<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
		
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
								<a class=\"dropdown-item\" href=\"login.php\">Logout</a>
							</div>
						</li>";
					}

						?>
					</ul>
				</nav>
			</header>
			<!-- /Header -->

			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
									<li class="breadcrumb-item active" aria-current="page">Busqueda de paquetes</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Busqueda de paquetes	<span class="text-small text-white ml-2"> <b>4 paquetes</b></span></h2>
						</div>
					</div>
				</div>
			</div>
			
		  	<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-3 col-xl-3 theiaStickySidebar">
							
							<!-- Search Filter -->
							<div class="card search-filter">
								<div class="card-header">
									<h4 class="card-title mb-0">Filtro</h4>
								</div>
								<div class="card-body">
								<!-- <div class="filter-widget">
									<div class="cal-icon">
										<input type="text" class="form-control datetimepicker" placeholder="Select Date">
									</div>			
								</div> -->
								<div class="filter-widget">
									<h4>Categorias</h4>
									<?php 
					$stmt = $conn->prepare("SELECT *  FROM ket_especialidades  ORDER BY id");
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
												$fotos='admin/'.$country['Imagen'];
												
											
			 					echo "
									<div>
										<label class=\"custom_check\">
											<input type=\"checkbox\" name=\"select_specialist\" >
											<span class=\"checkmark\"></span> ".$country['Especialidad']."
										</label>
									</div> ";
								}

								?>
								
									
									
								</div>
									<div class="btn-search">
										<button type="button" class="btn btn-block">Buscar</button>
									</div>	
								</div>
							</div>
							<!-- /Search Filter -->
							
						</div>
						
						<div class="col-md-7 col-lg-9 col-xl-9">

							<div class="row align-items-center pb-3">	
								<div class="col-md-4 col-12 d-md-block d-none custom-short-by">
									<h3 class="title pharmacy-title">Resultados</h3>
								</div>
								<div class="col-md-8 col-12 d-md-block d-none custom-short-by">
									<div class="sort-by pb-3">
										<span class="sort-title">Ordenar por</span>
										<span class="sortby-fliter">
											<select class="select">
												<option>Seleccionar</option>
												<option class="sorting">Calificación</option>
												<option class="sorting">Popular</option>
												<option class="sorting">Reciente</option>
											</select>
										</span>
									</div>
								</div>
							</div>

							<div class="row">

								<?php 

			 					        $stmt = $conn->prepare("SELECT *  FROM ket_paquetes  ORDER BY id");
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
												$fotos='admin/'.$country['fot1_paquete'];
												$fotos2='admin/'.$country['fot2_paquete'];
												$fotos3='admin/'.$country['fot3_paquete'];
												$fotos4='admin/'.$country['fot4_paquete'];
						echo "
								<div class=\"col-md-12 col-lg-4 col-xl-4 product-custom\">
	                                <div class=\"profile-widget\">
										<div class=\"doc-img\">
											<a href=\"product-description.php?paquete=".$country['id']."\"  tabindex=\"-1\">
												<img class=\"img-fluid\" alt=\"Product image\" src='".$fotos."'>
											</a>
											<a href=\"javascript:void(0)\" class=\"fav-btn\" tabindex=\"-1\">
												<i class=\"far fa-bookmark\"></i>
											</a>
										</div>
										<div class=\"pro-content\">
											<h3 class=\"title pb-4\">
												<a href=\"product-description.php?paquete=".$country['id']."\" tabindex=\"-1\">".$country['nombre_paquete']."</a> 
											</h3>
											<div class=\"row align-items-center\">
												<div class=\"col-lg-6\">
													<span class=\"price\">".$country['preciofinal']."</span>
													<span class=\"price-strike\">".$country['precio_paquete']."</span>
												</div>
												<div class=\"col-lg-6 text-right\">
													<a href=\"product-description.php?paquete=".$country['id']."\"  class=\"cart-icon\"><i class=\"fas fa-shopping-cart\"></i></a>
												</div>
											</div>
										</div>
									</div>		
                            	</div>" ;
                            }
                            ?>
                            	
                            	
                             <div class="col-md-12 text-center">
                             	<a href="#" class="btn book-btn1 mb-4">Mostrar más</a>
                         	</div>
						</div>
					</div>
				</div>
			</div>
		
			
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
									<p>KET Medical es el punto de reunión de promociones en belleza con doctores de confianza. .</p>
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
		
		<!-- Select2 JS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Fancybox JS -->
		<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>
</html>