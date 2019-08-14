<?php
// carregando folha de estilo e script
function load_scripts()
{
	// CSS
	wp_enqueue_style('normalize', get_template_directory_uri() . '/src/css/normalize.css', array(), '1.0.0', 'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/src/css/animate.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/src/css/bootstrap.css', array(), '4.3.1', 'all');
	wp_enqueue_style('plugins', get_template_directory_uri() . '/src/css/plugins.css', array(), '1.0.0', 'all');
	wp_enqueue_style('stylesheet-blog', get_template_directory_uri() . '/src/css/stylesheet-blog.css', array(), '1.0.0', 'all');
	wp_enqueue_style('stylesheet-single', get_template_directory_uri() . '/src/css/stylesheet-single-page.css', array(), '1.0.0', 'all');
	// JS
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/src/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
	wp_enqueue_script('goTo', get_template_directory_uri() . '/src/js/wow.min.js', array(), '1.0.0', true);
	wp_enqueue_script('wowInit', get_template_directory_uri() . '/src/js/wowInit.js', array(), '1.0.0', true);
	wp_enqueue_script('menu', get_template_directory_uri() . '/src/js/menu.js', array('jquery'), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Menu
function wpcurso_config()
{
	// Registrando os menus
	register_nav_menus(
		array(
			'my_main_menu' => 'Menu Header',
		)
	);
	// $args = array(
	// 	'height' => 255,
	// 	'width' => 1920,
	// );
	add_theme_support('custom-header');
}
add_action('after_setup_theme', 'wpcurso_config', 0);

//Suporte a Thumbnails
function thumbnail(){
add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'thumbnail',);