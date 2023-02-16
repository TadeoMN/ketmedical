<?php 
session_start(); 

require_once  "php/conexion.php"; 
 if (empty($_SESSION['ida']))
     {
           
              
               $_SESSION['ida']= session_id();
               // print("\n"."Ida: ".$_SESSION['ida']);
          }  
     else
     {         
         // print("\n"."Idb: ".$_SESSION['ida']);
     }
$iddr  = $_REQUEST["iddr"];
?>
<!Doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>KET Medical - Tú Concierge Médico de Belleza</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
 <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>

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
     <link rel="stylesheet" href="assets/css/style.css">
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
                                                   $nombre=$country['Nombre'];
                                                
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
        <!-- portfolio details area start -->
        <div class="portfolio-details-area pb-105 pt-130">
            <div class="container">
<?php 

                                        $stmt = $conn->prepare("SELECT *  FROM ket_categoria  where ket_categoria.Id=:correo ");
                                                        $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

                                                      $stmt->execute();
                                                      $countriesList = $stmt->fetchAll();

                                                      foreach($countriesList as $country){
                                               $fotos= 'assets/img/bg/'.$country['imagen'];
                                                $fotos2= 'assets/img/portfolio/'.$country['img1'];
                                                $fotos3= 'assets/img/portfolio/'.$country['img2'];
                                                $fotos4= 'assets/img/portfolio/'.$country['img3'];
                                                $fotos5= 'assets/img/portfolio/'.$country['img4'];
                                                
                        echo "
                <div class=\"row\">
                    <div class=\"col-xxl-7 col-xl-7 col-lg-7 mb-30 mb-xl-0\">
                        <div class=\"sg-portfolio-details-left\">
                            <div class=\"sg-portfolio-details-img mb-45\">
                                <img src=".$fotos2." alt=\"\">
                                <span class=\"sg-portfolio-details-img-label\">Resultados individuales </span>
                            </div>
                            <div class=\"sg-portfolio-details-content\">
                                <div class=\"content-box mb-40\">
                                    <h4 class=\"title\">General</h4>
                                    <p align=\"justify\">".$country['General']."</p>
                                </div>
                                <div class=\"content-box mb-40\">
                                    <h4 class=\"title\">".$country['campo1']."</h4>
                                    <p align=\"justify\">".$country['Beneficios']."</p>
                                </div>
                                <div class=\"content-box mb-40\">
                                    <h4 class=\"title\">".$country['campo2']."</h4>
                                    <p align=\"justify\">".$country['cuidados']."</p>
                                </div>
                                <div class=\"row mb-40\">
                                    <div class=\"col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-30 mb-md-0\">
                                        <div class=\"sg-image-radius\">
                                            <img src=".$fotos4." alt=\"\">
                                        </div>
                                    </div>
                                    <div class=\"col-xxl-6 col-xl-6 col-lg-6 col-md-6\">
                                        <div class=\"sg-image-radius\">
                                            <img src=".$fotos5." alt=\"\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"content-box\">
                                    <p><b>Aviso:</b> Los resultados pueden variar para cada persona, las imagenes mostradas solo son referencia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xxl-5 col-xl-5 col-lg-5\">
                        <div class=\"sg-portfolio-widget-area pl-50\">
                            <div class=\"row\">
                                <div class=\"col-xl-12 col-lg-12\">
                                    <div class=\"sg-port-widget mb-70\">
                                        <h5 class=\"sg-port-widget-title\">General </h5>
                                        <p class=\"sg-port-widget-desc mb-35\" align=\"justify\">".$country['General']." </p>
                                        <div class=\"sg-port-widget-list\">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-12 col-lg-12\">
                                    <div class=\"sg-port-widget pb-25\">
                                        <div class=\"sg-has-radius-img\">
                                            <img src=".$fotos3." alt=\"\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
";
                        }
                        ?>

            </div>
        </div>

         <!-- team area start -->
           <div class="team-area pb-75" data-bg-color="#F6F6F6">
               <div class="container">
                   <div class="row">
                       <div class="col-xxl-12">
                            <div class="sg-section-title-wrap text-center mb-55">
                                 <?php 
                                  echo "
                                <span class=\"sg-section-subtitle\">".$nombre."</span>"
                                ;
                        
                        ?>
                                <h3 class="sg-section-title ">Conoce nuestros procedimientos</h3>
                            </div>
                       </div>
                   </div>
                   <div class="sg-team-active swiper-container">
                       <div class="swiper-wrapper">
                        <?php 

                                        $stmt = $conn->prepare("SELECT *  FROM ket_subcategoria where ket_subcategoria.categoria=:correo ORDER BY RAND() ");
                                          $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

                                                      $stmt->execute();
                                                      $countriesList = $stmt->fetchAll();

                                                      foreach($countriesList as $country){
                                                $fotos= 'assets/img/product/'.$country['imagen'];
                                                
                        echo "
                           <div class=\"swiper-slide\">
                                <div class=\"sg-team-single-box\">
                                    <div class=\"sg-team-single-img\">
                                        <img src='".$fotos."' alt=\"team image not found\">
                                        <div class=\"sg-team-arrow-link\">
                                            <a href=\"shop-details.php?iddr=".$iddr."&sub=".$country['id']."\"><i class=\"fal fa-long-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"sg-team-single-content text-center\">
                                        <h4 class=\"sg-team-single-title\"><a href=\"shop-details.php?iddr=".$iddr."&sub=".$country['id']."\">".$country['nombre']."</a></h4>
                                        
                                    </div>
                                </div>
                           </div>";
                        }
                        ?>
                            
                       </div>
                   </div>
               </div>

           </div>
           <!-- team area end -->

        <!-- portfolio details area end -->

       
        <!-- popup area start -->
        
         
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
                                <input type="email" placeholder="Tú email">
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
    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

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
         <script src="assets/js/index.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+5214461394428&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus paquetes%202." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
</body>

</html>