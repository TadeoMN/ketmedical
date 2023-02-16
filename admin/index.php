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
<html lang="zxx">

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
	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<!--Top Header -->
		
		<!--/Top Header -->
		<!-- Header -->
		<header class="header">
			<nav class="navbar navbar-expand-lg header-nav">
				<div class="navbar-header">
					<a id="mobile_btn" href="javascript:void(0);">	<span class="bar-icon">
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
						<a id="menu_close" class="menu-close" href="javascript:void(0);">	<i class="fas fa-times"></i>
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
		<!-- Inicio Banner -->
		<section id="Inicio" class="divider">
			<div class="container-fluid p-0">
			<!--- slider ---->
				<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2500"> 
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img class="d-block w-100" src="assets/img/slider/Ket1.jpg" alt="First slide">
					 <!--  <div class="carousel-caption d-none d-md-block">
						  <span>KET es tú mejor opción para tus tratamientos</span>
						  <h2>Contactanos</h2>
						</div> -->
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="assets/img/slider/Ket2.jpg" alt="Second slide">
					  <!-- <div class="carousel-caption d-none d-md-block">
						  <span>Paquete Forever Young</span>
						  <h2>Somos tú mejor opción</h2>
						</div> -->
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="assets/img/slider/Ket3.jpg" alt="Third slide">
					  <!-- <div class="carousel-caption d-none d-md-block">
						  <span>Spa day</span>
						  <h2>Consiente con nosotros</h2>
						</div> -->
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="assets/img/slider/Ket4.jpg" alt="Fourth slide">
					  <!-- <div class="carousel-caption d-none d-md-block">
						  <span>Spa day</span>
						  <h2>Consiente con nosotros</h2>
						</div> -->
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="assets/img/slider/Ket5.jpg" alt="Fourth slide">
					  <!-- <div class="carousel-caption d-none d-md-block">
						  <span>Spa day</span>
						  <h2>Consiente con nosotros</h2>
						</div> -->
					</div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				  </a>
				</div>
			<!--- /slider ---->
				 <!-- Search -->
				
				<!-- /Search -->
			</div>
		</section>
		<!-- /Inicio Banner -->
		<!-- Clinic and Specialities -->
		
		<!-- Clinic and Specialities -->
		<!-- Category Section -->

		<section class="section section-doctor">
			<div class="container-fluid">
				   <div class="row">
						<div class="col-lg-4">
							<div class="section-header ">
								<h2>Descubre nuestros paquetes</h2>
								<p>En Ket tenemos los mejores y más completos paquetes </p>
							</div>
							<div class="about-content">
								<p>Aparta tus paquetes de belleza con los mejores doctores</p>					
								
							</div>
						</div>
						<div class="col-lg-8">
							<div class="doctor-slider slider">
							
								<!-- Doctor Widget -->
								<?php 

			 					        $stmt = $conn->prepare("SELECT *  FROM ket_paquetes WHERE promocion=0  ORDER BY id");
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
												$fotos='admin/'.$country['fot1_paquete'];
												$fotos2='admin/'.$country['fot2_paquete'];
												$fotos3='admin/'.$country['fot3_paquete'];
												$fotos4='admin/'.$country['fot4_paquete'];
						echo "
								<div class=\"profile-widget\">
									<div class=\"doc-img\">
										<a href=\"product-description.php?paquete=".$country['id']."\">
											<img class=\"img-fluid\" alt=\"User Image\" src='".$fotos."'>
										</a>
										<a href=\"javascript:void(0)\" class=\"fav-btn\">
											<i class=\"far fa-bookmark\"></i>
										</a>
									</div>
									<div class=\"pro-content\">
										<h3 class=\"title\">
											<a href=\"product-description.php?paquete=".$country['id']."\">".$country['nombre_paquete']."</a> 
											<i class=\"fas fa-check-circle verified\"></i>
										</h3>
										<p class=\"speciality\">".$country['desccorta']."</p>
										<div class=\"rating\">
											<i class=\"fas fa-star filled\"></i>
											<i class=\"fas fa-star filled\"></i>
											<i class=\"fas fa-star filled\"></i>
											<i class=\"fas fa-star filled\"></i>
											<i class=\"fas fa-star filled\"></i>
											<span class=\"d-inline-block average-rating\">(17)</span>
										</div>
										<ul class=\"available-info\">
											
											<li>
												<i class=\"far fa-money-bill-alt\"></i> $".$country['preciofinal']." 
												<i class=\"fas fa-info-circle\" data-toggle=\"tooltip\" title=\"Precios con IVA incluido\"></i>
											</li>
										</ul>
										<div class=\"row row-sm\">
											<div class=\"col-6\">
												<a href=\"product-description.php?paquete=".$country['id']."\" class=\"btn view-btn\">Ver Paquete</a>
											</div>
											
										</div>
									</div>
								</div> ";
							}
							?>
								<!-- /Doctor Widget -->
						
								<!-- Doctor Widget -->
								
								<!-- /Doctor Widget -->
						
								<!-- Doctor Widget -->
								
								<!-- /Doctor Widget -->
						
								<!-- Doctor Widget -->
								
								<!-- /Doctor Widget -->
								
								<!-- Doctor Widget -->
								
								<!-- /Doctor Widget -->
								
								<!-- Doctor Widget -->
								
								<!-- /Doctor Widget -->
								
								<!-- Doctor Widget -->
								
								<!-- Doctor Widget -->
								
							</div>
						</div>
				   </div>
				</div>
		</section>
		
		<!-- Category Section -->
		<section class="section section-features">
			<div class="container">
				<div class="section-header text-center">
					<h2>¿ Qué es KET?</h2>
					<h3  align="justify"> Somos la plataforma que te ayuda a encontrar los mejores doctores a los mejores precios para que obtengas resultados perfectos en procedimientos estéticos.</h3>

					<br>
					<br>
					<div class="row">
    <div class="col-sm-6" >
<h4 align="justify"> En KetMedical nos preocupamos por que encuentres el procedimiento fácil y rápido, es por eso que contamos con:</h4>
<br>
<br>
<br>
<div class="experience-box">
  				<ul class="experience-list">
  						<li  align="justify">
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a  href="#" class="name">Los mejores doctores especializados y certificados de la región. </a>
																
																</div>
															</div>
														</li>


															<li align="justify">
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a    href="#" class="name"> Hospitales y clínicas de alta calidad. </a>
																
																</div>
															</div>
														</li>

														<li  align="justify">
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#" class="name">Diferentes procedimientos estéticos que se adaptan a tus necesidades.  </a>
																
																</div>
															</div>
														</li>

														<li  align="justify">
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#" class="name">Las mejores promociones y los mejores precios.    </a>
																
																</div>
															</div>
														</li>

														<li  align="justify">
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#" class="name">Agenda tú cita cuando más te convenga.    </a>
																
																</div>
															</div>
														</li>
															<li  align="justify">
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#" class="name">Excelente servicio de atención al cliente.    </a>
																
																</div>
															</div>
														</li>
														<li  align="justify">
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#" class="name"> Pago seguro vía pay pal y transferencias.   </a>
																
																</div>
															</div>
														</li>
  				</ul>
  		</div>
    </div>
    <div class="col-sm-6" >
					<div class="doc-img">
										
											<img class="img-fluid" alt="User Image" src="assets/img/imagenlogo.png">
										
									</div>
    </div>
  		
  </div>
				</div>
					
					
				</div>
			</div>
		</section>
		<!-- Popular Section -->
		<section class="section section-doctor">
			<div class="container-fluid">
				<div class="section-header text-center">
					<h2>Conoce a nuestros doctores</h2>
					<p class="sub-title">Conoce a los doctores que trabaja con KET, los mejores doctores al alcance de tú mano.</p>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="doctor-slider slider">
							<!-- Doctor Widget -->

								<?php 

			 					        $stmt = $conn->prepare("SELECT *  FROM ket_doctores  ORDER BY id");
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
												$fotos='admin/'.$country['imagen'];
												
						echo "
							<div class=\"profile-widget\">
								<div class=\"doc-img\">
									<a href=\"doctor-profile.php?iddr=".$country['Id']."\">
										<img class=\"img-fluid\" alt=\"User Image\" src='".$fotos."'>
									</a>
									<a href=\"javascript:void(0)\" class=\"fav-btn\">	<i class=\"far fa-bookmark\"></i>
									</a>
								</div>
								<div class=\"pro-content\">
									<h3 class=\"title\">
											<a href=\"doctor-profile.php?iddr=".$country['Id']."\">".$country['Nombre']."</a> 
											<i class=\"fas fa-check-circle verified\"></i>
										</h3>
									<p class=\"speciality\">".$country['cabecera']."</p>
									<div class=\"rating\">	<i class=\"fas fa-star filled\"></i>
										<i class=\"fas fa-star filled\"></i>
										<i class=\"fas fa-star filled\"></i>
										<i class=\"fas fa-star filled\"></i>
										<i class=\"fas fa-star filled\"></i>
										<span class=\"d-inline-block average-rating\">(5)</span>
									</div>
									<ul class=\"available-info\">
										<li>	<i class=\"fas fa-map-marker-alt\"></i>".$country['ubicacion']."</li>
										
										
									</ul>
									<div class=\"row row-sm\">
										<div class=\"col-6\">	<a href=\"doctor-profile.php?iddr=".$country['Id']."\" class=\"btn view-btn\">Conoce a tú Doctor</a>
										</div>
										
									</div>
								</div>
							</div>";
						}
						?>
							<!-- /Doctor Widget -->
							<!-- Doctor Widget -->
							
							<!-- Doctor Widget -->
							
						
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section section-features">
			<div class="container">
				<div class="section-header text-center">
					<h2>Nuestras especialidades</h2>
					<p class="sub-title">Conoce todas nuestras especialidades y ve todas las opciones que tenemos para tí.</p>
				</div>
				<div class="row">
						<?php 
					$stmt = $conn->prepare("SELECT *  FROM ket_especialidades  ORDER BY id");
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
												$fotos='admin/'.$country['Imagen'];
												
											
			 					echo "
					<div class=\"col-lg-3\">
						<div class=\"category-box\">
							<div class=\"category-image\">
								<img src='".$fotos."' alt=\"\">
							</div>
							<div class=\"category-content\">
								<h4>".$country['Especialidad']."</h4>
								<span>5 paquetes</span>
							</div>
						</div>
					</div>				
					 ";
								}
 ?>
					
				</div>
			</div>
		</section>
		<!-- /Popular Section -->
		<!-- Availabe Features -->
		
		<!-- /Availabe Features -->
		<!-- Blog Section -->
		<!-- <section class="section section-blogs">
			<div class="container-fluid">
			
				<div class="section-header text-center">
					<h2>Blog y Noticias</h2>
					<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				
				<div class="row blog-grid-row">
					<div class="col-md-6 col-lg-3 col-sm-12">
						
						<div class="blog grid-blog">
							<div class="blog-image">
								<a href="blog-details.html">
									<img class="img-fluid" src="assets/img/blog/blog-01.jpg" alt="Post Image">
								</a>
							</div>
							<div class="blog-content">
								<ul class="entry-meta meta-item">
									<li>
										<div class="post-author">
											<a href="doctor-profile.html">
												<img src="assets/img/doctors/doctor-thumb-01.jpg" alt="Post Author"> <span>Dr. Rodolfo Ruiz</span>
											</a>
										</div>
									</li>
									<li><i class="far fa-clock"></i> 10 de Agosto de 2021</li>
								</ul>
								<h3 class="blog-title"><a href="blog-details.html">Ket – Making your clinic painless visit?</a></h3>
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
							</div>
						</div>
						
					</div>
					<div class="col-md-6 col-lg-3 col-sm-12">
						
						<div class="blog grid-blog">
							<div class="blog-image">
								<a href="blog-details.html">
									<img class="img-fluid" src="assets/img/blog/blog-02.jpg" alt="Post Image">
								</a>
							</div>
							<div class="blog-content">
								<ul class="entry-meta meta-item">
									<li>
										<div class="post-author">
											<a href="doctor-profile.html">
												<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="Post Author"> <span>Dr. Darren Elder</span>
											</a>
										</div>
									</li>
									<li><i class="far fa-clock"></i> 3 Dec 2019</li>
								</ul>
								<h3 class="blog-title"><a href="blog-details.html">What are the benefits of Online Doctor Booking?</a></h3>
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
							</div>
						</div>
						
					</div>
					<div class="col-md-6 col-lg-3 col-sm-12">
						
						<div class="blog grid-blog">
							<div class="blog-image">
								<a href="blog-details.html">
									<img class="img-fluid" src="assets/img/blog/blog-03.jpg" alt="Post Image">
								</a>
							</div>
							<div class="blog-content">
								<ul class="entry-meta meta-item">
									<li>
										<div class="post-author">
											<a href="doctor-profile.html">
												<img src="assets/img/doctors/doctor-thumb-03.jpg" alt="Post Author"> <span>Dr. Deborah Angel</span>
											</a>
										</div>
									</li>
									<li><i class="far fa-clock"></i> 3 Dec 2019</li>
								</ul>
								<h3 class="blog-title"><a href="blog-details.html">Benefits of consulting with an Online Doctor</a></h3>
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
							</div>
						</div>
						
					</div>
					<div class="col-md-6 col-lg-3 col-sm-12">
					
						<div class="blog grid-blog">
							<div class="blog-image">
								<a href="blog-details.html">
									<img class="img-fluid" src="assets/img/blog/blog-04.jpg" alt="Post Image">
								</a>
							</div>
							<div class="blog-content">
								<ul class="entry-meta meta-item">
									<li>
										<div class="post-author">
											<a href="doctor-profile.html">
												<img src="assets/img/doctors/doctor-thumb-04.jpg" alt="Post Author"> <span>Dr. Sofia Brient</span>
											</a>
										</div>
									</li>
									<li><i class="far fa-clock"></i> 2 Dec 2019</li>
								</ul>
								<h3 class="blog-title"><a href="blog-details.html">5 Great reasons to use an Online Doctor</a></h3>
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
							</div>
						</div>
						
					</div>
				</div>
				<div class="view-all text-center">	<a href="blog-list.html" class="btn btn-primary">Ver todos</a>
				</div>
			</div>
		</section> -->
		<!-- /Blog Section -->
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
		<!-- Slick JS -->
		<script src="assets/js/slick.js"></script> 
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
</body>

</html>