<?php
     session_start();
     require_once  "php/conexion.php";
     if (empty($_SESSION['ida']))
     {
       $_SESSION['ida']= session_id();
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
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

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
                                <a href="https://www.google.com/maps/place/Hospital+Moscati/@20.6956811,-100.4439568,16z/data=!4m13!1m7!3m6!1s0x85d357597f718519:0x4d20fffd87030872!2sJuriquilla+Santa+Fe,+Santa+F%C3%A9,+76230+Juriquilla,+Qro.!3b1!8m2!3d20.6933677!4d-100.4438707!3m4!1s0x85d359d148505b49:0xcffedc73d636ebb8!8m2!3d20.6920657!4d-100.4385489"
                                   class="sg-topbar-contact-item-link">
                                    <i class="fal fa-map-marker-alt"></i>
                                    <span>México</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-3">
                        <div class="sg-topbar-social-links text-center text-lg-end">
                            <a href="https://www.facebook.com/Ketmedical1" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/ketmedical/" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
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
                                                    <li>
                                                        <a href="index.php">Conocenos</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="service.php">Servicios</a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="service.php">Conoce nuestros servicios</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="doctor-list.php">Doctores</a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="doctor-list.php">Nuestros Doctores</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="case-details.php?iddr=4">Eventos</a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="case-details.php?iddr=4">Beauty Party </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="https://api.whatsapp.com/send?phone=+5214461394428&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus paquetes%20."
                                                   target="_blank">Contacto</a>
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

    <main class="container-fluid">
        <div class="demo-cont">
            <div class="fnc-slider example-slider">
                <div class="fnc-slider__slides">
                    <div class="fnc-slide m--blend-green m--active-slide">
                        <div class="fnc-slide__inner">
                            <div class="fnc-slide__content">
                                <h2 class="fnc-slide__heading">
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="fnc-slide m--blend-dark">
                        <div class="fnc-slide__inner">
                            <div class="fnc-slide__content">
                                <h2 class="fnc-slide__heading">
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="fnc-slide m--blend-red">
                        <div class="fnc-slide__inner">
                            <div class="fnc-slide__content">
                                <h2 class="fnc-slide__heading">
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="fnc-slide m--blend-blue">
                        <div class="fnc-slide__inner">
                            <div class="fnc-slide__content">
                                <h2 class="fnc-slide__heading">
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="fnc-nav">
                    <div class="fnc-nav__bgs">
                        <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
                        <div class="fnc-nav__bg m--navbg-dark"></div>
                        <div class="fnc-nav__bg m--navbg-red"></div>
                        <div class="fnc-nav__bg m--navbg-blue"></div>
                    </div>
                    <div class="fnc-nav__controls">
                        <button class="fnc-nav__control">
                            KET
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                        <button class="fnc-nav__control">
                            Servicios
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                        <button class="fnc-nav__control">
                            Eventos
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                        <button class="fnc-nav__control">
                            Promociones
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
    </main>

    <section class="container-lg">
        <div class="row py-4">
            <div class="col-12 d-flex flex-column align-items-center">
                <h2 class="m-0">Pide tu valoración</h2>
            </div>

            <div class="col-3 d-flex align-items-center">
                <div class="nav flex-row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="ktm-service-pills active" id="v-pills-lifting-tab" data-bs-toggle="pill" data-bs-target="#v-pills-lifting" role="tab" aria-controls="v-pills-lifting" aria-selected="true">
                        <div class="ktm-service-pills-icon">
                            <img src="assets/img/lifting.png" alt="lifting">
                        </div>
                        <div class="ktm-service-pills-label">
                            <label>
                                lifting
                            </label>
                        </div>
                    </div>

                    <div class="ktm-service-pills" id="v-pills-mammoplasty-tab" data-bs-toggle="pill" data-bs-target="#v-pills-mammoplasty" role="tab" aria-controls="v-pills-mammoplasty" aria-selected="false">
                        <div class="ktm-service-pills-icon">
                            <img src="assets/img/mammoplasty.png" alt="mammoplasty">
                        </div>
                        <div class="ktm-service-pills-label">
                            <label>
                                mamoplastia
                            </label>
                        </div>
                    </div>

                    <div class="ktm-service-pills" id="v-pills-rhinoplasty-tab" data-bs-toggle="pill" data-bs-target="#v-pills-rhinoplasty" role="tab" aria-controls="v-pills-rhinoplasty" aria-selected="false">
                        <div class="ktm-service-pills-icon">
                            <img src="assets/img/rhinoplasty.png" alt="rhinoplasty">
                        </div>
                        <div class="ktm-service-pills-label">
                            <label>
                                rinoplastia
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active ktm-service-tab-pane" id="v-pills-lifting" role="tabpanel" aria-labelledby="v-pills-lifting-tab">
                        <div class="d-flex flex-row align-items-center justify-content-center h-100">
                            <div class="hmq-box-shadow">
                                <div class="hmq-our-service-detail-title my-3">
                                    <h3>Procedimiento de Lifting</h3>
                                </div>
                                <div class="hmq-our-services-icon">
                                    <i class="fa-solid fa-hospital"></i>
                                </div>
                                <div class="hmq-our-service-detail-title">
                                    <h3>Precios desde</h3>
                                </div>
                                <div class="hmq-our-service-detail-title">
                                    <h3>$ 8000</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade ktm-service-tab-pane" id="v-pills-mammoplasty" role="tabpanel" aria-labelledby="v-pills-mammoplasty-tab">
                        <div class="d-flex flex-row align-items-center justify-content-center h-100">
                            <div class="hmq-box-shadow">
                                <div class="hmq-our-service-detail-title">
                                    <h3>Procedimiento de Lifting</h3>
                                </div>
                                <div class="hmq-our-services-icon">
                                    <i class="fa-solid fa-hospital"></i>
                                </div>
                                <div class="hmq-our-service-detail-title">
                                    <h3>Precios desde</h3>
                                </div>
                                <div class="hmq-our-service-detail-title">
                                    <h3>Hospitalización</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade ktm-service-tab-pane" id="v-pills-rhinoplasty" role="tabpanel" aria-labelledby="v-pills-rhinoplasty-tab">
                        <div class="d-flex flex-row align-items-center justify-content-center h-100">
                            <div class="hmq-box-shadow">
                                <div class="hmq-our-services-icon">
                                    <i class="fa-solid fa-hospital"></i>
                                </div>
                                <div class="hmq-our-service-detail-title">
                                    <h3>Hospitalización</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-lg">
        <div class="service-area has-service-wraped-order" style="padding: 25px 0">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="sg-section-title-wrap text-center pb-30">
                            <span class="sg-section-subtitle">Servicios</span>
                            <h3 class="sg-section-title  mb-25">¿En qué te podemos ayudar?</h3>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="sg-service-box bg-white">
                            <div class="row g-0 align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="sg-service-box-img bg-default"
                                         data-background="assets/img/service/service-1.jpg"></div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="sg-service-box-content has-before-angle">
                                        <h4 class="sg-service-box-title">Procedimiento Antiarrugas</h4>
                                        <p class="sg-service-box-text">El Procedimiento Antiarrugas es un medicamento
                                            cuya
                                            función es paralizar parcialmente los músculos. A través de una serie de
                                            inyecciones prácticamente indoloras administradas con cuidado, se pueden
                                            suavizar eficazmente ciertas arrugas para lograr una apariencia más juvenil
                                            en
                                            el rostro.</p>
                                        <a href="case-details.php?iddr=1" class="sg-theme-radius-btn">Comprar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="sg-service-box bg-white">
                            <div class="row g-0 align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="sg-service-box-img bg-default"
                                         data-background="assets/img/service/fillers.jpg"></div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="sg-service-box-content has-before-angle">
                                        <h4 class="sg-service-box-title">Fillers</h4>
                                        <p class="sg-service-box-text">Los fillers se pueden utilizar para rellenar
                                            surcos o
                                            arrugas, o bien para dar volumen a ciertas zonas del rostro como pueden ser:
                                            labios, pómulos, mejillas, mentón.</p>
                                        <a href="case-details.php?iddr=2" class="sg-theme-radius-btn">Comprar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="sg-service-box bg-white">
                            <div class="row g-0 align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="sg-service-box-content has-before-angle rotate-y">
                                        <h4 class="sg-service-box-title">Aparatología</h4>
                                        <p class="sg-service-box-text">La aparatología se define como un conjunto de
                                            técnicas que se utilizan mediante aparatos eléctricos en el campo de la
                                            medicina
                                            estética. Son técnicas muy cómodas y efectivas, que se pueden aplicar tanto
                                            en
                                            el rostro como en el cuerpo.</p>
                                        <a href="case-details.php?iddr=3" class="sg-theme-radius-btn">Comprar</a>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="sg-service-box-img bg-default"
                                         data-background="assets/img/service/aparatos.jpg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="sg-service-box bg-white">
                            <div class="row g-0 align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="sg-service-box-content has-before-angle rotate-y">
                                        <h4 class="sg-service-box-title">Eventos privados</h4>
                                        <p class="sg-service-box-text">¡Vive la experiencia de una Beauty Party privada!
                                            Si
                                            estas planeando tu despedida de soltera o cualquier otro evento con tus
                                            amigas
                                            nosotros podemos ayudarte.</p>
                                        <a href="case-details.php?iddr=4" class="sg-theme-radius-btn">Comprar</a>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="sg-service-box-img bg-default"
                                         data-background="assets/img/service/party.jpg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="sg-service-box bg-white">
                            <div class="row g-0 align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="sg-service-box-img bg-default"
                                         data-background="assets/img/service/quirurgico.jpg"></div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="sg-service-box-content has-before-angle">
                                        <h4 class="sg-service-box-title">Quirúrgico</h4>
                                        <p class="sg-service-box-text">Los procedimientos quirúrgicos con fines
                                            estéticos
                                            todo aquel en el que se practique una incisión en la piel y manipulación de
                                            órganos o tejidos anatómicamente íntegros (sanos) con la finalidad de
                                            modificar
                                            y embellecer aquellas partes del cuerpo que no son satisfactorias al
                                            individuo.</p>
                                        <a href="surgical-procedure.html" class="sg-theme-radius-btn">Comprar</a>
                                        <!--                                        <a href="case-details.php?iddr=5" class="sg-theme-radius-btn">Comprar</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="counter-area" data-bg-color="#F6F6F6" style="padding: 75px 0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-6 mb-30 mb-lg-0">
                        <div class="sg-counter-num-box">
                            <h5 class="sg-counter-count"><span class="odometer" data-count="3"></span></h5>
                            <span class="sg-counter-label">Hospitales</span>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-6 mb-30 mb-lg-0">
                        <div class="sg-counter-num-box">
                            <h5 class="sg-counter-count"><span class="odometer" data-count="10"></span></h5>
                            <span class="sg-counter-label">Doctores Especialistas</span>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-6 mb-30 mb-lg-0">
                        <div class="sg-counter-num-box">
                            <h5 class="sg-counter-count"><span class="odometer" data-count="1000"></span>+</h5>
                            <span class="sg-counter-label">Pacientes Felices</span>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="sg-counter-num-box">
                            <h5 class="sg-counter-count"><span class="odometer" data-count="2000"></span>+</h5>
                            <span class="sg-counter-label">Procedimientos Realizados</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="team-area" style="padding: 25px 0">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="sg-section-title-wrap text-center mb-55">
                            <span class="sg-section-subtitle">Doctores</span>
                            <h3 class="sg-section-title ">Algunos de nuestros especialistas</h3>
                            <a href="doctor-list.php" class="sg-theme-radius-btn">Conoce a todos </a>
                        </div>
                    </div>
                </div>

                <div class="sg-team-active swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        $stmt = '';
                        if (!empty($conn)) {
                            $stmt = $conn->prepare("SELECT * FROM ket_doctores where activo=1 and id not in (11) ORDER BY RAND();");
                            $stmt->execute();
                            $countriesList = $stmt->fetchAll();
                            foreach ($countriesList as $country) {
                                $fotos = 'assets/img/doctores/' . $country['imagen'];
                                echo "
                                        <div class=\"swiper-slide\">
                                            <div class=\"sg-team-single-box\">
                                                <div class=\"sg-team-single-img\">
                                                    <img src='" . $fotos . "' alt=\"team image not found\">
                                                    <div class=\"sg-team-arrow-link\">
                                                        <a href=\"doctor-details.php?iddr=" . $country['Id'] . "\"><i class=\"fal fa-long-arrow-right\"></i></a>
                                                    </div>
                                                </div>
                                            
                                                <div class=\"sg-team-single-content text-center\">
                                                    <h4 class=\"sg-team-single-title\"><a href=\"doctor-details.php?iddr=" . $country['Id'] . "\">" . $country['Nombre'] . "</a></h4>
                                                    <div class=\"sg-team-social-fix\">
                                                        <div class=\"sg-team-social-list\">
                                                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                                        </div>
                                                        <span class=\"sg-team-social-subtitle\">" . $country['cabecera'] . "</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                            }
                        } else {
                            echo "";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="about-area" data-bg-color="#F6F6F6" style="padding: 125px 0">
            <div class="container">
                <div class="row g-0">
                    <div class="col-xxl-6 col-xxl-6 col-lg-6">
                        <div class="sg-about-left-img-3">
                            <img src="assets/img/about/ket.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xxl-6 col-lg-6">
                        <div class="sg-about-right-box has-about-space-1 pl-100">
                            <div class="sg-section-title-wrap">
                                <span class="sg-section-subtitle">Acerca de</span>
                                <h3 class="sg-section-title  mb-25">Bienvenido a KET</h3>
                            </div>
                            <div class="sg-about-content-right mb-45">
                                <p>KET es tu concierge médico de belleza, que te conecta con los mejores médicos para
                                    tus procedimientos estéticos.</p>
                            </div>

                            <hr class="mb-50 sg-about-heading-line-space-2">
                            <div class="sg-about-play-text-wrap">
                                <div class="row">
                                    <div class="col-xxl-5 col-xl-5 col-md-5 col-lg-12 col-sm-5 mb-20 mb-sm-0">
                                        <div class="sg-about-play-text-right sg-has-about-play-space-3">
                                            <a href="https://www.youtube.com/watch?v=BqIaBoTdz70"
                                               class="popup-video sg-about-play-text-bordered-btn">
                                                <div class="sg-icon">
                                                    <i class="fas fa-play"></i>
                                                </div>
                                                <span>Antiarrugas</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="sg-about-play-text-wrap">
                                <div class="row">
                                    <div class="col-xxl-5 col-xl-5 col-md-5 col-lg-12 col-sm-5 mb-20 mb-sm-0">
                                        <div class="sg-about-play-text-right sg-has-about-play-space-3">
                                            <a href="https://www.youtube.com/watch?v=QdIjV_X5vhQ"
                                               class="popup-video sg-about-play-text-bordered-btn">
                                                <div class="sg-icon">
                                                    <i class="fas fa-play"></i>
                                                </div>
                                                <span>Beauty Party </span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="sg-about-play-text-wrap">
                                <div class="row">
                                    <div class="col-xxl-5 col-xl-5 col-md-5 col-lg-12 col-sm-5 mb-20 mb-sm-0">
                                        <div class="sg-about-play-text-right sg-has-about-play-space-3">
                                            <a href="https://www.youtube.com/watch?v=QXIdeTiUjpw"
                                               class="popup-video sg-about-play-text-bordered-btn">
                                                <div class="sg-icon">
                                                    <i class="fas fa-play"></i>
                                                </div>
                                                <span>Full Face</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="cta-area">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xxl-9">
                        <div class="sg-cta-box has-cta-bg-before has-transform-reverce-top pt-80 pb-83 pl-72 theme-bg">
                            <div class="row align-items-center">
                                <div class="col-xxl-8 col-xl-8 col-lg-8">
                                    <div class="sg-cta-box-left mb-40 mb-lg-0">
                                        <h4 class="sg-cta-box-title">
                                            <bdi class="cta-title">Contáctanos</bdi>
                                            <span>¿Tienes dudas? </span></h4>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4">
                                    <div class="sg-cta-box-right text-lg-end">
                                        <a href="https://api.whatsapp.com/send?phone=+5214461394428&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus paquetes%20."
                                           class="sg-white-rounded-btn" target="_blank">Contáctanos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <div class="copyright-area text-center text-md-start pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <p class="sg-copyright-text">© 2022 KET Medical | Todos los derechos reservados</p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="sg-copyright-social-link text-center text-md-end">
                        <a href="about.html">Aviso de privacidad</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>

    <a href="https://api.whatsapp.com/send?phone=+5214461394428&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus paquetes%20."
       class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

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
    <script async src="https://kit.fontawesome.com/2ba8359609.js" crossorigin="anonymous"></script>
</body>
</html>