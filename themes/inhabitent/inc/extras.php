<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes($classes)
{
    // Adds a class of group-blog to blogs with more than 1 published author.
    if (is_multi_author()) {
        $classes[] = 'group-blog';
    }

    return $classes;
}

add_filter('body_class', 'red_starter_body_classes');


// TODO Modify to header and url


function filter_login_headerurl($login_header_url)
{
    $login_header_url = "http://localhost:8888/inhabitent/wordpress/";
    return $login_header_url;
}

;

// add the filter
add_filter('login_headerurl', 'filter_login_headerurl', 10, 1);


// Custom Background
function custom_login()
{
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/customlogin.css" />';
}

add_action('login_head', 'custom_login');


// Custom Logo
function inhabitent_login_logo()
{
    echo '<style type="text/css">                                                                   
         h1 a { background-image:url(' . get_stylesheet_directory_uri() . '/source/logos/inhabitent-logo-text-dark.svg) !important; 
          width: 410px !important; background-size: 100% !important; margin-left: -60px !important; }                            
     </style>';
}

add_action('login_head', 'inhabitent_login_logo');


/*
 * Custom Hero Image for the About Page
 */

function inhabitent_dynamic_css()
{
    if (!is_page_template('about.php')) {
        return;
    }

    $image = CFS()->get('about_header_image');

    if (!$image) {
        $hero_css = ".page-template-about .entry-header {
            background: grey;
            color: white;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }";
    } else {
        $hero_css = ".page-template-about .entry-header {
            background: grey;
            background: linear-gradient(to bottom, rgba(0,0,0, 0.4) 0%, rgba(0,0,0, 0.4) 100%), url({$image}) no-repeat center bottom;
            background-size: cover; 
            width: 100%;
            color: white;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }";

    }
    wp_add_inline_style('inhabitent-style', $hero_css);
}


add_action('wp_enqueue_scripts', 'inhabitent_dynamic_css');




