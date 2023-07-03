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

					<div class="row row-cols-auto row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-gap-4">

						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/allstate.png" alt="Allstate">
							</div>
						</div>

						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/apex-clearing.png" alt="Apex Clearing">
							</div>
						</div>

						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/follett.png" alt="Follett">
							</div>
						</div>
					
						<div class="col-12">					
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/ncsa.png" alt="NCSA">
							</div>
						</div>

						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/northern-trust.png" alt="Northern Trust">
							</div>
						</div>

						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/optionshouse.png" alt="OptionsHouse">
							</div>
						</div>
						
						<div class="col-12">						
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/betty-crocker.png" alt="Betty Crocker">
							</div>
						</div>

						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/valspar.png" alt="Valspar">
							</div>
						</div>

						<div class="col-12">
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/chicago-booth.png" alt="Chicago Booth">
							</div>
						</div>
						
						<div class="col-12">						
							<div class="card">
								<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/static/images/logos/clients/humana.png" alt="Humana">
							</div>
						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
