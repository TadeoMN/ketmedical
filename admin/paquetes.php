<?php require_once  "php/conexion.php"; 
	

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>KET - Paquetes</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">


		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.html" class="logo">
						<img src="assets/img/logo.png" alt="Logo">
					</a>
					<a href="index.html" class="logo logo-small">
						<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Buscar">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">
					
					<!-- Notifications -->
					<li class="nav-item dropdown noti-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notificaciones</span>
								<a href="javascript:void(0)" class="clear-noti"> Borrar Todas </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/doctors/doctor-thumb-01.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Dr. Ruby Perrin</span> Schedule <span class="noti-title">her appointment</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/patients/patient1.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Charlene Reed</span> has booked her appointment to <span class="noti-title">Dr. Ruby Perrin</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/patients/patient2.jpg">
												</span>
												<div class="media-body">
												<p class="noti-details"><span class="noti-title">Travis Trimble</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/patients/patient3.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Carl Kelly</span> send a message <span class="noti-title"> to his doctor</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">Ver todas las notificaciones</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>Ryan Taylor</h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="settings.html">Settings</a>
							<a class="dropdown-item" href="login.html">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Principal</span>
							</li>
							<li> 
								<a href="index.html"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li> 
								<a href="appointment-list.html"><i class="fe fe-layout"></i> <span>Appointments</span></a>
							</li>
							<li > 
								<a href="specialities.php"><i class="fe fe-users"></i> <span>Especialidades</span></a>
							</li>
							<li class="active"> 
								<a href="paquetes.php"><i class="fe fe-user-plus"></i> <span>Paquetes</span></a>
							</li>
							<li> 
								<a href="doctores.php"><i class="fe fe-user-plus"></i> <span>Doctores</span></a>
							</li>
							<li> 
								<a href="patient-list.html"><i class="fe fe-user"></i> <span>Pacientes</span></a>
							</li>
							<li> 
								<a href="reviews.html"><i class="fe fe-star-o"></i> <span>Calificaciones</span></a>
							</li>
							<li> 
								<a href="transactions-list.html"><i class="fe fe-activity"></i> <span>Transacciones</span></a>
							</li>
							<li> 
								<a href="settings.html"><i class="fe fe-vector"></i> <span>Configuración</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> Reportes</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="invoice-report.html">Facturas</a></li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-7 col-auto">
								<h3 class="page-title">Paquetes</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Paquetes</li>
								</ul>
							</div>
							<div class="col-sm-5 col">
								<a href="#Add_Specialities_details" data-toggle="modal" class="btn btn-primary float-right mt-2">Nuevo </a>
							</div>

						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">

						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
											
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Paquete</th>
													<th>Precio</th>
													<th>Estatus</th>
													<th class="text-right">Acción</th>
												</tr>
											</thead>
											<tbody>
												<?php
												  $stmt = $conn->prepare("SELECT Id,nombre_paquete, 	precio_paquete,fot1_paquete  ,vigente_paquete FROM ket_paquetes  ORDER BY Id");
											      $stmt->execute();
											      $countriesList = $stmt->fetchAll();
											      	  foreach($countriesList as $country){
												echo "<tr>
													<td>".$country['Id']."</td>
														
													<td>
														<h2 class=\"table-avatar\">
														<a href=\"profile.html\" class=\"avatar avatar-sm mr-2\">					
															
																<img class=\"avatar-img\" src='".$country['fot1_paquete']."' alt=\"Speciality\">
															</a>
															<a href=\"profile.html\">".$country['nombre_paquete']."</a>
															</h2>
													</td>

													<td>".$country['precio_paquete']."</td>
												
												
													<td>
														<div class=\"status-toggle\">";
															 if ($country["vigente_paquete"]!=0)
                      												{
                      													echo "	<input  type=\"checkbox\" id=\"status_".$country['Id']."\" idEspe=".$country['Id']." class=\"check\" checked>";
                      													echo " <label for=\"status_".$country['Id']."\"  idEspe=".$country['Id']." estadoEspe=".$country['vigente_paquete']." class=\"checktoggle\">checkbox</label>";
                      												}
                      												else
                      												{
                      														echo "	<input type=\"checkbox\" id=\"status_".$country['Id']."\" idEspe=".$country['Id']." class=\"check\" >";
                      														echo " <label for=\"status_".$country['Id']."\"  idEspe=".$country['Id']." estadoEspe=".$country['vigente_paquete']." class=\"checktoggle\">checkbox</label>";
                      												}
														
																
														echo " </div>
													</td>

													<td class=\"text-right\">
														<div class=\"actions\">
															<a class=\"open-AddBookDialog btn btn-sm bg-success-light\"  Imagen=".$country['fot1_paquete']."  idEspe=".$country['Id']." Especialidad=".$country['nombre_paquete']." data-toggle=\"modal\" href=\"#edit_specialities_details\">
																<i class=\"fe fe-pencil\"></i> Editar
															</a>
															
														</div>
													</td>
												</tr>";
											}
												  ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>			
					</div>

				</div>			
			</div>
			<!-- /Page Wrapper -->
			
			
			<!-- Add Modal -->
			<div class="modal fade" id="Add_Specialities_details" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Nuevo Paquete</h5>
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
									<div id="input-estudio2" class="col-md-12 input-estudio2">
										<div class="form-group">
						                    <select id="estudio2" name="estudio2" class="custom-select estudio2" required>
						                    	<option value="">Seleccionar Especialidad</option>
						                    	<?php 
						                    			
											          ## Fetch countries
											          $stmt = $conn->prepare("SELECT  	Id ,Especialidad  FROM ket_especialidades where Activo='1' ORDER BY Especialidad");
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
											           
											             		echo "<option value='".$country['Id']."'>".$country['Especialidad']."</option>";
											             	
											          }
											          ?>
						                    </select>
						                    <div class="invalid-feedback">
																Se debe seleccionar la especialidad.
															</div>
						                </div>
						                </div>
						               
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="text" name="esp_nuevo" id="esp_nuevo" class="form-control"   placeholder="Nombre del paquete" required>
											<div class="invalid-feedback">
																El campo de nombre de paquete es obligatorio.
															</div>
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<textarea class="form-control message" name="message" id="message" rows="4" placeholder="Descripción del paquete" required></textarea>
											<div class="invalid-feedback">
																El campo de descripción de paquete es obligatorio.
															</div>
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<textarea class="form-control message" name="como" id="como" rows="4" placeholder="Como Funciona" required></textarea>
											<div class="invalid-feedback">
																El campo de como funciona es obligatorio.
															</div>
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<textarea class="form-control message" name="cuidados" id="cuidados" rows="4" placeholder="Cuidados posteriores" required></textarea>
											<div class="invalid-feedback">
																El campo de cuidados posteriores es obligatorio.
															</div>
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="text" name="anestesia" id="anestesia" class="form-control"   placeholder="Tipo de anestesia" >
											
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="text" name="tiempo" id="tiempo" class="form-control"   placeholder="Tiempo de procedimiento" >
											
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="text" name="paq_car1" id="paq_car1" class="form-control"   placeholder="Caracteristicas del paquete" >
											
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="text" name="paq_car2" id="paq_car2" class="form-control"   placeholder="Caracteristicas del paquete" >
											
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="text" name="paq_car3" id="paq_car3" class="form-control"   placeholder="Caracteristicas del paquete" >
											
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="text" name="paq_car4" id="paq_car4" class="form-control"   placeholder="Caracteristicas del paquete" >
											
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="text" name="paq_car5" id="paq_car5" class="form-control"   placeholder="Caracteristicas del paquete" >
											
										</div>
									</div>

									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="number" name="paq_precio" id="paq_precio" class="form-control"  step=".01"  placeholder="Introducir precio" required >
											<div class="invalid-feedback">
																El precio del paquete es obligatorio
															</div>
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Imagen</label>
											<input type="file"  name="imgespe" id="imgespe" class="form-control nuevaFoto">
										</div>
									</div>

									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Imagen 2</label>
											<input type="file"  name="imgespe2" id="imgespe2" class="form-control nuevaFoto">
										</div>
									</div>

									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Imagen 3</label>
											<input type="file"  name="imgespe3" id="imgespe3" class="form-control nuevaFoto">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Imagen 4</label>
											<input type="file"  name="imgespe4" id="imgespe4" class="form-control nuevaFoto">
										</div>
									</div>
									
								</div>
								<button type="submit" name="btn_nuevo" id="btn_nuevo" class="btn btn-primary btn-block">Crear Paquete</button>
								
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /ADD Modal -->
			
			<!-- Edit Details Modal -->
			<div class="modal fade" id="edit_specialities_details" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Editar Paquete</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form  id="feditForm" role="form" method="post" enctype="multipart/form-data" class="needs-validation" novalidate> 
								<div class="row form-row">
									<div id="input-estudio2" class="col-md-12 input-estudio2">
										<div class="form-group">
						                    <select id="estudio2e" name="estudio2e" class="custom-select estudio2" required>
						                    	<option value="">Seleccionar Especialidad</option>
						                    	<?php 
						                    			
											          ## Fetch countries
											          $stmt = $conn->prepare("SELECT  	Id ,Especialidad  FROM ket_especialidades where Activo='1' ORDER BY Especialidad");
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
											           
											             		echo "<option value='".$country['Id']."'>".$country['Especialidad']."</option>";
											             	
											          }
											          ?>
						                    </select>
						                    <div class="invalid-feedback">
																Se debe seleccionar la especialidad.
															</div>
						                </div>
						                </div>
						               
									<div class="col-12 col-sm-12">
										<div class="form-group">
												<input type="hidden" id="idEspe" name="idEspe" value="0">

											<input type="text" name="esp_nuevoe" id="esp_nuevoe" class="form-control"   placeholder="Nombre del paquete" required>
											<div class="invalid-feedback">
																El campo de nombre de paquete es obligatorio.
															</div>
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<textarea class="form-control message" name="messagee" id="messagee" rows="6" placeholder="Descripción del paquete" required></textarea>
											<div class="invalid-feedback">
																El campo de descripción de paquete es obligatorio.
															</div>
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<textarea class="form-control message" name="comoe" id="comoe" rows="4" placeholder="Como Funciona" required></textarea>
											<div class="invalid-feedback">
																El campo de como funciona es obligatorio.
															</div>
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<textarea class="form-control message" name="cuidadose" id="cuidadose" rows="4" placeholder="Cuidados posteriores" required></textarea>
											<div class="invalid-feedback">
																El campo de cuidados posteriores es obligatorio.
															</div>
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="text" name="anestesiae" id="anestesiae" class="form-control"   placeholder="Tipo de anestesia" >
											
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="text" name="tiempoe" id="tiempoe" class="form-control"   placeholder="Tiempo de procedimiento" >
											
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="text" name="paq_car1e" id="paq_car1e" class="form-control"   placeholder="Caracteristicas del paquete" >
											
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="text" name="paq_car2e" id="paq_car2e" class="form-control"   placeholder="Caracteristicas del paquete" >
											
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="text" name="paq_car3e" id="paq_car3e" class="form-control"   placeholder="Caracteristicas del paquete" >
											
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="text" name="paq_car4e" id="paq_car4e" class="form-control"   placeholder="Caracteristicas del paquete" >
											
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="text" name="paq_car5e" id="paq_car5e" class="form-control"   placeholder="Caracteristicas del paquete" >
											
										</div>
									</div>

									<div class="col-12 col-sm-12">
										<div class="form-group">
											
											<input type="number" name="paq_precioe" id="paq_precioe" class="form-control"  step=".01"  placeholder="Introducir precio" required >
											<div class="invalid-feedback">
																El precio del paquete es obligatorio
															</div>
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Imagen</label>
											<input type="hidden" id="img1" name="img1" value="0">

						        
											<input type="file"  name="imgespee" id="imgespee" class="form-control nuevaFoto">
										</div>
									</div>

									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Imagen 2</label>
												<input type="hidden" id="img2" name="img2" value="0">

											<input type="file"  name="imgespe2e" id="imgespe2e" class="form-control nuevaFoto">
										</div>
									</div>

									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Imagen 3</label>
												<input type="hidden" id="img3" name="img3" value="0">

											<input type="file"  name="imgespe3e" id="imgespe3e" class="form-control nuevaFoto">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Imagen 4</label>
												<input type="hidden" id="img4" name="img4" value="0">

											<input type="file"  name="imgespe4e" id="imgespe4e" class="form-control nuevaFoto">
										</div>
									</div>
									
								</div>
								<button type="submit" id="actualizaresp" class="actualizaresp btn btn-primary btn-block">Actualizar Paquete</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Edit Details Modal -->
			
			<!-- Delete Modal -->
			<div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
					<!--	<div class="modal-header">
							<h5 class="modal-title">Delete</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>-->
						<div class="modal-body">
							<div class="form-content p-2">
								<h4 class="modal-title">Desactiva</h4>
								<p class="mb-4">Estás seguro que deseas eliminar este registro?</p>
								<button type="button" class="btn btn-primary">Save </button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Delete Modal -->
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
	 <script src="assets/js/sweetalert2.all.min.js"></script>
		

		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		<script src="js/paqueteform.js"></script>
		   <script src="assets/js/form-validation.js"></script>
	

		
    </body>
</html>