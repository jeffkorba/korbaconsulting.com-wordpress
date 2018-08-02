<!doctype html>
<html>

	<head>

		<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="author" content="Jeff Korba">
		<meta name="description" content="Korba Consulting">
	    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">

		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,400i,700i" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/global.css" />

		<script src="<?php bloginfo('template_url'); ?>/vendor/jquery/jquery.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/vendor/popper/popper.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/vendor/fontawesome/js/fontawesome-all.min.js"></script>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="container-fluid">

			<div class="container">

				<div class="row">

					<header>

						<div class="menu-toggle">

							<i class="fas fa-bars fa-2x"></i>

						</div>

						<nav>

							<ul>

								<li class="tab">
									<a href="/">Home</a>
								</li>

								<li class="tab">

									<a href="/services">Services</a>

									<ul class="menu-dropdown d-none">

										<li class="menu-item"><a href="/consulting">Consulting</a></li>
										<li class="menu-item"><a href="/design">Design</a></li>
										<li class="menu-item"><a href="/development">Development</a></li>
										<li class="menu-item"><a href="/managed-services">Managed Services</a></li>

									</ul>

								</li>

								<li class="tab">

									<a href="/work/portfolio">Portfolio</a>

									<ul class="menu-dropdown d-none">

										<li class="menu-item"><a href="/portfolio">Portfolio</a></li>
										<li class="menu-item d-none"><a href="/case-studies">Case Studies</a></li>

									</ul>

								</li>

								<li class="tab d-none">

									<a href="/about">About</a>

									<ul class="menu-dropdown">

										<li class="menu-item"><a href="/about/the-company">The Company</a></li>
										<li class="menu-item"><a href="/about/our-process">Our Process</a></li>

									</ul>

								</li>

								<li class="tab">
									<a href="/careers">Careers</a>
								</li>

								<li class="tab">
									<a href="/contact">Contact</a>
								</li>

							</ul>

						</nav>

						<div class="logo">

							<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logos/korba-consulting-small.png" alt="<?php bloginfo('name'); ?>"></a>

						</div>

					</header>

					<aside>

						<nav>

							<ul>

								<li><a href="/">Home</a></li>

								<li><a href="/services">Services</a></li>

								<li><a href="/work/portfolio">Portfolio</a></li>

								<li class="d-none"><a href="/about">About</a></li>

								<li><a href="/careers">Careers</a></li>

								<li><a href="/contact">Contact</a></li>

							</ul>

						</nav>

					</aside>

				</div>

			</div>

		</div>
