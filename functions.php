<?php

// Hide wordpress version
remove_action("wp_head", "wp_generator");

// Remove Windows Live Writer
remove_action('wp_head', 'wlwmanifest_link');

// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_style( 'wp', get_template_directory_uri() . '/css/wp.css' );
}
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Set up the WordPress core custom background feature.
add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
  'default-color' => 'ffffff',
	'default-image' => '',
	) ) );

// Set up the WordPress core custom logo feature.
add_theme_support( 'custom-logo', array(
	'height'      => 60,
	'width'       => 100,
) );

// WordPress Titles
add_theme_support( 'title-tag' );

// Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// This theme uses wp_nav_menu().
register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
