<?php
/*
Template Name: Historia
*/
?>
<?php get_header(); ?>

<main>
    <section class="container">
    <h1 class="my-5">Historia</h1>
        <div class="row">
            <div class="col-xxl-3 col-xl-6 col-md-6">
                <a href="<?php echo get_permalink(get_page_by_path('historia/imagenes')); ?>" class="links-historia imagenes-bg">
                    <img src="<?php echo get_theme_file_uri("img/img-icon.png"); ?>" alt="imagenes">
                    <h2>Imágenes</h2>
                    <p>Banco de imágenes de la historia de La Primera Compañia de Bomberos de Quilpué.</p>
                </a>
            </div>
            <div class="col-xxl-3 col-xl-6 col-md-6">
                <a href="" class="links-historia martires-bg">
                    <img src="<?php echo get_theme_file_uri("img/martir-icon.png"); ?>" alt="martires">
                    <h2>Mártires</h2>
                    <p>Un mártir bombero es un bombero que ha fallecido mientras cumplía con su deber bomberil.</p>
                </a>
            </div>
            <div class="col-xxl-3 col-xl-6 col-md-6">
                <a href="" class="links-historia museo-bg">
                    <img src="<?php echo get_theme_file_uri("img/museo-icon.png"); ?>" alt="museo historico">
                    <h2>Museo histórico</h2>
                    <p>Museo de la historia de la primera compañía de Quilpué, que se encuentra en este mismo cuartel.</p>
                </a>
            </div>
            <div class="col-xxl-3 col-xl-6 col-md-6">
                <a href="" class="links-historia hitos-bg">
                    <img src="<?php echo get_theme_file_uri("img/img-icon.png"); ?>" alt="hitos historicos">
                    <h2>Hitos históricos</h2>
                    <p>Hechos que marcaron la historia de la compañía desde sus inicios hasta el día de hoy.</p>
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>