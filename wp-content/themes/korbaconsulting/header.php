<?php
global $post;
?>

<!doctype html>
<html>

	<head>

		<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="author" content="Jeff Korba">
		<meta name="description" content="Korba Consulting">
	    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">

		<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/logos/korba-consulting-square.png" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/vendor/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/static/css/main.css" />

		<script src="<?php bloginfo('template_url'); ?>/vendor/axios/axios.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/vendor/fontawesome-free/js/all.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/vendor/vue/vue.global.js"></script>

	</head>

	<body <?php body_class(); ?>>

		<header>

			<div class="desktop d-none d-sm-none d-md-none d-lg-block">

				<div class="container">

					<div class="row">

						<div class="col-6">

							<div class="logo">

								<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logos/korba-consulting-small.png" alt="<?php bloginfo('name'); ?>"></a>

							</div>

						</div>

						<div class="col-6">

							<nav>

								<ul>

									<li class="tab <?php echo ($_SERVER['REQUEST_URI'] === '/') ? 'active' : '' ?>">
										<a href="/">Home</a>
									</li>

									<li class="tab <?php echo ($post->post_name === 'services') ? 'active' : '' ?>">

										<a href="/services">Services</a>

										<ul class="menu-dropdown">

											<li class="menu-item"><a href="/services/consulting">Consulting</a></li>
											<li class="menu-item"><a href="/services/design">Design</a></li>
											<li class="menu-item"><a href="/services/development">Development</a></li>
											<li class="menu-item"><a href="/services/managed-services">Managed Services</a></li>

										</ul>

									</li>

									<li class="tab <?php echo ($post->post_name === 'portfolio') ? 'active' : '' ?>">

										<a href="/work">Work</a>

										<ul class="menu-dropdown">

											<li class="menu-item"><a href="/work/portfolio">Portfolio</a></li>
											<li class="menu-item"><a href="/work/case-studies">Case Studies</a></li>

										</ul>

									</li>

									<li class="tab <?php echo ($post->post_name === 'about') ? 'active' : '' ?>">

										<a href="/about">About</a>

										<ul class="menu-dropdown">

											<li class="menu-item"><a href="/about/the-company">The Company</a></li>
											<li class="menu-item"><a href="/about/the-philosophy">The Philosophy</a></li>
											<li class="menu-item"><a href="/blog">Blog</a></li>

										</ul>

									</li>

									<li class="tab <?php echo ($post->post_name === 'contact') ? 'active' : '' ?>">
										<a href="/contact">Contact</a>
									</li>

								</ul>

							</nav>

						</div>

					</div>

				</div>

			</div>

			<div class="mobile d-lg-none">
				
				<div class="logo">

					<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logos/korba-consulting-square.png" alt="<?php bloginfo('name'); ?>"></a>

				</div>

				<div class="menu-toggle" v-on:click="toggleMenu">

					<span v-show="!isActive"><i class="fas fa-bars fa-2x"></i></span>

					<span v-show="isActive"><i class="fas fa-xmark fa-2x"></i></span>

				</div>

				<nav v-bind:class="{active: isActive}">

					<ul>

						<li><a href="/">Home</a></li>

						<li><a href="/services">Services</a></li>

						<li><a href="/work">Work</a></li>

						<li><a href="/about">About</a></li>

						<li><a href="/contact">Contact</a></li>

					</ul>

				</nav>

			</div>

		</header>
