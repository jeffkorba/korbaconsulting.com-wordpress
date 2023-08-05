<?php
// Blog
$args = [
	'posts_per_page' => 3
];
$posts = get_posts($args);
$blog = [];

foreach ($posts as $post) {

	array_push($blog, [
		'title' => $post->post_title,
		'description' => $post->post_excerpt,
		'link' => '#'
	]);
}

// Events
$events = [
	[
		'title' => 'AWS Summit Chicago',
		'description' => 'August 1-2, 2018<br />McCormick Place West',
		'link' => 'https://aws.amazon.com/summits/chicago'
	],
	[
		'title' => 'Styling WooCommerce',
		'description' => 'September 5, 2018<br />Holiday Club',
		'link' => 'https://www.meetup.com/Chicago-WordPress-Meetup/events/253584084'
	]
];

// Updates
$updates = [
	[
		'title' => 'Theme Tweaks',
		'description' => 'Updated site dependencies, reorganized theme structure and added support for project details.',
		'link' => ''
	],
	[
		'title' => 'Content Updates',
		'description' => 'Added more details behind the individual projects between each client.',
		'link' => ''
	]
];
?>

<div class="notifications">

	<div class="container">

		<div class="row">

			<div class="col-lg-4 col-md-4 col-sm-12 mb-3">

				<h3>Blog</h3>

				<?php get_template_part('template-parts/partials/component', 'notifications', $blog); ?>

			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 mb-3">

				<h3>Events</h3>

				<?php get_template_part('template-parts/partials/component', 'notifications', $events); ?>

			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 mb-3">

				<h3>Updates</h3>

				<?php get_template_part('template-parts/partials/component', 'notifications', $updates); ?>

			</div>

		</div>

	</div>

</div>