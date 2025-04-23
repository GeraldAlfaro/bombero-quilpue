<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title><?php bloginfo('name'); ?></title>
    
    <!-- ICONOS FOTS AWESOME -->
    <script src="https://kit.fontawesome.com/c0e79807e2.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>

</head>

<body>

<!-------------- Navbar ------------------>

<header>
    <div class="bg-azul">
        <div class="arriba-del-nav">
            <a href="<?php echo esc_url(home_url('home')); ?>"><img class="logo" src="<?php echo get_theme_file_uri("img/logo.png"); ?>" alt="logo"></a>
            <figure class="nombre-compania">
                <img class="logo-100" src="<?php echo get_theme_file_uri("img/logo-actualizado100.png"); ?>" alt="logo-100">
                <figcaption class="nombre-compañia-texto">
                    <h4>Conmemoración 100 años</h4>
                    <strong>Primera compañía de bomberos de Quilpué “Esteban Santic”</strong>
                </figcaption>
            </figure>
            <div class="main-menu-logo-section">
                    <img class="main-menu-icon" src="<?php echo get_theme_file_uri("img/ui.png") ?>" alt="responsive-navbar">
            </div>
            <a class="soap" href="https://www.soapbomberos.cl/yo-apoyo/1-compania-quilpue">Dona aquí!</a>
        </div>
    </div>
    <nav class="barra-nav">
        <ul id="main-menu-link-container">
            <img class="main-menu-close-icon" src="<?php echo get_theme_file_uri("img/close.png") ?>" alt="cerrar-navbar">
            <a class="link-nav" href="<?php echo esc_url(home_url('home')); ?>">
                <li>Inicio</li>
            </a>
            <a class="link-nav" href="<?php echo esc_url(home_url('historia')); ?>">
                <li>Historia</li>
            </a>
            <a class="link-nav" href="<?php echo esc_url(home_url('prevencion')); ?>">
                <li>Prevención</li>
            </a>
            <a class="link-nav" href="<?php echo esc_url(home_url('postulacion')); ?>">
                <li>Postulación</li>
            </a>
            <a class="link-nav" href="<?php echo esc_url(home_url('financiamiento')); ?>">
                <li>Financiamiento</li>
            </a>
            <a class="link-nav" href="<?php echo esc_url(home_url('vehiculos')); ?>">
                <li>Vehículos</li>
            </a>
            <a class="link-nav" href="<?php echo esc_url(home_url('nosotros')); ?>">
                <li>Nosotros</li>
            </a>
        </ul>
    </nav>
</header>