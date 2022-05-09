<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
wp_nav_menu(
	array(
		'theme_location'  => 'primary',
		'menu_class'      => 'menu-wrapper',
		'container_class' => 'primary-menu-container',
		'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
		'fallback_cb'     => false,
	)
);
?>
