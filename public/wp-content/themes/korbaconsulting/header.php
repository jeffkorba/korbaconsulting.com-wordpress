<!doctype html>
<html>

	<head>

		<title><?php echo get_site_title(); ?></title>

		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta name="author" content="Korba Consulting">
		<meta name="description" content="A consultancy that specializes in building innovative, flexible and scalable web applications.">

		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . FAVICON_FILE_LOCATION ?>" />

		<?php wp_head(); ?>

		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-F2Q9F6L6LZ"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-F2Q9F6L6LZ');
		</script>

	</head>

	<body <?php body_class(); ?>>

		<header>

			<?php get_template_part('template-parts/pages/header', 'desktop'); ?>

			<?php get_template_part('template-parts/pages/header', 'mobile'); ?>

		</header>
