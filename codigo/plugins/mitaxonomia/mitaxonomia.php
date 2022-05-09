<?php 
/*
* Plugin Name: Mi Taxonomía 
* Description: Taxonomía personalizada para libros 
*/
 
function mitaxonomia_customtax() {
	// _x(texto, contexto, domain) -> Retrieve translated string with gettext context.
	// __(texto, domain) -> traducción 
     $labels = array(
         'name'              => __( 'Categorías'),
         'singular_name'     => __( 'Categoría'),
         'search_items'      => __( 'Buscar libros por categoría' ),
         'all_items'         => __( 'Todas las categorías' ),
         'parent_item'       => __( 'Categoría padre' ),
         'parent_item_colon' => __( 'Categoría padre:' ),
         'edit_item'         => __( 'Editar categoría' ),
         'update_item'       => __( 'Actualizar categoría' ),
         'add_new_item'      => __( 'Agregar nueva categoría' ),
         'new_item_name'     => __( 'Nuevo nombre de categoría' ),
         'menu_name'         => __( 'Categorías de Libros' ),
     );
     $args   = array(
         'hierarchical'      => true, // make it hierarchical (like categories)
         'labels'            => $labels,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true,
         'rewrite'           => [ 'slug' => 'categoria-libros' ],
     );
     register_taxonomy( 'categorias_libros', [ 'libro' ], $args );
}
add_action( 'init', 'mitaxonomia_customtax' );
