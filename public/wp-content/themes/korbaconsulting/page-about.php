<?php
get_header();
the_post();
?>

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

			<div class="col-lg-12">

				<article>

					<div class="row row-cols-auto row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-gap-4">

						<div class="col">
							<div class="card h-100">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/about/the-company.jpg" alt="The Company">
								<div class="card-body">
									<h5 class="card-title">The Company</h5>
									<div class="card-text">
										<p>Learn about what the company does and what technologies are used.
									</div>
									<a href="/about/the-company" class="btn btn-primary">See The Company</a>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="card h-100">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/about/the-philosophy.jpg" alt="The Philosophy">
								<div class="card-body">
									<h5 class="card-title">The Philosophy</h5>
									<div class="card-text">
										<p>Learn about the development strategies used for consulting engagements.
									</div>
									<a href="/about/the-philosophy" class="btn btn-primary">See The Philosophy</a>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="card h-100">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/about/blog.jpg" alt="Blog">
								<div class="card-body">
									<h5 class="card-title">Blog</h5>
									<div class="card-text">
										<p>Find out the latest news and technology updates.
									</div>
									<a href="/blog" class="btn btn-primary">See Blog</a>
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
