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

					<div class="row">

						<div class="col-8">

							<section>

								<?php the_content(); ?>

							</section>

						</div>

						<div class="col-4">

							<aside>

								<?php get_sidebar('social'); ?>

							</aside>

						</div>
					
					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
