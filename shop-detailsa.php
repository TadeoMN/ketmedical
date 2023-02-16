<?php require_once  "php/conexion.php"; 
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
                                  <a href="https://goo.gl/maps/8mrYcYLDKbcpfcA4A" class="sg-topbar-contact-item-link">
                                    <i class="fal fa-map-marker-alt"></i>
                                    <span>México</span>
                                  </a>
                              </div>
                          </div> 
                       </div>
                       <div class="col-xxl-4 col-xl-4 col-lg-3">
                           <div class="sg-topbar-social-links text-center text-lg-end">
                               <a href="#"><i class="fab fa-facebook-f"></i></a>
                               <a href="#"><i class="fab fa-twitter"></i></a>
                               <a href="#"><i class="fab fa-instagram"></i></a>
                               <a href="#"><i class="fab fa-linkedin-in"></i></a>
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
                                                     <li><a href="index.php">Home layout 01</a></li>
                                                     <li><a href="index-2.html">Home layout 02</a></li>
                                                 </ul>
                                             </li>
                                             <li><a href="service.html">Paquetes</a>
                                                 <ul class="submenu">
                                                     <li><a href="service.html">Service</a></li>
                                                     <li><a href="service-details.html">Service Details</a></li>
                                                 </ul>
                                             </li>
                                             <li><a href="#">Doctores</a>
                                                 <ul class="submenu">
                                                     <li><a href="404.html">Error</a></li>
                                                     <li><a href="about.html">About</a></li>
                                                     <li><a href="appointment.html">Appointment</a></li>
                                                     <li><a href="cart.html">Cart</a></li>
                                                     <li><a href="case.html">Case</a></li>
                                                     <li><a href="case-details.html">Case Details</a></li>
                                                     <li><a href="checkout.html">Checkout</a></li>
                                                     <li><a href="doctor-list.html">Doctor List</a></li>
                                                     <li><a href="doctor-details.html">Doctor Details</a></li>
                                                     <li><a href="shop.html">Shop</a></li>
                                                     <li><a href="shop-details.html">Shop Detals</a></li>
                                                     <li><a href="sign-in.html">Sign In</a></li>
                                                     <li><a href="sign-up.html">Sign Up</a></li>
                                                     <li><a href="wishlist.html">Wishlist </a></li>
                                                 </ul>
                                             </li>
                                             <li><a href="blog-details.html">Eventos</a>
                                                 <ul class="submenu">
                                                     <li><a href="blog.html">News</a></li>
                                                     <li><a href="blog-details.html">News Details</a></li>
                                                 </ul>
                                             </li>
                                             <li><a href="contact.html">Contact</a>
                                             </li>
                                        </ul>
                                       </nav>
                                   </div>
                                   <div class="sg-header-action-links ml-35">
                                       <a href="#0" class="header-search-toogle-btn"><i class="fal fa-search"></i></a>
                                       <a href="#0"><i class="fal fa-shopping-bag has-cart-popup"></i></a>
                                       <button class="ml-20 sg-header-sidebar-action-btn"><i class="fas fa-video"></i></button>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6  col-6 d-lg-none">
                               <div class="sg-header-action-links text-end d-block">
                                    <a href="#" class="header-search-toogle-btn mr-15 me-md-0"><i class="fal fa-search"></i></a>
                                    <a href="#" class="d-none d-md-inline-block  has-cart-popup"><i class="fal fa-shopping-bag mr-15"></i></a>
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
        <div class="breadcrumb-area bg-default pt-185 pb-180 has-breadcrumb-overlay"
            data-background="assets/img/bg/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="sg-breadcrumb-wrap text-center">
                            <h3 class="sg-breadcrumb-title">Kard Beauty Oil</h3>
                            <div class="sg-breadcrumb-list">
                                <a href="index.html">Home</a>
                                <a href="shop.html">Hair Oil</a>
                                <span>Kard Beauty Oil</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->
        <!-- shop details area start -->
        <div class="shop-details-area pt-130 pb-80">
            <div class="container">
                <div class="sg-single-product-popup-2 has-shop-details-2 mb-60">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="mb-50 mb-lg-0">
                                <div class="sg-single-product-popup-active-2 mb-50 swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="sg-single-product-popup-image has-height">
                                                <img src="assets/img/product/product-3-1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="sg-single-product-popup-image has-height">
                                                <img src="assets/img/product/product-5-1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="sg-single-product-popup-image has-height">
                                                <img src="assets/img/product/product-2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sg-single-product-popup-control-wrap space-2">
                                    <div class="sg-single-product-popup-control-active-2 swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="sg-single-product-popup-image-control">
                                                    <img src="assets/img/product/product-3-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="sg-single-product-popup-image-control">
                                                    <img src="assets/img/product/product-5-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="sg-single-product-popup-image-control">
                                                    <img src="assets/img/product/product-2.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="sg-single-product-popup-content pl-15 sg-single-product-space-2">
                                <h3 class="sg-single-product-popup-title">Kard Beauty Oil</h3>
                                <div class="sg-single-product-popup-price-rating-wrap mb-27">
                                    <div class="left">
                                        <div class="sg-product-box-style-1-price has-large">
                                            <span class="price-new">$13.00</span>
                                            <del class="price-old">$35.00</del>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="sg-single-product-popup-has-review">
                                            <div class="rating">
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                            </div>
                                            <span>( 1 reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sg-single-product-popup-feature-list mb-25">
                                    <ul>
                                        <li><b>Brand:</b> <span>MAC</span></li>
                                        <li><b>Category:</b> <span>Hair Oil</span></li>
                                        <li><b>Availability:</b> <span>In Stock</span></li>
                                    </ul>
                                </div>
                                <div class="sg-single-product-popup-excerpt mb-25">
                                    <p>It eliminates dandruff.The hair is mass, black and shiny. Prevents hair loss and makes hair more attractive, soft and long than before.Increases the nutritional value of hair, and will make hair more vibrant.</p>
                                </div>
                                <div class="mb-20">
                                    <div class="sg-single-product-popup-cart-action-wrap mb-20">
                                        <div class="sg-single-product-popup-quantity-box">
                                            <form action="#">
                                                <a href="#0" class="plus"><i class="fal fa-plus"></i></a>
                                                <input type="text" readonly name="quantity" value="1">
                                                <a  href="#0" class="minus"><i class="fal fa-minus"></i></a>
                                            </form>
                                        </div>
                                       
                                    </div>
                                    <a href="checkout.html" class="sg-single-product-popup-buy-now-btn">Comprar</a>
                                </div>
                               
                                <hr class="mt-30 mb-30">
                                
                            </div>
                        </div>
                    </div>
                </div>
               
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
                             <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                         </div>
                         <p class="mb-35">Tú Concierge Médico de Belleza.</p>
                         <div class="sg-footer-social-link">
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fab fa-instagram"></i></a>
                             <a href="#"><i class="fab fa-linkedin"></i></a>
                         </div>
                         <div class="has-sg-footer-after"></div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30 mb-lg-0">
                    <div class="sg-footer-widget-2 pl-30 sg-footer-widget">
                         <h5 class="sg-footer-widget-title mb-25">Quick Links</h5>
                         <ul>
                             <li><a href="about.html">About Surgery</a></li>
                             <li><a href="service.html">Services</a></li>
                             <li><a href="service-details.html">Medical Treatment</a></li>
                             <li><a href="about.html">Career</a></li>
                             <li><a href="about.html">Case Study</a></li>
                         </ul>
                         <div class="has-sg-footer-after"></div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-7">
                 <div class="sg-footer-widget-3 pl-70 sg-footer-widget">
                      <h5 class="sg-footer-widget-title mb-35">Newsletter</h5>
                      <div class="sg-footer-form mb-30">
                         <form action="#">
                             <input type="email" placeholder="Your email">
                             <button type="submit"><i class="fas fa-paper-plane"></i></button>
                         </form>
                      </div>
                      <div class="sg-footer-award-box">
                          <div class="sg-footer-award-box-img">
                              <img src="assets/img/icon/award.png" alt="">
                          </div>
                          <div class="sg-footer-award-box-content">
                              <p>Global Best Surgery
                                 Award Winner</p>
                          </div>
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
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <p class="sg-copyright-text">© 2022 ThemePhi | Alright reserved</p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="sg-copyright-social-link text-center text-md-end">
                        <a href="about.html">Privacy Policy</a>
                        <a href="about.html">Terms of Uses</a>
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