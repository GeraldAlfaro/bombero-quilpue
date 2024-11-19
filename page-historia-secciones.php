<?php
/*
Template Name: Historia Secciones
*/
?>

<?php get_header(); ?>

<main>
    <div class="historia-secciones">
        <?php if (is_page('imagenes')): ?>
            <!-- Estructura específica para "Imágenes" -->
            <p>Contenido para Voluntarios.</p>
        <?php elseif (is_page('martires')): ?>
            <!-- Estructura específica para "Mártires" -->
            <section class="container martires-content">
                <h1 class="my-5">Mártires</h1>
                <div class="row">
                <?php
                // Configurar los argumentos para WP_Query
                $args = array(
                    'category_name' => 'martires',
                );
                // Realizar la consulta
                $query = new WP_Query($args);
                // Comprobar si hay posts
                if ($query->have_posts()):
                    // Iterar sobre los posts
                    while ($query->have_posts()):
                        $query->the_post(); ?>
                        <article class="col-lg-4 col-md-6 col-sm-12">
                          <div>
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                            <h4 class="my-2"><?php the_field("nombre") ?></h4>
                            <span><?php the_field("fallecimiento") ?></span>
                            <p class="my-3 parrafo-martires"> <?php the_field("detalles") ?>
                            <span><?php the_field("fuente") ?></span>
                            </p>
                            <button class="boton-martires">Leer más</button>
                          </div>
                        </article>

                    <?php endwhile;
                else: ?>
                    <p>No hay martires disponibles en este momento.</p>
                <?php endif;

                // Restaurar la consulta original
                wp_reset_postdata();
                ?>

                </div>
            </section>
        <?php elseif (is_page('museo-historico')): ?>
            <!-- Estructura específica para "Museo Histórico" -->
            <section class="bg-azul py-5">
                <div class="container">
                    <h1 class="text-light">Museo histórico</h1>
                </div>
            </section>
            <section class="container-fluid">
            <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
            </section>
        <?php elseif (is_page('hitos-historicos')): ?>
            <!-- Estructura específica para "Hitos Históricos" -->
            <p>Contenido para Centro Cultural.</p>
        <?php endif; ?>

        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>
