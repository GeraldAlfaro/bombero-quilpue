<?php
/*
Template Name: Nosotros Secciones
*/
?>

<?php get_header(); ?>

<main>
    <div class="secciones-nosotros">
        <!-- Condicionales -->
        <?php if (is_page('voluntarios-de-la-compania')): ?>
            <!-- Estructura específica para "Voluntarios de la Compañía" -->
            <p>Contenido para Voluntarios.</p>
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
    </div>
</main>

<?php get_footer(); ?>