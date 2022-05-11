<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook.
 */
function tb_bloques_setup() {
	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );
	// Enqueue editor styles.
	add_editor_style( 'editor-style.css' );	
}
add_action( 'after_setup_theme', 'tb_bloques_setup' );

function tb_bloques_estilos() {
	// agrega style.css 
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'tb_bloques_estilos' );

