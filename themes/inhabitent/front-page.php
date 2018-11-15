<?php
/**
 * The main template file.
 *
 * @package inhabitent_theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main home-page" role="main">

        <div class="hero-image hero-home">
            <div class="main-logo">
                <img src= <?php echo (get_template_directory_uri()) . "/source/logos/inhabitent-logo-full.svg"; ?>
                     alt = "Inhabitent Main Logo" />
            </div>
        </div>


        <section class="container">

            <h1>Shop Stuff</h1>

            <?php
            $terms = get_terms(array(
                'taxonomy' => 'product_type',
                'hide_empty' => 0,
            ));
            if (!empty($terms)) :
                ?>

                <div class="entry-container">

                    <?php foreach ($terms as $term) : ?>

                        <div class="entry-post product-category-entry">
                            <img src="<?php echo get_template_directory_uri() . '/source/images/product-type-icons/' . $term->slug; ?>.svg"
                                 alt="<?php echo $term->name; ?>"/>
                            <p><?php echo $term->description; ?></p>
                            <p><a href="<?php echo get_term_link($term); ?>" class="btn"><?php echo $term->name; ?>
                                    Stuff</a></p>
                        </div>

                    <?php endforeach; ?>

                </div>

            <?php endif; ?>

        </section><!-- product-info-container -->


        <h1>inhabitent journal</h1>
        <?php


        /*
         * Get the blog journal entries
         */

        $args = array('post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3);
        $journal_posts = get_posts($args); // returns an array of posts
        ?>
        <?php foreach ($journal_posts as $post) : setup_postdata($post); ?>
            <article class="entry-container journal-entry-container">
                <?php
                the_post_thumbnail('medium');

                ?>
                <span class="entry-meta">
                <?php
                red_starter_posted_on();
                echo ' / ';
                comments_number('0 Comments', '1 Comment', '% Comments');
                ?>
            </span>
                <a href="<?php echo get_the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
                <a class="read-more" href="<?php echo get_the_permalink(); ?>">
                    Read More

                </a>
            </article>
        <?php endforeach;
        wp_reset_postdata(); ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
