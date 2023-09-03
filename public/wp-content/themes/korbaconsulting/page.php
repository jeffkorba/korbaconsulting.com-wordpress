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

			<div class="col-8">

				<article>

					<?php the_content(); ?>

				</article>

			</div>

			<div class="col-4">

				<aside>

					<?php get_sidebar('social'); ?>

				</aside>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
