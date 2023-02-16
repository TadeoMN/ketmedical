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
                            <h3 class="sg-breadcrumb-title">Skin Surgery</h3>
                            <div class="sg-breadcrumb-list">
                                <a href="index.html">Home</a>
                                <a href="service.html">Services</a>
                                <span>Skin Surgery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->
        <!-- service details area start -->
        <div class="service-details-area pb-100 pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="sg-service-details-left mb-50 mb-lg-0  pr-30">
                            <div class="sg-service-details-img">
                                <img src="assets/img/service/service-details-img.jpg" alt="img not found">
                            </div>
                            <div class="sg-service-details-content-4">
                                <h5 class="sg-service-details-title-4">Laser skin resur facing treatments</h5>
                                <p>Designed to improve the texture of the skin, laser resurfacing treatments mostly target surface of the skin and the top layer of the dermis. Using controlled heat, these laser treatments.</p>
                                <p>Ultrasound treatments are considered to be among the most effective options for achieving a significant skin lift without requiring surgery. While this technology is most widely associated with imaging during pregnancy, ultrasound energy can also be used to direct controlled heat at specific tissues.</p>
                                <blockquote class="sg-blockquote-1 mt-40 mb-40">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32.994" height="28.281" viewBox="0 0 32.994 28.281">
                                            <g id="Group_119" data-name="Group 119" transform="translate(0 0)">
                                            <path id="Path_9388" data-name="Path 9388" d="M14.14,43.375V29.235H0v14.14H9.427A9.438,9.438,0,0,1,0,52.8v4.713a14.156,14.156,0,0,0,14.14-14.14Z" transform="translate(18.854 -29.235)" fill="#9a4441"/>
                                            <path id="Path_9389" data-name="Path 9389" d="M233.882,52.8v4.713a14.156,14.156,0,0,0,14.14-14.14V29.235h-14.14v14.14h9.427a9.438,9.438,0,0,1-9.427,9.427Z" transform="translate(-233.882 -29.235)" fill="#9a4441"/>
                                            </g>
                                        </svg>
                                    </div>
                                    One of the biggest aesthetic concerns that many people have is how to stop the signs of aging. While it isn't uncommon for individuals to maintain. 
                                    <span class="author">John Bennett</span>
                                </blockquote>
                                <p>Radiofrequency micro needling is a combination procedure, bringing together radiofrequency waves used in RF skin treatments and micro needling to maximize the final outcome. Micro needling creates microscopic channels, or holes, within your skin, which stimulates.</p>
                                <div class="row mt-40 mb-40">
                                    <div class="col-xxl-6 col-xl-6 col-lg-12 mb-30 mb-xl-0">
                                        <div class="sg-service-details-radius-box-4">
                                            <div class="icon">
                                                <svg id="Cosmetic_surgery" data-name="Cosmetic surgery" xmlns="http://www.w3.org/2000/svg" width="36.91" height="51.877" viewBox="0 0 36.91 51.877">
                                                    <path id="Path_9500" data-name="Path 9500" d="M60.949,77.742a3.022,3.022,0,0,1-1.969-.819.577.577,0,0,1,.75-.872,1.638,1.638,0,0,0,2.439,0,.577.577,0,0,1,.75.872A3.022,3.022,0,0,1,60.949,77.742Z" transform="translate(-42.496 -45.084)" fill="#9a4441"/>
                                                    <path id="Path_9501" data-name="Path 9501" d="M62.022,86.264a.437.437,0,0,0-.6-.165l-.078.044a1.05,1.05,0,0,1-.3.088,3.378,3.378,0,0,1-.442.039,5.69,5.69,0,0,1-.947-.063c-.077-.012-.444-.1-.486-.112a1.241,1.241,0,0,0-.984.216.976.976,0,0,1-1.188,0,1.242,1.242,0,0,0-.984-.216c-.041.008-.41.1-.486.112a5.689,5.689,0,0,1-.947.063,3.38,3.38,0,0,1-.442-.039,1.05,1.05,0,0,1-.3-.088l-.078-.044a.437.437,0,0,0-.519.694,1.655,1.655,0,0,0,.641.371,3.18,3.18,0,0,0,.6.143,4.567,4.567,0,0,0,1.167.053,2.471,2.471,0,0,1,.553-.049c.127.03.206.132.315.2a1.648,1.648,0,0,0,.368.16,2.453,2.453,0,0,0,1.42,0,1.648,1.648,0,0,0,.368-.16c.11-.063.187-.165.315-.2a2.471,2.471,0,0,1,.553.049,4.566,4.566,0,0,0,1.167-.053,3.18,3.18,0,0,0,.6-.143,1.655,1.655,0,0,0,.641-.371.437.437,0,0,0,.078-.53Z" transform="translate(-39.14 -51.026)" fill="#9a4441"/>
                                                    <path id="Path_9502" data-name="Path 9502" d="M62.157,93.635a2.282,2.282,0,0,1-1-.235.618.618,0,0,1,.535-1.112.993.993,0,0,0,.92,0,.618.618,0,0,1,.535,1.112A2.283,2.283,0,0,1,62.157,93.635Z" transform="translate(-43.687 -54.67)" fill="#9a4441"/>
                                                    <path id="Path_9503" data-name="Path 9503" d="M43.6,53.7c-.7-.056-1.421-.1-2.136-.157s-1.436-.107-2.153-.2c0,0-.807-.1-1.078-.124a9.034,9.034,0,0,0-.991-.021,5.775,5.775,0,0,0-1.931.63l-.019.01A.276.276,0,0,1,35,53.378a5.917,5.917,0,0,1,2.09-1c.194-.046.906-.119.906-.119l.276-.006,1.1-.012a17.688,17.688,0,0,1,2.2.136,14.523,14.523,0,0,1,2.193.394.475.475,0,0,1-.16.931Z" transform="translate(-28.427 -31.148)" fill="#9a4441"/>
                                                    <path id="Path_9504" data-name="Path 9504" d="M74.013,63.742c.27.009.545,0,.817,0a8.4,8.4,0,0,0,1.571-.147,5.553,5.553,0,0,0,1.426-.456s.2-.106.255-.128a1.144,1.144,0,0,1,.344-.079,1.223,1.223,0,0,1,.606.112,5.854,5.854,0,0,0,.7.309l.012,0a.269.269,0,0,1,0,.513,2.145,2.145,0,0,1-.965.014.381.381,0,0,0-.232.01c-.025.011-.178.121-.178.121a4.469,4.469,0,0,1-1.751.72,6.891,6.891,0,0,1-1.82.1,6.536,6.536,0,0,1-1.8-.341.409.409,0,0,1,.19-.79S73.746,63.738,74.013,63.742Z" transform="translate(-50.686 -37.43)" fill="#9a4441"/>
                                                    <path id="Path_9505" data-name="Path 9505" d="M43.711,63.742c-.27.009-.545,0-.817,0a8.4,8.4,0,0,1-1.571-.147,5.553,5.553,0,0,1-1.426-.456s-.2-.106-.255-.128a1.144,1.144,0,0,0-.344-.079,1.223,1.223,0,0,0-.606.112,5.854,5.854,0,0,1-.7.309l-.012,0a.269.269,0,0,0,0,.513,2.145,2.145,0,0,0,.965.014.381.381,0,0,1,.232.01c.025.011.178.121.178.121a4.469,4.469,0,0,0,1.751.72,6.891,6.891,0,0,0,1.82.1,6.536,6.536,0,0,0,1.8-.341.409.409,0,0,0-.19-.79S43.978,63.738,43.711,63.742Z" transform="translate(-30.132 -37.43)" fill="#9a4441"/>
                                                    <path id="Path_9506" data-name="Path 9506" d="M71.062,52.771a14.523,14.523,0,0,1,2.193-.394,17.687,17.687,0,0,1,2.2-.136l1.1.012.585.023a5.047,5.047,0,0,1,.6.1,5.917,5.917,0,0,1,2.09,1,.276.276,0,0,1-.291.466l-.019-.01a5.775,5.775,0,0,0-1.933-.63,4.028,4.028,0,0,0-.485-.023l-.5.044-1.078.124c-.717.089-1.436.147-2.153.2s-1.434.1-2.136.157h-.007a.475.475,0,0,1-.16-.931Z" transform="translate(-49.494 -31.148)" fill="#9a4441"/>
                                                    <path id="Path_9507" data-name="Path 9507" d="M63.412,60.257A.412.412,0,0,1,63,59.845v-.783a.412.412,0,0,1,.824,0v.783A.412.412,0,0,1,63.412,60.257Zm0-2.842A.412.412,0,0,1,63,57v-.824a.412.412,0,1,1,.824,0V57A.412.412,0,0,1,63.412,57.414Zm0-2.883A.412.412,0,0,1,63,54.119V53.3a.412.412,0,0,1,.824,0v.824A.412.412,0,0,1,63.412,54.531Zm0-2.883A.412.412,0,0,1,63,51.236v-.824a.412.412,0,1,1,.824,0v.824A.412.412,0,0,1,63.412,51.648Z" transform="translate(-44.959 -29.83)" fill="#9a4441"/>
                                                    <path id="Path_9508" data-name="Path 9508" d="M77.178,71.957h0c-.283,0-.571-.021-.857-.049a.412.412,0,1,1,.082-.82c.263.026.528.041.788.044a.412.412,0,1,1-.006.824Zm2.038-.236a.412.412,0,0,1-.124-.805,1.457,1.457,0,0,0,.316-.131.412.412,0,0,1,.428.7,2.3,2.3,0,0,1-.5.213A.412.412,0,0,1,79.217,71.72Zm-4.875-.227a.416.416,0,0,1-.127-.02c-.275-.089-.547-.192-.807-.3a.412.412,0,1,1,.327-.756c.236.1.483.195.734.276a.412.412,0,0,1-.127.8Zm-2.535-1.341a.412.412,0,0,1-.256-.089,7.792,7.792,0,0,1-.649-.58.412.412,0,1,1,.582-.582,6.81,6.81,0,0,0,.582.517.412.412,0,0,1-.257.734Z" transform="translate(-49.535 -40.875)" fill="#9a4441"/>
                                                    <path id="Path_9509" data-name="Path 9509" d="M37.606,71.957a.412.412,0,1,1-.006-.824c.26,0,.525-.019.788-.044a.412.412,0,1,1,.082.82c-.285.028-.574.045-.857.049Zm-2.038-.236a.412.412,0,0,1-.124-.019,2.3,2.3,0,0,1-.5-.213.412.412,0,0,1,.428-.7,1.457,1.457,0,0,0,.316.131.412.412,0,0,1-.124.805Zm4.875-.227a.412.412,0,0,1-.127-.8c.251-.082.5-.174.734-.276a.412.412,0,1,1,.327.756c-.26.112-.531.215-.807.3A.417.417,0,0,1,40.443,71.494Zm2.535-1.341a.412.412,0,0,1-.257-.734,6.817,6.817,0,0,0,.58-.517.412.412,0,1,1,.582.582,7.791,7.791,0,0,1-.649.582.412.412,0,0,1-.256.087Z" transform="translate(-28.344 -40.875)" fill="#9a4441"/>
                                                    <path id="Path_9510" data-name="Path 9510" d="M54.954,99.269a.412.412,0,0,1-.108-.014c-.278-.075-.554-.165-.821-.263a.412.412,0,1,1,.288-.772c.243.091.494.171.748.241a.412.412,0,0,1-.108.809Zm-2.611-1.195A.412.412,0,0,1,52.111,98a8.543,8.543,0,0,1-.689-.524.412.412,0,1,1,.532-.629,7.541,7.541,0,0,0,.622.473.412.412,0,0,1-.233.752Z" transform="translate(-38.065 -57.324)" fill="#9a4441"/>
                                                    <path id="Path_9511" data-name="Path 9511" d="M67.213,99.269a.412.412,0,0,1-.108-.809c.254-.069.506-.15.748-.241a.412.412,0,0,1,.288.772c-.267.1-.542.188-.821.263A.412.412,0,0,1,67.213,99.269Zm2.611-1.195a.412.412,0,0,1-.233-.752,7.537,7.537,0,0,0,.622-.473.412.412,0,0,1,.532.629,8.544,8.544,0,0,1-.69.523.412.412,0,0,1-.233.072Z" transform="translate(-47.195 -57.324)" fill="#9a4441"/>
                                                    <path id="Path_9512" data-name="Path 9512" d="M60.826,40.706a.423.423,0,0,1-.13-.021c-.247-.082-.49-.159-.735-.23a.412.412,0,1,1,.231-.791q.383.111.765.239a.412.412,0,0,1-.131.8Zm-12.1,0a.412.412,0,0,1-.129-.8q.4-.133.8-.247a.412.412,0,1,1,.228.792q-.386.111-.772.238a.407.407,0,0,1-.131.02ZM58.073,40A.408.408,0,0,1,58,39.993q-.4-.072-.8-.126a.412.412,0,1,1,.111-.816q.416.057.832.132a.412.412,0,0,1-.073.817Zm-6.556,0a.412.412,0,0,1-.072-.817q.416-.074.832-.13a.412.412,0,1,1,.11.816q-.4.054-.8.124a.4.4,0,0,1-.073.006Zm3.69-.288H55.2c-.27-.006-.538-.006-.805,0h-.009a.412.412,0,1,1-.009-.824q.421-.009.842,0a.412.412,0,1,1-.009.824Z" transform="translate(-36.323 -23.289)" fill="#9a4441"/>
                                                    <path id="Path_9513" data-name="Path 9513" d="M55.059,25.855c-.028-.03-.059-.055-.088-.082.666-3.774.637-10.531-1.16-14.259-2.93-6.073-9.721-10.48-16.147-10.48h-.012c-6.429,0-13.22,4.407-16.15,10.48C19.7,15.241,19.676,22,20.342,25.772c-.029.029-.06.054-.088.082a4.466,4.466,0,0,0-.97,3.854c.395,2.38,2.793,4.934,5.217,4.943a14.924,14.924,0,0,0,3.66,6.594,20.489,20.489,0,0,0,4.033,3.141c-.206,1.794-1.052,5.938-4.518,7.332a.618.618,0,0,0,.461,1.147c3.79-1.524,4.9-5.672,5.222-7.868a16.006,16.006,0,0,0,3.131,1.095,5.053,5.053,0,0,0,2.339,0A16.01,16.01,0,0,0,41.959,45c.323,2.193,1.431,6.343,5.222,7.868a.618.618,0,0,0,.461-1.147c-3.466-1.393-4.312-5.537-4.518-7.332a20.491,20.491,0,0,0,4.033-3.141,14.932,14.932,0,0,0,3.66-6.594c2.423-.01,4.822-2.564,5.216-4.943A4.483,4.483,0,0,0,55.059,25.855ZM20.5,29.506a3.271,3.271,0,0,1,.659-2.814,3,3,0,0,1,2.15-.885q.012,1.091.076,2.13a3.112,3.112,0,0,0-1.405-.211.618.618,0,1,0,.119,1.23,1.67,1.67,0,0,1,1.412.544,30.534,30.534,0,0,0,.647,3.879A5.168,5.168,0,0,1,20.5,29.506ZM46.292,40.357a16,16,0,0,1-7.754,4.531,3.807,3.807,0,0,1-1.765,0,15.979,15.979,0,0,1-7.753-4.531c-3.087-2.994-4.673-8.815-4.463-16.388a38.762,38.762,0,0,1,.739-5.567c3.565-.522,5.754-3.547,7.391-5.83A6.319,6.319,0,0,1,38.07,9.8a5.3,5.3,0,0,1,4.421,2.513,1.431,1.431,0,0,0,1.125.692c.148.009.285.013.414.016a2.568,2.568,0,0,1,.79.1,5.333,5.333,0,0,1,2.5,2.464,14.294,14.294,0,0,0,.989,1.389,4.959,4.959,0,0,0,1.557,1.239,23.093,23.093,0,0,1,.892,5.757C50.964,31.542,49.379,37.363,46.292,40.357ZM49.223,16.2a13.256,13.256,0,0,1-.9-1.274,6.416,6.416,0,0,0-3.105-2.94,3.566,3.566,0,0,0-1.153-.165c-.118,0-.243-.007-.378-.015a.238.238,0,0,1-.174-.124A6.57,6.57,0,0,0,38.11,8.6a7.6,7.6,0,0,0-6.4,3.271c-1.776,2.477-3.983,5.563-7.768,5.409a.6.6,0,1,0-.047,1.2c.041,0,.082,0,.122,0a39.813,39.813,0,0,0-.7,5.452c-.006.218,0,.428-.008.643a4.731,4.731,0,0,0-1.847.41c-.523-3.625-.428-9.669,1.148-12.938C25.347,6.38,31.67,2.267,37.65,2.267h.011c5.979,0,12.3,4.113,15.035,9.781,1.577,3.27,1.67,9.314,1.146,12.937A4.726,4.726,0,0,0,52,24.576c0-.215,0-.425-.008-.643a24.9,24.9,0,0,0-.711-5.228c.131.028.262.055.4.075a.652.652,0,0,0,.089.007.6.6,0,0,0,.087-1.195A4.037,4.037,0,0,1,49.223,16.2Zm5.587,13.3a5.18,5.18,0,0,1-3.661,3.881A30.491,30.491,0,0,0,51.8,29.5a1.667,1.667,0,0,1,1.412-.544.625.625,0,0,0,.674-.555.618.618,0,0,0-.555-.675,3.1,3.1,0,0,0-1.405.22q.065-1.042.077-2.138a3,3,0,0,1,2.15.884,3.271,3.271,0,0,1,.66,2.813Z" transform="translate(-19.203 -1.033)" fill="#9a4441"/>
                                                </svg>
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><a href="service-details.html">Cosmetic Surgery</a></h4>
                                                <p>The Term "Facial Rejuvenation" Applied To Many Popular.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-12">
                                        <div class="sg-service-details-radius-box-4">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="43.916" height="46.555" viewBox="0 0 43.916 46.555">
                                                    <g id="botox_1_" data-name="botox (1)" transform="translate(-14.527)">
                                                    <path id="Path_9459" data-name="Path 9459" d="M56.566,26.021A13.813,13.813,0,0,0,57.9,19.94a13.806,13.806,0,0,0-2-7.348l-1.161.714a12.463,12.463,0,0,1,1.8,6.634A12.674,12.674,0,0,1,54.533,26.9V21.722A7.271,7.271,0,0,0,48.7,14.6a9.053,9.053,0,0,0,1.936-5.56,15.86,15.86,0,0,1,3.361,3.187l1.081-.829a17.97,17.97,0,0,0-4.61-4.119,9.022,9.022,0,0,0-17.7-.009,18.106,18.106,0,0,0-4.511,3.983l-1.1-.936-.885,1.036,1.415,1.209a.59.59,0,0,1,.073.832l-1.87,2.226a.59.59,0,0,1-.827.076L22.13,13.2l2.628-3.13.416.356.885-1.036L22.8,6.6l.869-1.035-1.043-.876-1.7,2.026-1.7-1.427,1.066-1.269-1.043-.876L14.527,8.771l1.043.876L16.6,8.421l1.7,1.427-1.782,2.122,1.043.876.861-1.026,5.758,4.919a1.944,1.944,0,0,0,1.254.456c.041,0,.082,0,.123,0a15.21,15.21,0,0,0-.246,2.749,13.815,13.815,0,0,0,1.313,6.037A4.058,4.058,0,0,0,28.732,33.5h.377a12.094,12.094,0,0,0,1.86,3.748l1.1-.8a10.081,10.081,0,0,1-2.031-6V25.525a7.465,7.465,0,0,1,2.493-5.57L33.961,21.1l.854-1.062-1.15-.925a7.438,7.438,0,0,1,3.859-1.074h4.088a8.99,8.99,0,0,0,5.916-2.212,5.9,5.9,0,0,1,5.642,5.892v8.731a11.065,11.065,0,0,1-4.255,8.379c-2.246,1.9-5.184,3.183-7.309,3.183-2.314,0-6.053-1.565-8.719-4.555l-1.017.907a15.964,15.964,0,0,0,2.939,2.563v5.6H36.17V41.762c.181.1.363.2.547.287a11.473,11.473,0,0,0,4.888,1.329,11.918,11.918,0,0,0,5.435-1.617v4.794H48.4V40.928A16.428,16.428,0,0,0,49.8,39.872a13.278,13.278,0,0,0,4.3-6.37h.29a4.059,4.059,0,0,0,2.181-7.482ZM18.352,6.334l1.661,1.395-.876,1.043L17.476,7.378Zm3.575,1.312,1.8,1.534-2.628,3.13-1.8-1.534Zm6.5,9.019-.958-.8.876-1.043.958.8Zm.306,15.476a2.695,2.695,0,0,1-1.471-4.953,19.484,19.484,0,0,0,1.418,2.094v1.173a11.037,11.037,0,0,0,.13,1.686Zm-.053-6.615V26.9a12.675,12.675,0,0,1-2.005-6.959,13.74,13.74,0,0,1,.27-2.742l1.65,1.385.9-1.074,1.965,1.582A8.82,8.82,0,0,0,28.679,25.525Zm12.933-8.845H37.524a8.8,8.8,0,0,0-4.977,1.537l-2.176-1.751.85-1.012L29.133,13.7a1.944,1.944,0,0,0,.117-.852,1.965,1.965,0,0,0-.115-.509,16.713,16.713,0,0,1,4.6-4.071l.077-.048A14.779,14.779,0,0,1,39,6.256l-.236-1.342a16.125,16.125,0,0,0-4.316,1.406A7.658,7.658,0,0,1,49.174,7.806l.009.056a7.66,7.66,0,0,1-2.292,6.708l-.081.075A7.634,7.634,0,0,1,41.612,16.681ZM54.4,32.14a10.832,10.832,0,0,0,.133-1.686V29.281a19.558,19.558,0,0,0,1.393-2.05A2.7,2.7,0,0,1,54.4,32.14Z" fill="#9a4441"/>
                                                    <path id="Path_9460" data-name="Path 9460" d="M296.931,52.8c.435-.038.879-.057,1.319-.057V51.376c-.48,0-.964.021-1.438.063Z" transform="translate(-256.645 -46.709)" fill="#9a4441"/>
                                                    <path id="Path_9461" data-name="Path 9461" d="M209.592,280.213a2.5,2.5,0,0,0,2.064,1.092h3.629v-1.362h-3.629a1.134,1.134,0,0,1-.938-.5l-.474-.7-1.126.767Z" transform="translate(-176.916 -253.431)" fill="#9a4441"/>
                                                    <path id="Path_9462" data-name="Path 9462" d="M353.009,280.213l.474-.7-1.126-.767-.474.7a1.135,1.135,0,0,1-.938.5h-3.629V281.3h3.629A2.5,2.5,0,0,0,353.009,280.213Z" transform="translate(-302.56 -253.431)" fill="#9a4441"/>
                                                    <path id="Path_9463" data-name="Path 9463" d="M280.541,377.457a12.67,12.67,0,0,0,5.739,0l.011,0-.312-1.326-.009,0a11.3,11.3,0,0,1-5.118,0Z" transform="translate(-241.852 -341.966)" fill="#9a4441"/>
                                                    <path id="Path_9464" data-name="Path 9464" d="M281.383,325.039l.666,1.189a6.065,6.065,0,0,0,1.232-.908l-.942-.984A4.7,4.7,0,0,1,281.383,325.039Z" transform="translate(-242.617 -294.876)" fill="#9a4441"/>
                                                    <path id="Path_9465" data-name="Path 9465" d="M256.064,338.655a7.175,7.175,0,0,0,1.482-.249l-.368-1.312a5.8,5.8,0,0,1-1.2.2Z" transform="translate(-219.52 -306.475)" fill="#9a4441"/>
                                                    <path id="Path_9466" data-name="Path 9466" d="M224.349,336.394a6.88,6.88,0,0,0,1.456.4l.2-1.347a5.527,5.527,0,0,1-1.166-.32Z" transform="translate(-190.764 -304.684)" fill="#9a4441"/>
                                                    <path id="Path_9467" data-name="Path 9467" d="M197.121,320.942A5.546,5.546,0,0,0,198.249,322l.8-1.1a4.214,4.214,0,0,1-.856-.8Z" transform="translate(-166.009 -291.022)" fill="#9a4441"/>
                                                    <path id="Path_9468" data-name="Path 9468" d="M211.956,241.562a6.375,6.375,0,0,0-1.35.7l.771,1.123a5.012,5.012,0,0,1,1.061-.553Z" transform="translate(-178.269 -219.621)" fill="#9a4441"/>
                                                    <path id="Path_9469" data-name="Path 9469" d="M243.026,238.11l.1-1.359a7.245,7.245,0,0,0-1.5.049l.183,1.35A5.88,5.88,0,0,1,243.026,238.11Z" transform="translate(-206.47 -215.23)" fill="#9a4441"/>
                                                    <path id="Path_9470" data-name="Path 9470" d="M270.177,241.245a5.2,5.2,0,0,1,1.1.477l.678-1.182a6.565,6.565,0,0,0-1.393-.6Z" transform="translate(-232.429 -218.145)" fill="#9a4441"/>
                                                    <path id="Path_9471" data-name="Path 9471" d="M293.7,256.718l-.936.99a3.644,3.644,0,0,1,.682.914l1.2-.646A4.945,4.945,0,0,0,293.7,256.718Z" transform="translate(-252.967 -233.4)" fill="#9a4441"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><a href="service-details.html">Skin Surgery</a></h4>
                                                <p>Excess Skin Procedures Help People Of Weight Through.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>Plastic surgeons offer an array of procedures to make skin look younger and commonly of the combination of multiple treatments that provide the best results. Neuromodulators fillers, and other skin tightening procedures using ultrasound and radiofrequency also exist. that can be used simultaneously with newer technologies constantly being introduced into the market.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="service-widget-area">
                            <div class="row">
                                <div class="col-xxl-12 col-xl-12 col-lg-12">
                                    <div class="sg-widget  mb-60">
                                        <h4 class="sg-widget-title">Services List</h4>
                                        <div class="sg-widget-service-list">
                                            <a href="service.html">Skin Surgery <i class="fal fa-angle-right"></i></a>
                                            <a href="service.html">Hair Transplant <i class="fal fa-angle-right"></i></a>
                                            <a href="service.html">Cosmetic Surgery <i class="fal fa-angle-right"></i></a>
                                            <a href="service.html">Buttock Surgery <i class="fal fa-angle-right"></i></a>
                                            <a href="service.html">Intervention <i class="fal fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12">
                                    <div class="sg-widget">
                                        <div class="sg-widget-find bg-default" data-background="assets/img/widget/widget-doctor.jpg">
                                            <div class="wrap text-center">
                                                <h5 class="title">Find Your Surgeon</h5>
                                                <p>Choose a board-certified
                                                    plastic surgeon confident</p>
                                                <form action="#" class="sg-widget-search-form mb-20">
                                                    <input type="email" name="search" id="search" placeholder="Search...">
                                                    <button type="submit"><i class="fal fa-search"></i></button>
                                                </form>
                                                <a href="#0" class="sg-widget-find-btn">Find Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service details area end -->
        <!-- popup area start -->
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
                        <span>CLOSE</span>
                    </button>
                </div>
                <div class="sg-sidebar-menu-body-1">
                    <div class="sg-sidebar-menu-l">
                        <a href="index.html"><img src="assets/img/logo/logo-2.png" alt=""></a>
                    </div>
                    <div class="mobile-menu-2"></div>
                    <hr class="mb-40">
                    <a href="cart.html" class="sg-theme-radius-btn mb-20">Cart</a>
                    <a href="wishlist.html" class="sg-theme-radius-btn mb-20">Wishlist</a>
                    <div class="sg-sidebar-menu-contact-widget mb-50">
                        <h5 class="title">Contact Us</h5>
                        <ul>
                            <li><i class="fal fa-phone"></i> <a href="tel:987-098-098-09">987-098-098-09</a>,   <a href="tel:898-352-003-05">898-352-003-05</a></li>
                        </ul>
                        <ul>
                            <li><i class="fal fa-envelope"></i> <a href="mailto:admin@example.com">admin@example.com</a></li>
                            <li><i class="fal fa-map-marker-alt"></i> <a href="mailto:admin@example.com">Domal Brock, New York, USA</a></li>
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
                             <a href="index.html"><img src="assets/img/logo/logo-2.png" alt=""></a>
                         </div>
                         <p class="mb-35">Surgico is the best theme for your medical business, ecommerce, agency any kinds of hospital websites.</p>
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