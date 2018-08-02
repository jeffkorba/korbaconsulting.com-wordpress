<?php get_header(); the_post(); ?>

<main class="services">

	<div class="banner">

		<div class="container">

			<div class="row">

				<div class="col-lg-12">

					<h1><?php the_title(); ?></h1>

				</div>

			</div>

		</div>

	</div>

	<div class="container">

		<div class="row">

			<div class="col-12">

				<article>

					<section class="row no-gutters development">

						<div class="col-lg-6 col-sm-12 content">
							<h3>Portfolio</h3>
							<hr />
							<p>Brands of companies we've done work for in the past.
						</div>

						<div class="col-lg-6 col-sm-12"><img src="<?php bloginfo('template_url'); ?>/images/work/portfolio.jpg" alt="Portfolio" /></div>

					</section>

					<section class="row no-gutters managed-services">

						<div class="col-lg-6 col-sm-12"><img src="<?php bloginfo('template_url'); ?>/images/work/case-studies.jpg" alt="Case Studies" /></div>

						<div class="col-lg-6 col-sm-12 content">
							<h3>Case Studies</h3>
							<hr />
							<p>High-level summaries of strategies and analysis we've done in the past.
						</div>

					</section>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
