<?php
/** Template Name: About Page */
get_header(); ?>
    <div id="primary" class="content-about">
        <main id="main" class="site-main" role="main">
            <div class="single-page-content">
                <?php while (have_posts()) :
                the_post(); ?>
            </div>

            <?php get_template_part('template-parts/content', 'page'); ?>

            <?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>