<?php require_once  "php/conexion.php"; 
	$paquete  = $_REQUEST["paquete"];
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
		<title>Ket</title>
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
								<a class=\"dropdown-item\" href=\"login.php\">Logout</a>
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
									<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
									<li class="breadcrumb-item active" aria-current="page">Descripción de paquete</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Descripción de paquete</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">

			 					<?php 

			 					        $stmt = $conn->prepare("SELECT *  FROM ket_paquetes where id=:id ORDER BY id");
			 					        			 $stmt->bindValue(':id', (int)$paquete, PDO::PARAM_INT);
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
												$fotos='admin/'.$country['fot1_paquete'];
												$fotos2='admin/'.$country['fot2_paquete'];
												$fotos3='admin/'.$country['fot3_paquete'];
												$fotos4='admin/'.$country['fot4_paquete'];
						echo " <div class=\"col-md-7 col-lg-9 col-xl-9\">
							<!-- Doctor Widget -->
							<div class=\"card\">
								<div class=\"card-body product-description\">
									<div class=\"doctor-widget\">
										<div class=\"doc-info-left\">
											<div class=\"doctor-img1\">
													<img src='".$fotos."' class=\"img-fluid\" alt=\"User Image\">
											</div>
											<div class=\"doc-info-cont\">
												<h4 class=\"doc-name mb-2\">".$country['nombre_paquete']."</h4>
												<p class=\"doc-department\">".$country['desccorta']."</p>
													<input type=\"hidden\" id=\"paquete\" name=\"paquete\" value=".$paquete.">
												

												<div class=\"clinic-details\">
												<ul class=\"clinic-gallery\">
												<li>
													";
														    $stmt = $conn->prepare("SELECT ket_doctores.id,Nombre,imagen  FROM ket_doctorpaquetes join  ket_doctores on ket_doctores.id=ket_doctorpaquetes.id_doctor where id_paquete=:id ORDER BY id_paquete");
			 					        			 $stmt->bindValue(':id', (int)$paquete, PDO::PARAM_INT);
											          $stmt->execute();
											          $countriesList2 = $stmt->fetchAll();
											          	  foreach($countriesList2 as $country2){
												$fotos='admin/'.$country2['imagen'];
echo "
													<a href=\"doctor-profile.php?iddr=".$country2['id']."\" >
														<img src='".$fotos."' alt=\"Feature\"> ".$country2['Nombre']."
													</a>
														<input type=\"hidden\" id=\"id_doctor\" name=\"id_doctor\" value=".$country2['id'].">
														";

															}

																echo " 
												</li>
												</ul>
												</div>
											</div>

										</div>
										
									</div>
									
								</div>
							</div>
							 
							<!-- /Doctor Widget -->
							<div class=\"clinic-details\">
											
											<ul class=\"clinic-gallery\">
											"; if (strlen($country['fot2_paquete'])>0)
											{
											echo "
												<li>
													<a href='".$fotos2."' data-fancybox=\"gallery\">
														<img src='".$fotos2."' alt=\"Feature\">
													</a>
												</li>";
											}
												if (strlen($country['fot3_paquete'])>0)
{
											echo "
												<li>
													<a href='".$fotos3."' data-fancybox=\"gallery\">
														<img  src='".$fotos3."' alt=\"Feature Image\">
													</a>
												</li>
												";
											}
											if (strlen($country['fot3_paquete'])>0)
{
											echo "
												<li>
													<a href='".$fotos4."' data-fancybox=\"gallery\">
														<img src='".$fotos4."' alt=\"Feature\">
													</a>
												</li>
												";
											}
												
										echo "	</ul>
										</div>
									
							
							<!-- Doctor Details Tab -->
					<div class=\"card\">
						<div class=\"card-body pt-0\">
						
							<!-- Tab Menu -->
							<nav class=\"user-tabs mb-3\">
								<ul class=\"nav nav-tabs nav-tabs-bottom nav-justified\">
									<li class=\"nav-item\">
										<a class=\"nav-link active\" href=\"#doc_overview\" data-toggle=\"tab\">Información General</a>
									</li>
									<li class=\"nav-item\">
										<a class=\"nav-link\" href=\"#doc_locations\" data-toggle=\"tab\">Recomendaciones y cuidados posteriores</a>
									</li>
									<li class=\"nav-item\">
										<a class=\"nav-link\" href=\"#doc_reviews\" data-toggle=\"tab\">Preguntas Frecuentes</a>
									</li>
									
								</ul>
							</nav>
							<!-- /Tab Menu -->
							
							<!-- Tab Content -->
							<div class=\"tab-content pt-0\">
							
								<!-- Overview Content -->
								<div role=\"tabpanel\" id=\"doc_overview\" class=\"tab-pane fade show active\">
									<div class=\"row\">
										<div class=\"col-md-12 col-lg-9\">
											
											<!-- About Details -->
											<div class=\"widget about-widget\">
												<h4 class=\"widget-title\">Descripción del paquete</h4>
												<p>".$country['desc_paquete']."</p>
											</div>
											<!-- /About Details -->
 
 ";

if (strlen($country['tecnica'])>0)
									{

echo "
												<!-- Awards Details -->
											<div class=\"widget awards-widget\">
												<h4 class=\"widget-title\">Técnica</h4>
												<p>".$country['tecnica']."</p>
											</div>


";
}

 echo "

											<!-- Education Details -->
											<div class=\"widget education-widget\">
												<h4 class=\"widget-title\">Incluye</h4>
												<div class=\"experience-box\">
													<ul class=\"experience-list\">
													"; 
														if (strlen($country['carac1_paquete'])>0)
									{
											echo "
														<li>
															<div class=\"experience-user\">
																<div class=\"before-circle\"></div>
															</div>
															<div class=\"experience-content\">
																<div class=\"timeline-content\">
																	<a href=\"#/\" class=\"name\">".$country['carac1_paquete']."</a>
																	
																</div>
															</div>
														</li> ";
													}
													if (strlen($country['carac2_paquete'])>0)
									{
											echo "
														<li>
															<div class=\"experience-user\">
																<div class=\"before-circle\"></div>
															</div>
															<div class=\"experience-content\">
																<div class=\"timeline-content\">
																	<a href=\"#/\" class=\"name\">".$country['carac2_paquete']."</a>
																	
																</div>
															</div>
														</li>
														";
													}
													if (strlen($country['carac3_paquete'])>0)
									{
											echo "
														<li>
															<div class=\"experience-user\">
																<div class=\"before-circle\"></div>
															</div>
															<div class=\"experience-content\">
																<div class=\"timeline-content\">
																	<a href=\"#/\" class=\"name\">".$country['carac3_paquete']."</a>
																	
																</div>
															</div>
														</li>
														";
													}
													if (strlen($country['carac4_paquete'])>0)
									{
											echo "
														<li>
															<div class=\"experience-user\">
																<div class=\"before-circle\"></div>
															</div>
															<div class=\"experience-content\">
																<div class=\"timeline-content\">
																	<a href=\"#/\" class=\"name\">".$country['carac4_paquete']."</a>
																	
																</div>
															</div>
														</li>
														";
													}
													if (strlen($country['carac5_paquete'])>0)
									{
											echo "
														<li>
															<div class=\"experience-user\">
																<div class=\"before-circle\"></div>
															</div>
															<div class=\"experience-content\">
																<div class=\"timeline-content\">
																	<a href=\"#/\" class=\"name\">".$country['carac5_paquete']."</a>
																	
																</div>
															</div>
														</li>
														";
													}
												echo "	</ul>
												</div>
											</div>
											<!-- /Education Details -->
											<!-- Experience Details -->
											<div class=\"widget experience-widget\">
												<h4 class=\"widget-title\">Beneficios</h4>
												<p>".$country['Como_paquete']."</p>
											</div>

											<!-- /Experience Details -->
								
											<!-- Awards Details -->
											<div class=\"widget awards-widget\">
												<h4 class=\"widget-title\">Anestesia</h4>
												<p>".$country['Anest_paquete']."</p>
											</div>
											<!-- /Awards Details -->

												";

													if (strlen($country['Tiem_paquete'])>0)
									{

echo "
												<!-- Awards Details -->
											<div class=\"widget awards-widget\">
												<h4 class=\"widget-title\">Tiempo de procedimiento</h4>
												<p>".$country['Tiem_paquete']."</p>
											</div>


";
}

if (strlen($country['dolor'])>0)
									{

echo "
												<!-- Awards Details -->
											<div class=\"widget awards-widget\">
												<h4 class=\"widget-title\">Dolor</h4>
												<p>".$country['dolor']."</p>
											</div>


";
}

if (strlen($country['recuperacion'])>0)
									{

echo "
												<!-- Awards Details -->
											<div class=\"widget awards-widget\">
												<h4 class=\"widget-title\">Recuperación</h4>
												<p>".$country['recuperacion']."</p>
											</div>


";
}

if (strlen($country['inicioefecto'])>0)
									{

echo "
												<!-- Awards Details -->
											<div class=\"widget awards-widget\">
												<h4 class=\"widget-title\">Tiempo de inicio de efecto</h4>
												<p>".$country['inicioefecto']."</p>
											</div>


";
}

if (strlen($country['duracionefecto'])>0)
									{

echo "
												<!-- Awards Details -->
											<div class=\"widget awards-widget\">
												<h4 class=\"widget-title\">Duración de efecto</h4>
												<p>".$country['duracionefecto']."</p>
											</div>


";
}
											echo "
											<!-- /Awards Details -->
											
										
											<!-- Services List -->
										
											<!-- /Specializations List -->

										</div>
									</div>
								</div>
								<!-- Reviews Content -->
								<div role=\"tabpanel\" id=\"doc_locations\" class=\"tab-pane fade\">
								
									<!-- Review Listing -->
								<div class=\"row\">
										<div class=\"col-md-12 col-lg-9\">
										
										
												<!-- Awards Details -->
											<div class=\"widget awards-widget\">
												<h4 class=\"widget-title\">Recomendaciones</h4>
												<p>".$country['rec_paquete']."</p>
											</div>
											<!-- /Awards Details -->

													<!-- Awards Details -->
											<div class=\"widget awards-widget\">
												<h4 class=\"widget-title\">Cuidados posteriores	</h4>
												<p>".$country['Cuida_paquete']."</p>
											</div>
											<!-- /Awards Details -->
										
									</div>
									<!-- /Review Listing -->
								
									<!-- Write Review -->
									
									<!-- /Write Review -->
								</div>
								</div>
									";

							
										}
 ?>		
								<!-- Locations Content -->
								<div role="tabpanel" id="doc_reviews" class="tab-pane fade">
								
									<?php 

			 					        $stmt = $conn->prepare("SELECT  * from ket_faq_paquete where ket_faq_paquete.id_paquete=:id ORDER BY ket_faq_paquete.orden");
			 					        			 $stmt->bindValue(':id', (int)$paquete, PDO::PARAM_INT);
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
											          	 	//$fotos='admin/'.$country['imagen'];

								echo "	
											<div class=\"row\">
										<div class=\"col-md-12 col-lg-9\">
										
										
												<!-- Awards Details -->
											<div class=\"widget awards-widget\">
												<h4 class=\"widget-title\">".$country['pregunta']."</h4>
												<p>".$country['respuesta']."</p>
											</div>
											<!-- /Awards Details -->

												
											<!-- /Awards Details -->
										
									</div>
									<!-- /Review Listing -->
								
									<!-- Write Review -->
									
									<!-- /Write Review -->
								</div>

								
									<!-- /Location List -->
									
									<!-- Location List -->
									";

										}
 ?>		
								</div>
								<!-- /Locations Content -->
								
								
								<!-- /Reviews Content -->
								
								<!-- Business Hours Content -->
								
								<!-- /Business Hours Content -->
								
							</div>
						</div>
					</div>
							<!-- Doctor Details Tab -->
							
							<!-- /Doctor Details Tab -->

						</div>
<?php 

			 					        $stmt = $conn->prepare("SELECT *  FROM ket_paquetes where id=:id ORDER BY id");
			 					        			 $stmt->bindValue(':id', (int)$paquete, PDO::PARAM_INT);
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
					echo "	<div class=\"col-md-5 col-lg-3 col-xl-3 theiaStickySidebar\">
							
							<!-- Right Details -->
							<div class=\"card search-filter\">
								<div class=\"card-body\">
									<div class=\"clini-infos mt-0\">
											<input type=\"hidden\" id=\"preciofinal2\" name=\"preciofinal2\" value=".$country['preciofinal'].">
					
										<h2 id=\"preciofinal\" name=\"preciofinal\">$".$country['preciofinal']." <b class=\"text-lg strike\">$".$country['precio_paquete']."</b>
										  <span class=\"text-lg text-success\"><b>".$country['descuento']."% desc</b></span></h2>
									</div>

									<span class=\"badge badge-primary\">Disponible</span>
									<div class=\"custom-increment pt-4\">
	                                    <div class=\"input-group1\">
		                                    <span class=\"input-group-btn float-left\">
		                                        <button type=\"button\" class=\"quantity-left-minus btn btn-danger btn-number\"  data-type=\"minus\" data-field=\"\">
		                                          <span><i class=\"fas fa-minus\"></i></span>
		                                        </button>
		                                    </span>
		                                    <input type=\"text\" id=\"quantity\" name=\"quantity\" class=\" input-number\" value=\"1\">
		                                    <span class=\"input-group-btn float-right\">
		                                        <button type=\"button\" class=\"quantity-right-plus btn btn-success btn-number\" data-type=\"plus\" data-field=\"\">
		                                            <span><i class=\"fas fa-plus\"></i></span>
		                                        </button>
		                                    </span>
	                                	</div>
                        			</div>
									<div class=\"clinic-details mt-4\">
										<div class=\"clinic-booking\">
										"; 

										if (strlen($iddr)===0)
					{
echo "
											<button class=\"btn btn-primary btn-block btn-lg login-btn\" href=\"#Add_Carrito\" data-toggle=\"modal\" >Agregar a Carrito</button>
										</div>
									</div>
									<div class=\"card flex-fill mt-4 mb-0\">
										<ul class=\"list-group list-group-flush\">
											<li class=\"list-group-item\">Paquete	<span class=\"float-right\">".$country['nombre_paquete']."</span></li>
											
											";
					}
					else
					{
										echo "
											<button class=\"btn btn-primary btn-block btn-lg login-btn\"  name=\"but_submit\" id=\"but_submit\"   type=\"submit\">Agregar a Carrito</button>
										</div>
									</div>
									<div class=\"card flex-fill mt-4 mb-0\">
										<ul class=\"list-group list-group-flush\">
											<li class=\"list-group-item\">Paquete	<span class=\"float-right\">".$country['nombre_paquete']."</span></li>
											
											";
										}
									}
 ?>		
										</ul>
									</div>
								</div>
							</div>
							<div class="card search-filter">
								<div class="card-body">
									<div class="card flex-fill mt-0 mb-0">
										<ul class="list-group list-group-flush benifits-col">
											
											<li class="list-group-item d-flex align-items-center">
												<div>
													<i class="far fa-question-circle"></i>
												</div>
												<div>
													¿Dudas? <br><span class="text-sm">¿Tienes dudas? contactanos por Whats App <a href="https://api.whatsapp.com/send?phone=524423671095&text=
"> <img  src="admin/php/img/what.png" ></a>
													</span>
												</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div>
													<i class="fas fa-hands"></i>
												</div>
												<div>
													100% Seguro<br><span class="text-sm">Transacción 100% segura</span>
												</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div>
													<i class="fas fa-tag"></i>
												</div>
												<div>
													Promoción <br><span class="text-sm">Este paquete tiene descuento solo por unos días	</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /Right Details -->
							
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
		<div class="modal fade" id="Add_Carrito" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Iniciar Sesión</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
											  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
											</div>
	
										<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
										</div>
							<form id="fupForm" role="form" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
								<div class="row form-row">
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Usuario</label>
											<input type="text" name="usuario" id="usuario" class="form-control" required>
											<div class="invalid-feedback">
																El campo de usuario es obligatorio.
															</div>
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Password</label>
											<input type="password"  name="password" id="password" class="form-control" required>
											<div class="invalid-feedback">
																El campo de password es obligatorio.
															</div>
										</div>
									</div>
									
								</div>
								<button type="submit" name="btn_nuevo" id="btn_nuevo" class="btn btn-primary btn-block">Iniciar Sesión</button>
								
							</form>
						</div>
					</div>
				</div>
			</div>
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
			  <script src="assets/js/form-validation.js"></script>
		<script src="assets/js/logininterno.js"></script>

		
	</body>
</html>