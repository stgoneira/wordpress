<?php 

if ( ! function_exists( 'tb_clasico_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function tb_clasico_setup() {
 
 	$my_theme_name = 'tb_clasico';
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( $my_theme_name, get_template_directory() . '/languages' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', $my_theme_name ),
        'secondary' => __('Secondary Menu', $my_theme_name )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'tb_clasico_setup' );
