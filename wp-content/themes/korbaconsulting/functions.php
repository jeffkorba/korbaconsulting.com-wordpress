<?php
// Dependencies
require_once 'vendor/autoload.php';

use Dotenv\Dotenv;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

// Global Constants
const NO_IMAGE_FILE_LOCATION = '/static/images/logos/korba-consulting-poster.png';
const CSS_FILE_LOCATION = '/static/css/main.css';
const JS_FILE_LOCATION = '/static/js/main.js';
const FAVICON_FILE_LOCATION = '/static/images/logos/korba-consulting-square.png';

// Theme Features
add_editor_style();
add_theme_support('post-thumbnails');

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

// Initialization
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Functions
function get_attachment (Int $post_id) {

	$attachment_id = get_post_thumbnail_id($post_id);
	$attachment_meta = wp_get_attachment_metadata($attachment_id);

	$attachment = [
		'id' => $attachment_id,
		'alt_text' => get_post_meta($attachment_id, '_wp_attachment_image_alt', true),
		'meta' => isset($attachment_meta['image_meta']) ? $attachment_meta['image_meta'] : null,
		'caption' => wp_get_attachment_caption($attachment_id),
		'url' => empty(wp_get_attachment_url($attachment_id)) || file_exists(get_attached_file($attachment_id)) === false ? get_file_location('no_image') : wp_get_attachment_url($attachment_id),
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

function get_file_location(String $file_type, Bool $versioning = false) {
		
	if ($file_type == 'css') {
	
		$file_location = CSS_FILE_LOCATION;
	}
	else if ($file_type == 'favicon') {
	
		$file_location = FAVICON_FILE_LOCATION;
	}
	else if ($file_type == 'no_image') {
	
		$file_location = NO_IMAGE_FILE_LOCATION;
	}
	else if ($file_type == 'js') {
	
		$file_location = JS_FILE_LOCATION;
	}

	if ($versioning && file_exists(__DIR__ . $file_location)) {
		
		$file_version = '?v=' . filemtime(__DIR__ . $file_location);
	}
	else {

		$file_version = '';
	}

	return get_bloginfo('template_url') . $file_location . $file_version;
}

function is_tab_active ($tab = '') {

	if (is_current_page($tab)) {

		echo 'active';
	}
}
