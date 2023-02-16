<?php require_once  "php/conexion.php"; 
$iddr  = $_REQUEST["iddr"];
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
            <!-- doctor details area start -->
            <div class="doctor-details-area pb-65 has-doctor-details-shape-top pt-130">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-xxl-4 col-xl-4 col-lg-4">
                            <?php
                                          $stmt = $conn->prepare("SELECT ket_doctores.Id,Nombre,    correo,imagen  ,activo,id_especialidad,cabecera,ubicacion,cedula FROM ket_doctores where ket_doctores.Id=:correo   ORDER BY Nombre");
                                                   $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

                                                  $stmt->execute();
                                                  $countriesList = $stmt->fetchAll();

                                                      foreach($countriesList as $country){

                                                       $fotos= 'assets/img/doctores/'.$country['imagen'];
                                echo "  
                            <div class=\"sg-doctor-details-content-image-wrap-1-3 mb-40 mb-lg-0\">
                                <div class=\"sg-doctor-details-img-1-3 mb-30\">
                                    <img src=".$fotos." alt=\"\">
                                </div>
                                
                            </div>";
                                        }
                                     ?>
                        </div>
                        <div class="col-xxl-8 col-xl-8 col-lg-8">
                            <div class="pl-20 sg-doctor-details-space-left-1-3">
                                <div class="sg-doctor-details-content-wrap-1-3">
                                    <?php 

                                        $stmt = $conn->prepare("SELECT *  FROM ket_doctores where ket_doctores.Id=:correo ");
                                        $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

                                                      $stmt->execute();
                                                      $countriesList = $stmt->fetchAll();

                                                      foreach($countriesList as $country){
                                                $fotos= 'assets/img/doctores/'.$country['imagen'];
                                                
                        echo "
                                    <h4 class=\"sg-doctor-details-title-1-3\">".$country['Nombre']."</h4>
                                    <span class=\"sg-doctor-details-subtitle-1-3\">".$country['cabecera']."</span>
                                    <div class=\"mb-30\">
                                        <div class=\"sg-doctor-grid-rating-1-1\">
                                            <i class=\"fas fa-star active\"></i>
                                            <i class=\"fas fa-star active\"></i>
                                            <i class=\"fas fa-star active\"></i>
                                            <i class=\"fas fa-star active\"></i>
                                            <i class=\"fas fa-star active\"></i>
                                        </div>
                                    </div>
                                   
                                    <p align=\"justify\" class=\"sg-doctor-details-education-1-3\">
                                        Cedula : ".$country['cedula']."
                                    </p>
                                    <p align=\"justify\" class=\"sg-doctor-details-about-text-1-3\">".$country['descripcion']."</p>
                                     ";
                        }
                        ?>
                                    
                                    <div class="sg-doctor-details-work-experience-1-3 mb-40">
                                        <h4 class="sg-doctor-details-title-sm-1-3 mb-15">Educación</h4>
                                        <ul>
                                             <?php 

                                        $stmt = $conn->prepare("SELECT *  FROM ket_doctores_escuela where ket_doctores_escuela.id_doctor=:correo ");
                                        $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

                                                      $stmt->execute();
                                                      $countriesList = $stmt->fetchAll();

                                                      foreach($countriesList as $country){
                                                
                        echo "
                                            <li>".$country['titulo_doctor']." - ".$country['escuela_doctor']."</li>
                                             ";
                        }
                        ?>
                                        </ul>
                                    </div>
                                    <div class="sg-doctor-details-research-1-3 mb-35">

                                        <h4 class="sg-doctor-details-title-sm-1-3 mb-15">Afiliaciones</h4>

<?php 

                                        $stmt = $conn->prepare("SELECT *  FROM ket_afiliaciones where ket_afiliaciones.id_doctor=:correo ");
                                        $stmt->bindValue(':correo', $iddr, PDO::PARAM_STR);

                                                      $stmt->execute();
                                                      $countriesList = $stmt->fetchAll();

                                                      foreach($countriesList as $country){
                                                
                        echo "
                                        <p>".$country['afiliacion']."</p>
                                            ";
                        }
                        ?>
                                    </div>
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- doctor details area end -->
            <!-- instagram area start -->
           <!--  <div class="instagram-area">
                <div class="instagram-active-2 swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sg-instagram-single-2">
                                <a href="#">
                                    <img src="assets/img/instagram/insta-1.jpg" alt="">
                                    <div class="sg-instagram-icon-2">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sg-instagram-single-2">
                                <a href="#">
                                    <img src="assets/img/instagram/insta-2.jpg" alt="">
                                    <div class="sg-instagram-icon-2">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sg-instagram-single-2">
                                <a href="#">
                                    <img src="assets/img/instagram/insta-3.jpg" alt="">
                                    <div class="sg-instagram-icon-2">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sg-instagram-single-2">
                                <a href="#">
                                    <img src="assets/img/instagram/insta-4.jpg" alt="">
                                    <div class="sg-instagram-icon-2">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sg-instagram-single-2">
                                <a href="#">
                                    <img src="assets/img/instagram/insta-5.jpg" alt="">
                                    <div class="sg-instagram-icon-2">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- instagram area end -->
            <!-- popup area start -->
            <div class="sg-shopping-cart-popup">
                <div class="sg-shopping-cart-popup-inner">
                    <h4 class="sg-shopping-cart-popup-title">Shopping Cart</h4>
                    <div class="sg-shopping-cart-popup-product-list mb-120">
                        <ul>
                            <li>
                                <div class="sg-shopping-cart-popup-product-single">
                                    <div class="thumb">
                                        <img src="assets/img/product/cart-product-1.png" alt="cart image">
                                    </div>
                                    <div class="content">
                                        <h5 class="sg-title"><a href="shop-details.html">Alba Botanica Facial</a></h5>
                                        <span class="sg-price">$19.00</span>
                                        <div class="sg-shopping-cart-popup-quantity-action-flex">
                                            <div class="sg-shopping-cart-popup-quantity-form">
                                                <form action="#">
                                                    <a href="#0" class="minus-btn"><i class="fal fa-minus"></i></a>
                                                    <input type="text" value="1" readonly>
                                                    <a href="#0" class="plus-btn"><i class="fal fa-plus"></i></a>
                                                </form>
                                            </div>
                                            <button class="sg-shopping-cart-popup-remove-btn">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sg-shopping-cart-popup-product-single">
                                    <div class="thumb">
                                        <img src="assets/img/product/cart-product-2.png" alt="cart image">
                                    </div>
                                    <div class="content">
                                        <h5 class="sg-title"><a href="shop-details.html">Garlic Shampoo Ml  </a></h5>
                                        <span class="sg-price">$25.00</span>
                                        <div class="sg-shopping-cart-popup-quantity-action-flex">
                                            <div class="sg-shopping-cart-popup-quantity-form">
                                                <form action="#">
                                                    <a href="#0" class="minus-btn"><i class="fal fa-minus"></i></a>
                                                    <input type="text" value="1" readonly>
                                                    <a href="#0" class="plus-btn"><i class="fal fa-plus"></i></a>
                                                </form>
                                            </div>
                                            <button class="sg-shopping-cart-popup-remove-btn">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sg-cart-total-box-2 bg-white">
                        <h4 class="title">Cart Totals</h4>
                        <ul>
                            <li><span class="label">Subtotal</span> <span class="price">$38.00</span></li>
                            <li>
                                <span class="label">Shipping</span>
                                <select name="shipping" id="shipping" class="shipping has-nice-select">
                                    <option value="1">Free Shipping</option>
                                    <option value="2">Premium</option>
                                </select>
                            </li>
                            <li><span class="label">Total</span> <span class="price">$38.00</span></li>
                            <li class="has-cart-checkout-list-form-style pt-5">
                                <a href="checkout.html" class="cart-checkout-form-btn mb-20">Checkout</a>
                                <a href="cart.html" class="cart-checkout-form-btn-2">View Cart</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bg-overlay"></div>
            <div class="sg-video-call-popup">
                <div class="cross-btn">
                    <button><i class="fal fa-times"></i></button>
                </div>
                <div class="container">
                    <div class="sg-appoint-form">
                        <form action="#">
                            <div class="row">
                                <div class="col-xxl-12 mb-30">
                                    <input type="text" name="name" id="name" placeholder="Name">
                                </div>
                                <div class="col-xxl-12 mb-30">
                                    <input type="email" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="col-xxl-12 mb-30">
                                    <input type="text" name="phone" id="phone" placeholder="Phone">
                                </div>
                                <div class="col-xxl-12 mb-30">
                                    <input type="text" name="patiend_id" id="patiend_id" placeholder="Patient ID">
                                </div>
                                <div class="col-xxl-12 mb-30">
                                    <div class="text-center"><button type="submit" class="sg-header-theme-btn-2">Go Online Live</button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
            <div class="sg-popup-search-box">
                <a href="#0" class="sg-popup-search-box-close-action-btn"><i class="fal fa-times"></i></a>
                <div class="container">
                    <div class="sg-popup-search-box-cat-select">
                        <select name="cat" class="has-nice-select" id="cat-select-popup">
                            <option value="1">Hair care</option>
                            <option value="1">Skin Creams</option>
                            <option value="1">Hair Oil</option>
                            <option value="1">Face Creams</option>
                            <option value="1">Body Lotions</option>
                        </select>
                    </div>
                    <div class="sg-popup-search-box-form mb-45">
                        <form action="#">
                            <div class="sg-popup-search-box-input">
                                <input type="text" placeholder="Search for product.....">
                            </div>
                            <button type="submit"><i class="fal fa-search"></i></button>
                        </form>
                    </div>
                    <h4 class="sg-popup-search-result-title">Search Result</h4>
                    <div class="sg-popup-search-result-product-active swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="sg-popup-search-product-box">
                                    <div class="sg-popup-search-product-img">
                                        <a href="shop-details.html">
                                            <img src="assets/img/product/product-1.png" alt="">
                                            <img src="assets/img/product/product-1-1.png" class="second" alt="">
                                        </a>
                                    </div>
                                    <div class="sg-popup-search-product-content text-center pt-20">
                                        <a href="shop.htmlhop.html" class="sg-product-box-style-1-subtitle">Hair Care</a>
                                        <h5 class="sg-popup-search-product-title"><a href="shop-details.html">Laura Shampoo 250 ml</a></h5>
                                        <div class="rating mb-5-px">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="sg-product-box-style-1-price">
                                            <span class="price-new">$13.00</span>
                                            <del class="price-old">$35.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sg-popup-search-product-box">
                                    <div class="sg-popup-search-product-img">
                                        <a href="shop-details.html">
                                            <img src="assets/img/product/product-2.png" alt="">
                                            <img src="assets/img/product/product-2-1.png" class="second" alt="">
                                        </a>
                                    </div>
                                    <div class="sg-popup-search-product-content text-center pt-20">
                                        <a href="shop.html" class="sg-product-box-style-1-subtitle">Skin Care</a>
                                        <h5 class="sg-popup-search-product-title"><a href="shop-details.html">Garlic Shampoo 250</a></h5>
                                        <div class="rating mb-5-px">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="sg-product-box-style-1-price">
                                            <span class="price-new">$22.00</span>
                                            <del class="price-old">$44.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sg-popup-search-product-box">
                                    <div class="sg-popup-search-product-img">
                                        <a href="shop-details.html">
                                            <img src="assets/img/product/product-3.png" alt="">
                                            <img src="assets/img/product/product-3-1.png" class="second" alt="">
                                        </a>
                                    </div>
                                    <div class="sg-popup-search-product-content text-center pt-20">
                                        <a href="shop.html" class="sg-product-box-style-1-subtitle">Skin Vera</a>
                                        <h5 class="sg-popup-search-product-title"><a href="shop-details.html">Aloe Vera Hand Shop</a></h5>
                                        <div class="rating mb-5-px">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="sg-product-box-style-1-price">
                                            <span class="price-new">$23.00</span>
                                            <del class="price-old">$65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sg-popup-search-product-box">
                                    <div class="sg-popup-search-product-img">
                                        <a href="shop-details.html">
                                            <img src="assets/img/product/product-4.png" alt="">
                                            <img src="assets/img/product/product-4-1.png" class="second" alt="">
                                        </a>
                                    </div>
                                    <div class="sg-popup-search-product-content text-center pt-20">
                                        <a href="shop.html" class="sg-product-box-style-1-subtitle">New Cream</a>
                                        <h5 class="sg-popup-search-product-title"><a href="shop-details.html">Day Cream 180 Ml</a></h5>
                                        <div class="rating mb-5-px">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star "></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="sg-product-box-style-1-price">
                                            <span class="price-new">$43.00</span>
                                            <del class="price-old">$99.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sg-popup-search-product-box">
                                    <div class="sg-popup-search-product-img">
                                        <a href="shop-details.html">
                                            <img src="assets/img/product/product-5.png" alt="">
                                            <img src="assets/img/product/product-5-1.png" class="second" alt="">
                                        </a>
                                    </div>
                                    <div class="sg-popup-search-product-content text-center pt-20">
                                        <a href="shop.html" class="sg-product-box-style-1-subtitle">New Oil</a>
                                        <h5 class="sg-popup-search-product-title"><a href="shop-details.html">Avalon Oliv Oil</a></h5>
                                        <div class="rating mb-5-px">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                        </div>
                                        <div class="sg-product-box-style-1-price">
                                            <span class="price-new">$32.00</span>
                                            <del class="price-old">$44.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    </body>
</html>