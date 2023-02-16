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
			<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7RYW0FYPWC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7RYW0FYPWC');
</script>
		<meta charset="utf-8">
		<title>Ket - Carrito de compras</title>
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
		<script
		  src="https://www.paypal.com/sdk/js?client-id=AccGX3kWmRNZ272Db5DbnjsPRP5CimMINYsSFuPfa8sPwXEywwZUVxo2YLaUja0FGjAK9eoSHyJwsRvI&currency=MXN&locale=es_MX" > // Required. Replace SB_CLIENT_ID with your sandbox client ID.
		</script>
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
									<li class="breadcrumb-item active" aria-current="page">Cart</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Cart</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">			
					
					<div class="card card-table">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover table-center mb-0">
									<thead>
										<tr>
											<th>Producto</th>
											
											<th>Precio</th>
											<th class="text-center">Cantidad</th>
											<th class="text-center">Total</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php 
											 $stmt = $conn->prepare("SELECT fot1_paquete,nombre_paquete,total,cantidad,ket_auxpedidos.id_paquete,precio_u,ket_auxpedidos.id  FROM ket_auxpedidos join ket_paquetes on ket_paquetes.id=ket_auxpedidos.id_paquete where id_usuario=:id ");
			 					        			 $stmt->bindValue(':id', $iddr, PDO::PARAM_STR);
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
											          	$fotos='admin/'.$country['fot1_paquete'];
											          	echo"
										<tr>
											<td>
												<h2 class=\"table-avatar\">
													<a href=\"product-description.php?paquete=".$country['id_paquete']."\" class=\"avatar avatar-sm mr-2\"><img class=\"avatar-img\" src='".$fotos."' alt=\"User Image\"></a>
												</h2>
												<a href=\"product-description.php?paquete=".$country['id_paquete']."\" >".$country['nombre_paquete']."</a>
											</td>
											
											<td>$".$country['precio_u']."</td>					
											<td class=\"text-center\">
											<div class=\"custom-increment cart\">
			                                    <div class=\"input-group1\">
				                                    <span class=\"input-group-btn float-left\" >
				                                        <button type=\"button\" id=\"minus_".$country['id']."\"   idEspe=".$country['id']." class=\"resta quantity-left-minus btn btn-danger btn-number\"  data-type=\"minus\" data-field=\"\">
				                                          <span><i class=\"fas fa-minus\"></i></span>
				                                        </button>
				                                    </span>
				                                    <input type=\"text\"   id=\"quantity1_".$country['id']."\" idEspe=".$country['id']." name=\"quantity1_".$country['id']."\"  class=\" input-number\" value=".$country['cantidad'].">
				                                    <span class=\"input-group-btn float-right\">
				                                        <button type=\"button\" id=\"plus_".$country['id']."\"   idEspe=".$country['id']." class=\"suma quantity-right-plus btn btn-success btn-number\" data-type=\"plus\" data-field=\"\">
				                                            <span><i class=\"fas fa-plus\"></i></span>
				                                        </button>
				                                    </span>
			                                	</div>
		                        			</div>
											</td>
											<td class=\"text-center\">$".$country['total']."</td>
											<td class=\"text-right\">
												<div class=\"table-action\">
													<a href=\"javascript:void(0);\" idEspe=".$country['id']." class=\"eliminaart btn btn-sm bg-danger-light\">
														<i class=\"fas fa-times\"></i>
													</a>
												</div>
											</td>
										</tr>
										";
									}

						?>
										
									</tbody>
								</table>		
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-7 col-lg-8">
						</div>
						
						<div class="col-md-5 col-lg-4">
						
							<!-- Booking Summary -->
							<div class="card booking-card">
								<div class="card-header">
									<h4 class="card-title">Total a pagar</h4>
								</div>
								<div class="card-body">						
												
											<div class="booking-total">
												<ul class="booking-total-list">
													<li>
														<span>Total</span>
														<?php 
														  $stmt = $conn->prepare("SELECT sum(total)total   FROM ket_auxpedidos where id_usuario=:id ");
			 					        			 $stmt->bindValue(':id', $iddr, PDO::PARAM_STR);
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
echo "
														<span class=\"total-cost\">$".$country['total']."</span> 
																<input type=\"hidden\" id=\"total\" name=\"total\" value=".$country['total'].">
											
														";
													}
													?>
													</li>
													
													<li>
														<br>
														<h4 class="card-title">Pagar</h4>
														 <div class="col-lg-12 form-btn" id="paypal-button-wrapper" style="display: block" >
    													<div id="paypal-button-container"></div>
											</div>
						                              
													</li>
												</ul>
											</div>
										
									
								</div>
							</div>
							<!-- /Booking Summary -->
							
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
		
		<script>paypal.Buttons({
	// onClick is called when the button is clicked
  	  	
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value:  document.getElementById('total').value 
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
         const url = 'php/appointmentFormImagenPayPal.php';

		 const  phone = document.getElementById('phone').value   ;
         const  department =  document.getElementById('department').value ;
        const  doctor =  document.getElementById('doctor')  ;
        const describe = doctor.options[doctor.selectedIndex].text;
		const  estudio2 =  document.getElementById('estudio2')  ;
        const describe2 = estudio2.options[estudio2.selectedIndex].text;


        const  patient =  document.getElementById('patient').value ;
        const  date = document.getElementById('date').value  ;
       const  name = document.getElementById('name').value   ;
        const  email = document.getElementById('email').value  ;
        const  msg = document.getElementById('message').value   ;
       const  horacita =  document.getElementById('horacita').value  ;
       const idPaypal=details.id;
       const  	IdPayPalPago=details.purchase_units[0].payments.captures[0].id;
          const  Total =  document.getElementById('precio3').value  ;
       const  formulario = new FormData();	
      document.getElementById('paypal-button-wrapper').style.display = 'none';
       formulario.append('department', department);
       formulario.append('doctor', doctor.value);
       formulario.append('patient', patient);
       formulario.append('date', date);
       formulario.append('name', name);
       formulario.append('email', email);
        formulario.append('phone', phone);
       formulario.append('msg', msg);
       formulario.append('horacita', horacita);
       formulario.append('describe', describe);
       formulario.append('estudio2', estudio2.value);
		 formulario.append('describe2', describe2);
		  formulario.append('idPaypal', idPaypal);
		   formulario.append('IdPayPalPago', IdPayPalPago);
		     formulario.append('Total', Total);
 			$(".loading").fadeIn("slow").html("Confirmando...");

        /*const dataString={ "department": department,"doctor":doctor,"patient":patient,"date":date,"name":name,"email":email,"phone":phone,"msg":msg,"horacita":horacita,"describe":describe,"estudio2":estudio2,"describe2":describe2 };*/
         const dataString = "department=" + department + "&doctor=" + doctor.value + "&patient=" + patient + "&date=" + date + "&name=" + name + "&email=" + email + "&phone=" + phone + "&msg=" + msg
          + "&horacita=" + horacita + "&describe=" + describe  + "&estudio2=" + estudio2.value + "&describe2=" + describe2 ;

        //alert('Pago recibidos ' + details.id );

        fetch(url, {
            method: 'POST',
           body: formulario
 
        })
        .then(function(response) {
   			if(response.ok) {
       			return response.text()
       			 setInterval('location.reload()', 3000); 
       			  $('.loading').fadeIn('slow').html('<font color="#48af4b">Su cita ha sido confirmada, gracias por su confianza.</font>').delay(3000).fadeOut('slow');
   			} else {
      				 throw "Error en la llamada Ajax";
      				  setInterval('location.reload()', 3000); 
      				    $('.loading').fadeIn('slow').html('<font color="#ff5607">Ocurrio un error, favor de intentarlo mas tarde.</font>').delay(3000).fadeOut('slow');
   				}

				})
				.then(function(texto) {
   						console.log(texto);
   						$('.loading').fadeIn('slow').html('<font color="#48af4b">Su cita ha sido confirmada, gracias por su confianza.</font>').delay(3000).fadeOut('slow');
   						 setInterval('location.reload()', 3000); 
					})
						.catch(function(err) {
  					 console.log(err);
  					  setInterval('location.reload()', 3000); 
  					    $('.loading').fadeIn('slow').html('<font color="#ff5607">Ocurrio un error, favor de intentarlo mas tarde.</font>').delay(3000).fadeOut('slow');
				});

			//alert('tel ' + dataString );
        //document.getElementById('validas').click();
      });
    }

  }).render('#paypal-button-container');</script>
		
		
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Fancybox JS -->
		<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		<script  src="assets/js/cart.js"></script>
	</body>
</html>