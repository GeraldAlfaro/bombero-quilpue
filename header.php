<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!-- ICONOS FOTS AWESOME -->
    <script src="https://kit.fontawesome.com/c0e79807e2.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>

</head>

<body>

<!-------------- Navbar ------------------>

<header>
    <div class="arriba-del-nav text-white">
        <img class="logo" src="<?php echo get_theme_file_uri("img/logo.png"); ?>" alt="logo">
        <figure class="nombre-compania">
            <img class="logo-100" src="<?php echo get_theme_file_uri("img/logo-100.png"); ?>" alt="logo-100">
            <figcaption class="nombre-compañia-texto">
                <h4>Conmemoración 100 años</h4>
                <strong>Primera compañía de bomberos de Quilpué “Esteban Santic”</strong>
            </figcaption>
        </figure>
        <a class="boton-nav" href="<?php echo esc_url(home_url('portafolio/')); ?>">Dona aquí!</a>
        <div class="main-menu-logo-section">
                <img class="main-menu-icon" src="<?php echo get_theme_file_uri("img/ui.png") ?>" alt="responsive-navbar">
        </div>
    </div>
    <nav class="barra-nav">
        <ul id="main-menu-link-container">
            <img class="main-menu-close-icon" src="<?php echo get_theme_file_uri("img/close.png") ?>" alt="cerrar-navbar">
            <a class="link-nav" href="<?php echo esc_url(home_url('portafolio/')); ?>">
                <li>Inicio</li>
            </a>
            <a class="link-nav" href="<?php echo esc_url(home_url('portafolio/')); ?>">
                <li>Historia</li>
            </a>
            <a class="link-nav" href="<?php echo esc_url(home_url('portafolio/')); ?>">
                <li>Prevención</li>
            </a>
            <a class="link-nav" href="<?php echo esc_url(home_url('portafolio/')); ?>">
                <li>Postulación</li>
            </a>
            <a class="link-nav" href="<?php echo esc_url(home_url('portafolio/')); ?>">
                <li>Financiamiento</li>
            </a>
            <a class="link-nav" href="<?php echo esc_url(home_url('portafolio/')); ?>">
                <li>Nosotros</li>
            </a>
        </ul>
    </nav>
</header>