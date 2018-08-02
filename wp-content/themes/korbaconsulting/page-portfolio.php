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

			<div class="col-lg-12">

				<article>
					<div class="card-deck mb-4">
						<div class="card">
							<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/logos/clients/allstate.png" alt="Allstate">
						</div>

						<div class="card">
							<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/logos/clients/apex-clearing.png" alt="Apex Clearing">
						</div>

						<div class="card">
							<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/logos/clients/follett.png" alt="Follett">
						</div>
					</div>

					<div class="card-deck mb-4">
						<div class="card">
							<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/logos/clients/ncsa.png" alt="NCSA">
						</div>

						<div class="card">
							<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/logos/clients/northern-trust.png" alt="Northern Trust">
						</div>

						<div class="card">
							<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/logos/clients/optionshouse.png" alt="OptionsHouse">
						</div>
					</div>

					<div class="card-deck mb-4">
						<div class="card">
							<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/logos/clients/betty-crocker.png" alt="Betty Crocker">
						</div>

						<div class="card">
							<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/logos/clients/valspar.png" alt="Valspar">
						</div>

						<div class="card">
							<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/logos/clients/chicago-booth.png" alt="Chicago Booth">
						</div>
					</div>

					<div class="card-deck">
						<div class="card">
							<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/logos/clients/humana.png" alt="Humana">
						</div>
						<div class="offset-8"></div>
					</div>
				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
