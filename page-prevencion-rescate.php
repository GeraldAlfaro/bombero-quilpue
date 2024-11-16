<?php
/* Template Name: Prevencion Rescate */
get_header();
?>

<div class="nosotros-seccion">
    <h1><?php the_title(); ?></h1>
    <div class="custom-content">
        <?php if (is_page('incendio')): ?>
            <!-- Estructura específica para "Icendio" -->
            










            
        <?php elseif (is_page('brigada-juvenil')): ?>
            <!-- Estructura específica para "Brigada Juvenil" -->
            <p>Contenido para Brigada Juvenil.</p>
        <?php elseif (is_page('casino-la-primera')): ?>
            <!-- Estructura específica para "Casino La Primera" -->
            <p>Contenido para Casino La Primera.</p>
        <?php elseif (is_page('centro-cultural')): ?>
            <!-- Estructura específica para "Centro Cultural" -->
            <p>Contenido para Centro Cultural.</p>
        <?php endif; ?>

        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
