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

					<h1 class="title">Projects</h1>

				</div>

			</div>

		</div>

	</div>

	<div class="container">

		<div class="row">

				<div class="col-lg-12">

					<article>

						<?php
						if ($query->have_posts()) {

							$projects = $query->get_posts();
						?>

						<div class="row row-cols-auto row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-gap-4">

							<?php
							foreach ($projects as $project) {

								$terms = get_the_terms($project->ID, 'technology');

								$project->terms = $terms;
							?>

							<div class="col">

								<?php get_template_part('template-parts/partials/component', 'card', $project); ?>

							</div>

							<?php
							}
							?>

						</div>

						<?php
						}
						?>

					</article>

				</div>

			</div>		

		</div>

	</div>

</main>

<?php get_footer(); ?>
