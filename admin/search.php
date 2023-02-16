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
		<title>Ket Busqueda de Doctores</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		
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
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contacto</p>
								<p class="contact-info-header"> 442 367 1095 </p>
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
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-8 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
									<li class="breadcrumb-item active" aria-current="page">Búsqueda de doctores</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">4 Doctores encontrados</h2>
						</div>
						<div class="col-md-4 col-12 d-md-block d-none">
							<div class="sort-by">
								<span class="sort-title">Ordenar por</span>
								<span class="sortby-fliter">
									<select class="select">
										<option>Seleccionar</option>
										<option class="sorting">Calificaciones</option>
										<option class="sorting">Pópular</option>
										<option class="sorting">Más recientes</option>
									</select>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Search Filter -->
							<div class="card search-filter">
								<div class="card-header">
									<h4 class="card-title mb-0">Filtro de búsqueda</h4>
								</div>
								<div class="card-body">
								
								<div class="filter-widget">
									<h4>Genero</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="gender_type" checked>
											<span class="checkmark"></span> Masculino
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="gender_type">
											<span class="checkmark"></span> Femenino
										</label>
									</div>
								</div>
								<div class="filter-widget">
									<h4>Selecciona especialidad</h4>
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
						
						<div class="col-md-12 col-lg-8 col-xl-9">
<?php 

			 					        $stmt = $conn->prepare("SELECT *  FROM ket_doctores  ORDER BY id");
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
												$fotos='admin/'.$country['imagen'];
												
						echo "
							<!-- Doctor Widget -->
							<div class=\"card\">
								<div class=\"card-body\">
									<div class=\"doctor-widget\">
										<div class=\"doc-info-left\">
											<div class=\"doctor-img\">
												<a href=\"doctor-profile.html\">
													<img src='".$fotos."' class=\"img-fluid\" alt=\"User Image\">
												</a>
											</div>
											<div class=\"doc-info-cont\">
												<h4 class=\"doc-name\"><a href=\"doctor-profile.php?iddr=".$country['Id']."\">".$country['Nombre']."</a></h4>
												<p class=\"doc-speciality\">Cirugía plástica</p>
												<h5 class=\"doc-department\">".$country['cabecera']."</h5>
												<div class=\"rating\">
													<i class=\"fas fa-star filled\"></i>
													<i class=\"fas fa-star filled\"></i>
													<i class=\"fas fa-star filled\"></i>
													<i class=\"fas fa-star filled\"></i>
													<i class=\"fas fa-star filled\"></i>
													<span class=\"d-inline-block average-rating\">(17)</span>
												</div>
												<div class=\"clinic-details\">
													<p class=\"doc-location\"><i class=\"fas fa-map-marker-alt\"></i>".$country['ubicacion']."</p>
													<ul class=\"clinic-gallery\">
														<li>
															<a href=\"assets/img/features/feature-01.jpg\" data-fancybox=\"gallery\">
																<img src=\"assets/img/features/feature-01.jpg\" alt=\"Feature\">
															</a>
														</li>
														<li>
															<a href=\"assets/img/features/feature-02.jpg\" data-fancybox=\"gallery\">
																<img  src=\"assets/img/features/feature-02.jpg\" alt=\"Feature\">
															</a>
														</li>
														<li>
															<a href=\"assets/img/features/feature-03.jpg\" data-fancybox=\"gallery\">
																<img src=\"assets/img/features/feature-03.jpg\" alt=\"Feature\">
															</a>
														</li>
														<li>
															<a href=\"assets/img/features/feature-04.jpg\" data-fancybox=\"gallery\">
																<img src=\"assets/img/features/feature-04.jpg\" alt=\"Feature\">
															</a>
														</li>
													</ul>
												</div>

												<div class=\"clinic-services\">";

												  $stmt2 = $conn->prepare("SELECT *  FROM ket_especialidad where id_doctor=:id_doctor ORDER BY id");
												   $stmt2->bindValue(':id_doctor', (int)$country['Id'], PDO::PARAM_INT);
											          $stmt2->execute();
											          $countriesList2 = $stmt2->fetchAll();

											          foreach($countriesList2 as $country2){
											          	echo "
													<span>".$country2['especialidad']."</span>
													
";
}
echo "
												</div>
											</div>
										</div>
										<div class=\"doc-info-right\">
											<div class=\"clini-infos\">
												<ul>
													<li><i class=\"far fa-thumbs-up\"></i> 100%</li>
													
													
												</ul>
											</div>
											<div class=\"clinic-booking\">
												<a class=\"view-pro-btn\" href=\"doctor-profile.php?iddr=".$country['Id']."\">Ver Perfil</a>
											</div>
										</div>
									</div>
								</div>
							</div>";
						}
						?>
							<!-- /Doctor Widget -->

							<!-- Doctor Widget -->
							
							<!-- /Doctor Widget -->

							<!-- Doctor Widget -->
							
							<!-- /Doctor Widget -->

							<!-- Doctor Widget -->
							
							<!-- /Doctor Widget -->

							<div class="load-more text-center">
								<a class="btn btn-primary btn-sm" href="javascript:void(0);">Ver más</a>	
							</div>	
						</div>
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