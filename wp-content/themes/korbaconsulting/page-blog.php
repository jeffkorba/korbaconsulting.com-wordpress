<?php get_header(); the_post(); ?>

<main>

	<div class="banner">

		<div class="container">

			<div class="row">

				<div class="col-lg-12">

					<h1 class="title"><?php the_title(); ?></h1>

				</div>

			</div>

		</div>

	</div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12">

				<article>

					<div class="card-deck">

						<?php
						$args = array(
							'posts_per_page' => 10
						);
						$posts = get_posts($args);

						for ($i = 0; $i < count($posts); $i++) {

							if (has_post_thumbnail($posts[$i]->ID)) {
								$thumbnailUrl = get_the_post_thumbnail_url($posts[$i]->ID, 'medium');
							}
							else {
								$thumbnailUrl = get_bloginfo('template_url') . '/images/logo-large.png';
							}
						?>

						<div class="card">
							<a href="<?php echo $posts[$i]->guid ?>"><img class="card-img-top" src="<?php echo $thumbnailUrl; ?>" alt="Technical Sales Specialist"></a>
							<div class="card-body">
								<h5 class="card-title"><a href="<?php echo $posts[$i]->guid ?>"><?php echo $posts[$i]->post_title ?></a></h5>
								<p class="card-text"><?php echo $posts[$i]->post_excerpt ?></p>
								<p class="card-text text-muted"><?php echo date('F j, Y', strtotime($posts[$i]->post_date)); ?></p>
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
