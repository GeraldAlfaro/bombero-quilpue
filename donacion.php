<!-- Conectar pagina de wordpress con una pagina template de php ++++++++++++++++++ -->
<?php
/*
Template Name: Donación
*/
?>


<?php get_header(); ?>

<main>
    <section class="container">
        <h1 class="mb-3 mt-5">Medios de donar</h1>
        <p class="mb-5">Selecciona la opción que más te acomoda para donar, desde ya te agracedemos, porque con tu aporte nos ayudarás a combatir más emergencias y de mejor manera.</p>
        <div class="row">
            <div class="col-xxl-4 col-xl-6 col-md-6">
                <a href="<?php echo get_permalink(get_page_by_path('donar/imagenes')); ?>" class="links-historia socio-bg">
                    <img src="<?php echo get_theme_file_uri("img/donacion-icono1.png"); ?>" alt="imagenes">
                    <h2>Hazte socio</h2>
                    <p>Podrás realizar aporte de manera mensual si realizas tu suscripción.</p>
                </a>
            </div>
            <div class="col-xxl-4 col-xl-6 col-md-6 ">
                <a href="<?php echo get_permalink(get_page_by_path('donar/martires')); ?>" class="links-historia donacion-bg">
                    <img src="<?php echo get_theme_file_uri("img/donacion-icono2.png"); ?>" alt="martires">
                    <h2>Donación única</h2>
                    <p>Podrás realizar aporte monetario de manera rápida.</p>
                </a>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>