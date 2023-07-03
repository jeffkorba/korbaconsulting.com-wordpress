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



		<div class="widgets">

			<div class="container">

				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-12 mb-3">

						<h5>Blog</h5>
						<div class="widget">
							<ul>
								<?php
								$args = array(
									'posts_per_page' => 3
								);
								$posts = get_posts($args);

								for ($i = 0; $i < count($posts); $i++) {

									if (strlen($posts[$i]->post_excerpt) > 100) {
										$excerpt = substr($posts[$i]->post_excerpt, 0, 99) . '...';
									}
									else {
										$excerpt = $posts[$i]->post_excerpt;
									}
								?>
								<li>
									<a href="/<?php echo $posts[$i]->post_name ?>">
										<div class="widget-title"><?php echo $posts[$i]->post_title; ?></div>
										<?php echo $excerpt; ?>
									</a>
								</li>
								<?php
								}
								?>
							</ul>
						</div>

					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 mb-3">

						<h5>Events</h5>
						<div class="widget">
							<ul>
								<li>
									<a href="https://aws.amazon.com/summits/chicago/" target="_blank">
										<div class="widget-title">AWS Summit Chicago</div>
										August 1-2, 2018<br />
										McCormick Place West
									</a>
								</li>
								<li>
									<a href="https://www.meetup.com/Chicago-WordPress-Meetup/events/253584084" target="_blank">
										<div class="widget-title">Styling WooCommerce</div>
										September 5, 2018<br />
										Holiday Club
									</a>
								</li>
							</ul>
						</div>

					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 mb-3">

						<h5>Updates</h5>
						<div class="widget">
							<ul>
								<li>
									<a href="#">
										<div class="widget-title">Theme Tweaks</div>
										Updated site dependencies, reorganized theme structure and added support for project details.
									</a>
								</li>
								<li>
									<a href="#">
										<div class="widget-title">Content Updates</div>
										Added more details behind the individual projects between each client.
									</a>
								</li>
							</ul>
						</div>

					</div>

				</div>

			</div>

		</div>

	</main>

<?php get_footer(); ?>
