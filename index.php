<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>


<main>
    <!-- ------------------ SMART SLIDER ----------------------- -->
<section class="container-fluid">
    <div class="row">
    <?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
    </div>
</section>

<section class="container seccion-emergencias ">
    <div class="row my-5">
        <span class="ultimas-emergencias">
            <svg width="50" height="35" viewBox="0 0 50 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect width="50" height="35" fill="url(#pattern0_3008_2671)"/>
            <defs>
            <pattern id="pattern0_3008_2671" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_3008_2671" transform="matrix(0.00251256 0 0 0.00358938 0 -0.000717875)"/>
            </pattern>
            <image id="image0_3008_2671" width="398" height="279" xlink:href="data:image/png;base64,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"/>
            </defs>
            </svg>
        Últimas emergencias
        </span>
        <div class="col-xxl-12 tarjeta-urgencias">
                    <?php if (have_posts()): ?>
                    <?php query_posts("category_name=urgencias&showposts=4"); ?>
                    <?php while (have_posts()): the_post(); ?>

                        <div class="row estructura-urgencias">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="https://x.com/primeraquilpue"><span><?php the_title(); ?></span></a>
                                    </div>
                                    
                                    <div class="col-lg-8">
                                        <figure>
                                            <span><?php the_time('F jS, Y'); ?></span>
                                            <a href="https://x.com/primeraquilpue"><i class="fa-brands fa-x-twitter"></i></a>

                                        </figure>
                                    </div>
                                </div>
                                <div class="row">
                                    <p><?php the_content(); ?></p>

                                </div>
                            </div>
                        </div>



                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>

        </div>

    </div>
</section>


</main>

<?php get_footer(); ?>

