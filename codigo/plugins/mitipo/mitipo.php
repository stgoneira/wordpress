<?php

/*
Plugin Name: Mi Tipo 
Description: Plugin con mis tipos personalizados para la capacitación 
*/

function mitipo_main() {
	
}

function mitipo_activacion() {
	// código de instalación aquí 
	// Trigger our function that registers the custom post type plugin.
    mitipo_tipos(); 
    // Clear the permalinks after the post type has been registered.
    flush_rewrite_rules(); 
}

register_activation_hook(__FILE__, 'mitipo_activacion');

function mitipo_desinstalar() {
	// código de desinstalación 
	// Unregister the post type, so the rules are no longer in memory.
    unregister_post_type( 'libro' );
    // Clear the permalinks to remove our post type's rules from the database.
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'mitipo_desinstalar');

function mitipo_tipos() {
	$svg = file_get_contents(__DIR__."/book-solid.svg");
	$svgEncoded = base64_encode($svg);	
	register_post_type('libro',
        array(
            'labels' 		=> array(
                'name'          => __('Libros', 'textdomain'),
                'singular_name' => __('Libro', 'textdomain'),
            ),
			'public'      	=> true,
			'has_archive' 	=> true,
			'rewrite' 		=> array( 'slug' => 'libros' ), 
			'menu_icon'		=> 'dashicons-book'
        )
    );
}
add_action('init', 'mitipo_tipos');
