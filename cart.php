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
       //   print("\n"."Idb: ".$_SESSION['ida']);
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
     <script src="https://www.paypal.com/sdk/js?client-id=AXo432SmwPANRUbLdQPiSas7htwAE-RL4mtaKtUwUZtN5LlFovWBVY-o5IPNO_CLFzSC6NJoUNZQozbF&enable-funding=venmo&currency=MXN&locale=es_MX" data-sdk-integration-source="button-factory"></script>
  <!--   <script
          src="https://www.paypal.com/sdk/js?client-id=AZFkRBB26fIreghf2My1YAubEXF5cmtjQnJwZhRdLAaYNVwjZF1J4xZ-jyfQBFo_7wOakO46x6qCDsIk&currency=MXN&locale=es_MX" > // Required. Replace SB_CLIENT_ID with your sandbox client ID.
        </script> -->
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
                                                     <li><a href="case-details.php?iddr=4">Botox Party</a></li>
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
        <div class="breadcrumb-area bg-default pt-185 pb-180 has-breadcrumb-overlay"
            data-background="assets/img/bg/cart.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="sg-breadcrumb-wrap text-center">
                            <h3 class="sg-breadcrumb-title">Finalizar Compra</h3>
                            <div class="sg-breadcrumb-list">
                                <a href="index.php">Inicio</a>
                                <span>Finalizar compra</span>
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
                                            <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="firstname">
                                              <p id="nombreError" style="visibility: hidden; color:red; text-align: center;">Favor de introducir tu nombre</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="sg-submit-form-default-single mb-30">
                                            <input type="text" id="apellido" name="apellido"  class="lastname" placeholder="Apellido">
                                             <p id="apellidoError" style="visibility: hidden; color:red; text-align: center;">Favor de introducir tu apellido</p>
                                        </div>
                                    </div>
                                    
                                   
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="sg-submit-form-default-single mb-35">
                                            <input type="number" id="telefono" name="telefono" placeholder="Teléfono" class="phone">
                                              <p id="telefonoError" style="visibility: hidden; color:red; text-align: center;">Favor de introducir tu teléfono</p>
                                        </div>
                                    </div> 
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="sg-submit-form-default-single mb-35">
                                            <input type="email" id="email" name="email"  placeholder="Email" class="email">
                                             <p id="emailError" style="visibility: hidden; color:red; text-align: center;">Favor de introducir tu email</p>
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
                                    <div id=\"smart-button-container\">
    <div style=\"text-align: center\"><label for=\"description\">Pago servicios Ket </label><input type=\"hidden\" name=\"descriptionInput\" id=\"description\" maxlength=\"127\" value=\"Pago servicios Ket\"></div>
      <p id=\"descriptionError\" style=\"visibility: hidden; color:red; text-align: center;\">Please enter a description</p>
    <div style=\"text-align: center\"><label for=\"amount\"> </label><input name=\"amountInput\" type=\"hidden\" id=\"amount\" value=".$country['total']." ><span> </span></div>
      <p id=\"priceLabelError\" style=\"visibility: hidden; color:red; text-align: center;\">Please enter a price</p>
    <div id=\"invoiceidDiv\" style=\"text-align: center; display: none;\"><label for=\"invoiceid\"> </label><input name=\"invoiceid\" maxlength=\"127\" type=\"text\" id=\"invoiceid\" value=\"\" ></div>
      <p id=\"invoiceidError\" style=\"visibility: hidden; color:red; text-align: center;\">Please enter an Invoice ID</p>
    <div style=\"text-align: center; margin-top: 0.625rem;\" id=\"paypal-button-container\"></div>
  </div>
                                                ";
                                                    }
                                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cta-area">
               <div class="container">
                <br>
                <br>
                <br>
                   <div class="row justify-content-end">
                       <div class="col-xxl-9">
                           <div class="sg-cta-box has-cta-bg-before has-transform-reverce-top pt-80 pb-83 pl-72 theme-bg">
                               <div class="row align-items-center">
                                   <div class="col-xxl-8 col-xl-8 col-lg-8">
                                        <div class="sg-cta-box-left mb-40 mb-lg-0">
                                            <h4 class="sg-cta-box-title"><bdi class="cta-title">Te contactaremos en las próximas horas para agendar tu procedimiento </bdi> 
                                            <span>¿Tienes dudas? </span></h4>
                                        </div>
                                   </div>
                                   <div class="col-xxl-4 col-xl-4 col-lg-4">
                                        <div class="sg-cta-box-right text-lg-end">
                                            <a href="https://api.whatsapp.com/send?phone=+5214461394428&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus paquetes%20." class="sg-white-rounded-btn" target="_blank">Contáctanos</a>
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
                                <li><a href="case-details.php?iddr=4">Botox Party</a></li>
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

    <script>
  function initPayPalButton() {
    var description = document.querySelector('#smart-button-container #description');
    var amount = document.querySelector('#smart-button-container #amount');
    var descriptionError = document.querySelector('#smart-button-container #descriptionError');
    var priceError = document.querySelector('#smart-button-container #priceLabelError');
    var invoiceid = document.querySelector('#smart-button-container #invoiceid');
    var invoiceidError = document.querySelector('#smart-button-container #invoiceidError');
    var invoiceidDiv = document.querySelector('#smart-button-container #invoiceidDiv');
      var  nombreError =  document.getElementById('nombreError') ;
      var  nombre =  document.getElementById('nombre') ;
    var  apellidoError =  document.getElementById('apellidoError') ;
      var  apellido =  document.getElementById('apellido') ;
 var  telefonoError =  document.getElementById('telefonoError') ;
      var  telefono =  document.getElementById('telefono') ;
 var  emailError =  document.getElementById('emailError') ;
      var  email =  document.getElementById('email') ;


    var elArr = [description, amount,nombre,apellido,telefono];

    if (invoiceidDiv.firstChild.innerHTML.length > 1) {
      invoiceidDiv.style.display = "block";
    }

    var purchase_units = [];
    purchase_units[0] = {};
    purchase_units[0].amount = {};

    function validate(event) {
      return event.value.length > 0;
    }

    paypal.Buttons({
      style: {
        color: 'gold',
        shape: 'rect',
        label: 'paypal',
        layout: 'vertical',
        
      },

      onInit: function (data, actions) {
        actions.disable();

        if(invoiceidDiv.style.display === "block") {
          elArr.push(invoiceid);
        }

        elArr.forEach(function (item) {
          item.addEventListener('keyup', function (event) {
            var result = elArr.every(validate);
            if (result) {
              actions.enable();
            } else {
              actions.disable();
            }
          });
        });
      },

      onClick: function () {
        if (nombre.value.length < 1) {
          nombreError.style.visibility = "visible";
        } else {
          nombreError.style.visibility = "hidden";
        }
        if (telefono.value.length < 1) {
          telefonoError.style.visibility = "visible";
        } else {
          telefonoError.style.visibility = "hidden";
        }
        if (email.value.length < 1) {
          emailError.style.visibility = "visible";
        } else {
          emailError.style.visibility = "hidden";
        }
        if (apellido.value.length < 1) {
          apellidoError.style.visibility = "visible";
        } else {
          apellidoError.style.visibility = "hidden";
        }

         if (description.value.length < 1) {
          descriptionError.style.visibility = "visible";
        } else {
          descriptionError.style.visibility = "hidden";
        }

        if (amount.value.length < 1) {
          priceError.style.visibility = "visible";
        } else {
          priceError.style.visibility = "hidden";
        }

        if (invoiceid.value.length < 1 && invoiceidDiv.style.display === "block") {
          invoiceidError.style.visibility = "visible";
        } else {
          invoiceidError.style.visibility = "hidden";
        }

        purchase_units[0].description = description.value;
        purchase_units[0].amount.value = amount.value;

        if(invoiceid.value !== '') {
          purchase_units[0].invoice_id = invoiceid.value;
        }
      },

      createOrder: function (data, actions) {
        return actions.order.create({
          purchase_units: purchase_units,
        });
      },

      onApprove: function (data, actions) {
        return actions.order.capture().then(function (orderData) {

          // Full available details
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

          // Show a success message within this page, e.g.
         

                    const url = 'php/PagoKet.php';

         const  iddr = document.getElementById('id_session').value   ;
         const  total =  document.getElementById('total').value ;
       const  nombre =  document.getElementById('nombre').value ;
       const  apellido =  document.getElementById('apellido').value ;
       const  email =  document.getElementById('email').value ;
       const  telefono =  document.getElementById('telefono').value ;
          

  
       const idPaypal=orderData.id;
       const    IdPayPalPago=orderData.purchase_units[0].payments.captures[0].id;
          
           console.log(iddr +  total + nombre + apellido + email + telefono  + idPaypal + IdPayPalPago );
       const  formulario = new FormData();  
     // document.getElementById('paypal-button-container').style.display = 'none';
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
                console.log(response.text());
                     const element = document.getElementById('paypal-button-container');
                      element.innerHTML = '';
                         element.innerHTML = '<h3>Gracias por tu pago!</h3>';
                
            } else {
                     throw "Error en la llamada Ajax";
                    
                }

                }).then(function(texto) {
                        console.log(texto);
                        
                    })
                        .catch(function(err) {
                     console.log(err);
                    
                });

          // Or go to another URL:  actions.redirect('thank_you.html');
          
        });
      },

      onError: function (err) {
        console.log(err);
      }
    }).render('#paypal-button-container');
  }
  initPayPalButton();
  </script>
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
    <script src="assets/js/cart.js"></script>
</body>

</html>