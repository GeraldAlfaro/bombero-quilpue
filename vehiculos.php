<?php
/*
Template Name: Vehiculos
*/
?>
<?php get_header(); ?>

<main>
    <div class="historia-maquinarias">
            <div class="container mt-5">
                <h1>Historia de nuestra maquinaria</h1>
            </div>
            <section class="timeline">
                <ol>
                    <?php
                        // Configurar los argumentos para WP_Query
                        $args = array(
                            'category_name' => 'maquinaria-timeline',
                            'posts_per_page' => -1,
                        );
                        // Realizar la consulta
                        $query = new WP_Query($args);
                        // Comprobar si hay posts
                        if ($query->have_posts()):
                        // Iterar sobre los posts
                        while ($query->have_posts()):
                            $query->the_post(); ?>
                            <li>
                                <div>
                                    <time><?php the_title(); ?></time> 
                                    <article class="contenido">
                                        <?php the_content(); ?>
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid img-redondeada')); ?>
                                    </article>
                                </div>
                            </li>
                            <li></li>
                     <?php endwhile;
                        else: ?>
                        <p>No hay imágenes disponibles en este momento.</p>
                    <?php endif;

                    // Restaurar la consulta original
                    wp_reset_postdata();
                    ?>
                    </ol>
            </section>
    </div>
            
</main>


<?php get_footer(); ?>