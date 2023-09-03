<div class="desktop d-none d-sm-none d-md-none d-lg-block">

	<div class="container">

		<div class="row">

			<div class="col-3">

				<div class="logo">

					<a href="/"><img src="<?php bloginfo('template_url'); ?>/static/images/korba-consulting-logo-500x200.png" alt="<?php bloginfo('name'); ?>"></a>

				</div>

			</div>

			<div class="col-9">

				<nav>

					<ul>

						<li class="tab <?php echo is_tab_active('home') ? 'active' : '' ?>">
							<a href="/">Home</a>
						</li>

						<li class="tab <?php echo is_tab_active('services') ? 'active' : '' ?>">

							<a href="/services">Services</a>

							<?php
							wp_nav_menu([
								'theme_location' => 'services-menu',
								'menu_class' => 'menu-dropdown',
								'container' => false
							]);
							?>

						</li>

						<li class="tab <?php echo is_tab_active('portfolio') ? 'active' : '' ?>">

							<a href="/portfolio">Portfolio</a>

							<?php
							wp_nav_menu([
								'theme_location' => 'portfolio-menu',
								'menu_class' => 'menu-dropdown',
								'container' => false
							]);
							?>

						</li>

						<li class="tab <?php echo is_tab_active('company') ? 'active' : '' ?>">

							<a href="/company">Company</a>

							<?php
							wp_nav_menu([
								'theme_location' => 'company-menu',
								'menu_class' => 'menu-dropdown',
								'container' => false
							]);
							?>

						</li>

						<li class="tab <?php echo is_tab_active('contact') ? 'active' : '' ?>">
							<a href="/contact">Contact</a>
						</li>

					</ul>

				</nav>

			</div>

		</div>

	</div>

</div>