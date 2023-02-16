<?php require_once  "php/conexion.php"; 
		
			session_start();
		
		
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
		<title>Doccure</title>
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
	<body class="account-page">

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
							<p class="contact-info-header">442 367 1095 </p>
						</div>
						</li>
							<li class="nav-item">
							<a class="nav-link header-login" href="login.php">Pacientes </a>
						</li>
					</ul>
				</nav>
			</header>
			<!-- /Header -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
								
							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Registro de paciente <a href="logindr.php">¿Eres Doctor?</a></h3>
										</div>
										<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
										</div>

										<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
										</div>
										<!-- Register Form -->
										<form  class="needs-validation" novalidate >
											<div class="form-group form-focus">
												<input type="text" name="nombre" id="nombre" class="form-control floating" required>
												<label class="focus-label">Nombre</label>
												<div class="invalid-feedback">
																El campo de Nombre es obligatorio.
															</div>
											</div>
											<div class="form-group form-focus">
												<input type="email" name="email" id="email" class="form-control floating" required>
												<label class="focus-label">Email</label>
												<div class="invalid-feedback">
																El campo de correo es obligatorio.
															</div>
											</div>
											<div class="form-group form-focus">
												<input type="tel" id="phone" name="phone"
       pattern="[0-9]{10}"
        class="form-control floating" required>
												<label class="focus-label">Telefono </label>
												<div class="invalid-feedback">
																Favor de introducir un teléfono valido.
															</div>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="password" id="password" required>
												<label class="focus-label">Password</label>
												<div class="invalid-feedback">
																Favor de introducir un Password.
															</div>
											</div>
												<div class="form-group form-focus">
												<input type="password" class="form-control floating"   name="rpassword" id="rpassword"  required>
												<label class="focus-label">Confirmar Password</label>
	<div class="invalid-feedback">
																Favor de confirmar el Password.
															</div>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="login.php">¿Ya tienes una cuenta?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn"  name="but_submit" id="but_submit"   type="submit">Registrar</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
												</div>
												
											</div>
										</form>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Register Content -->
								
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
		  <script src="assets/js/form-validation.js"></script>
	
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		<script src="assets/js/loginformusuario.js"></script>
	</body>
</html>