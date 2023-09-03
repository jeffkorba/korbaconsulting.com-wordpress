<?php
$blog_slug = 'blog';
$about_slug = 'about';

$blog_args = [
	'name' => $blog_slug,
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
];

$about_args = [
	'name' => $about_slug,
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
];

$blog = get_posts($blog_args)[0];
$about = get_posts($about_args)[0];

$blog->button_label = 'View Blog';
$about->button_label = 'Learn More';
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

							<?php get_template_part('template-parts/partials/component', 'card', $blog); ?>

						</div>

						<div class="col">

							<?php get_template_part('template-parts/partials/component', 'card', $about); ?>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
