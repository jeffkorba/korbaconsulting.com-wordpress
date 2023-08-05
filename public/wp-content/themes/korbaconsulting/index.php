<?php get_header(); ?>

	<main>

		<div class="banner">

			<div class="container">

				<div id="carouselExampleIndicators" class="carousel slide">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="carousel-body">
								<div class="carousel-title">Process-Oriented Development</div>
								<div class="carousel-subtitle">Creating a process specific to the requirements of a business helps to model a development lifecycle that is time efficient and cost effective.</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-body">
								<div class="carousel-title">Scalable Design Patterns</div>
								<div class="carousel-subtitle">Systems need to scale. Using design patterns like MVC and MVVM help enforce architecture that allows your system to scale seamlessly.</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-body">
								<div class="carousel-title">Less Is More</div>
								<div class="carousel-subtitle">Systems can be complex, but the underlying architecture doesn't need to be. Reducing complexity, helps reduce the time and cost of future development.</div>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>

			</div>

		</div>



		<div class="featured-work">

			<div class="container">

				<div class="row">

					<div class="col-12">

						<h5>Featured Work</h5>

						<div class="row row-cols-auto row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-gap-4">

							<div class="col-12">
								<div class="card">
									<a href="#"><img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/northern-trust.png" alt="Northern Trust" /></a>
								</div>
							</div>

							<div class="col-12">
								<div class="card">
									<a href="#"><img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/optionshouse.png" alt="OptionsHouse" /></a>
								</div>
							</div>

							<div class="col-12">
								<div class="card">
									<a href="#"><img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/humana.png" alt="Humana" /></a>
								</div>
							</div>
							
						</div>

					</div>

				</div>

			</div>

		</div>

		<?php get_template_part('template-parts/pages/index', 'notifications'); ?>

	</main>

<?php get_footer(); ?>
