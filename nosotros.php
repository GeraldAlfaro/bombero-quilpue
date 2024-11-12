<?php
/*
Template Name: Nosotros
*/
?>

<?php get_header(); ?>

<main>
    <section class="bg-nosotros">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Nosotros</h1>
                    <p>La Primera compañía de bomberos de Quilpué nace un 8 de marzo de 1925. Cuenta con modernas unidades y un solido programa de preparación técnica.
                    Un grupo de vecinos quilpueínos, se reunieron en los salones del club “La Unión”, con un solo objetivo: fundar la Primera Compañía de Bomberos de Quilpué. Entre sus filas  se contaba con prestigiosos hombres como Don Esteban Santic y Don Lorenzo Lubet, entre otros; vecinos que se entregaron en cuerpo y alma, al desarrollo de esta compañía.</p>
                </div>
                <div class="col-md-4">
                    <a class="boton-nosotros" href=""><img class="icono-boton me-3" src="<?php echo get_theme_file_uri("img/phone.png") ?>" alt="icono telefono">(32) 291 0029</a>
                    <a class="boton-nosotros mt-3" href=""><img class="icono-boton me-3" src="<?php echo get_theme_file_uri("img/location.png") ?>" alt="icono location">Ubicación</a>
                </div>
            </div>
        </div>
    </section>
    <section class="nosotros-links">
        <div class="container">
            <div class="row">
                <a href="<?php echo get_permalink(get_page_by_path('nosotros/voluntarios-de-la-compania')); ?>" class="col-md-3 border-voluntario espaciado-responsive">
                        <img class="link-nosotros-normal" src="<?php echo get_theme_file_uri("img/nosotros-voluntarios-azul.png") ?>" alt="voluntarios azul">
                        <img class="link-nosotros-hover" src="<?php echo get_theme_file_uri("img/nosotros-voluntarios-rojo.png") ?>" alt="voluntarios rojo">
                        <img class="link-nosotros-active" src="<?php echo get_theme_file_uri("img/nosotros-voluntarios-blanco.png") ?>" alt="voluntarios-blanco">
                        <h3 class="mt-3">Voluntarios de la Compañía</h3>
                </a>
                <a href="<?php echo get_permalink(get_page_by_path('nosotros/brigada-juvenil')); ?>" class="col-md-3">
                        <img class="link-nosotros-normal espaciado-responsive" src="<?php echo get_theme_file_uri("img/nosotros-brigada-azul.png") ?>" alt="brigada juvenil azul">
                        <img class="link-nosotros-hover" src="<?php echo get_theme_file_uri("img/nosotros-brigada-rojo.png") ?>" alt="brigada juvenil rojo">
                        <img class="link-nosotros-active" src="<?php echo get_theme_file_uri("img/nosotros-brigada-blanco.png") ?>" alt="brigada juvenil blanco">
                        <h3 class="mt-3">Brigada Juvenil</h3>
                </a>
                <a href="<?php echo get_permalink(get_page_by_path('nosotros/casino-la-primera')); ?>" class="col-md-3">
                        <img class="link-nosotros-normal espaciado-responsive" src="<?php echo get_theme_file_uri("img/nosotros-casino-azul.png") ?>" alt="casino azul">
                        <img class="link-nosotros-hover" src="<?php echo get_theme_file_uri("img/nosotros-casino-rojo.png") ?>" alt="casino rojo">
                        <img class="link-nosotros-active" src="<?php echo get_theme_file_uri("img/nosotros-casino-blanco.png") ?>" alt="casino blanco">
                        <h3 class="mt-3">Casino “La Primera”</h3>
                </a>
                <a href="<?php echo get_permalink(get_page_by_path('nosotros/centro-cultural')); ?>" class="col-md-3 border-centro">
                        <img class="link-nosotros-normal" src="<?php echo get_theme_file_uri("img/nosotros-centro-azul.png") ?>" alt="centro azul">
                        <img class="link-nosotros-hover" src="<?php echo get_theme_file_uri("img/nosotros-centro-rojo.png") ?>" alt="centro rojo">
                        <img class="link-nosotros-active" src="<?php echo get_theme_file_uri("img/nosotros-centro-blanco.png") ?>" alt="centro blanco">
                        <h3 class="mt-3">Centro Cultural</h3>
                </a>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>