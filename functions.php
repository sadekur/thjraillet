<?php
if ( ! function_exists( 'thraillet_theme_support' ) ) :
	function thraillet_theme_support() {
        add_theme_support( 'wp-block-styles' );
        add_editor_style( 'style.css' );
    }
endif;
add_action( 'after_setup_theme', 'thraillet_theme_support' );

// Enqueue scripts and styles
if ( ! function_exists( 'thraillet_enqueue_styles' ) ) :
function thraillet_enqueue_styles() {
    wp_enqueue_style( 'thraillet-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'thraillet-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css' );
}
endif;
add_action( 'wp_enqueue_scripts', 'thraillet_enqueue_styles' );