<?php

function create_post_type_project () {

	$page_name = 'work/portfolio';
	$regex = '^'. $page_name . '/page/(\d+)/?$';
	$query = 'index.php?pagename=' . $page_name . '&paged=$matches[1]';
 
	register_post_type('project', [
			'labels' => [
				'name' => __('Portfolio'),
				'singular_name' => __('Project'),
				'all_items' => __('All Projects')
			],
			'supports' => ['title', 'editor', 'author', 'excerpt', 'thumbnail', 'custom-fields'],
			'public' => true,
			'has_archive' => true,
			'rewrite' => [
				'slug' => '/' . $page_name,
				'with_front' => false,
				'pages'=> true
			],
			'show_in_rest' => true
		]
	);

	add_rewrite_rule($regex, $query, 'top');
}

add_action('init', 'create_post_type_project');