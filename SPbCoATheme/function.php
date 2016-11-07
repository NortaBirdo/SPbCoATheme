<?php
	if (function_exists('add_theme_support')) {
		add_theme_support('menus');
	}
?>


<?php
	register_nav_menus( array(
		'top_menu' => 'Основное Меню',
	) );
?>