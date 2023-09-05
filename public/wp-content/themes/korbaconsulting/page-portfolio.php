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

$ClientsCard = new Card($clients_posts[0]);
$ClientsCard->setButtonLabel('View Clients');

$TechnologyCard = new Card($technology_posts[0]);
$TechnologyCard->setButtonLabel('Learn More');
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
							
							<?php $ClientsCard->render(); ?>

						</div>

						<div class="col">
							
							<?php $TechnologyCard->render(); ?>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
