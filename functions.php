<?php
	if (function_exists('add_theme_support')) {
		add_theme_support('menus');
	}

	register_nav_menus( array(
		'top_menu' => 'Основное Меню',
	) );

// include custom jQuery
function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');


