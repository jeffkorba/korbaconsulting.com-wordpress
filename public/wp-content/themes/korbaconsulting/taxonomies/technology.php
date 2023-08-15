<?php

function create_taxonomy_technology () {

	register_taxonomy('technology', ['project'], [
		'labels' => [
			'name' => __('Technologies'),
			'singular_name' => __('Technology'),
			'all_items' => __('All Technologies'),
			'add_item' => __('Add New Technology'),
			'edit_item' => __('Edit Technology'),
			'update_item' => __('Update Technology')
		],
		'hierarchical' => false,
		'show_in_rest' => true,
		'rewrite' => false,
		'show_ui' => true,
		'show_admin_column' => true
	]);
}

add_action('init', 'create_taxonomy_technology');
