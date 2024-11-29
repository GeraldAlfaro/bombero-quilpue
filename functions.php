<?php

// MOSTRAR MINIATURA
add_theme_support('post-thumbnails');

// MOSTRAR MENU EN WORDPRESS
add_theme_support('nav-menus');
register_nav_menus(array('menu' => __('menu')));
register_nav_menus(array('menu-footer' => __('menu-footer')));


add_theme_support('custom-logo', array(
  'height' => 300,
  'width' => 400,
  'flex-height' => true,
  'flex-width' => true,
  'header-text' => array('site-title', 'site-description'),
)
);


// ++++++++++++++++++ LINKEO CSS +++++++++++++++++++
function css_general()
{
  wp_enqueue_style(
    'css',
    get_parent_theme_file_uri('/css/estilos.css')
  );

}

add_action('wp_enqueue_scripts', 'css_general');

// ++++++++++++++++++ Fancybox +++++++++++++++++++

/* add_action('wp_enqueue_scripts', 'fancybox_js');

function fancybox_js()
{
  wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array(), '5.0', );
  ;
  wp_enqueue_script('fancybox_js');
}

add_action('wp_enqueue_scripts', 'fancybox_css');

function fancybox_css()
{
  wp_enqueue_style('fancybox_css', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css', array(), '5.0');
} */


function bomberojs_enqueue_style()
{
    wp_enqueue_script(
      'main',
      get_parent_theme_file_uri('js/main.js')
    );
    wp_enqueue_style(
      'cssfancybox',
      get_parent_theme_file_uri('assets/fancybox.css')
    );
    wp_enqueue_script(
      'jsfancybox',
      get_parent_theme_file_uri('assets/fancybox.umd.js')
    );
}
add_action('wp_enqueue_scripts', 'bomberojs_enqueue_style');

function martiresjs_enqueue() {
  if (is_page('martires')) {
    wp_enqueue_script('martires', get_template_directory_uri() . '/js/martires.js', array());
}
}

add_action('wp_enqueue_scripts', 'martiresjs_enqueue');

function timelinejs_enqueue() {
  if (is_page('hitos-historicos')) {
    wp_enqueue_script('timeline', get_template_directory_uri() . '/js/timeline.js', array());
}
}

add_action('wp_enqueue_scripts', 'timelinejs_enqueue');

function timelinemaquinariasjs_enqueue() {
  if (is_page('vehiculos')) {
    wp_enqueue_script('timeline', get_template_directory_uri() . '/js/timeline.js', array());
}
}

add_action('wp_enqueue_scripts', 'timelinemaquinariasjs_enqueue');

function voluntariosajaxjs_enqueue() {
  if (is_page('voluntarios-de-la-compania')) {
    wp_enqueue_script('voluntarios', get_template_directory_uri() . '/js/voluntarios.js', array());
}
}

add_action('wp_enqueue_scripts', 'voluntariosajaxjs_enqueue');


function cargar_posts_por_categoria() {
  // Obtener la categoría desde la solicitud AJAX
  $categoria = sanitize_text_field($_POST['categoria'] ?? '');
  $pagina = intval($_POST['pagina'] ?? 1); // Página actual (por defecto, 1)
  $search_query = sanitize_text_field($_POST['search'] ?? '');

  // Definir la consulta de posts
  $args = [
      'post_type' => 'post',
      'posts_per_page' => 16, // Número de posts por página
      'paged' => $pagina, // Página actual
      'category_name' => $categoria, // Categoría basada en el slug
      's' => $search_query // Agregar criterio de búsqueda
  ];

  $query = new WP_Query($args);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        ?>
        <article class="col-lg-3 col-sm-6 mb-4">
            <div class="post-voluntarios">
              <figure>
                <img class="voluntario" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <figcaption>
                  <div class="hr-voluntarios"><hr></div>
                  <h5><?php the_title(); ?></h5>
                  <?php the_content(); ?>
                </figcaption>
              </figure>
            </div>
          </article>
        <?php
    }

    // Paginación siempre dentro del resultado dinámico
    $total_pages = $query->max_num_pages;
    if ($total_pages > 1) {
        echo '<div class="pagination">';
        for ($i = 1; $i <= $total_pages; $i++) {
            echo '<button class="pagination-button ' . ($i === $pagina ? 'active-voluntarios' : '') . '" data-page="' . $i . '">' . $i . '</button>';
        }
        echo '</div>';
    }
} else {
    echo '<p>No hay posts disponibles en esta categoría.</p>';
}


  wp_reset_postdata();
  wp_die();
}
add_action('wp_ajax_cargar_posts_por_categoria', 'cargar_posts_por_categoria');
add_action('wp_ajax_nopriv_cargar_posts_por_categoria', 'cargar_posts_por_categoria');


function agregar_ajaxurl_js() {
  echo '<script type="text/javascript">
      var ajaxurl = "' . admin_url('admin-ajax.php') . '";
  </script>';
}
add_action('wp_head', 'agregar_ajaxurl_js');

?>