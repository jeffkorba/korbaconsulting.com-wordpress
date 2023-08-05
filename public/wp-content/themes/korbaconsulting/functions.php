<?php
// Global Constants
const NO_IMAGE_FILE_LOCATION = '/static/images/logos/korba-consulting-poster.png';
const FAVICON_FILE_LOCATION = '/static/images/logos/korba-consulting-square.png';
const DEFAULT_EMAIL_ADDRESS = 'contact@korbaconsulting.com';

// REST API
require_once 'rest-api/forms/contact.php';

// Styles
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/static/vendor/bootstrap/css/bootstrap.min.css', [], '5.3.0');
wp_enqueue_style('main', get_template_directory_uri() . '/static/css/main.css', [], '1.1');

// Scripts
wp_enqueue_script('axios', get_template_directory_uri() . '/static/vendor/axios/axios.min.js', [], '1.4.0');
wp_enqueue_script('bootstrap', get_template_directory_uri() . '/static/vendor/bootstrap/js/bootstrap.min.js', [], '5.3.0');
wp_enqueue_script('fontawesome', get_template_directory_uri() . '/static/vendor/fontawesome-free/js/all.min.js', [], '6.4.0');
wp_enqueue_script('main', get_template_directory_uri() . '/static/js/main.js', [], '1.0', true);
if (APP_ENV === 'production') {

	wp_enqueue_script('vue', get_template_directory_uri() . '/static/vendor/vue/vue.global.prod.js', [], '3.3.4');
}
else {

	wp_enqueue_script('vue', get_template_directory_uri() . '/static/vendor/vue/vue.global.js', [], '3.3.4');
}

// Theme Features
add_editor_style();
add_theme_support('post-thumbnails');
add_theme_support( 'admin-bar', ['callback' => '__return_false']);

// Post Types
require_once 'post-types/case-study.php';
require_once 'post-types/project.php';

// Taxonomies
require_once 'taxonomies/client.php';

// Menus
// register_nav_menu('services-menu', 'Services Menu');
// register_nav_menu('work-menu', 'Work Menu');
// register_nav_menu('about-menu', 'About Menu');
register_nav_menu('header-menu', 'Header Menu');
register_nav_menu('footer-menu', 'Footer Menu');

// Functions
function get_attachment (Int $post_id) {

	$attachment_id = get_post_thumbnail_id($post_id);
	$attachment_meta = wp_get_attachment_metadata($attachment_id);

	if (empty(wp_get_attachment_url($attachment_id)) || file_exists(get_attached_file($attachment_id)) === false) {

		$attachment_url = NO_IMAGE_FILE_LOCATION;
	}
	else {

		$attachment_url = wp_get_attachment_url($attachment_id);
	}

	$attachment = [
		'id' => $attachment_id,
		'alt_text' => get_post_meta($attachment_id, '_wp_attachment_image_alt', true),
		'meta' => isset($attachment_meta['image_meta']) ? $attachment_meta['image_meta'] : null,
		'caption' => wp_get_attachment_caption($attachment_id),
		'url' => $attachment_url
	];

	return $attachment;
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

function is_tab_active ($tab = '') {

	if (is_current_page($tab)) {

		echo 'active';
	}
}
