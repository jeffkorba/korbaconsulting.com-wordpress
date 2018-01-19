<?php get_header(); ?>

		<div class="banner">

			<div class="container">

				<div class="carousel slide" data-ride="carousel">

					<ol class="carousel-indicators">
						<li data-target=".carousel" data-slide-to="0" class="active" />
						<li data-target=".carousel" data-slide-to="1" />
						<li data-target=".carousel" data-slide-to="2" />
						<li data-target=".carousel" data-slide-to="3" />
					</ol>

					<div class="carousel-inner">
						<div class="carousel-item active">
							<h1>Lorem ipsum dolor sit amet</h1>
							<h4>consectetur adipisicing elit, sed do eiusmod tempor<br />
							incididunt ut labore et dolore magna aliqua.</h4>
						</div>
						<div class="carousel-item">
							<h1>Sed do eiusmod tempor</h1>
							<h4>consectetur adipisicing elit, sed do eiusmod tempor<br />
							incididunt ut labore et dolore magna aliqua.</h4>
						</div>
						<div class="carousel-item">
							<h1>Consectetur adipisicing elit</h1>
							<h4>consectetur adipisicing elit, sed do eiusmod tempor<br />
							incididunt ut labore et dolore magna aliqua.</h4>
						</div>
						<div class="carousel-item">
							<h1>Labore et dolore magna aliqua</h1>
							<h4>consectetur adipisicing elit, sed do eiusmod tempor<br />
							incididunt ut labore et dolore magna aliqua.</h4>
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

						<ul class="featured-list">

							<li class="featured-item">

								<img src="<?php bloginfo('template_url'); ?>/images/northern-trust.png">

								<div class="nametag">Northern Trust</div>

							</li>

							<li class="featured-item">

								<img src="<?php bloginfo('template_url'); ?>/images/optionshouse.png">

								<div class="nametag">OptionsHouse</div>

							</li>

							<li class="featured-item">

								<img src="<?php bloginfo('template_url'); ?>/images/apex-clearing.png">

								<div class="nametag">Apex Clearing</div>

							</li>

						</ul>

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
							<a href="#">Hello World!</a><br />
							Lorem ipsum dolor sit amet, consectetur
							adipisicing elit...<br /><br />

							<a href="#">New Office</a><br />
							Sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua...<br /><br />

							<a href="#">View More</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12">
						<h5>Social</h5>
						<div class="widget">
							<a href="#">Jeff Korba</a> @jeffkorba<br />
							Lorem ipsum dolor sit amet, consectetur
							adipisicing elit...<br /><br />

							<a href="#">Korba Consulting</a> @korbaconsulting<br />
							Sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua...<br /><br />

							<a href="#">View More</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12">
						<h5>Careers</h5>
						<div class="widget">
							<a href="#">Systems Architect</a><br />
							Lorem ipsum dolor sit amet, consectetur
							adipisicing elit<br /><br />

							<a href="#">UI/UX Designer</a><br />
							Sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua<br /><br />

							<a href="#">View More</a>
						</div>
					</div>

				</div>

			</div>

		</div>

	<?php get_footer(); ?>
