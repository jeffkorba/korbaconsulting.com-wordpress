		<footer>

			<div class="container">

				<div class="row">

					<div class="col col-lg-9">

						<div class="row">

							<div class="col-lg-3 mb-3">

								<h5>Services</h5>

								<?php
								wp_nav_menu([
									'theme_location' => 'services-menu',
									'menu_class' => 'menu-list',
									'container' => false
								]);
								?>

							</div>

							<div class="col-lg-3 mb-3">

								<h5>Work</h5>

								<?php
								wp_nav_menu([
									'theme_location' => 'work-menu',
									'menu_class' => 'menu-list',
									'container' => false
								]);
								?>

							</div>

							<div class="col-lg-3 mb-3">

								<h5>About</h5>

								<?php
								wp_nav_menu([
									'theme_location' => 'about-menu',
									'menu_class' => 'menu-list',
									'container' => false
								]);
								?>

							</div>

						</div>

					</div>

					<div class="col col-lg-3 text-end mb-3">
						<h5>Contact</h5>
						
						<ul class="social-icons float-end mb-1">
						
							<li><a href="https://www.facebook.com/korbaconsulting" target="_blank"><i class="fa-brands fa-square-facebook fa-3x"></i></a></li>
							<li class="ms-2"><a href="https://twitter.com/korbaconsulting" target="_blank"><i class="fa-brands fa-square-x-twitter fa-3x"></i></a></li>
							<li class="ms-2"><a href="https://www.linkedin.com/company/korbaconsulting" target="_blank"><i class="fa-brands fa-linkedin fa-3x"></i></a></li>
						</ul>

						<a href="mailto:<?php echo DEFAULT_EMAIL_ADDRESS; ?>"><?php echo DEFAULT_EMAIL_ADDRESS; ?></a><br />
						<a href="tel:+13127722642">312.772.2642</a>
					</div>

				</div>

				<div class="row">
					<div class="col-lg-12">
						&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo home_url('privacy-policy'); ?>">Privacy Policy</a>
					</div>
				</div>

			</div>

		</footer>

		<?php wp_footer(); ?>

	</body>

</html>
