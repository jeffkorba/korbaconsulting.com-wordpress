<?php get_header(); the_post(); ?>

<main>

	<div class="banner">

		<div class="container">

			<div class="row">

				<div class="col-lg-12">

					<h1 class="title"><?php the_title(); ?></h1>

				</div>

			</div>

		</div>

	</div>

	<div class="container">

		<div class="row">

			<div class="col-12">

				<article>

					<div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-gap-4">

						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/allstate.webp" alt="Allstate">
							</div>
						</div>

						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/peak6.webp" alt="Peak6">
							</div>
						</div>

						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/follett.webp" alt="Follett">
							</div>
						</div>
					
						<div class="col-12">					
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/ncsa.webp" alt="NCSA">
							</div>
						</div>

						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/northern-trust.webp" alt="Northern Trust">
							</div>
						</div>
						
						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/betty-crocker.webp" alt="Betty Crocker">
							</div>
						</div>

						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/valspar.webp" alt="Valspar">
							</div>
						</div>

						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/university-of-chicago.webp" alt="Univeristy of Chicago">
							</div>
						</div>
						
						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/humana.webp" alt="Humana">
							</div>
						</div>

						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/supercuts.webp" alt="Supercuts">
							</div>
						</div>

						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/ifcj.webp" alt="International Fellowship of Christians and Jews">
							</div>
						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
