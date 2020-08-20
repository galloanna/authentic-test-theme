<?php

//Load styles + scripts
function load(){
    wp_enqueue_script('jquery');

    wp_register_style('styles', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
    wp_enqueue_style('styles');

    wp_register_style('AOS-styles', get_template_directory_uri() . '/node_modules/aos/dist/aos.css', false, null);
    wp_enqueue_style('AOS-styles');

    wp_register_script('AOS-scripts', get_template_directory_uri() . '/node_modules/aos/dist/aos.js', false, null, true);
    wp_enqueue_script('AOS-scripts');

    wp_register_script('scripts', get_template_directory_uri() . '/dist/app.js', ['jquery','AOS-scripts'], 1, true);
    wp_enqueue_script('scripts');

}
add_action('wp_enqueue_scripts','load');


//Theme support options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');

//Menus
register_nav_menus(
    array(
        'top-nav' => 'Top Navigation',
    )
);

//Custom image sizes
add_image_size( 'blog-image', 740, 417, true );
add_image_size( 'food-image', 500, 300, true );

//Restrict excerpt length
function blog_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'blog_excerpt_length', 999 );

//Custom posts
function custom_food_post()
{

 $args = array(
    'labels' => array (
        'name' => 'Foods',
        'singular_name' => 'Food',
    ),
    'hierarchical' => 'true',
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-beer',
    'supports' => array('title', 'editor', 'thumbnail')
 );
 register_post_type('foods', $args);
}
add_action('init', 'custom_food_post');