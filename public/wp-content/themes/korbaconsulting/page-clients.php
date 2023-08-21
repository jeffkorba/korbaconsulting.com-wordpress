<?php
$args = [
	'numberposts' => -1,
	'post_type' => 'client'
];

$clients = get_posts($args);
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

					<div class="row row-cols-auto row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-gap-4">

						<?php foreach ($clients as $client) { ?>

						<div class="col">

							<div class="card h-100">

								<a href="<?php echo get_permalink($client->ID); ?>"><img class="card-img-top" src="<?php echo get_thumbnail($client->ID)['url']; ?>" alt="<?php echo $client->post_title; ?>"></a>

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
