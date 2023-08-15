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

					<div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-gap-4">

						<div class="col">
							<div class="card h-100">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/work/portfolio.webp" alt="Portfolio">
								<div class="card-body">
									<h5 class="card-title">Portfolio</h5>
									<div class="card-text">
										<p>A showcase of project work done for organizations in the past.</p>
									</div>
									<a href="/work/portfolio" class="btn btn-primary">See Portfolio</a>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="card h-100">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/work/case-studies.webp" alt="Case Studies">
								<div class="card-body">
									<h5 class="card-title">Case Studies</h5>
									<div class="card-text">
										<p>High-level summaries of strategies and analysis done for organizations in the past.</p>
									</div>
									<a href="/work/case-studies" class="btn btn-primary">See Case Studies</a>
								</div>
							</div>
						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
