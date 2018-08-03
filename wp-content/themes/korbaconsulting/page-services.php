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

			<div class="col-lg-12">

				<article>

					<section class="row no-gutters consulting">

						<div class="col-lg-6 col-sm-12 content">
							<h3>Consulting</h3>
							<hr />
							<p>Understanding a client's business is only the start to <strong>earning their confidence</strong>.
							<p>Being able to develop strategies that <strong>drive innovation</strong> and <strong>foster growth</strong> are requisites to maintaining a <strong>long-term client relationship</strong>.
						</div>

						<div class="col-lg-6 col-sm-12"><img src="<?php bloginfo('template_url'); ?>/images/services/consulting.jpg" alt="Consulting" /></div>

					</section>

					<section class="row no-gutters design">

						<div class="col-lg-6 col-sm-12"><img src="<?php bloginfo('template_url'); ?>/images/services/design.jpg" alt="Design" /></div>

						<div class="col-lg-6 col-sm-12 content">
							<h3>Design</h3>
							<hr />
							<p><strong>Information Achitecture</strong>, <strong>Content Strategy</strong>, <strong>User Experience</strong> and <strong>Visual Design</strong> are fundemental pillars that make quality design a reality.
							<p>Understanding your brand is <strong>essential</strong> to ensuring that each of these <strong>pillars</strong> stands upright.
						</div>

					</section>

					<section class="row no-gutters development">

						<div class="col-lg-6 col-sm-12 content">
							<h3>Development</h3>
							<hr />
							<p>If you want to build <strong>quality software</strong>, you have to build a solid foundation for each system layer to rest upon.
							<p>That means focusing on the <strong>bigger picture</strong> and not simply features and functionality.
						</div>

						<div class="col-lg-6 col-sm-12"><img src="<?php bloginfo('template_url'); ?>/images/services/development.jpg" alt="Development" /></div>

					</section>

					<section class="row no-gutters managed-services">

						<div class="col-lg-6 col-sm-12"><img src="<?php bloginfo('template_url'); ?>/images/services/managed-services.jpg" alt="Managed Services" /></div>

						<div class="col-lg-6 col-sm-12 content">
							<h3>Managed Services</h3>
							<hr />
							<p>Not all business need or want to invest the time and energy maintaining their site or application.
							<p>Providing <strong>application support</strong> as well as <strong>managing infrastructure</strong> are crucial to reducing a business overhead and costs.
						</div>

					</section>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
