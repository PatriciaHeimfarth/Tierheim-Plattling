<?php
 
 
function load_google_fonts()
{
    wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Satisfy|Vollkorn');
    wp_enqueue_style('googleFonts');
}
add_action('wp_print_styles', 'load_google_fonts');

function add_normalize_CSS()
{
    wp_enqueue_style('normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}

function add_widget_Support()
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
}

add_action('widgets_init', 'add_Widget_Support');

function add_Main_Nav()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
// Hook to the init action hook, run our navigation menu function
add_action('init', 'add_Main_Nav');

add_theme_support('post-thumbnails');

/*custom post types*/
require_once('post_types/animal.php');
require_once('post_types/person.php');
require_once('post_types/missing.php');
