<?php
/**
 * Grounded Dating Starry Night theme functions and setup.
 */

function gdsn_enqueue_assets() {
    // Enqueue main stylesheet (style.css)
    wp_enqueue_style( 'gdsn-style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'gdsn_enqueue_assets' );

function gdsn_theme_setup() {
    // Add support for title tag so WordPress handles it
    add_theme_support( 'title-tag' );

    // Support for post thumbnails if needed later
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'gdsn_theme_setup' );
