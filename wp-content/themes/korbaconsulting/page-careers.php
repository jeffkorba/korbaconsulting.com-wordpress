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
					<div class="card-deck">
						<div class="card">
							<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/positions/sales.jpg" alt="Technical Sales Specialist">
							<div class="card-body">
								<h5 class="card-title">Technical Sales Specialist</h5>
								<p class="card-text">Build leads, draft proposals, research market trends, and manage client engagements.</p>
								<a href="/careers/technical-sales-specialist" class="btn btn-secondary btn-sm">View Position</a>
							</div>
						</div>

						<div class="card">
							<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/positions/design.jpg" alt="UI/UX Designer">
							<div class="card-body">
								<h5 class="card-title">UI/UX Designer</h5>
								<p class="card-text">Create interfaces for websites and web applications. Design user experiences that are both intuitive and modern.</p>
								<a href="/careers/ui-ux-designer" class="btn btn-secondary btn-sm">View Position</a>
							</div>
						</div>

						 <div class="offset-4"></div>
					</div>
				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
