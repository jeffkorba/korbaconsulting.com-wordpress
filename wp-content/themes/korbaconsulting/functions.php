<?php
add_editor_style();
add_theme_support('post-thumbnails');

// register_nav_menu('services-menu', 'Services Menu');
// register_nav_menu('work-menu', 'Work Menu');
// register_nav_menu('about-menu', 'About Menu');
register_nav_menu('header-menu', 'Header Menu');
register_nav_menu('footer-menu', 'Footer Menu');


function tab_status ($tab = '') {

	if (is_current_page($tab)) {

		echo 'active';
	}
}

function is_current_page ($page = '') {

	global $wp_query;

	if ($wp_query->query_vars['pagename'] === $page) {

		return true;
	}
	else {

		return false;
	}
}
