<?php
$args = [
	'posts_per_page' => 10
];

$posts = get_posts($args);
?>

<?php get_header(); ?>

<main>

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

						<?php
						foreach ($posts as $post) {

							$author_name = get_the_author_meta('display_name', $post->post_author);
							$post->button_label = 'Read More';
						?>

						<div class="col">

							<?php get_template_part('template-parts/partials/component', 'card', $post); ?>

						</div>

						<?php
						}
						?>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
