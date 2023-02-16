<?php require_once  "php/conexion.php"; 
$iddr  = $_REQUEST["iddr"];
$sub  = $_REQUEST["sub"];
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
    <script
          src="https://www.paypal.com/sdk/js?client-id=ARZ9wqRF8LLZd6fs-5zEnks5kCxRdRGwq_o3KvYp3JOp-fBHvGwVpxhraPcAw39IV5YtD7CQKvH5V6l0&currency=MXN&locale=es_MX" > // Required. Replace SB_CLIENT_ID with your sandbox client ID.
        </script>
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
                            <h3 class="sg-breadcrumb-title">Checkout</h3>
                            <div class="sg-breadcrumb-list">
                                <a href="index.html">Home</a>
                                <span>Checkout</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- checkout area start -->
        <div class="checkout-area pt-125 pb-130">
            <div class="container">
                <div class="sg-return-customar-login-warning-link mb-30">
                    <span>Returning customer?</span><a href="sign-in.html">Click here to login</a>
                </div>
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-40 mb-lg-0">
                        <div class="sg-billing-details-space-right pr-20">
                            <h4 class="sg-billing-details-title mb-25">Billing details</h4>
                            <div class="sg-submit-form-default">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="sg-submit-form-default-single mb-30">
                                            <input type="text" id="firstname" placeholder="First name" class="firstname">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="sg-submit-form-default-single mb-30">
                                            <input type="text" id="lastname" class="lastname" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="sg-submit-form-default-single mb-30">
                                            <input type="text" id="companyname" class="companyname" placeholder="Company name">
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="sg-submit-form-default-single mb-30">
                                            <select name="country" id="country" class="select-country sg-has-select-2">
                                                <option value="1">United States</option>
                                                <option value="2">Bangladesh</option>
                                                <option value="1">United States</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="sg-submit-form-default-single mb-30">
                                            <input type="text" placeholder="Address" class="address">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="sg-submit-form-default-single mb-30">
                                            <input type="text" placeholder="City" class="city">
                                        </div>
                                    </div> 
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="sg-submit-form-default-single mb-30">
                                            <input type="text" placeholder="Zip Code" class="zip">
                                        </div>
                                    </div> 
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="sg-submit-form-default-single mb-35">
                                            <input type="number"  placeholder="Phone" class="phone">
                                        </div>
                                    </div> 
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="sg-submit-form-default-single mb-35">
                                            <input type="email" placeholder="Email Address" class="email">
                                        </div>
                                    </div> 
                                    <div class="col-xxl-12">
                                        <div class="sg-submit-form-default-single mb-10">
                                            <div class="condition-box">
                                                <input type="checkbox" id="account" class="has-condition">
                                                <label for="account" class="condition condition-2">Create an account?</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="sg-submit-form-default-single">
                                            <div class="condition-box">
                                                <input type="checkbox" id="address_shipping" class="has-condition">
                                                <label for="address_shipping" class="condition condition-2">Ship to a different address? </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <h4 class="sg-billing-details-title mb-25">Order summary</h4>
                        <div class="sg-checkout-order-summery-box mb-60">
                            <div class="sg-checkout-order-summery-box-wrap">
                                <div class="sg-checkout-order-summery-box-product">
                                    <div class="left">
                                        <div class="image">
                                            <img src="assets/img/product/cart-product-1.png" alt="">
                                        </div>
                                        <div class="title-wrap">
                                            <h4 class="title"><a href="shop-details.html">Alba Botanica Facial</a></h4> <span>x2</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <span class="sg-price"><span class="price d-md-none">Price: </span>$19.00</span>
                                    </div>
                                </div>
                                <div class="sg-checkout-order-summery-box-product">
                                    <div class="left">
                                        <div class="image">
                                            <img src="assets/img/product/cart-product-2.png" alt="">
                                        </div>
                                        <div class="title-wrap">
                                            <h4 class="title"><a href="shop-details.html">Alba Gel 326F Facial</a></h4> <span>x5</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <span class="sg-price"><span class="price d-md-none">Price: </span>$19.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sg-checkout-order-summery-box-pricing-list">
                                <ul>
                                    <li>
                                        <span class="label">Subtotal</span>
                                        <span class="price">$38.00</span>
                                    </li>
                                    <li>
                                        <span class="label">Shipping</span>
                                        <span class="price flat">Flat rate: <span>$10.00</span></span>
                                    </li>
                                    <li>
                                        <span class="label total">Total</span>
                                        <span class="price total">$48.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /. order summery -->
                        <div class="sg-checkout-payment-info-box">
                            <h4 class="sg-billing-details-title mb-25">Payment information</h4>
                            <div class="col-lg-12 form-btn" id="paypal-button-wrapper" style="display: block" >
                                                        <div id="paypal-button-container"></div>
                                            </div>
                            <form action="#">
                                <div class="accordion pb-15 mb-25 accordion-flush" id="accordionFlushExample">
                                    <div class="item-single mb-30">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-bank" aria-expanded="false" aria-controls="flush-bank">
                                            <i class="fal fa-money-check"></i> Direct bank transfer
                                          </button>
                                        <div id="flush-bank" class="accordion-collapse collapse"  data-bs-parent="#accordionFlushExample">
                                          <p>Make your payment directly into our bank account. Please use your
                                              Order ID as the payment reference. Your order will not be shipped
                                              until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                    <div class="item-single mb-30">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-cash" aria-expanded="false" aria-controls="flush-cash">
                                            <i class="fal fa-money-check-alt"></i> Check Payment
                                          </button>
                                        <div id="flush-cash" class="accordion-collapse collapse"  data-bs-parent="#accordionFlushExample">
                                          <p>Make your payment directly into our bank account. Please use your
                                              Order ID as the payment reference. Your order will not be shipped
                                              until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                    <div class="item-single mb-3">
                                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <i class="fal fa-hand-holding-usd"></i> Cash on delivery
                                          </button>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                          <p>Make your payment directly into our bank account. Please use your
                                              Order ID as the payment reference. Your order will not be shipped
                                              until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                            </div>
                            <p class="sg-checkout-payment-condition-text">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="about.html">privacy policy.</a></p>
                            <button class="cart-checkout-form-btn mt-25" type="submit">Place order</button>
                            </form>
                        </div>
                        <!-- /. payment information -->
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout area end -->


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
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-xxl-12 mb-30">
                                <input type="text" name="phone"  placeholder="Phone">
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
                            <li><i class="fal fa-envelope"></i><a href="mailto:admin@example.com">admin@example.com</a></li>
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
         const url = 'php/PagoKet.php';

         const  iddr = document.getElementById('iddr').value   ;
         const  total =  document.getElementById('total').value ;
     
       const idPaypal=details.id;
       const    IdPayPalPago=details.purchase_units[0].payments.captures[0].id;
          
       const  formulario = new FormData();  
      document.getElementById('paypal-button-wrapper').style.display = 'none';
       formulario.append('iddr', iddr);
       formulario.append('total', total);
       formulario.append('idPaypal', idPaypal);
       formulario.append('IdPayPalPago', IdPayPalPago);
    //$(".loading").fadeIn("slow").html("Confirmando...");

        /*const dataString={ "department": department,"doctor":doctor,"patient":patient,"date":date,"name":name,"email":email,"phone":phone,"msg":msg,"horacita":horacita,"describe":describe,"estudio2":estudio2,"describe2":describe2 };*/
       
        //alert('Pago recibidos ' + details.id );

        fetch(url, {
            method: 'POST',
           body: formulario
 
        })
        .then(function(response) {
            if(response.ok) {
                 window.location = ('invoice-view.php?IdPayPalPago=' + IdPayPalPago + '&iddr=' + iddr)
            //    setTimeout(function() {window.location.href = "invoice-view.php?IdPayPalPago=" + IdPayPalPago "&iddr=" + iddr}, 2000);
                //return response.text()

                
            } else {
                     throw "Error en la llamada Ajax";
                    
                }

                })
                .then(function(texto) {
                        console.log(texto);
                        
                    })
                        .catch(function(err) {
                     console.log(err);
                    
                });

            //alert('tel ' + dataString );
        //document.getElementById('validas').click();
      });
    }

  }).render('#paypal-button-container');</script>
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