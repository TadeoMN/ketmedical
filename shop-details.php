<?php  
 session_start();  
 require_once "php/conexion.php"; 
$iddr  = $_REQUEST["iddr"];
$sub  = $_REQUEST["sub"];
     if (empty($_SESSION['ida']))
     {
           
              
               $_SESSION['ida']= session_id();
             //   print("\n"."Ida: ".$_SESSION['ida']);
          }  
     else
     {         
         // print("\n"."Idb: ".$_SESSION['ida']);
     }
?>
<!Doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KET Medical - Tu Concierge Médico de Belleza</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/cross2.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/swipper.css">
    <link rel="stylesheet" href="assets/css/star-rating.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/ui-range-slider.css">
    <link rel="stylesheet" href="assets/css/datepicker.css">
    <link rel="stylesheet" href="assets/css/main.css">
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1502291706951618');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1502291706951618&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

</head>

<body>
    <!-- header area start -->
    <header class="header-area">
           <div class="sg-topbar-area theme-bg">
               <div class="container">
                   <div class="row">
                       <div class="col-xxl-8 col-xl-8 col-lg-9">
                          <div class="sg-topbar-contact-top-wrap">
                              <div class="sg-topbar-contact-item-single">
                                  <a href="tel:446-139-4428" class="sg-topbar-contact-item-link">
                                    <i class="fal fa-phone"></i>
                                    <span>446-139-4428</span>
                                  </a>
                                  <a href="mailto:ket@ketmedical.com.mx" class="sg-topbar-contact-item-link">
                                    <i class="fal fa-envelope"></i>
                                    <span>ket@ketmedical.com.mx</span>
                                  </a>
                                  <a href="https://www.google.com/maps/place/Hospital+Moscati/@20.6956811,-100.4439568,16z/data=!4m13!1m7!3m6!1s0x85d357597f718519:0x4d20fffd87030872!2sJuriquilla+Santa+Fe,+Santa+F%C3%A9,+76230+Juriquilla,+Qro.!3b1!8m2!3d20.6933677!4d-100.4438707!3m4!1s0x85d359d148505b49:0xcffedc73d636ebb8!8m2!3d20.6920657!4d-100.4385489" class="sg-topbar-contact-item-link">
                                    <i class="fal fa-map-marker-alt"></i>
                                    <span>México</span>
                                  </a>
                              </div>
                          </div> 
                       </div>
                       <div class="col-xxl-4 col-xl-4 col-lg-3">
                           <div class="sg-topbar-social-links text-center text-lg-end">
                               <a href="https://www.facebook.com/Ketmedical1" target="_blank"><i class="fab fa-facebook-f"></i></a>
                               <a href="https://www.instagram.com/ketmedical/" target="_blank"><i class="fab fa-instagram"></i></a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="sg-header-main">
               <div class="container">
                   <div class="sg-header-main-nav-box sg-hav-nav-space">
                       <div class="row align-items-center">
                           <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-6">
                               <div class="sg-header-logo">
                                   <a href="index.php">
                                    <img src="assets/img/logo/logo.png" alt="">
                                   </a>
                               </div>
                           </div>
                           <div class="col-xxl-9 col-xl-9 col-lg-9 d-none d-lg-block">
                               <div class="sg-header-nav-actions text-end">
                                   <div class="sg-header-nav-main">
                                       <nav id="mobile-menu">
                                        <ul>
                                            <li><a href="index.php">Inicio</a>
                                                 <ul class="submenu">
                                                     <li><a href="index.php">Conocenos</a></li>
                                                 </ul>
                                             </li>
                                             <li><a href="service.php">Servicios</a>
                                                 <ul class="submenu">
                                                     <li><a href="service.php">Conoce nuestros servicios</a></li>
                                                 </ul>
                                             </li>
                                             <li><a href="doctor-list.php">Doctores</a>
                                                 <ul class="submenu">
                                                   
                                                     <li><a href="doctor-list.php">Nuestros Doctores</a></li>
                                                    
                                                 </ul>
                                             </li>
                                             <li><a href="case-details.php?iddr=4">Eventos</a>
                                                 <ul class="submenu">
                                                     <li><a href="case-details.php?iddr=4">Beauty Party </a></li>
                                                 </ul>
                                             </li>
                                             <li><a href="https://api.whatsapp.com/send?phone=+5214461394428&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus paquetes%20." target="_blank" >Contacto</a>
                                             </li>
                                        </ul>
                                       </nav>
                                   </div>
                                  
                               </div>
                           </div>
                           <div class="col-md-6  col-6 d-lg-none">
                               <div class="sg-header-action-links text-end d-block">
                                   <button class="sg-header-sidebar-action-btn-bar"><i class="fal fa-bars"></i></button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </header>
    <!-- header area end -->
    <main>
        <!-- breadcrumb area start -->
        <?php 

                                        $stmt = $conn->prepare("SELECT *  FROM ket_categoria  where ket_categoria.Id=:correo ");
                                                        $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

                                                      $stmt->execute();
                                                      $countriesList = $stmt->fetchAll();

                                                      foreach($countriesList as $country){
                                               $fotos= 'assets/img/bg/'.$country['imagen'];

         echo "
        <div class=\"breadcrumb-area bg-default pt-185 pb-180 has-breadcrumb-overlay\"
            data-background=".$fotos.">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xxl-12\">
                        <div class=\"sg-breadcrumb-wrap text-center\">
                            <h3 class=\"sg-breadcrumb-title\">".$country['Nombre']."</h3>
                            <div class=\"sg-breadcrumb-list\">
                                <a href=\"index.php\">Home</a>
                                <span>".$country['Nombre']."</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
                        }
                        ?>
        <!-- breadcrumb area end -->
        <!-- shop details area start -->
        <div class="shop-details-area pt-130 pb-80">
            <div class="container">
                      <?php 

                                        $stmt = $conn->prepare("SELECT ket_drsub_precios.*,ket_doctores.Nombre med,ket_categoria.Nombre cat,ket_subcategoria.nombre,ket_doctores.Id idmed,ket_doctores.imagen FROM ket_drsub_precios JOIN ket_doctores on ket_doctores.Id=id_medico JOIN ket_subcategoria on ket_subcategoria.id=id_subcategoria JOIN ket_categoria on ket_categoria.id=ket_subcategoria.categoria WHERE id_subcategoria=:correo ORDER BY RAND()  ");
                                                        $stmt->bindValue(':correo', $sub, PDO::PARAM_STR);

                                                      $stmt->execute();
                                                      $countriesList = $stmt->fetchAll();

                                                      foreach($countriesList as $country){
                                                $fotos2= 'assets/img/product/'.$country['img1'];
                                                 $fotos= 'assets/img/doctores/'.$country['imagen'];
                                                $fotos3= 'assets/img/product/'.$country['img2'];
                                                $fotos4= 'assets/img/product/'.$country['img3'];
                                                $fotos5= 'assets/img/product/'.$country['img4'];

         echo "

                <div class=\"sg-single-product-popup-2 has-shop-details-2 mb-60\">
                    <div class=\"row\">
                        <div class=\"col-xxl-6 col-xl-6 col-lg-6\">
                            <div class=\"mb-50 mb-lg-0\">
                                <div class=\"sg-single-product-popup-active-2 mb-50 swiper-container\">
                                    <div class=\"swiper-wrapper\">
                                        <div class=\"swiper-slide\">
                                            <div class=\"sg-single-product-popup-image has-height\">
                                                <img src=".$fotos2." alt=\"\">
                                            </div>
                                        </div>
                                        <div class=\"swiper-slide\">
                                            <div class=\"sg-single-product-popup-image has-height\">
                                                <img src=".$fotos3."  alt=\"\">
                                            </div>
                                        </div>
                                        <div class=\"swiper-slide\">
                                            <div class=\"sg-single-product-popup-image has-height\">
                                                <img src=".$fotos4."  alt=\"\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class=\"col-xxl-6 col-xl-6 col-lg-6\">
                            <div class=\"sg-single-product-popup-content pl-15 sg-single-product-space-2\">
                                <h3 class=\"sg-single-product-popup-title\">".$country['nombre']."</h3>
                                <div class=\"sg-single-product-popup-price-rating-wrap mb-27\">
                                    <div class=\"left\">
                                        <div class=\"sg-product-box-style-1-price has-large\">
                                            <input type=\"hidden\" id=\"preciofinal2_".$country['id']."\" name=\"preciofinal2_".$country['id']."\" value=".$country['precio'].">
                                             <input type=\"hidden\" id=\"id_subcategoria_".$country['id']."\" name=\"id_subcategoria_".$country['id']."\" value=".$sub.">
                                                 <input type=\"hidden\" id=\"id_session_".$country['id']."\" name=\"id_session_".$country['id']."\" value=".$_SESSION['ida'].">
                                             <input type=\"hidden\" id=\"id_medico_".$country['id']."\" name=\"id_medico_".$country['id']."\" value=".$country['idmed'].">
                                <input type=\"hidden\" id=\"Valoracion_".$country['id']."\" name=\"Valoracion_".$country['id']."\" value=".$country['Valoracion'].">
                                         
                                            <span id=\"preciofinal_".$country['id']."\" name=\"preciofinal_".$country['id']."\" class=\"price-new\">Desde: $".$country['precio'].".00</span>
                                        </div>
                                    </div>
                                    <div class=\"right\">
                                        <div class=\"sg-single-product-popup-has-review\">
                                            <div class=\"rating\">
                                                <i class=\"fas fa-star active\"></i>
                                                <i class=\"fas fa-star active\"></i>
                                                <i class=\"fas fa-star active\"></i>
                                                <i class=\"fas fa-star active\"></i>
                                                <i class=\"fas fa-star active\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"sg-single-product-popup-feature-list mb-25 sg-shopping-cart-product-box \">
                                              <ul>
                                              <li><b>Doctor:</b> <span>
                                                 <div class=\"image\">
                                                    <img src='".$fotos."' alt=\"\">
                                                </div>
                                                <div class=\"title-wrap\">
                                                    <h4 class=\"title\"><a href=\"doctor-details.php?iddr=".$country['idmed']."\">".$country['med']."</a></h4>
                                                </div>
</span></li>";
                                        if ($country['id_subcategoria']=="12")
                                        {
                                            echo "
                                            <li><b>Valoración:</b> <span>$".$country['Valoracion'].".00</span></li>
                                         <li><b>Hospital:</b> <span>".$country['Hospital']."</span></li>
                                     <li><b>Tipo de cirugia:</b> <span>".$country['Tipo']."</span></li>
                                         ";

                                        }
                                        else
                                        {echo "
                                            <li><b>Aparta con:</b> <span>".$country['Valoracion']."</span></li>
                                            ";
                                    }
                                        echo "
                                       
                                    </ul>
                                </div>
                                <div class=\"sg-single-product-popup-excerpt mb-25\">
                                    <p align=\"justify\">".$country['descripcion']."</p>
                                </div>
                                <div class=\"mb-20\">
                                    <div class=\"sg-single-product-popup-cart-action-wrap mb-20\">
                                        <div class=\"sg-single-product-popup-quantity-box\">
                                            <form action=\"#\">
                                                <a href=\"#0\" class=\"plus\"><i class=\"fal fa-plus\"></i></a>
                                                <input type=\"text\" readonly id=\"quantity_".$country['id']."\" name=\"quantity_".$country['id']."\" value=\"1\">
                                                <a  href=\"#0\" class=\"minus\"><i class=\"fal fa-minus\"></i></a>
                                            </form>
                                        </div>
                                       
                                    </div>
                                    

                                    <a name=\"but_submit_".$country['id']."\" id=\"but_submit_".$country['id']."\"  idEspe=".$country['id']." class=\"agregacarrito sg-single-product-popup-buy-now-btn\" type=\"button\">Comprar</a>
                                </div>
                             
                                <hr class=\"mt-30 mb-30\">
                           
                                
                            </div>
                        </div>
                    </div>
                </div>";
                        }
                        ?>

                           </div>
        </div>
        <!-- shop details area end -->
        <!-- related product area start -->
        
        <!-- related product area end -->
        <!-- recent product area start -->
        
        <!-- recent product area end -->
        <!-- popup area start -->
       
        <div class="bg-overlay"></div>
        <!-- single product popup -->
       
        <!-- /. single product popup -->
        <!-- popup area start -->
       
        <div class="bg-overlay"></div>
      <div class="popup-area">
                <div class="sg-sidebar-menu-popup-1">
                    <div class="sg-sidebar-menu-cross mb-40">
                        <button>
                            <i class="fal fa-times"></i>
                            <span>Cerrar</span>
                        </button>
                    </div>
                    <div class="sg-sidebar-menu-body-1">
                        <div class="sg-sidebar-menu-l">
                            <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <div class="mobile-menu"></div>
                        <hr class="mb-40">
                        
                        <div class="sg-sidebar-menu-contact-widget mb-50">
                            <h5 class="title">Contactanos</h5>
                            <ul>
                                <li><i class="fal fa-phone"></i> <a href="tel:446-139-4428">446-139-4428</a></li>
                            </ul>
                            <ul>
                                <li><i class="fal fa-envelope"></i> <a href="mailto:ket@ketmedical.com.mx">ket@ketmedical.com.mx</a></li>
                                <li><i class="fal fa-map-marker-alt"></i> <a href="mailto:admin@example.com">México</a></li>
                            </ul>
                        </div>
                        <div class="text-center">
                                <button type="submit" class="sg-header-theme-btn-2">Get Appointment </button>
                        </div>
                    </div>
                </div>
            </div>
      
        <!-- popup area end -->
    </main>


    <!-- footer area start -->
   <footer class="footer-area sg-footer-1 pt-100 pb-100 sg-footer-has-border">
           <div class="container">
               <div class="row justify-content-center">
                   <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-6 mb-30 mb-lg-0">
                       <div class="sg-footer-widget-1 sg-footer-widget pr-95">
                            <div class="sg-footer-logo-1 mb-20">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <p class="mb-35">Tu Concierge Médico de Belleza.</p>
                            <div class="sg-footer-social-link">
                               <a href="https://www.facebook.com/Ketmedical1" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/ketmedical/" target="_blank"><i class="fab fa-instagram"></i></a>
                          
                            </div>
                            <div class="has-sg-footer-after"></div>
                       </div>
                   </div>
                   <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30 mb-lg-0">
                       <div class="sg-footer-widget-2 pl-30 sg-footer-widget">
                            <h5 class="sg-footer-widget-title mb-25">Links</h5>
                            <ul>
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="service.php">Servicios</a></li>
                                <li><a href="doctor-list.php">Doctores</a></li>
                                <li><a href="case-details.php?iddr=4">Beauty Party </a></li>
                            </ul>
                            <div class="has-sg-footer-after"></div>
                       </div>
                   </div>
                   <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-7">
                    <div class="sg-footer-widget-3 pl-70 sg-footer-widget">
                         <h5 class="sg-footer-widget-title mb-35">Newsletter</h5>
                         <div class="sg-footer-form mb-30">
                            <form action="#">
                                <input type="email" placeholder="Tu email">
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </form>
                         </div>
                         
                    </div>
                </div>
               </div>
           </div>
       </footer>
    <!-- footer area end -->
    <!-- copyright area start -->
    <div class="copyright-area text-center text-md-start pt-20 pb-20">
           <div class="container">
               <div class="row">
                   <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6"><p class="sg-copyright-text">© 2022 KET Medical  |  Todos los derechos reservados</p></div>
                   <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                       <div class="sg-copyright-social-link text-center text-md-end">
                           <a href="about.html">Aviso de privacidad</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    <!-- copyright area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->
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
                                            <label>Email</label>
                                            <input type="email" name="usuario" id="usuario" class="form-control" required>
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
                                    <div class="text-center dont-have">¿No tiene cuenta? <a href="#Add_Registro" data-toggle="modal" data-dismiss="modal" >Registrar</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <!-- JS here -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swipper-bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/datepicker.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/cross2.min.js"></script>
    <script src="assets/js/jquery-ui-slider-range.js"></script>
    <script src="assets/js/star-rating.js"></script>
    <script src="assets/js/back-to-top.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/logininterno.js"></script>
    <script src="assets/js/cart.js"></script>


</body>

</html>