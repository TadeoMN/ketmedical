<?php require_once  "php/conexion.php"; 
		$iddr  = $_REQUEST["iddr"];

		
		
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
		<title>Ket</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
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
						<li class="nav-item">
							<a class="nav-link header-login" href="logindr.php">Doctores</a>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="login.html">Pacientes </a>
						</li>
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
									<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
									<li class="breadcrumb-item active" aria-current="page">Doctor</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Perfil del Doctor</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">

					<!-- Doctor Widget -->
					<div class="card">
						<div class="card-body">
							<div class="doctor-widget">
								<div class="doc-info-left">
									<?php
										  $stmt = $conn->prepare("SELECT ket_doctores.Id,Nombre, 	correo,imagen  ,activo,id_especialidad,cabecera,ubicacion,cedula FROM ket_doctores where ket_doctores.Id=:correo   ORDER BY Nombre");
												   $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

											      $stmt->execute();
											      $countriesList = $stmt->fetchAll();

											      	  foreach($countriesList as $country){

											      	  	$fotos='admin/'.$country['imagen'];
								echo "	<div class=\"doctor-img\">
										<img src='".$fotos."' class=\"img-fluid\" alt=\"User Image\">
									</div>
										
									<div class=\"doc-info-cont\">
										<h4 class=\"doc-name\">".$country['Nombre']."</h4>										
										<p class=\"doc-department\">".$country['cabecera']."</p>
										<p>Cedula: ".$country['cedula']."</p>
										<div class=\"rating\">
											<i class=\"fas fa-star filled\"></i>
											<i class=\"fas fa-star filled\"></i>
											<i class=\"fas fa-star filled\"></i>
											<i class=\"fas fa-star filled\"></i>
											<i class=\"fas fa-star  filled\"></i>
											
										</div>
								
										<div class=\"clinic-details\">
											<p class=\"doc-location\"><i class=\"fas fa-map-marker-alt\"></i>".$country['ubicacion']."</p>
											";
										}
									 ?>


											<ul class="clinic-gallery">
												<?php
										  $stmt = $conn->prepare("SELECT * FROM ket_imagenesdr where ket_imagenesdr.id_doctor=:correo   ORDER BY imagen");
												   $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

											      $stmt->execute();
											      $countriesList = $stmt->fetchAll();

											      	  foreach($countriesList as $country){
											      	  	$fotos='admin/'.$country['imagen'];
											echo "      	  	
												<li>
													<a href='".$fotos."' data-fancybox=\"gallery\">
														<img src='".$fotos."' alt=\"Feature\">
													</a>
												</li>
												";
												}
									 ?>
													
											</ul>
										</div>
										
									</div>
								</div>
								<div class="doc-info-right">
									<div class="clini-infos">
										<ul>
											<li><i class="far fa-thumbs-up"></i> 100%</li>
										
										
										</ul>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<!-- /Doctor Widget -->
					
					<!-- Doctor Details Tab -->
					<div class="card">
						<div class="card-body pt-0">
						
							<!-- Tab Menu -->
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="#doc_overview" data-toggle="tab">¿Acerca de?</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#doc_locations" data-toggle="tab">Paquetes</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#doc_reviews" data-toggle="tab">Opiniones</a>
									</li>
									
								</ul>
							</nav>
							<!-- /Tab Menu -->
							
							<!-- Tab Content -->
							<div class="tab-content pt-0">
							
								<!-- Overview Content -->
								<div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
									<div class="row">
										<div class="col-md-12 col-lg-9">
										<?php
										  $stmt = $conn->prepare("SELECT ket_doctores.Id,Nombre, 	correo,imagen  ,activo,id_especialidad,cabecera,ubicacion,cedula,descripcion FROM ket_doctores where ket_doctores.Id=:correo   ORDER BY Nombre");
												   $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

											      $stmt->execute();
											      $countriesList = $stmt->fetchAll();

											      	  foreach($countriesList as $country){
	echo "
											<!-- About Details -->
											<div class=\"widget about-widget\">
												<h4 class=\"widget-title\">Acerca de mí</h4>
												<p>".$country['descripcion']."</p>
											</div>
											<!-- /About Details -->
										";
												}
									 ?>
											<!-- Education Details -->
											<div class="widget education-widget">
												<h4 class="widget-title">Educación</h4>
												<div class="experience-box">
													<ul class="experience-list">
	<?php
										  $stmt = $conn->prepare("SELECT id,titulo_doctor,escuela_doctor,anios_doctor FROM ket_doctores_escuela where ket_doctores_escuela.Id_doctor=:correo   ORDER BY Id");
												   $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

											      $stmt->execute();
											      $countriesList = $stmt->fetchAll();

											      	  foreach($countriesList as $country){
	echo "
														<li>
															<div class=\"experience-user\">
																<div class=\"before-circle\"></div>
															</div>
															<div class=\"experience-content\">
																<div class=\"timeline-content\">
																	<a href=\"#/\" class=\"name\">".$country['titulo_doctor']."</a>
																	<div>".$country['escuela_doctor']."</div>
																	<span class=\"time\">".$country['anios_doctor']."</span>
																</div>
															</div>
														</li>
														";
												}
									 ?>
													</ul>
												</div>
											</div>
											<!-- /Education Details -->
									
											<!-- Experience Details -->
											<div class="widget experience-widget">
												<h4 class="widget-title">Afiliaciones</h4>
												<div class="experience-box">
													<ul class="experience-list">
														<?php
										  $stmt = $conn->prepare("SELECT id,afiliacion FROM ket_afiliaciones where ket_afiliaciones.Id_doctor=:correo   ORDER BY Id");
												   $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

											      $stmt->execute();
											      $countriesList = $stmt->fetchAll();

											      	  foreach($countriesList as $country){
	echo "
														<li>
															<div class=\"experience-user\">
																<div class=\"before-circle\"></div>
															</div>
															<div class=\"experience-content\">
																<div class=\"timeline-content\">
																	<a href=\"#/\" class=\"name\">".$country['afiliacion']."</a>
																	
																</div>
															</div>
														</li>
														";
												}
									 ?>
													</ul>
												</div>
											</div>
											<!-- /Experience Details -->
								
											<!-- Awards Details -->
											<div class="widget awards-widget">
													<?php
										  $stmt = $conn->prepare("SELECT count(id) id FROM ket_premios where ket_premios.Id_doctor=:correo   ORDER BY Id");
												   $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

											      $stmt->execute();
											      $countriesList = $stmt->fetchAll();
											      {

											      }

											      	  foreach($countriesList as $country){
											      	  		 $premios=$country['id'];
											      	  }

											      	  if ($premios>0)
											      	  {

											      	  
echo "
												<h4 class=\"widget-title\">Premios y reconocimientos</h4>
												<div class=\"experience-box\">
													<ul class=\"experience-list\">
													";
															  $stmt = $conn->prepare("SELECT * FROM ket_premios where ket_premios.Id_doctor=:correo   ORDER BY Id");
												   $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

											      $stmt->execute();
											      $countriesList = $stmt->fetchAll();
											      {

											      }

											      	  foreach($countriesList as $country)
											      	  {
													echo "	<li>
															<div class=\"experience-user\">
																<div class=\"before-circle\"></div>
															</div>
															<div class=\"experience-content\">
																<div class=\"timeline-content\">
																	<p class=\"exp-year\">".$country['fecha']."</p>
																	<h4 class=\"exp-title\">".$country['premio']."</h4>
																	<p>".$country['leyenda']."</p>
																</div>
															</div>
														</li>";
													}
														
												echo "	</ul>
												</div>" ;
												}
										?>

											</div>
											<!-- /Awards Details -->

											<!-- Services List -->
											<div class="service-list">
												<h4>Servicios</h4>
												<ul class="clearfix">
													<?php
										  $stmt = $conn->prepare("SELECT id,especialidad FROM ket_especialidad where ket_especialidad.Id_doctor=:correo   ORDER BY Id");
												   $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

											      $stmt->execute();
											      $countriesList = $stmt->fetchAll();

											      	  foreach($countriesList as $country){
	echo "
													<li>".$country['especialidad']."</li>
													";
												}
									 ?>
												</ul>
											</div>
											<!-- /Services List -->
											
											<!-- Specializations List -->
											
											<!-- /Specializations List -->

										</div>
									</div>
								</div>
								<!-- /Overview Content -->
								
								<!-- Locations Content -->
								<div role="tabpanel" id="doc_locations" class="tab-pane fade">
								
								<?php 

			 					        $stmt = $conn->prepare("SELECT nombre_paquete, desc_paquete,fot1_paquete,fot2_paquete,fot3_paquete,fot4_paquete,descuento, preciofinal,precio_paquete,ket_paquetes.id,carac1_paquete,carac2_paquete,carac3_paquete,carac4_paquete FROM ket_doctorpaquetes join ket_doctores on id_doctor=ket_doctores.id join ket_paquetes on ket_doctorpaquetes.id_paquete=ket_paquetes.id where ket_doctorpaquetes.id_doctor=:id ORDER BY nombre_paquete");
			 					        			 $stmt->bindValue(':id', (int)$iddr, PDO::PARAM_INT);
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
											          		$fotos='admin/'.$country['fot1_paquete'];
												$fotos2='admin/'.$country['fot2_paquete'];
												$fotos3='admin/'.$country['fot3_paquete'];
												$fotos4='admin/'.$country['fot4_paquete'];
										echo "
									<!-- Location List -->
									<div class=\"location-list\">
										<div class=\"row\">
										
											<!-- Clinic Content -->
											<div class=\"col-md-6\">
												<div class=\"clinic-content\">
													<h4 class=\"clinic-name\"><a href=\"product-description.php?paquete=".$country['id']."\">".$country['nombre_paquete']."</a></h4>
													<p class=\"doc-speciality\">".$country['desc_paquete']."</p>
													<p class=\"doc-speciality\">".$country['carac1_paquete']."</p>
													<p class=\"doc-speciality\">".$country['carac2_paquete']."</p>
													<p class=\"doc-speciality\">".$country['carac3_paquete']."</p>
													<p class=\"doc-speciality\">".$country['carac4_paquete']."</p>
													<div class=\"rating\">
														<i class=\"fas fa-star filled\"></i>
														<i class=\"fas fa-star filled\"></i>
														<i class=\"fas fa-star filled\"></i>
														<i class=\"fas fa-star filled\"></i>
														<i class=\"fas fa-star filled\"></i>
														<span class=\"d-inline-block average-rating\">(5)</span>
													</div>
													<div class=\"clinic-details mb-0\">
														
														<ul>
															<li>
																<a href='".$fotos."' data-fancybox=\"gallery2\">
																	<img src='".$fotos."' alt=\"Feature Image\">
																</a>
															</li>
															"; 
															 if (strcmp($country['fot2_paquete'],"php/img/anonymous.png"))
															 {
															 	echo "
															<li>
																<a href='".$fotos2."' data-fancybox=\"gallery2\">
																	<img src='".$fotos2."' alt=\"Feature Image\">
																</a>
															</li>" ;
														}
														 if (strcmp($country['fot3_paquete'],"php/img/anonymous.png"))
															 {
															 	echo "
															<li>
																<a href='".$fotos3."' data-fancybox=\"gallery2\">
																	<img src='".$fotos3."' alt=\"Feature Image\">
																</a>
															</li>
															" ;
														}
														 if (strcmp($country['fot4_paquete'],"php/img/anonymous.png"))
															 {
															 	echo "
															<li>
																<a href='".$fotos4."' data-fancybox=\"gallery2\">
																	<img src='".$fotos4."' alt=\"Feature Image\">
																</a>
															</li>
															" ;
														}
														echo "
														</ul>
													</div>
												</div>
											</div>
											<!-- /Clinic Content -->
											
											<!-- Clinic Timing -->
											
											<!-- /Clinic Timing -->
											
											<div class=\"col-md-2\">
												<div class=\"consult-price\">
													$".$country['preciofinal']."
												</div>
											</div>
										</div>
									</div>
									<!-- /Location List -->
									
									<!-- Location List -->
									";
							}
							 ?>
								</div> 

								<!-- /Locations Content -->
								
								<!-- Reviews Content -->
								<div role="tabpanel" id="doc_reviews" class="tab-pane fade">
								
									<!-- Review Listing -->
									<div class="widget review-listing">
										<ul class="comments-list">
												<!-- Comment List -->
												<?php
										  $stmt = $conn->prepare("SELECT * FROM ket_opiniondr where ket_opiniondr.Id_doctor=:correo   ORDER BY Id");
												   $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

											      $stmt->execute();
											      $countriesList = $stmt->fetchAll();

											      	  foreach($countriesList as $country){
											      	  	$estrellas=$country['estrellas'];
	echo "
											<li>
												<div class=\"comment\">
													<img class=\"avatar avatar-sm rounded-circle\" alt=\"User Image\" src=\"assets/img/patients/patient.jpg\">
													<div class=\"comment-body\">
														<div class=\"meta-data\">
															<span class=\"comment-author\">".$country['correo']."</span>
															<span class=\"comment-date\">".$country['fecha']."</span>
															";
															if ($estrellas==5)
															{
																echo"
															<div class=\"review-count rating\">
																<i class=\"fas fa-star filled\"></i>
																<i class=\"fas fa-star filled\"></i>
																<i class=\"fas fa-star filled\"></i>
																<i class=\"fas fa-star filled\"></i>
																<i class=\"fas fa-star filled\"></i>
															</div> ";
														}
													elseif ($estrellas==4)
															{
																echo"
															<div class=\"review-count rating\">
																<i class=\"fas fa-star filled\"></i>
																<i class=\"fas fa-star filled\"></i>
																<i class=\"fas fa-star filled\"></i>
																<i class=\"fas fa-star filled\"></i>
																<i class=\"fas fa-star \"></i>
															</div> ";
														}

													elseif ($estrellas==3)
															{
																echo"
															<div class=\"review-count rating\">
																<i class=\"fas fa-star filled\"></i>
																<i class=\"fas fa-star filled\"></i>
																<i class=\"fas fa-star filled\"></i>
																<i class=\"fas fa-star \"></i>
																<i class=\"fas fa-star \"></i>
															</div> ";
														}
															elseif ($estrellas==2)
															{
																echo"
															<div class=\"review-count rating\">
																<i class=\"fas fa-star filled\"></i>
																<i class=\"fas fa-star filled\"></i>
																<i class=\"fas fa-star \"></i>
																<i class=\"fas fa-star \"></i>
																<i class=\"fas fa-star \"></i>
															</div> ";
														}
															else
															{
																echo"
															<div class=\"review-count rating\">
																<i class=\"fas fa-star filled\"></i>
																<i class=\"fas fa-star \"></i>
																<i class=\"fas fa-star \"></i>
																<i class=\"fas fa-star \"></i>
																<i class=\"fas fa-star \"></i>
															</div> ";
														}
														echo"
														</div>
														<p class=\"recommended\"><i class=\"far fa-thumbs-up\"></i>".$country['titulo']."</p>
														<p class=\"comment-content\">
														".$country['nota']."
														</p>
														
													</div>
												</div>
												
												<!-- Comment Reply -->
												
												<!-- /Comment Reply -->
												
											</li>
											";
										}
										?>
											<!-- /Comment List -->
											
											<!-- Comment List -->
											
											<!-- /Comment List -->
											
										</ul>
										
										<!-- Show All -->
										<!--<div class="all-feedback text-center">
											<a href="#" class="btn btn-primary btn-sm">
												Ver todas las opiniones <strong>(167)</strong> 
											</a>
										</div> -->
										<!-- /Show All -->
										
									</div>
									<!-- /Review Listing -->
								
									<!-- Write Review -->
									<div class="write-review">
											<?php
										  $stmt = $conn->prepare("SELECT * FROM ket_doctores where ket_doctores.Id=:correo   ORDER BY Id");
												   $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

											      $stmt->execute();
											      $countriesList = $stmt->fetchAll();

											      	  foreach($countriesList as $country){
											      	  	echo "
										<h4>Dejanos tus comentarios sobre  <strong>".$country['Nombre']."</strong></h4>
										";
									}
									?>
										
										<!-- Write Review Form -->
										<form>
											<div class="form-group">
												<label>Opinión</label>
												<div class="star-rating">
													<input id="star-5" type="radio" name="rating" value="star-5">
													<label for="star-5" title="5 stars">
														<i class="active fa fa-star"></i>
													</label>
													<input id="star-4" type="radio" name="rating" value="star-4">
													<label for="star-4" title="4 stars">
														<i class="active fa fa-star"></i>
													</label>
													<input id="star-3" type="radio" name="rating" value="star-3">
													<label for="star-3" title="3 stars">
														<i class="active fa fa-star"></i>
													</label>
													<input id="star-2" type="radio" name="rating" value="star-2">
													<label for="star-2" title="2 stars">
														<i class="active fa fa-star"></i>
													</label>
													<input id="star-1" type="radio" name="rating" value="star-1">
													<label for="star-1" title="1 star">
														<i class="active fa fa-star"></i>
													</label>
												</div>
											</div>
											<div class="form-group">
												<label>Título</label>
												<input class="form-control" type="text" placeholder="Favor de dejar tus comentarios">
											</div>
											<div class="form-group">
												<label>Tú opinión</label>
												<textarea id="review_desc" maxlength="100" class="form-control"></textarea>
											  
											  <div class="d-flex justify-content-between mt-3"><small class="text-muted"><span id="chars">100</span> caracteres restantes</small></div>
											</div>
											<hr>
											<div class="form-group">
												<div class="terms-accept">
													<div class="custom-checkbox">
													   <input type="checkbox" id="terms_accept">
													   <label for="terms_accept">He leido y acepto los <a href="#">Terminos  &amp; Condiciones</a></label>
													</div>
												</div>
											</div>
											<div class="submit-section">
												<button type="submit" class="btn btn-primary submit-btn">Agregar opinión</button>
											</div>
										</form>
										<!-- /Write Review Form -->
										
									</div>
									<!-- /Write Review -->
						
								</div>
								<!-- /Reviews Content -->
								
								<!-- Business Hours Content -->
								<div role="tabpanel" id="doc_business_hours" class="tab-pane fade">
									<div class="row">
										<div class="col-md-6 offset-md-3">
										
											<!-- Business Hours Widget -->
											<div class="widget business-widget">
												<div class="widget-content">
													<div class="listing-hours">
														<div class="listing-day current">
															<div class="day">Today <span>5 Nov 2019</span></div>
															<div class="time-items">
																<span class="open-status"><span class="badge bg-success-light">Open Now</span></span>
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Monday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Tuesday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Wednesday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Thursday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Friday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Saturday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day closed">
															<div class="day">Sunday</div>
															<div class="time-items">
																<span class="time"><span class="badge bg-danger-light">Closed</span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /Business Hours Widget -->
									
										</div>
									</div>
								</div>
								<!-- /Business Hours Content -->
								
							</div>
						</div>
					</div>
					<!-- /Doctor Details Tab -->

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
		
		<!-- Voice Call Modal -->
		<div class="modal fade call-modal" id="voice_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<!-- Outgoing Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img alt="User Image" src="assets/img/doctors/doctor-thumb-02.jpg" class="call-avatar">
										<h4>Dr. Darren Elder</h4>
										<span>Connecting...</span>
									</div>							
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="voice-call.html" class="btn call-item call-start"><i class="material-icons">call</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Outgoing Call -->

					</div>
				</div>
			</div>
		</div>
		<!-- /Voice Call Modal -->
		
		<!-- Video Call Modal -->
		<div class="modal fade call-modal" id="video_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">
					
						<!-- Incoming Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img class="call-avatar" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
										<h4>Dr. Darren Elder</h4>
										<span>Calling ...</span>
									</div>							
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="video-call.html" class="btn call-item call-start"><i class="material-icons">videocam</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Incoming Call -->
						
					</div>
				</div>
			</div>
		</div>
		<!-- Video Call Modal -->
		
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Fancybox JS -->
		<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>
</html>