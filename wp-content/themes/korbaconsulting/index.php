<?php get_header(); ?>

	<main>

		<div class="banner">

			<div class="container">

				<div class="carousel slide" data-ride="carousel">

					<ol class="carousel-indicators">
						<li data-target=".carousel" data-slide-to="0" class="active" />
						<li data-target=".carousel" data-slide-to="1" />
						<li data-target=".carousel" data-slide-to="2" />
					</ol>

					<div class="carousel-inner">

						<div class="carousel-item active">
							<h1>Process-Oriented Development</h1>
							<h4>Creating a process specific to the requirements<br />
								of a business helps to model a development lifecycle<br />
								that is time efficient and cost effective.</h4>
						</div>
						<div class="carousel-item">
							<h1>Scalable Design Patterns</h1>
							<h4>Systems need to scale. Using design patterns like<br />
								MVC and MVVM help enforce architecture that allows your<br />
								system to scale seamlessly.</h4>
						</div>
						<div class="carousel-item">
							<h1>Less is More</h1>
							<h4>Systems can be complex, but the underlying<br />
								architecture doesn’t need to be. Reducing complexity,<br />
								helps reduce the time and cost of future development.</h4>
						</div>

					</div>

					<a class="carousel-control-prev" href=".carousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true" />
						<span class="sr-only">Previous</span>
					</a>

					<a class="carousel-control-next" href=".carousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true" />
						<span class="sr-only">Next</span>
					</a>

		        </div>

			</div>

		</div>



		<div class="featured-work">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<h5>Featured Work</h5>

						<div class="card-deck">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/logos/clients/northern-trust.png" alt="Northern Trust">
							</div>

							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/logos/clients/optionshouse.png" alt="OptionsHouse">
							</div>

							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/logos/clients/humana.png" alt="Humana">
							</div>
						</div>

					</div>

				</div>

			</div>

		</div>



		<div class="widgets">

			<div class="container">

				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-12">

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
									<a href="<?php echo $posts[$i]->guid ?>"><h6><?php echo $posts[$i]->post_title; ?></h6>
									<?php echo $excerpt; ?></a>
								</li>
								<?php
								}
								?>
							</ul>
						</div>

					</div>

					<div class="col-lg-4 col-md-4 col-sm-12">

						<h5>Events</h5>
						<div class="widget">
							<ul>
								<li>
									<a href="https://aws.amazon.com/summits/chicago/" target="_blank"><h6>AWS Summit Chicago</h6>
									August 1-2, 2018<br />
									McCormick Place West</a>
								</li>
								<li>
									<a href="https://www.hackerx.org/" target="_blank"><h6>HackerX - Chicago (Back-End) Developer</h6>
									September 6, 2018<br />
									TBD</a>
								</li>
							</ul>
						</div>

					</div>

					<div class="col-lg-4 col-md-4 col-sm-12">

						<h5>Careers</h5>
						<div class="widget">
							<ul>
								<li>
									<a href="/careers/technical-sales-specialist"><h6>Technical Sales Specialist</h6>
									Build leads, draft proposals, research market trends, and manage client engagements.</a>
								</li>
								<li>
									<a href="/careers/ui-ux-designer"><h6>UI/UX Designer</h6>
									Create interfaces for websites and web applications. Design user experiences that are both intuitive and modern.</a>
								</li>
							</ul>
						</div>

					</div>

				</div>

			</div>

		</div>

	</main>

<?php get_footer(); ?>
