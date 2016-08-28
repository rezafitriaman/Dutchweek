<?php
/**
 * dutchweek.com functions and definitions
 *
 * @package dutchweek.com
 * @since dutchweek.com
 */

if (! function_exists( 'dutchweek_setup') ) :

 function dutchweek_setup()	{

register_nav_menu ( array(
	'primary' 	=>__('Primary Menu', 'dutchweek')
)
);

 }
endif;


function add_theme_scripts(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array ( 'jquery' ), false, true);
}

function add_theme_styles() {
	//wp_enqueue_style ( 'style', get_stylesheet_uri() );
	wp_enqueue_style ( 'main', get_stylesheet_uri() . '/css/main.css');
	wp_enqueue_style ( 'bootstrap', get_stylesheet_uri() . '/css/bootstrap.css');
	wp_enqueue_style ( 'font-awesome', get_stylesheet_uri() . '/css/font-awesome.css');
}

add_action( 'after_setup_theme', 'dutchweek_setup');
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
add_action( 'wp_enqueue_scripts', 'add_theme_style' );

?>