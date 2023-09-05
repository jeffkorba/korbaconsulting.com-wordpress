<?php
$wordpress_posts = get_posts([
	'name' => 'wordpress',
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
]);

$laravel_posts = get_posts([
	'name' => 'laravel',
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
]);

$vue_posts = get_posts([
	'name' => 'vue-js',
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
]);

$WordPressCard = new Card($wordpress_posts[0]);
$WordPressCard->showButton(false);

$LaravelCard = new Card($laravel_posts[0]);
$LaravelCard->showButton(false);

$VueCard = new Card($vue_posts[0]);
$VueCard->showButton(false);
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

							<?php $WordPressCard->render(); ?>

						</div>

						<div class="col">

							<?php $LaravelCard->render(); ?>

						</div>

						<div class="col">

							<?php $VueCard->render(); ?>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
