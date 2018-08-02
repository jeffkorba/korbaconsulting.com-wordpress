<?php get_header(); the_post(); ?>

<main>

	<div class="banner">

		<div class="container">

			<div class="row">

				<div class="col-lg-12">

					<h1 class="title">Blog</h1>

				</div>

			</div>

		</div>

	</div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12">

				<article>

					<h3><?php the_title(); ?></h3>
					<p><strong><?php the_author(); ?> &nbsp;&bull;&nbsp; <?php the_date(); ?></strong>
					<p><?php the_content(); ?>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
