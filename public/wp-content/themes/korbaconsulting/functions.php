<?php
// Global Constants
const FAVICON_FILE_LOCATION = '/static/images/korba-consulting-logo-750x750.png';

// REST API
require_once 'rest-api/forms/contact.php';

// Theme Features
add_editor_style();
add_theme_support('post-thumbnails');
add_theme_support( 'admin-bar', ['callback' => '__return_false']);
add_post_type_support('page', 'excerpt');

// Post Types
require_once 'post-types/client.php';
require_once 'post-types/project.php';

// Taxonomies
require_once 'taxonomies/technology.php';

// Menus
register_nav_menu('services-menu', 'Services Menu');
register_nav_menu('portfolio-menu', 'Portfolio Menu');
register_nav_menu('company-menu', 'Company Menu');

// Actions
add_action('wp_enqueue_scripts', 'enqueue_scripts');
add_action('wp_enqueue_scripts', 'enqueue_styles');

// Functions
function enqueue_scripts () {

	wp_enqueue_script('axios', get_template_directory_uri() . '/static/vendor/axios/axios.min.js', [], '1.4.0');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/static/vendor/bootstrap/js/bootstrap.min.js', [], '5.3.0');
	wp_enqueue_script('fontawesome', get_template_directory_uri() . '/static/vendor/fontawesome-free/js/all.min.js', [], '6.4.0');
	wp_enqueue_script('main', get_template_directory_uri() . '/static/js/main.js', [], '1.0', true);

	if (APP_ENV === 'production') {

		$script_path = '/static/vendor/vue/vue.global.prod.js';
	}
	else {

		$script_path = '/static/vendor/vue/vue.global.js';
	}
	
	wp_enqueue_script('vue', get_template_directory_uri() . $script_path, [], '3.3.4');
}

function enqueue_styles () {

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/static/vendor/bootstrap/css/bootstrap.min.css', [], '5.3.0');
	wp_enqueue_style('main', get_template_directory_uri() . '/static/css/main.css', [], '1.2');
}

function get_site_title () {

	if (is_home()) {
	
		return get_bloginfo('name') . ' | ' . get_bloginfo('description'); 
	}
	else {
	
		return get_the_title() . ' | ' . get_bloginfo('name');
	}
}

function is_tab_active (String $tab = '') {

	global $post;

	$parent_id = wp_get_post_parent_id($post->ID);

	$parent = get_post($parent_id);

	if (($_SERVER['REQUEST_URI'] === '/' && $tab === 'home') || $tab === $post->post_name || $tab === $parent->post_name) {

		return true;
	}
}
