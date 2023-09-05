<?php
$blog_posts = get_posts([
	'name' => 'blog',
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
]);

$about_posts = get_posts([
	'name' => 'about',
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
]);

$BlogCard = new Card($blog_posts[0]);
$BlogCard->setButtonLabel('View Blog');

$AboutCard = new Card($about_posts[0]);
$AboutCard->setButtonLabel('Learn More');
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

							<?php $BlogCard->render(); ?>

						</div>

						<div class="col">

							<?php $AboutCard->render(); ?>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
