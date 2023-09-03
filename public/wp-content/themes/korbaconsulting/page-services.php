<?php
$consulting_args = [
	'name' => 'consulting',
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
];

$development_args = [
	'name' => 'development',
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
];

$design_args = [
	'name' => 'design',
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
];

$managed_services_args = [
	'name' => 'managed-services',
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
];

$consulting = get_posts($consulting_args)[0];
$development = get_posts($development_args)[0];
$design = get_posts($design_args)[0];
$managed_services = get_posts($managed_services_args)[0];

$consulting->button_label = 'Learn More';
$development->button_label = 'Learn More';
$design->button_label = 'Learn More';
$managed_services->button_label = 'Learn More';
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
							
							<?php get_template_part('template-parts/partials/component', 'card', $consulting); ?>

						</div>

						<div class="col">
							
							<?php get_template_part('template-parts/partials/component', 'card', $development); ?>

						</div>

						<div class="col">
							
							<?php get_template_part('template-parts/partials/component', 'card', $design); ?>

						</div>

						<div class="col">
							
							<?php get_template_part('template-parts/partials/component', 'card', $managed_services); ?>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
