<?php


// Style & Scripts

function trainmybrain_resources() {

	wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0');
	wp_enqueue_script('jquery');
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
	wp_enqueue_script('cycle2', get_template_directory_uri() . '/js/cycle2.js');

}

add_action('wp_enqueue_scripts', 'trainmybrain_resources');


// title tag
add_theme_support( 'title-tag' );



// Navigation Menus
register_nav_menus(array(
'primary' => __( 'Primary Menu'),
));

// Featured images

add_theme_support( 'post-thumbnails' );
add_image_size( 'square-thumbnail', 400, 400, true );
add_image_size( 'blog-banner', 2000, 800, true );



?>