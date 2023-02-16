<?php 
session_start();  
require_once  "php/conexion.php"; 
if (empty($_SESSION['ida']))
     {
           
              
               $_SESSION['ida']= session_id();
                print("\n"."Ida: ".$_SESSION['ida']);
          }  
     else
     {         
          print("\n"."Idb: ".$_SESSION['ida']);
     }
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
          src="https://www.paypal.com/sdk/js?client-id=AZFkRBB26fIreghf2My1YAubEXF5cmtjQnJwZhRdLAaYNVwjZF1J4xZ-jyfQBFo_7wOakO46x6qCDsIk&currency=MXN&locale=es_MX" > // Required. Replace SB_CLIENT_ID with your sandbox client ID.
        </script>
    <!-- header area start -->
    <header class="header-area header-style-3">
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
                               <a href="#"><i class="fab fa-instagram"></i></a>
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
                                             <li><a href="service.html">Servicios</a>
                                                 <ul class="submenu">
                                                     <li><a href="service.html">Conoce nuestros servicios</a></li>
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
                                             <li><a href="contact.html">Contacto</a>
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
                            <h3 class="sg-breadcrumb-title">Cart</h3>
                            <div class="sg-breadcrumb-list">
                                <a href="index.html">Home</a>
                                <span>Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- cart area start -->
        <div class="cart-area pt-130 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-40 mb-lg-0">
                        <div class="sg-billing-details-space-right pr-20">
                            <h4 class="sg-billing-details-title mb-25">Datos de Paciente</h4>
                            <div class="sg-submit-form-default">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="sg-submit-form-default-single mb-30">
                                            <input type="text" id="firstname" name="firstname" placeholder="Nombre" class="firstname">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="sg-submit-form-default-single mb-30">
                                            <input type="text" id="lastname" name="lastname"  class="lastname" placeholder="Apellido">
                                        </div>
                                    </div>
                                    
                                   
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="sg-submit-form-default-single mb-35">
                                            <input type="number" id="telefono" name="telefono" placeholder="Teléfono" class="phone">
                                        </div>
                                    </div> 
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="sg-submit-form-default-single mb-35">
                                            <input type="email" id="email" name="email"  placeholder="Email" class="email">
                                        </div>
                                    </div> 
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8 mb-30 mb-lg-0">
                        <div class="sg-shopping-cart-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php 

                                        $stmt = $conn->prepare("SELECT ket_auxpedidos.*,ket_doctores.Nombre,ket_subcategoria.imagen,ket_subcategoria.nombre, ket_drsub_precios.id_subcategoria FROM ket_auxpedidos Join ket_doctores on id_doctor=ket_doctores.Id join ket_drsub_precios on id_usuario=ket_drsub_precios.id join ket_subcategoria on ket_subcategoria.id=ket_drsub_precios.id_subcategoria WHERE IdSession=:correo ");
                                                        $stmt->bindValue(':correo',  $_SESSION['ida'], PDO::PARAM_STR);

                                                      $stmt->execute();
                                                      $countriesList = $stmt->fetchAll();

                                                      foreach($countriesList as $country){
                                                 $fotos= 'assets/img/product/'.$country['imagen'];

         echo "
                                    <tr>
                                        <td>
                                            <div class=\"sg-shopping-cart-product-box\">
                                                <div class=\"image\">
                                                    <img src=".$fotos." alt=\"\">
                                                </div>
                                                <div class=\"title-wrap\">
                                                    <h4 class=\"title\"><a href=\"shop-details.php?iddr=".$country['id_subcategoria']."&sub=".$country['id_paquete']."\">".$country['nombre']."</a></h4>
                                                        <input type=\"hidden\" id=\"preciofinal2_".$country['id']."\" name=\"preciofinal2_".$country['id']."\" value=".$country['precio_u'].">
                                                     <input type=\"hidden\" id=\"id_subcategoria_".$country['id']."\" name=\"id_subcategoria_".$country['id']."\" value=".$country['id_paquete'].">
                                                       <input type=\"hidden\" id=\"id_session_".$country['id']."\" name=\"id_session_".$country['id']."\" value=".$_SESSION['ida'].">

                                                     <input type=\"hidden\" id=\"id_medico_".$country['id']."\" name=\"id_medico_".$country['id']."\" value=".$country['id_doctor'].">
                                                     <h4 class=\"title\"><a href=\"doctor-details.php?iddr=".$country['id_doctor']."\">".$country['Nombre']."</a></h4>
                                                </div>
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"sg-product-cart-price\">
                                                <span>".$country['precio_u']."</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"sg-single-product-popup-quantity-box\">
                                                <form >
                                                    <a type=\"button\" idEspe=".$country['id']." class=\"suma plus\"><i type=\"button\" idEspe=".$country['id']." class=\" fal fa-plus\"></i></a>
                                                    <input type=\"text\" readonly=\"\" name=\"quantity_".$country['id']."\" id=\"quantity_".$country['id']."\" value=".$country['cantidad'].">
                                                    <a type=\"button\" idEspe=".$country['id']." class=\"resta minus\"><i idEspe=".$country['id']." class=\" fal fa-minus\"></i></a>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"sg-product-cart-price\">
                                                <span>".$country['total']."</span>
                                            </div>
                                        </td>
                                        <td><button  idEspe=".$country['id']." class=\"eliminaart sg-cart-times-btn\"><i  idEspe=".$country['id']." class=\" eliminaart fal fa-times\"></i></button></td>
                                    </tr>
                                   ";
                        }
                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="pl-40 sg-cart-widget-left-space">
                            <div class="sg-cart-total-box-2">
                                <h4 class="title">Totales</h4>
                                <ul>
                                        <?php 
                                                          $stmt = $conn->prepare("SELECT sum(total)total   FROM ket_auxpedidos where IdSession=:id ");
                                                     $stmt->bindValue(':id',  $_SESSION['ida'], PDO::PARAM_STR);
                                                      $stmt->execute();
                                                      $countriesList = $stmt->fetchAll();

                                                      foreach($countriesList as $country){
echo "
                                    <li><span class=\"label\">Subtotal</span> <span  class=\"price\">$".$country['total']."</span></li>
                                     <input type=\"hidden\" id=\"total\" name=\"total\" value=".$country['total'].">
                                                    <input type=\"hidden\" id=\"id_session\" name=\"id_session\" value=".$_SESSION['ida']."> 
                                    <li><span class=\"label\">Total</span> <span   class=\"price\">$".$country['total']."</span></li>
                                    <div class=\"col-lg-12 form-btn\" id=\"paypal-button-wrapper\" style=\"display: block\" >
                                                        <div id=\"paypal-button-container\"></div>
                                            </div>
                                                ";
                                                    }
                                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart area end -->
        
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
                                    <h5 class="sg-title"><a href="shop-details.html">s Botanica Facial</a></h5>
                                    <span class="sg-price">$19.00</span>
                                    <div class="sg-shopping-cart-popup-quantity-action-flex">
                                        <div class="sg-shopping-cart-popup-quantity-form">
                                            <form action="#">
                                                <a href="#0" class="minus-btn"><i class="resta fal fa-minus"></i></a>
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
                            <select name="shipping" class="shipping has-nice-select">
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
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <p class="mb-35">Tú Concierge Médico de Belleza.</p>
                            <div class="sg-footer-social-link">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="has-sg-footer-after"></div>
                       </div>
                   </div>
                   <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30 mb-lg-0">
                       <div class="sg-footer-widget-2 pl-30 sg-footer-widget">
                            <h5 class="sg-footer-widget-title mb-25">Links</h5>
                            <ul>
                                <li><a href="about.html">Servicios</a></li>
                                <li><a href="service.html">Médicos</a></li>
                                <li><a href="service-details.html">Eventos privados</a></li>
                                <li><a href="about.html">Membresía</a></li>
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

         const  iddr = document.getElementById('id_session').value   ;
         const  total =  document.getElementById('total').value ;
       const  nombre =  document.getElementById('nombre').value ;
       const  apellido =  document.getElementById('apellido').value ;
       const  email =  document.getElementById('email').value ;
       const  telefono =  document.getElementById('telefono').value ;
  
       const idPaypal=details.id;
       const    IdPayPalPago=details.purchase_units[0].payments.captures[0].id;
          
           console.log(iddr +  total + nombre + apellido + email + telefono );
       const  formulario = new FormData();  
      document.getElementById('paypal-button-wrapper').style.display = 'none';
       formulario.append('iddr', iddr);
       formulario.append('total', total);
       formulario.append('idPaypal', idPaypal);
       formulario.append('IdPayPalPago', IdPayPalPago);
          formulario.append('nombre', nombre);
             formulario.append('apellido', apellido);
                formulario.append('email', email);
                   formulario.append('telefono', telefono);
    //$(".loading").fadeIn("slow").html("Confirmando...");

        /*const dataString={ "department": department,"doctor":doctor,"patient":patient,"date":date,"name":name,"email":email,"phone":phone,"msg":msg,"horacita":horacita,"describe":describe,"estudio2":estudio2,"describe2":describe2 };*/
       
        //alert('Pago recibidos ' + details.id );

        fetch(url, {
            method: 'POST',
           body: formulario
 
        })
        .then(function(response) {
            if(response.ok) {
             //    window.location = ('invoice-view.php?IdPayPalPago=' + IdPayPalPago + '&iddr=' + iddr)
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
    <script src="assets/js/cart.js"></script>
</body>

</html>