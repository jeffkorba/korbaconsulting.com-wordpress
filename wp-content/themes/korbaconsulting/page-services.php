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
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/services/consulting.jpg" alt="Consulting">
								<div class="card-body">
									<h5 class="card-title">Consulting</h5>
									<div class="card-text">
										<p>Understanding a client's business is only the start to <strong>earning their confidence</strong>.
										<p>Being able to develop strategies that <strong>drive innovation</strong> and <strong>foster growth</strong> are requisites to maintaining a <strong>long-term client relationship</strong>.
									</div>
									<a href="/services/consulting" class="btn btn-primary">See Consulting</a>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/services/design.jpg" alt="Design">
								<div class="card-body">
									<h5 class="card-title">Design</h5>
									<div class="card-text">
										<p><strong>Information Achitecture</strong>, <strong>Content Strategy</strong>, <strong>User Experience</strong> and <strong>Visual Design</strong> are fundemental pillars that make quality design a reality.
										<p>Understanding your brand is <strong>essential</strong> to ensuring that each of these <strong>pillars</strong> stands upright.
									</div>
									<a href="/services/design" class="btn btn-primary">See Design</a>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/services/development.jpg" alt="Development">
								<div class="card-body">
									<h5 class="card-title">Development</h5>
									<div class="card-text">
										<p>If you want to build <strong>quality software</strong>, you have to build a solid foundation for each system layer to rest upon.
										<p>That means focusing on the <strong>bigger picture</strong> and not simply features and functionality.
									</div>
									<a href="/services/development" class="btn btn-primary">See Development</a>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/services/managed-services.jpg" alt="Managed Services">
								<div class="card-body">
									<h5 class="card-title">Managed Services</h5>
									<div class="card-text">
										<p>Not all business need or want to invest the time and energy maintaining their site or application.
										<p>Providing <strong>application support</strong> as well as <strong>managing infrastructure</strong> are crucial to reducing a business overhead and costs.
									</div>
									<a href="/services/managed-services" class="btn btn-primary">See Managed Services</a>
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
