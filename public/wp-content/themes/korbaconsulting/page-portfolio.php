<?php
$clients_posts = get_posts([
	'name' => 'clients',
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
]);

$technology_posts = get_posts([
	'name' => 'technology',
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
]);

$clients_card = new Card($clients_posts[0], ['buttonLabel' => 'View Clients']);
$technology_card = new Card($technology_posts[0], ['buttonLabel' => 'Learn More']);
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
							
							<?php $clients_card->render(); ?>

						</div>

						<div class="col">
							
							<?php $technology_card->render(); ?>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
