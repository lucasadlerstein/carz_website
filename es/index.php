<?php 

if(isset($_GET)) {
    if ($_GET['f'] != '') {
        $wpLink = "https://api.whatsapp.com/send?phone=17868208222&text=Hola%20CarzRental%2C%20estaba%20en%20su%20sitio%20web%20(" . $_GET['f']  . ")%20y%20quisiera%20alquilar%20un%20auto%20para%20EEUU.%20%C3%89stas%20son%20las%20fechas%3A";
    } else {
        $wpLink = "https://api.whatsapp.com/send?phone=17868208222&text=Hola%20CarzRental%2C%20estaba%20en%20su%20sitio%20web%20y%20quisiera%20alquilar%20un%20auto%20para%20EEUU.%20%C3%89stas%20son%20las%20fechas%3A";
    }
} else {
    $wpLink = "https://api.whatsapp.com/send?phone=17868208222&text=Hola%20CarzRental%2C%20estaba%20en%20su%20sitio%20web%20y%20quisiera%20alquilar%20un%20auto%20para%20EEUU.%20%C3%89stas%20son%20las%20fechas%3A";
}

?>


<!DOCTYPE html>
<html lang="es" translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <title>CarzRental | Alquiler de autos con el mejor precio en EEUU</title>
    <meta name="description" content="El mejor precio de alquiler de autos en EEUU, para titulares de licencias de conducir extranjeras. Garantizado." />
    <meta name="keywords" content="alquiler de autos, alquilar auto, rentar auto, alquilar auto en estados unidos, alquilar auto en miami, alquilar auto en nueva york" />
    <meta name="robots" content="index, follow" />
    <meta name="google" content="notranslate" />
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="../css/intlTelInput.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/animaciones.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
    <link rel="manifest" href="../img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

        <!-- Facebook Pixel Code -->
        <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');fbq('init', '340858277369171');fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=340858277369171&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Ads: 1019430203 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1019430203"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-1019430203');
    </script>

    <!-- Event snippet for Contact conversion page -->
    <!-- <script>
    function gtag_report_conversion(url) {
      var callback = function () {
        if (typeof(url) != 'undefined') {
          window.location = url;
        }
      };
      gtag('event', 'conversion', {
          'send_to': 'AW-1019430203/RPw8COHwvd0BELuKjeYD',
          'event_callback': callback
      });
      return false;
    }
    </script> -->

    <!-- Event snippet for Contacto - WhatsApp conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-1019430203/GO-CCI-AzfkBELuKjeYD', 'event_callback': callback }); return false; } </script>

    <script type="text/javascript" async="async" src="https://hub.fromdoppler.com/public/dhtrack.js" ></script>

</head>

<body>
    <div class="barra" id="inicio">
        <div class="container">
            <div class="izquierda-barra">
                <a onclick="return gtag_report_conversion('http://wa.me/17868208222');" href="http://wa.me/17868208222" target="_blank" class="texto-negro"><i class="fab fa-whatsapp texto-negro"></i>Soporte 24/7 - WhatsApp</a>
            </div>
            <div class="derecha-barra">
                <div class="logos float-left">
                    <a href="https://www.facebook.com/CarzRental-104359937823737/" target="_blank">
                        <i class="fab fa-lg fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/carz_rental" target="_blank">
                        <i class="fab fa-lg fa-instagram"></i>
                    </a>
                    <a onclick="return gtag_report_conversion('<?php echo $wpLink ?>');" href="<?php echo $wpLink ?>" target="_blank">
                        <i class="fab fa-lg fa-whatsapp"></i>
                    </a>
                    <a onclick="return gtag_report_conversion('mailto:info@carzrental.com');" href="mailto:info@carzrental.com">
                        <i class="fas fa-lg fa-envelope"></i>
                    </a>
                </div>
                <div class="idioma float-right">
                    <a href="../" class="mx-1">
                        <img src="../img/usa.jpg" alt="Versión en ingles">
                    </a>
                    <a href="../he" class="mx-1">
                        <img src="../img/israel.png" alt="Versión en hebreo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="navegacion-principal">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="index.php">
                        <img class="logo-nav" src="../img/Logo_Carz_rental_color.png" alt="Carz Rental">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#carzNavegacion" aria-controls="carzNavegacion" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <div class="collapse navbar-collapse justify-content-end" id="carzNavegacion">
                        <div class="navbar-nav navegacion-menu">
                            <a href="#inicio">Inicio</a>
                            <a href="#autos">Autos</a>
                            <a href="#proceso">Proceso</a>
                            <a href="#opiniones">Opiniones</a>
                            <a href="#porque">¿Por qué CarzRental?</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="banner-principal parallax">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                    <div class="info-banner">
                        <h1 class="titulo-prin">El mejor precio para alquiler de autos en EEUU, con licencias de conducir extranjeras.</h1>
                        <p>
                            Nuestra misión es brindarle el mejor precio, el mejor servicio y una excelente experiencia en general.<br>Compare nuestra oferta con cualquier otra: las superamos a todas.<br>Contáctenos ahora para obtener un presupuesto sin
                            cargo.
                        </p>
                        <div class="mt-5">
                            <a onclick="return gtag_report_conversion('mailto:info@carzrental.com');" href="mailto:info@carzrental.com" class="boton btn-transparente mr-5 no-mobile">
                                <i class="las la-envelope"></i> Enviar Email
                            </a>
                            <a onclick="return gtag_report_conversion('<?php echo $wpLink ?>');" href="<?php echo $wpLink ?>" target="_blank" class="boton btn-transparente">
                                <i class="lab la-whatsapp"></i> Enviar WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
                <div id="formulario-contacto" class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                    <form name="form_contacto" action="formulario.php" class="formulario-contacto" method="POST">
                        <div class="form-titulo">
                            <h3>¡Encuentre el auto perfecto!</h3>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h4 class="titulo-input mt-0">LUGAR DE RECOGIDA</h4>
                                    <input class="formulario-input" type="text" name="pick-up" id="pick-airport" placeholder="Aeropuerto" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h4 class="titulo-input">LUGAR DE ENTREGA</h4>
                                    <input class="formulario-input" type="text" name="drop-off" id="drop-airport" placeholder="Aeropuerto" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h4 class="titulo-input">FECHAS DE RECOGIDA Y ENTREGA</h4>
                                    <input placeholder="DD/MM/YYYY - DD/MM/YYYY" class="formulario-input" type="text" name="fechas-alquiler" id="fechas-alq" value="" required/>
                                    <i class="fa fa-calendar icono-calendario"></i>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h4 class="titulo-input">CATEGORÍA DE AUTO</h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <select class="custom-select mr-sm-2 formulario-input" style="height:auto;" name="categoria" required>
                                                <option value="COMPACTO / ECONOMICO">COMPACTO / ECONOMICO</option>
                                                <option value="SEDAN MEDIANO / STANDARD">SEDAN MEDIANO / STANDARD</option>
                                                <option value="SEDAN FULL SIZE / PREMIUM">SEDAN FULL SIZE / PREMIUM</option>
                                                <option value="SEDAN / LUJO">SEDAN / LUJO</option>
                                                <option value="CONVERTIBLE">CONVERTIBLE</option>
                                                <option value="PICKUP">PICKUP</option>
                                                <option value="CAMIONETA SUV 5 PAX / COMPACTO">CAMIONETA SUV 5 PAX / COMPACTO</option>
                                                <option value="CAMIONETA SUV PAX / MEDIANA">CAMIONETA SUV PAX / MEDIANA</option>
                                                <option value="CAMIONETA SUV 5 PAX / PREMIUM - LUJO">CAMIONETA SUV 5 PAX / PREMIUM - LUJO</option>
                                                <option value="CAMIONETA SUV 7 PAX / STANDARD">CAMIONETA SUV 7 PAX / STANDARD</option>
                                                <option value="CAMIONETA SUV 7 PAX / PREMIUM-LUJO">CAMIONETA SUV 7 PAX / PREMIUM-LUJO </option>
                                                <option value="MINIVAN 7 PAX">MINIVAN 7 PAX </option>
                                                <option value="VAN 12 PAX">VAN 12 PAX </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h4 class="titulo-input">HORA DE RECOGIDA</h4>
                                    <div class="row">
                                        <div class="col-6 pr-1">
                                            <i class="fa fa-clock icono-reloj"></i>
                                            <select class="custom-select mr-sm-2 formulario-input select-hora" style="height:auto;" name="pick-hora" required>
                                                <option value="00">00</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option selected value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                        <div class="col-6 pl-1">
                                            <select class="custom-select mr-sm-2 formulario-input" style="height:auto;" name="pick-min" required>
                                                <option value="00">00</option>
                                                <option value="30">30</option>                                    
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h4 class="titulo-input">HORA DE ENTREGA</h4>
                                    <div class="row">
                                        <div class="col-6 pr-1">
                                            <i class="fa fa-clock icono-reloj"></i>
                                            <select class="custom-select mr-sm-2 formulario-input select-hora" style="height:auto;" name="drop-hora" required>
                                                <option value="00">00</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option selected value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                        <div class="col-6 pl-1">
                                            <select class="custom-select mr-sm-2 formulario-input" style="height:auto;" name="drop-min" required>
                                                <option value="00">00</option>
                                                <option selected value="30">30</option>                                    
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 mt-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="age-25" name="age" value="25" class="custom-control-input formulario-input" required>
                                    <label class="custom-control-label radio-texto" for="age-25">Conductor +25 años</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="age-19" name="age" value="19" class="custom-control-input formulario-input">
                                    <label class="custom-control-label radio-texto" for="age-19">Conductor 19-24 años</label>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4 mt-3">
                                <select class="custom-select mr-sm-2 formulario-input" style="height:auto;" name="via" id="tipo-contacto" required>
                                    <option hidden selected value="">Contactar por...</option>
                                    <option value="wp">WhatsApp</option>
                                    <option value="em">Email</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group input-group oculto" id="acaTel">
                                    <input class="formulario-input" placeholder="Ingrese su celular" name="telefono" type="tel" id="phone" />
                                    <span id="valid-msg" class="hide">✓ Válido</span>
                                    <span id="error-msg" class="hide"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="formulario-input oculto" name="email" placeholder="Ingrese su email" type="email" id="acaEmail" />
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <input type="submit" class="boton btn-secundario" name="enviar" value="Contactar" id="enviarForm">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="cuatro-items">
        <div class="row">
            <div class="col-lg-3 col-sm-6 un-item">
                <div class="titulo-item">
                    <i class="fas fa-2x fa-info hov-whi"></i>
                    <h3 class="texto-negro hov-whi">Soporte 24/7</h3>
                </div>
                <p class="hov-whi">
                    Estamos disponibles todos los días del año para ayudarlo por teléfono, correo electrónico o WhatsApp.
                </p>
            </div>
            <div class="col-lg-3 col-sm-6 un-item">
                <div class="titulo-item">
                    <i class="fas fa-2x fa-globe-americas hov-whi"></i>
                    <h3 class="texto-negro hov-whi">DESTINOS EN EEUU</h3>
                </div>
                <p class="hov-whi">Disfrute de autos a lo largo y ancho de todo Estados Unidos.
                </p>
            </div>
            <div class="col-lg-3 col-sm-6 un-item">
                <div class="titulo-item">
                    <i class="fas fa-2x fa-grin-wink hov-whi"></i>
                    <h3 class="texto-negro hov-whi">EMPRESAS LÍDERES EN ALQUILER DE AUTOS</h3>
                </div>
                <p class="hov-whi">Hertz, Avis, Alamo, etc.<br>Las mismas compañías, pero mejores precios.</p>
            </div>
            <div class="col-lg-3 col-sm-6 un-item">
                <div class="titulo-item">
                    <i class="fas fa-2x fa-award hov-whi"></i>
                    <h3 class="texto-negro hov-whi">Diferencial</h3>
                </div>
                <p class="hov-whi">Ofrecemos los mejores precios durante todo el año.<br>Confírmelo, sin cargo!</p>
            </div>
        </div>
    </div>

    <section class="autos pad-100" id="autos">
        <div class="container">
            <div class="text-center">
                <h2 class="titulo-seccion raya">Elija su auto</h2>
                <p class="mt-5">
                    Ofrecemos una amplia gama de vehículos para satisfacer sus necesidades:<br>Económicos, SUV, mini vans, modelos de lujo y más.
                </p>
            </div>
            <div class="text-center mt-5">
                <ul class="elegir-autos">
                    <li>
                        <button class="boton btn-autos btn-izq auto-activo" type="button" data-toggle="collapse" id="btnEconomico" data-target="#autosEconomico" aria-expanded="true" aria-controls="autosEconomico">
                            ECONÓMICO
                        </button>
                    </li>
                    <li>
                        <button class="boton btn-autos" type="button" data-toggle="collapse" id="btnSedan" data-target="#autosSedan" aria-expanded="true" aria-controls="autosSedan">
                            SEDAN
                        </button>
                    </li>
                    <li>
                        <button class="boton btn-autos" type="button" data-toggle="collapse" id="btnSuv" data-target="#autosSuv" aria-expanded="true" aria-controls="autosSuv">
                            SUV
                        </button>
                    </li>
                    <li>
                        <button class="boton btn-autos" type="button" data-toggle="collapse" id="btnMiniVan" data-target="#autosMiniVan" aria-expanded="true" aria-controls="autosMiniVan">
                            MINIVAN y 7 PASAJEROS
                        </button>
                    </li>
                    <li>
                        <button class="boton btn-autos btn-der" type="button" data-toggle="collapse" id="btnPremium" data-target="#autosPremium" aria-expanded="true" aria-controls="autosPremium">
                            PREMIUM
                        </button>
                    </li>
                </ul>
            </div>
            <div class="accordion" id="autosTodos">
                
                <div id="autosSuv" class="collapse" aria-labelledby="autosSuv" data-parent="#autosTodos">
                    <div class="row text-center mt-4 carousel-autos">
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/CHEVROLET_EQUINOX-min.png" alt="Chevrolet Equinox">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Chevrolet</h4>
                                    <p class="modeloAuto">Equinox</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/FORD_EDGE-min.png" alt="Ford Edge">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Ford</h4>
                                    <p class="modeloAuto">Edge</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/FORD_ESCAPE-min.png" alt="Ford Escape">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Ford</h4>
                                    <p class="modeloAuto">Escape</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/HYUNDAI_SANTA_FE-min.png" alt="Hyundai Santa Fe">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Hyundai</h4>
                                    <p class="modeloAuto">Santa Fe</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/HYUNDAI_TUCSON-min.png" alt="Hyundai Tucson">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Hyundai</h4>
                                    <p class="modeloAuto">Tucson</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/MAZDA_CX5-min.png" alt="Mazda CX5">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Mazda</h4>
                                    <p class="modeloAuto">CX5</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/NISSAN_ROGUE-min.png" alt="Nissan Rogue">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Nissan</h4>
                                    <p class="modeloAuto">Rogue</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/TOYOTA_RAV4-min.png" alt="Toyota Rav 4">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Toyota</h4>
                                    <p class="modeloAuto">Rav 4</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>  
                <div id="autosEconomico" class="collapse show" aria-labelledby="autosEconomico" data-parent="#autosTodos">
                    <div class="row text-center mt-4 carousel-autos">
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/HYUNDAI_ACCENT-min.png" alt="Hyundai Accent">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Hyundai</h4>
                                    <p class="modeloAuto">Accent</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/FORD_FOCUS-min.png" alt="Ford Focus">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Ford</h4>
                                    <p class="modeloAuto">Focus</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/CHEVROLET_SPARK-min.png" alt="Chevrolet Spark">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Chevrolet</h4>
                                    <p class="modeloAuto">Spark</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/MAZDA_3-min.png" alt="Mazda 3">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Mazda</h4>
                                    <p class="modeloAuto">3</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/TOYOTA_COROLLA-min.png" alt="Toyota Corolla">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Toyota</h4>
                                    <p class="modeloAuto">Corolla</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/CHEVROLET_CRUZE-min.png" alt="Chevrolet Cruze">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Chevrolet</h4>
                                    <p class="modeloAuto">Cruze</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/FORD_FIESTA-min.png" alt="Ford Fiesta">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Ford</h4>
                                    <p class="modeloAuto">Fiesta</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/KIA_RIO-min.jpg" alt="Kia RIO">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Kia</h4>
                                    <p class="modeloAuto">Rio</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/NISSAN_VERSA-min.png" alt="Nissan Versa">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Nissan</h4>
                                    <p class="modeloAuto">Versa</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/KIA_SOUL-min.png" alt="Kia Soul">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Kia</h4>
                                    <p class="modeloAuto">Soul</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="autosSedan" class="collapse" aria-labelledby="autosSedan" data-parent="#autosTodos">
                    <div class="row text-center mt-4 carousel-autos2">
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/CHEVROLET_MALIBU-min.png" alt="Chevrolet Malibu">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Chevrolet</h4>
                                    <p class="modeloAuto">Malibu</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/FORD_FUSION-min.png" alt="Ford Fusion">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Ford</h4>
                                    <p class="modeloAuto">Fusion</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/HYUNDAI_ELANTRA-min.png" alt="Hyundai Elantra">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Hyundai</h4>
                                    <p class="modeloAuto">Elantra</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/NISSAN_ALTIMA-min.png" alt="Nissan Altima">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Nissan</h4>
                                    <p class="modeloAuto">Altima</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/TOYOTA_CAMRY-min.png" alt="Toyota Camry">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Toyota</h4>
                                    <p class="modeloAuto">Camry</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/VOLKSWAGEN_JETTA-min.png" alt="Volkswagen Jetta">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Volkswagen</h4>
                                    <p class="modeloAuto">Jetta</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/VOLKSWAGEN_PASSAT-min.png" alt="Wolkswagen Passat">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Wolkswagen</h4>
                                    <p class="modeloAuto">Passat</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/BUICK_REGAL-min.png" alt="Buick Regal">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Buick</h4>
                                    <p class="modeloAuto">Regal</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/CHEVROLET_IMPALA-min.png" alt="Chevrolet Impala">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Chevrolet</h4>
                                    <p class="modeloAuto">Impala</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="autosMiniVan" class="collapse" aria-labelledby="autosMiniVan" data-parent="#autosTodos">
                    <div class="row text-center mt-4 carousel-autos2">
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/CHRYSLER_PACIFICA-min.png" alt="Chrysler Pacifica">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Chrysler</h4>
                                    <p class="modeloAuto">Pacifica</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>7</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/CHRYSLER_VOYAGER-min.png" alt="Chrysler Voyager">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Chrysler</h4>
                                    <p class="modeloAuto">Voyager</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>7</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/DODGE_GRAND_CARAVAN-min.png" alt="Dodge Gran Caravan">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Dodge</h4>
                                    <p class="modeloAuto">Gran Caravan</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>7</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/CHEVROLET_SUBURBAN-min.png" alt="Chevrolet Suburban">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Chevrolet</h4>
                                    <p class="modeloAuto">Suburban</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>7</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/CHEVROLET_TAHOE-min.png" alt="Chevrolet Tahoe">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Chevrolet</h4>
                                    <p class="modeloAuto">Tahoe</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>7</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/FORD_EXPEDITION-min.png" alt="Ford Expedition">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Ford</h4>
                                    <p class="modeloAuto">Expedition</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>7</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/FORD_EXPLORER-min.png" alt="Ford Explorer">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Ford</h4>
                                    <p class="modeloAuto">Explorer</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>7</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/GMC_YUKON-min.png" alt="GMC Yukon">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">GMC</h4>
                                    <p class="modeloAuto">Yukon</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>7</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/NISSAN_PATHFINDER-min.png" alt="Nissan Pathfinder">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Nissan</h4>
                                    <p class="modeloAuto">Pathfinder</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>7</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div id="autosPremium" class="collapse" aria-labelledby="autosPremium" data-parent="#autosTodos">
                    <div class="row text-center mt-4 carousel-autos2">
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/CADILLAC_XTS-min.png" alt="Cadilac CTS">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Cadilac</h4>
                                    <p class="modeloAuto">CTS</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/CADILLAC_XT5-min.png" alt="Cadilac XT5">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Cadilac</h4>
                                    <p class="modeloAuto">XT5</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/CHEVROLET_CAMARO_CONVERTIBLE-min.png" alt="Chevrolet Camaro Convertible">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Chevrolet</h4>
                                    <p class="modeloAuto">Camaro Convertible</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/CHEVROLET_CAMARO_SS-min.png" alt="Chevrolet Camaro SS">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Chevrolet</h4>
                                    <p class="modeloAuto">Camaro SS</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/CHRYSLER_300-min.png" alt="Chrysler 300">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Chrysler</h4>
                                    <p class="modeloAuto">300</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/FORD_MUSTANG_CONVERTIBLE-min.png" alt="Ford Mustang Convertible">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Ford</h4>
                                    <p class="modeloAuto">Mustang Convertible</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/INFINITI_QX60-min.png" alt="Infiniti QX60">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Infiniti</h4>
                                    <p class="modeloAuto">QX60</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>7</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/JAGUAR_XE-min.png" alt="Jaguar XE">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Jaguar</h4>
                                    <p class="modeloAuto">XE</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/JAGUAR_XF-min.png" alt="Jaguar XF">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Jaguar</h4>
                                    <p class="modeloAuto">XF</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/JEEP_WRANGLER_4_DOOR-min.png" alt="Jeep Wrangler">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Jeep</h4>
                                    <p class="modeloAuto">Wrangler</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/PORSCHE_MACAN-min.png" alt="Porsche Macan">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Porsche</h4>
                                    <p class="modeloAuto">Macan</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/RAM-min.png" alt="Ram">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Ram</h4>
                                    <!-- <p class="modeloAuto">Wrangler</p> -->
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/RANGE_ROVER_VELAR-min.png" alt="Range Rover Velar">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Range Rover</h4>
                                    <p class="modeloAuto">Velar</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 slide-item">
                            <div class="unAuto">
                                <div>
                                    <img loading="lazy" class="auto-movimiento" src="../img/autos-052021/RANGE_ROVER_EVOQUE-min.png" alt="Range Rover Evoque">
                                </div>
                                <div class="infoAuto">
                                    <h4 class="marcaAuto">Range Rover</h4>
                                    <p class="modeloAuto">Evoque</p>
                                </div>
                                <div class="iconosAuto">
                                    <ul>
                                        <li><i class="fas fa-users"></i><span>5</span></li>
                                    </ul>
                                </div>
                                <a href="#formulario-contacto" class="btn-reservar">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <div class="how" id="proceso">
        <div class="container">
            <div class="text-center mb-5">
                <!-- <h3 class="sub-titulo-seccion">Work Process</h3> -->
                <h2 class="titulo-seccion texto-blanco">Reserve su auto en sólo 3 pasos</h2>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="etapa">
                        <div class="icono-etapa">
                            <i class="fas fa-4x fa-calendar-alt"></i>
                        </div>
                        <div class="titulo-etapa">
                            <h4><span>1.</span>Complete la información sobre su viaje</h4>
                        </div>
                        <div>
                            <p>
                                Complete el formulario con las fechas, horarios y lugares de recogida y entrega.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="etapa">
                        <div class="icono-etapa">
                            <i class="fas fa-4x fa-comments"></i>
                        </div>
                        <div class="titulo-etapa">
                            <h4><span>2.</span>OBTENGA UNA COTIZACIÓN SIN CARGO</h4>
                        </div>
                        <div>
                            <p>
                                Un agente dedicado se comunicará con usted para darle un presupuesto completo y detalles.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="etapa">
                        <div class="icono-etapa">
                            <i class="fas fa-4x fa-dollar-sign"></i>
                        </div>
                        <div class="titulo-etapa">
                            <h4><span>3.</span>REALICE EL PAGO Y DISFRUTE DEL VIAJE</h4>
                        </div>
                        <div>
                            <p>
                                Su reserva está completa y lista para recoger en el lugar que elija.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="opiniones pad-100" id="opiniones">
        <div class="container">
            <div class="text-center">
                <h3 class="sub-titulo-seccion">Opiniones</h3>
                <h2 class="titulo-seccion raya">Opiniones destacadas</h2>
            </div>
            <div class="carousel-opiniones">
                <div class="slide-item opinion">
                    <div class="imagen-opinion">
                        <img loading="lazy" src="../img/testimonial-dorel.jpg" alt="Dorel Opinion">
                    </div>
                    <div class="contenido">
                        <div class="estrellas">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <blockquote>
                            He alquilado autos en 3 ocasiones con CarzRental en mi última visita a Estados Unidos, en 3 ciudades distintas. Impresionante la diferencia de precio con otras empresas y muy satisfecho con el trato amigable, personal y rápido de atención al cliente.
                            Siempre me respondieron rápido, por mail o Whatsapp. Recomiendo ampliamente a CarzRental y sin dudas volveré a alquilar con ellos.
                        </blockquote>
                        <p class="nombre-opinion">Dorel</p>
                        <p cla ss="origen-opinion">Barcelona, España</p>

                    </div>
                </div>
                <div class="slide-item opinion">
                    <div class="imagen-opinion">
                        <img loading="lazy" src="../img/testimonial-nico.jpg" alt="Nico Opinion">
                    </div>
                    <div class="contenido">
                        <div class="estrellas">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <blockquote>
                            CarzRental hizo que mis vacaciones sean más simples. Me ofrecieron una SUV por un precio realmente barato. Alquilé en el aeropuerto de Orlando, todo fue sencillo, rápido y claro y tuve una buena experiencia. Estoy seguro de que mi próximo viaje voy a
                            alquilar un auto con CarzRental de nuevo!
                        </blockquote>
                        <p class="nombre-opinion">Nico</p>
                        <p class="origen-opinion">Buenos Aires, Argentina</p>

                    </div>
                </div>
                <div class="slide-item opinion">
                    <div class="imagen-opinion">
                        <img loading="lazy" src="../img/ALEX.jpg" alt="ALEX SPITZ Opinion">
                    </div>
                    <div class="contenido">
                        <div class="estrellas">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <blockquote>
                            Viajé a Miami y Orlando en Febrero del 2020. Alquilamos el auto en CarzRental (HERTZ). Tuve un upgrade del auto sin costo adicional, la verdad no puedo pedir más! Recomiendo.
                        </blockquote>
                        <p class="nombre-opinion">Alex Spitz</p>
                        <p class="origen-opinion">Buenos Aires, Argentina</p>
                    </div>
                </div>
                <div class="slide-item opinion">
                    <div class="imagen-opinion">
                        <img loading="lazy" src="../img/MELU.jpeg" alt="Melu Opinion">
                    </div>
                    <div class="contenido">
                        <div class="estrellas">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <blockquote>
                            Super recomendable, excelente atencion
                        </blockquote>
                        <p class="nombre-opinion">Melu</p>
                        <p class="origen-opinion">Vicente Lopez, Argentina</p>
                    </div>
                </div>
                <div class="slide-item opinion">
                    <div class="imagen-opinion">
                        <img loading="lazy" src="../img/MARTINA.jpeg" alt="Martina Opinion">
                    </div>
                    <div class="contenido">
                        <div class="estrellas">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <blockquote>
                            Excelente atención de Matias.
                        </blockquote>
                        <p class="nombre-opinion">Martina</p>
                        <p class="origen-opinion">Buenos Aires, Argentina</p>
                    </div>
                </div>
                <div class="slide-item opinion">
                    <div class="imagen-opinion">
                        <img loading="lazy" src="../img/MATIAS.jpeg" alt="Matias Opinion">
                    </div>
                    <div class="contenido">
                        <div class="estrellas">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <blockquote>
                        Gracias por todo! excelente servicio, inmejorable precio
                        </blockquote>
                        <p class="nombre-opinion">Matias</p>
                        <p class="origen-opinion">Tigre, Argentina</p>
                    </div>
                </div>
                <div class="slide-item opinion">
                    <div class="imagen-opinion">
                        <img loading="lazy" src="../img/GUY.jpg" alt="Guy Opinion">
                    </div>
                    <div class="contenido">
                        <div class="estrellas">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <blockquote>
                            Had a trip to the Keys here in Florida and saw the CarzRental ad on Facebook. I called them and got a great deal for the whole week. The SUV we got was very comfortable and we were very pleased with CarzRental. Defiantly will rent again from you!
                        </blockquote>
                        <p class="nombre-opinion">Guy</p>
                        <p class="origen-opinion">Miami, Florida, USA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="porque pad-100" id="porque">
        <div class="row">
            <div class="col-lg-6 col-sm-12 no-mobile no-tablet">
                <img src="../img/Why_Choose_Us_Carz_Rental.png" alt="¿Por que CarzRental?">
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="info-porque">
                    <h2 class="titulo-seccion raya raya-izq">¿Por qué elegirnos?</h2>
                    <p class="mb-5">
                        Le ofrecemos la misma calidad de autos de las mejores compañías de alquiler en EEUU, a un mejor precio.<br>Además, nosotros estamos aquí 24/7 para ayudar con los asuntos relacionados a la reserva.<br>En CarzRental tendrá una
                        cobertura de seguro completa. Las coberturas LDW y LIS siempre están incluidas en nuestro precio.<br>También se incluye kilometraje ilimitado, para que pueda conducir sin preocuparse por los costos adicionales.
                    </p>
                    <a onclick="return gtag_report_conversion('#formulario-contacto');" href="#formulario-contacto" class="boton btn-primario mt-5">Alquilar</a>

                    <a class="slogan-ig" href="https://www.instagram.com/carz_rental" target="_blank">#MakeTripsBetter</a>
                </div>
            </div>
        </div>
    </div>

    <div class="ultimo-contacto">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="soporte foot-flex">
                        <h5>Soporte 24/7</h5>
                        <a onclick="return gtag_report_conversion('http://wa.me/17868208222');" href="http://wa.me/17868208222" target="_blank">
                            <i class="fab fa-lg	fa-whatsapp"></i> +1 (786) 820‑8222
                        </a>
                        <a onclick="return gtag_report_conversion('mailto:info@carzrental.com');" href="mailto:info@carzrental.com" target="_blank">
                            <i class="far fa-lg	fa-envelope"></i> info@carzrental.com
                        </a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="foot-flex logos">
                        <h5>¡Síguenos!</h5>
                        <a class="ml-0" href="https://www.facebook.com/CarzRental-104359937823737/" target="_blank">
                            <i class="fab fa-lg	fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/carz_rental" target="_blank">
                            <i class="fab fa-lg fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="pad-100">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 info-footer">
                    <h5 class="titulo-footer raya raya-footer">Sobre Nosotros</h5>
                    <img loading="lazy" src="../img/Logo_Carz_rental_blanco.png" alt="Carz Rental" style="height: 50px; margin-bottom:20px;">
                    <p>
                        El mejor precio para alquiler de autos en EEUU, para titulares de licencias de conducir extranjeras.
                    </p>
                    <div class="logos">
                        <a href="https://www.facebook.com/CarzRental-104359937823737/" target="_blank">
                            <i class="fab fa-lg fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/carz_rental" target="_blank">
                            <i class="fab fa-lg fa-instagram"></i>
                        </a>
                        <a onclick="return gtag_report_conversion('<?php echo $wpLink ?>');" href="<?php echo $wpLink ?>" target="_blank">
                            <i class="fab fa-lg fa-whatsapp"></i>
                        </a>
                        <a onclick="return gtag_report_conversion('mailto:info@carzrental.com');" href="mailto:info@carzrental.com">
                            <i class="fas fa-lg fa-envelope"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 info-footer">
                    <h5 class="titulo-footer raya raya-footer">Información</h5>
                    <ul class="secciones-footer">
                        <a href="#inicio">
                            <li>Inicio</li>
                        </a>
                        <a href="#autos">
                            <li>Nuestros autos</li>
                        </a>
                        <a href="#proceso">
                            <li>Reserve un auto en 3 pasos</li>
                        </a>
                        <a href="#opiniones">
                            <li>Opiniones</li>
                        </a>
                        <a onclick="return gtag_report_conversion('#inicio');" href="#inicio">
                            <li>Contacto</li>
                        </a>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 info-footer">
                    <h5 class="titulo-footer raya raya-footer">Soporte</h5>
                    <!-- <p>¿Necesita ayuda?</p> -->
                    <a onclick="return gtag_report_conversion('http://wa.me/17868208222');" href="http://wa.me/17868208222" class="un-link no-margin" target="_blank">
                        <p>¿Necesita ayuda? Haga clic aquí para chatear con un representante de atención al cliente a través de WhatsApp.</p>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 info-footer">
                    <h5 class="titulo-footer raya raya-footer">Legal</h5>
                    <a href="../Privacy-Policy-CarzRental.php" target="_blank" class="un-link no-margin">
                        Privacidad
                    </a><br>
                    <a href="../Cookies-CarzRental.php" target="_blank" class="un-link no-margin">
                        Cookies
                    </a><br>
                    <a href="../Terms-&-Conditions-CarzRental.php" target="_blank" class="un-link no-margin">
                       Términos y Condiciones
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <div class="barra-footer">
        <div class="container text-center info-copy">
            <p>Todos los derechos reservados CarzRental &copy; 2020</p>
            <p>
                Desarrollado por
                <a target="_blank" href="http://desarrollo.infinidad.com.ar/">
                    <img src="../img/infinidad-desarrollo.png" style="height:24px" alt="Desarrollado por Infinidad Desarrollo">
                </a>
            </p>
        </div>
    </div>

    <div class="globo-wpp">
        <a onclick="return gtag_report_conversion('<?php echo $wpLink ?>');" href="<?php echo $wpLink ?>" target="_blank">
            <img src="../img/whatsapp_logo.jpg" alt="Contactanos 24/7 - WhatsApp">
        </a>
    </div>
    
    <?php
    $date_now = date("Y-m-d");

    if ($date_now > '2021-10-31') {
        $imagen = null;
        if($date_now < '2021-11-04') {
            // Banner lunes
            $imagen = '2021-lunes.jpg';
        } else if ($date_now < '2021-11-06') {
            // Banner jueves
            $imagen = '2021-jueves.jpg';
        } else {
            $imagen = null;
        }
        
        if($imagen != null) { ?>
            <div class="modal fade" id="modalCyberMonday" tabindex="-1" role="dialog" aria-labelledby="modalCyberMondayTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 650px;">
                            <div class="modal-content" style="margin: 0 0 0 0; padding: 0 0 0 0; width: 99%;">
                                <div class="modal-body p-0">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="height: 0; position: relative; top: 10px; left: -10px;">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <a href="https://wa.link/w5lf0x" target="_blank">
                                        <img alt="CyberMonday 2021" src="./../img/<?php echo $imagen ?>" style="width: 100%; height: auto;" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
        }
    } ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin=" anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5389422148.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/airport-autocomplete-js@2.0.0/dist/index.browser.min.js"></script>
    <script type="text/javascript" src="../js/intlTelInput.min.js"></script>
    <script type="text/javascript" src="../js/utils.js"></script>
    <script type="text/javascript" src="../js/isValidNumber.js.ejs"></script>
    <script type="text/javascript" src="../js/app.js"></script>
    <script type="text/javascript" src="../js/func.js"></script>
    <?php require_once 'verificacion.php'; ?>
    
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#modalCyberMonday').modal('show');
        });
    </script>  
    
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '608436249735655');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=608436249735655&ev=PageView&noscript=1"
  /></noscript>
    <!-- End Facebook Pixel Code -->
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177085411-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177085411-1');
</script>
        <!-- MetriCool -->
    <script>function loadScript(a){var b=document.getElementsByTagName("head")[0],c=document.createElement("script");c.type="text/javascript",c.src="https://tracker.metricool.com/resources/be.js",c.onreadystatechange=a,c.onload=a,b.appendChild(c)}loadScript(function(){beTracker.t({hash:"f77d56374cca029b831d0d5247779ceb"})});</script>
</body>

</html>