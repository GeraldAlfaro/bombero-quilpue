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
            <section class="bg-voluntarios">
                <div class="container">
                    <h1 class="text-light">Banco de imágenes</h1>
                </div>
            </section>
            <section class="container my-5 banco-imagenes">
                <?php
                    // Configurar los argumentos para WP_Query
                    $args = array(
                        'category_name' => 'banco-imagenes',
                        'paged' => $paged,
                        'posts_per_page' => 8,
                    );
                    // Realizar la consulta
                    $query = new WP_Query($args);
                    // Comprobar si hay posts
                    if ($query->have_posts()):
                    // Iterar sobre los posts
                    while ($query->have_posts()):
                        $query->the_post(); ?>
                    <h2 class="mb-5"><?php the_title(); ?></h2>
                    <div class="row">
                                <div class="col-lg-4 col-md-6 columnas-imagenes">
                                        <?php $image = get_field('imagen_1');
                                        if (!empty($image)): ?>
                                        <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                                            data-caption="<?php the_field("detalles_imagen_1") ?>">
                                                <div class="overlay">
                                                    <img class="imagenes-del-banco" src="<?php echo esc_url($image['url']); ?>"
                                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                                                </div>
                                        <?php endif; ?>
                                        <p class="text-light"><?php the_field("detalles_imagen_1") ?></p>
                                        </a>
                                </div>
                                <div class="col-lg-5 col-md-6 columnas-imagenes">
                                    <?php $image = get_field('imagen_2');
                                    if (!empty($image)): ?>
                                    <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                                    data-caption="<?php the_field("detalles_imagen_2") ?>">
                                    <div class="overlay">
                                        <img class="imagenes-del-banco" src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </div>
                                    <?php endif; ?>
                                    <p class="text-light"><?php the_field("detalles_imagen_2") ?></p>
                                    </a>

                                    <?php $image = get_field('imagen_4');
                                    if (!empty($image)): ?>
                                    <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                                    data-caption="<?php the_field("detalles_imagen_4") ?>">
                                    <div class="overlay">
                                        <img class=" imagenes-del-banco" src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </div>
                                    <?php endif; ?>
                                    <p class="text-light"><?php the_field("detalles_imagen_4") ?></p>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-12 columnas-imagenes">
                                    <?php $image = get_field('imagen_3');
                                    if (!empty($image)): ?>
                                    <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                                    data-caption="<?php the_field("detalles_imagen_3") ?>">
                                    <div class="overlay">
                                        <img class=" imagenes-del-banco" src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </div>
                                    <?php endif; ?>
                                    <p class="text-light"><?php the_field("detalles_imagen_3") ?></p>
                                    </a>

                                    <?php $image = get_field('imagen_5');
                                    if (!empty($image)): ?>
                                    <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                                    data-caption="<?php the_field("detalles_imagen_5") ?>">
                                    <div class="overlay">
                                        <img class="imagenes-del-banco" src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </div>
                                    <?php endif; ?>
                                    <p class="text-light"><?php the_field("detalles_imagen_5") ?></p>
                                    </a>
                                </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4 columnas-imagenes">
                            <?php $image = get_field('imagen_6');
                            if (!empty($image)): ?>
                            <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                            data-caption="<?php the_field("detalles_imagen_6") ?>">
                            <div class="overlay">
                                <img class="imagenes-del-banco" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                            <?php endif; ?>
                            <p class="text-light"><?php the_field("detalles_imagen_6") ?></p>
                            </a>
                        </div>
                        <div class="col-md-4 columnas-imagenes">
                            <?php $image = get_field('imagen_7');
                            if (!empty($image)): ?>
                            <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                            data-caption="<?php the_field("detalles_imagen_7") ?>">
                            <div class="overlay">
                                <img class="imagenes-del-banco" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                            <?php endif; ?>
                            <p class="text-light"><?php the_field("detalles_imagen_7") ?></p>
                            </a>
                        </div>
                        <div class="col-md-4 columnas-imagenes">
                            <?php $image = get_field('imagen_8');
                            if (!empty($image)): ?>
                            <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                            data-caption="<?php the_field("detalles_imagen_8") ?>">
                            <div class="overlay">
                                <img class="imagenes-del-banco" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                            <?php endif; ?>
                            <p class="text-light"><?php the_field("detalles_imagen_8") ?></p>
                            </a>
                        </div>
                    </div>
                <?php endwhile;
                    else: ?>
                    <p>No hay imágenes disponibles en este momento.</p>
                <?php endif;

                // Restaurar la consulta original
                wp_reset_postdata();
                ?>
            </section>
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
