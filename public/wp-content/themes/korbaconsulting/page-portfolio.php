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
								<img class="card-img-top" src="<?php echo get_thumbnail($clients->ID)['url']; ?>" alt="<?php echo $clients->post_title; ?>">
								<div class="card-body">
									<h5 class="card-title"><?php echo $clients->post_title; ?></h5>
									<p class="card-text"><?php echo wpautop($clients->post_excerpt); ?></p>
									<a href="<?php echo get_permalink($clients->ID)?>" class="btn btn-primary">Read More</a>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="card h-100">
								<img class="card-img-top" src="<?php echo get_thumbnail($technology->ID)['url']; ?>" alt="<?php echo $technology->post_title; ?>">
								<div class="card-body">
									<h5 class="card-title"><?php echo $technology->post_title; ?></h5>
									<p class="card-text"><?php echo wpautop($technology->post_excerpt); ?></p>
									<a href="<?php echo get_permalink($technology->ID)?>" class="btn btn-primary">Learn More</a>
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
