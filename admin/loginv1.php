<?php require_once  "php/conexion.php"; 




?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Ket -Admin Login</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
 		<link rel="stylesheet" href="assets/css/validateerror.css">

        	<!-- EXTERNAL SCRIPTS
		============================================= -->	
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Panel de control de KET</p>
								<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	
								<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
								<!-- Form -->
								<form class="needs-validation" novalidate>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Usuario" name="usuario"  id="usuario" required>
										<div class="invalid-feedback">
																El campo de usuario es obligatorio.
															</div>
									</div>
									<div class="form-group">
										<input class="form-control" type="password" id="password" name="password" placeholder="Password" required>
										<div class="invalid-feedback">
																El campo de password es obligatorio.
															</div>
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" name="but_submit" id="but_submit" type="submit">Login</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="text-center forgotpass"><a href="forgot-password.html">Recuperar Contraseña</a></div>
								
							
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Form Validation JS -->
        <script src="assets/js/form-validation.js"></script>
	
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		<script src="js/loginform.js"></script>
		
		
    </body>
</html>