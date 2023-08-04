		<footer>

			<div class="container">

				<div class="row">

					<div class="col col-lg-9">

						<div class="row">

							<div class="col-lg-3 mb-3">
								<h5>Services</h5>
								<ul class="menu-list">
									<li class="menu-item"><a href="/services/consulting">Consulting</a></li>
									<li class="menu-item"><a href="/services/design">Design</a></li>
									<li class="menu-item"><a href="/services/development">Development</a></li>
									<li class="menu-item"><a href="/services/managed-services">Managed Services</a></li>
								</ul>
							</div>

							<div class="col-lg-3 mb-3">
								<h5>Work</h5>
								<ul class="menu-list">
									<li class="menu-item"><a href="/work/portfolio">Portfolio</a></li>
									<li class="menu-item"><a href="/work/case-studies">Case Studies</a></li>
								</ul>
							</div>

							<div class="col-lg-3 mb-3">
								<h5>About</h5>
								<ul class="menu-list">
									<li class="menu-item"><a href="/about/the-company">The Company</a></li>
									<li class="menu-item"><a href="/about/the-philosophy">The Philosophy</a></li>
									<li class="menu-item"><a href="/blog">Blog</a></li>
								</ul>
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
