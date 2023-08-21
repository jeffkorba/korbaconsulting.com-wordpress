<?php
$args = [
	'numberposts' => -1,
	'post_type' => 'technology'
];

$technologies = get_posts($args);
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

			<div class="col-12">

				<article>

					<div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-gap-4">

						<?php foreach ($technologies as $technology) { ?>

						<div class="col-12">
							<div class="card">
								<a href="<?php echo get_permalink($technology->ID); ?>"><img class="card-img-top" src="<?php echo get_thumbnail($technology->ID); ?>" alt="<?php echo $technology->post_title; ?>"></a>
							</div>
						</div>

						<?php } ?>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
