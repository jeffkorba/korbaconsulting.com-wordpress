<?php

function create_taxonomy_client () {

	register_taxonomy('client', ['case-study', 'project'], [
		'labels' => [
			'name' => __('Clients'),
			'singular_name' => __('Client'),
			'all_items' => __('All Clients'),
			'add_item' => __('Add New Client'),
			'edit_item' => __('Edit Client'),
			'update_item' => __('Update Client')
		],
		'hierarchical' => false,
		'show_in_rest' => true,
		'rewrite' => false,
		'show_ui' => true,
		'show_admin_column' => true
	]);
}

add_action('init', 'create_taxonomy_client');
