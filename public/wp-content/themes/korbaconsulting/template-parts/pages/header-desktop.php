<div class="desktop d-none d-sm-none d-md-none d-lg-block">

	<div class="container">

		<div class="row">

			<div class="col-6">

				<div class="logo">

					<a href="/"><img src="<?php bloginfo('template_url'); ?>/static/images/logos/korba-consulting.png" alt="<?php bloginfo('name'); ?>"></a>

				</div>

			</div>

			<div class="col-6">

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

						<li class="tab <?php echo is_tab_active('work') ? 'active' : '' ?>">

							<a href="/work">Work</a>

							<?php
							wp_nav_menu([
								'theme_location' => 'work-menu',
								'menu_class' => 'menu-dropdown',
								'container' => false
							]);
							?>

						</li>

						<li class="tab <?php echo is_tab_active('about') ? 'active' : '' ?>">

							<a href="/about">About</a>

							<?php
							wp_nav_menu([
								'theme_location' => 'about-menu',
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