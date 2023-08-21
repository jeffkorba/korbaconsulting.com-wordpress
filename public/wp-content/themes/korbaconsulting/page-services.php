<?php
$consulting_slug = 'consulting';
$development_slug = 'development';
$design_slug = 'design';
$managed_services_slug = 'managed-services';

$consulting_args = [
	'name' => $consulting_slug,
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
];

$development_slug = [
	'name' => $development_slug,
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
];

$design_slug = [
	'name' => $design_slug,
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
];

$managed_services_slug = [
	'name' => $managed_services_slug,
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
];

$consulting = get_posts($consulting_args)[0];
$development = get_posts($development_slug)[0];
$design = get_posts($design_slug)[0];
$managed_services = get_posts($managed_services_slug)[0];
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
							<div class="card h-100">
								<img class="card-img-top" src="<?php echo get_thumbnail($consulting->ID)['url']; ?>" alt="<?php echo $consulting->post_title; ?>">
								<div class="card-body">
									<h5 class="card-title"><?php echo $consulting->post_title; ?></h5>
									<p class="card-text"><?php echo wpautop($consulting->post_excerpt); ?></p>
									<a href="<?php echo get_permalink($consulting->ID)?>" class="btn btn-primary">Learn More</a>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="card h-100">
								<img class="card-img-top" src="<?php echo get_thumbnail($development->ID)['url']; ?>" alt="<?php echo $development->post_title; ?>">
								<div class="card-body">
									<h5 class="card-title"><?php echo $development->post_title; ?></h5>
									<p class="card-text"><?php echo wpautop($development->post_excerpt); ?></p>
									<a href="<?php echo get_permalink($development->ID)?>" class="btn btn-primary">Learn More</a>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="card h-100">
								<img class="card-img-top" src="<?php echo get_thumbnail($design->ID)['url']; ?>" alt="<?php echo $design->post_title; ?>">
								<div class="card-body">
									<h5 class="card-title"><?php echo $design->post_title; ?></h5>
									<p class="card-text"><?php echo wpautop($design->post_excerpt); ?></p>
									<a href="<?php echo get_permalink($design->ID)?>" class="btn btn-primary">Learn More</a>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="card h-100">
								<img class="card-img-top" src="<?php echo get_thumbnail($managed_services->ID)['url']; ?>" alt="<?php echo $managed_services->post_title; ?>">
								<div class="card-body">
									<h5 class="card-title"><?php echo $managed_services->post_title; ?></h5>
									<p class="card-text"><?php echo wpautop($managed_services->post_excerpt); ?></p>
									<a href="<?php echo get_permalink($managed_services->ID)?>" class="btn btn-primary">Learn More</a>
								</div>
							</div>
						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
