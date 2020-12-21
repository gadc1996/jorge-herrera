<?php
    $estatus = $_POST["estatus"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $año = $_POST["año"];
    $version = $_POST["version"];
    $cobertura = $_POST["cobertura"];
    $mensaje = $_POST["mensaje"];

    $to ="jorge.herrera@oronaasesores.com.mx";
    $subject = "Nueva entrada de formulario";
    $body = "Estatus: ".$estatus."\r\n";
    $body .= "Marca: ".$marca."\r\n";
    $body .= "Modelo: ".$modelo."\r\n";
    $body .= "año: ".$año."\r\n";
    $body .= "version: ".$version."\r\n";
    $body .= "cobertura: ".$cobertura."\r\n";
    $body .= "Mensaje: ".$mensaje."\r\n";
    mail($to,$subject,$body);
    
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/1696329706.js" crossorigin="anonymous"></script>

    <!-- Primary Meta Tags -->
    <title>Jorge Herrera – Confirmación</title>
    <meta name="title" content="Jorge Herrera – Confirmación">
    <meta name="description" content="Encuentra el mejor seguro de autos al mejor precio">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.jorge-herrera.com.mx/">
    <meta property="og:title" content="Jorge Herrera – Asesor de seguros">
    <meta property="og:description" content="Encuentra el mejor seguro de autos al mejor precio">
    <meta property="og:image" content="">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://www.jorge-herrera.com.mx/">
    <meta property="twitter:title" content="Jorge Herrera – Asesor de seguros">
    <meta property="twitter:description" content="Encuentra el mejor seguro de autos al mejor      precio">
    <meta property="twitter:image" content="">
    <!---Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <link rel="manifest" href="img/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

    <body>
        <header>
            <div class="layer">
                <nav>
                    <div class="logo">
                        <h1>Jorge Herrera</h1>
                    </div>
                    <div class="nav-links">
                        <a href="#">Cotiza tu Seguro</a>
                        <a href="#">Contacto</a>
                    </div>
                </nav>
                <div class="thankyou">
                    <h2>¡Muchas gracias por contactarme!</h2>
                    <h3>Revisare cuidadosemente tu situación y me contactare en la brevedad posible </h3>
                    <p>Si el navegador no te redireccióna en 5 segundos has click <a href="index.html">aqui</a></p>
                </div>
            </div>
        </header>
        
        <footer id="footer">
        <!-- <div class="contact-box">
                <div class="contact-item">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="footer-contact">
                        <h3 class="footer-subtitle">Direccion</h3>
                        <p>6894 Glover Lake</p>
                    </div>
                </div>
            </div> -->
        <div class="contact-box">
            <div class="contact-item">
                <div class="icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="footer-contact">
                    <h3 class="footer-subtitle">Telefono</h3>
                    <a href="tel:6145101196">614-510-1196</a>
                </div>
            </div>
        </div>
        <div class="contact-box">
            <div class="contact-item">
                <div class="icon">
                    <i class="fas fa-share-alt"></i>
                </div>
                <div class="footer-contact">
                    <h3 class="footer-subtitle">Redes</h3>
                    <a href="https://www.facebook.com/search/top/?q=jorge%20herrera%20asesor"><i class="fab fa-facebook-f"></i></a><a href="https://www.instagram.com/jorgeherreraconsultor/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/redirect.js"></script>
    <script src="js/app.js"></script>
</body>

</html>