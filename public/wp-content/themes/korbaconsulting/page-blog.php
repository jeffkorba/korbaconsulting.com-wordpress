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
						?>

						<div class="col">

							<div class="card">

								<img class="card-img-top" src="<?php echo get_thumbnail($post->ID)['url']; ?>" alt="<?php echo $post->post_title; ?>">
								<div class="card-body">
									<h5 class="card-title"><?php echo $post->post_title; ?></h5>
									<p class="card-text"><?php echo wpautop($post->post_excerpt); ?></p>
									<p class="card-text text-muted"><?php echo $author_name; ?> &nbsp;|&nbsp; <?php echo date('F j, Y', strtotime($post->post_date)); ?></p>
									<a href="<?php echo get_permalink($post->ID); ?>" class="btn btn-primary">Read More</a>
								</div>

							</div>

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
