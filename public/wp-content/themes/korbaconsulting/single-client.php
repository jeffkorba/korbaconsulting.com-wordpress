<?php
$args = [
	'post_type' => 'project',
	'meta_key' => 'client',
	'meta_value' => $post->post_name,
	'nopaging' => true
];

$query = new WP_Query($args);
?>

<?php get_header(); ?>

<main>

	<div class="banner">

		<div class="container">

			<div class="row">

				<div class="col-lg-12">

					<h1 class="title">Clients</h1>

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
							if ($query->have_posts()) {

								$projects = $query->get_posts();

								foreach ($projects as $project) {

									$thumbnail = get_thumbnail($project->ID);
							?>

							<div class="col">

								<div class="card">

									<img class="card-img-top" src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $project->post_title ?>">
									<div class="card-body">
										<h5 class="card-title"><?php echo $project->post_title ?></h5>
										<p class="card-text"><?php echo $project->post_excerpt ?></p>
										<a href="<?php echo get_permalink($project->ID); ?>" class="btn btn-primary">Read More</a>
									</div>

								</div>

							</div>

							<?php
								}
							}
							?>

					</article>

				</div>

			</div>		

		</div>

	</div>

</main>

<?php get_footer(); ?>
