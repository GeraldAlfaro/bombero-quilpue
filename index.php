<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>


<main>
    
<div class="container-fluid">
    <div class="row banner-home">
        <div class="col-md-10 my-5 mx-auto">
            <div class="row">
                <div class="col-md-5">
                    <h4 class="text-light fw-bolder mb-3">Búsqueda y Selección de Talento de Liderazgo Comercial y Ejecutivo </h4>
                    <p class="text-light border-bottom pb-4">Descubre los servicios de Prosellers: analizamos, escogemos y formamos a tu equipo para alcanzar los resultados que tu empresa requiere.</p>
                    <a href="/reseller/soluciones" class="boton-banner">Conoce nuestros servicios</a>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/personas.png" alt="Personas felices dando la bienvenida" class="personas">
                </div>
            </div>
        </div>
    </div>

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

<div class="container-fluid">
    <!-- ------------------------------------------ TESTIMONIALES ---------------------------------------------- -->

    <div class="row testimonios d-flex justify-content-center justify-content-around">
        <div class="col-md-11 my-4">
            <h1 class="text-light text-center mb-3">Testimoniales</h1>
            <h3 class="text-light text-center">¿Tienes dudas? Pregúntale a nuestros clientes</h3>
            <div class="row d-flex justify-content-around">
                    <?php if (have_posts()): ?>
                    <?php query_posts("category_name=testimonio"); ?>
                    <?php while (have_posts()): the_post(); ?>
                        <div class="col-md-3 tarjeta-testimonio d-flex align-items-center flex-column text-center mt-5 ">

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

<div class="container-fluid">

    <!-- ------------------------------------------ SABER MÁS ---------------------------------------------- -->
    <div class="row saber-mas py-5 ">
        <div class="col-md-11 mx-auto my-4">
            <div class="row">
                <div class="col-md-5">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sabermas.png">

                </div>
                <div class="col-md-1"></div>
                    <div class="col-md-6 text-light ">
                        <h1 class="mb-5">¿Quieres saber más sobre nosotros?</h1>
                        <p class="mb-5">En Prosellers, nos especializamos en la identificación, atracción y selección de ejecutivos de alto nivel, con un enfoque particular en los perfiles comerciales que impulsan el crecimiento y la competitividad de las empresas. Nuestro equipo de headhunters expertos trabaja con un proceso riguroso y personalizado, diseñado para alinear las metas estratégicas de tu organización con el talento adecuado, asegurando resultados excepcionales.
                        Especialistas en Mando Medio y Talento Digital</p>
                        <a href="/reseller/nosotros" class="btn btn-primary my-5 pt-3" >Ver más</a>

                    </div>
            </div>

        </div>
    </div>
</div>

</main>

<?php get_footer(); ?>

