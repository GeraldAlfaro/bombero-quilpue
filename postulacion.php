<!-- Conectar pagina de wordpress con una pagina template de php ++++++++++++++++++ -->
<?php
/*
Template Name: Postulación
*/
?>


<?php get_header(); ?>

<main>
    <section class="container-fluid mb-5">

        <div class="row banner-contacto">
            <div class="col-md-10 my-5 mx-auto d-flex justify-content-center flex-column align-items-center">
                <div class="row ">
                    <div class="col-md-12 mx-auto ">
                        <h1 class="text-light fw-bolder mb-3">Contacto Personas</h1>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <section class="container py-5">
        <div class="row pb-5">
            <div class="col-md-2 my-auto">
                <hr class="border-2 opacity-100">
            </div>
            <div class="col-md-8">
                <h3 class="text-center">Contacta con nosotros, te ayudaremos a responder cualquier duda que tengas</h3>
            </div>
            <div class="col-md-2 my-auto">
                <hr class="border-2 opacity-100">
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-5 col-md-12 contacto">
                        <h2 class="fw-bolder mb-3">Contáctanos hoy</h2>
                        <p class="pb-5 border-bottom">Accede a oportunidades profesionales de alto nivel y amplía tu horizonte laboral con empresas líderes en el mercado. Regístrate ahora para explorar nuevas oportunidades y avanzar en tu carrera hacia el éxito.</p>
                        <h2 class="fw-bolder mb-3">¿Necesitas ayuda?</h2>
                            <?php if (have_posts()): ?>
                            <?php query_posts("category_name=contacto"); ?>
                            <?php while (have_posts()): the_post(); ?>

                                <p><?php the_content(); ?></p>
                                <p><?php the_field('correo-contacto'); ?></p>
                                <a href="<?php the_field('link-instagram'); ?>"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a><a href="<?php the_field('link-linkedin'); ?>"><i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i></a>

                            <?php endwhile; ?>
                            <?php else: ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>

                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-lg-6 col-md-12 margen-break-sm fondo-contacto ">
                        <div class="formulario-contacto">

                            <h2 class="mb-5 text-center">Formulario de contacto</h2>
                            <?php echo do_shortcode('[fluentform id="3"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6658.766601586628!2d-70.648687!3d-33.439319!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5a3ce6d6bf3%3A0xeb51974a4c874c2d!2sHu%C3%A9rfanos%20835%2C%20901%2C%208320176%20Santiago%2C%20Regi%C3%B3n%20Metropolitana%2C%20Chile!5e0!3m2!1ses-419!2sus!4v1730135075255!5m2!1ses-419!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</main>

<?php get_footer(); ?>