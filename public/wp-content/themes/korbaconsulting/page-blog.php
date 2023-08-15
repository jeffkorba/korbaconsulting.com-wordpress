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

					<div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-gap-4">

						<?php
						$args = array(
							'posts_per_page' => 10
						);
						$posts = get_posts($args);

						for ($i = 0; $i < count($posts); $i++) {

							$attachment = get_attachment($posts[$i]->ID);
						?>

						<div class="col">

							<div class="card">

								<img class="card-img-top" src="<?php echo $attachment['url']; ?>" alt="<?php echo $attachment['alt_text'] ?>">
								<div class="card-body">
									<h5 class="card-title"><?php echo $posts[$i]->post_title ?></h5>
									<p class="card-text"><?php echo $posts[$i]->post_excerpt ?></p>
									<p class="card-text text-muted"><?php echo date('F j, Y', strtotime($posts[$i]->post_date)); ?></p>
									<a href="/<?php echo $posts[$i]->post_name ?>" class="btn btn-primary">Read More</a>
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
