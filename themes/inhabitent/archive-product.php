<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

    <div id="primary" class="content-area container">
        <main id="main" class="site-main" role="main">

            <!-- Product terms -->
            <header id="primary" class="entry-header products-heading">
                <h1>shop stuff</h1>
                <?php
                $terms = get_terms(array(
                    'taxonomy' => 'product_type',
                    'hide_empty' => 0,
                ));
                if (!empty($terms)) :
                    ?>

                    <ul class="main-navigation products-navigation">
                        <?php foreach ($terms as $term) : ?>

                            <li>
                                <p>
                                    <a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
                                </p>
                            </li>

                        <?php endforeach; ?>

                    </ul>

                <?php endif; ?>

            </header>


            <?php /* Start the Loop */ ?>
            <div class="entry-container">
                <?php while (have_posts()) :
                    the_post(); ?>

                    <div class="entry-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                        <div class="entry-thumbnail"
                             style="background-image: url(<?php the_post_thumbnail_url(); ?>) ">
                            <a href= <?php the_permalink(); ?>></a>

                        </div>

                        <div class="entry-info product-info">
                            <span><?php the_title(); ?></span>
                            <span class="aligncenter">&nbsp;</span>
                            <span><?php echo "\$" . CFS()->get('price'); ?></span>
                        </div>

                    </div><!-- #post-## -->

                <?php endwhile; ?>


            </div> <!--page-articles-products-->

        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>