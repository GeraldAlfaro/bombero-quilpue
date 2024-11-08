<?php
/*
Template Name: Historia
*/
?>
<?php get_header(); ?>

<main>
<div class="container-fluid">
    <div class="row banner-nosotros">
        <div class="col-md-10 my-5 mx-auto d-flex justify-content-center flex-column align-items-center">
            <div class="row ">
                <div class="col-md-8 mx-auto ">
                    <h1 class="text-light fw-bolder mb-3">¡Conocenos!</h1>
                    <h4 class="text-light pb-4">“Queremos que en cada puesto haya una mejor persona”</h4>
                </div>

            </div>
        </div>
    </div>
</div>
    <!-- ------------------------------------------ CONOCENOS ---------------------------------------------- -->

<div class="container-fluid">
        <div class="row conocenos">
            <section>
                <div class="col-md-11 mx-auto my-3">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sabermas.png">

                        </div>
                        <div class="col-md-4">
                            <h3>¿Qué nos inspira?</h3>
                            <p>Ser un referente fundamental en la gestión de personas e impactar en el desarrollo y evolución de las empresas en Chile.</p>
                            <br>
                            <p>En Prosellers ayudamos a nuestros clientes a mejorar los procesos de recursos humanos a través de nuestra experiencia.</p>

                        </div>
                        <div class="col-md-4">
                            <h3>¿Por Qué Elegirnos?</h3>
                            <p>En Prosellers, no solo te ofrecemos herramientas prácticas, sino también el apoyo emocional necesario durante este período de transición.</p>
                            <br>
                            <p>Nos comprometemos a tu éxito y estamos aquí para ayudarte a alcanzar tus metas profesionales con confianza y determinación</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
</div>

<div class="container-fluid">

    <!-- ------------------------------------------ SERVICIOS ---------------------------------------------- -->

    <div class="row servicios">
        <div class="col-md-10 my-4 mx-auto">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="text-center">
                        <h2 class="mb-4 mt-5">Somos tu aliado en agilizar cada paso</h2>
                        <p class="mb-5">Conoce nuestros servicios y soluciones diseñados para impulsar el crecimiento de tu negocio y llevarlo al siguiente nivel. En nuestra agencia, entendemos que cada proyecto es único, por lo que ofrecemos un enfoque personalizado que se adapta a tus necesidades específicas.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center justify-content-around">
                <div class="col-md-5 contacto-cuadradro1">
                    <div class="fondo-azul ">
                        <a href="/reseller/contacto-empresas-2" class="boton-contacto">Contacto empresarial</a>
                    </div>
                </div>
                <div class="col-md-5 contacto-cuadradro2">
                    <div class="fondo-azul">
                        <a href="/reseller/contacto-personas" class="boton-contacto">Contacto personas</a>

                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center justify-content-around">
                    <?php if (have_posts()): ?>
                    <?php query_posts("category_name=soluciones"); ?>
                    <?php while (have_posts()): the_post(); ?>

                        <div class="col-md-5 tarjeta-solucion">
                            <a href="/reseller/soluciones">
                                <div class="row">
                                    <div class="col-md-2">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?> 

                                    </div>
                                    <div class="col-md-5">
                                        <h4 class="mt-2"><?php the_title(); ?></h4>
                                    </div>
                                    <div class="col-md-3"></div>

                                </div>
                                <div class="row">
                                    <div class="col-md-9 mt-3">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </a>

                        </div>

                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container-fluid">
        <!-- ------------------------------------------ TESTIMONIALES ---------------------------------------------- -->

        <div class="row testimonios d-flex justify-content-center justify-content-around">
            <div class="col-md-11 my-4">
                <h1 class="text-light text-center mb-3">Testimoniales</h1>
                <h3 class="text-light text-center">¿Tienes dudas? Pregúntale a nuestros clientes</h3>
                <div class="row d-flex justify-content-between">
                        <?php if (have_posts()): ?>
                        <?php query_posts("category_name=testimonio"); ?>
                        <?php while (have_posts()): the_post(); ?>
                            <div class="col-md-3 tarjeta-testimonio d-flex align-items-center flex-column text-center mt-5 mx-auto">

                                <?php the_post_thumbnail('full', array('class' => 'testimonio-imagen')); ?>
                                <h4><?php the_title(); ?></h4>
                                <?php the_field('subtitulo-testimonio'); ?>
                                <p><?php the_field('estrella-testimonio'); ?></p>
                                <p><?php the_content(); ?></p>
                                <a href="<?php the_field('link-testimonio'); ?>"><?php the_field('nombre-testimonio'); ?></a>

                            </div> 
                        <?php endwhile; ?>
                        <?php else: ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
    
                </div>
            </div>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>