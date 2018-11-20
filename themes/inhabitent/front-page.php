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


        <?php

        $args = array('post_type' => 'post', 'order' => 'DES', 'posts_per_page' => 3);
        $journal_posts = get_posts($args); // returns an array of posts
        ?>

        <h1>inhabitent journal</h1>
        <section class="entry-container journal-entry-container">
            <?php foreach ($journal_posts

                           as $post) :
                setup_postdata($post); ?>
                <div class="entry-post journal-post">
                    <div class="entry-thumbnail" style="background-image: url(<?php the_post_thumbnail_url(); ?>) ">
                    </div>
                    <div class="entry-info">
                        <p>
                            <?php
                            the_date();
                            echo " / ";
                            comments_number('0 Comments');
                            ?>
                        </p>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <a href="<?php the_permalink(); ?>" class="btn inverse-btn">Read entry</a>
                    </div>
                </div>
            <?php endforeach;
            wp_reset_postdata(); ?>
        </section>
        <section class="adventure">
            <h2>latest adventures</h2>
            <ul>
                <li class="canoe">
                    <div class="adventure-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/source/images/adventure-photos/canoe-girl.jpg"
                             alt="canoe"/>
                    </div>
                    <div class="adventure-time">
                        <h3 class="adventure-text">Getting Back to Nature in a Canoe</h3>
                    </div>
                    <a class="adventure-button" href="readmore">Read More</a>
                </li>
                <li class="night">
                    <div class="adventure-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/source/images/adventure-photos/beach-bonfire.jpg"
                             alt="beach"/>
                    </div>
                    <div class="adventure-time">
                        <h3 class="adventure-text">A Night with Friends at the Beach</h3>
                    </div>
                    <a class="adventure-button" href="readmore">Read More</a>
                </li>
                <li class="mountain">
                    <div class="adventure-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/source/images/adventure-photos/mountain-hikers.jpg"
                             alt="hikers"/>
                    </div>
                    <div class="adventure-time">
                        <h3 class="adventure-text">Taking in the View at Big Mountain</h3>
                    </div>
                    <a class="adventure-button" href="readmore">Read More</a>
                </li>
                <li class="stars">
                    <div class="adventure-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/source/images/adventure-photos/night-sky.jpg"
                             alt="stars"/>
                    </div>
                    <div class="adventure-time">
                        <h3 class="adventure-text">Star-Gazing at the Night Sky</h3>
                    </div>
                    <a class="adventure-button" href="readmore">Read More</a>
                </li>
            </ul>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
