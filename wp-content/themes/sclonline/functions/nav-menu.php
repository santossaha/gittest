<?php
function register_my_menu() {
	register_nav_menus(array(
		'header-menu' => __('Header menu'),
		'Socal-link' => __('socal link')
	));
}
add_action('init','register_my_menu');


?>