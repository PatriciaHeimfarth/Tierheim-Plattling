<?php

function reg_scripts()
{
    wp_register_script('custom_js', get_template_directory_uri() . '/js/jquery.custom.js', array('jquery'), '1.0', TRUE);
    wp_register_script('validation', 'http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js', array('jquery'));
}
add_action('wp_loaded', 'reg_scripts');

function admin_enq()
{
    wp_enqueue_script('custom_js');
    wp_enqueue_script('validation');
}

add_action( 'admin_enqueue_scripts', 'admin_enq' );





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
