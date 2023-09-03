<?php
$clients_slug = 'clients';
$technology_slug = 'technology';

$clients_args = [
	'name' => $clients_slug,
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
];

$technology_args = [
	'name' => $technology_slug,
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
];

$clients = get_posts($clients_args)[0];
$technology = get_posts($technology_args)[0];

$clients->button_label = 'View Clients';
$technology->button_label = 'Learn More';
?>

<?php get_header(); ?>

<main class="services">

	<div class="banner">

		<div class="container">

			<div class="row">

				<div class="col-lg-12">

					<h1 class="title"><?php echo $post->post_title; ?></h1>

				</div>

			</div>

		</div>

	</div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12">

				<article>

					<div class="row row-cols-auto row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-gap-4">

						<div class="col">
							
							<?php get_template_part('template-parts/partials/component', 'card', $clients); ?>

						</div>

						<div class="col">
							
							<?php get_template_part('template-parts/partials/component', 'card', $technology); ?>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
