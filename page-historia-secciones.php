<?php
/*
Template Name: Historia Secciones
*/
?>

<?php get_header(); ?>

<main>
    <div class="historia-secciones">
        <?php if (is_page('imagenes')): ?>
            <!-- Estructura específica para "Voluntarios de la Compañía" -->
            <p>Contenido para Voluntarios.</p>
        <?php elseif (is_page('martires')): ?>
            <!-- Estructura específica para "Brigada Juvenil" -->
            <p>Contenido para Brigada Juvenil.</p>
        <?php elseif (is_page('museo-historico')): ?>
            <!-- Estructura específica para "Casino La Primera" -->
            <p>Contenido para Casino La Primera.</p>
        <?php elseif (is_page('hitos-historicos')): ?>
            <!-- Estructura específica para "Centro Cultural" -->
            <p>Contenido para Centro Cultural.</p>
        <?php endif; ?>

        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>
