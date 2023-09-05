<?php
$WordPressCard = new Card();
$WordPressCard->setTitle('WordPress');
$WordPressCard->setExcerpt('We excel in custom WordPress solutions, tailoring the world\'s most popular content management system to meet your specific requirements. Whether it\'s building a corporate website, e-commerce platform, or a blog, we leverage the full potential of WordPress to deliver user-friendly and feature-rich websites.');
$WordPressCard->showButton(false);

$LaravelCard = new Card();
$LaravelCard->setTitle('Laravel');
$LaravelCard->setExcerpt('Laravel offers clients the advantage of rapid development, robust security features, and an extensive ecosystem of plugins and packages. This results in faster time-to-market, reduced development costs, and the confidence that their web applications will be both feature-rich and highly secure, ultimately enhancing their online presence and user experiences.');
$LaravelCard->showButton(false);

$VueCard = new Card();
$VueCard->setTitle('Vue.js');
$VueCard->setExcerpt('Vue.js empowers clients with exceptionally responsive and interactive web interfaces, enhancing user engagement and satisfaction. Its modular architecture and strong developer community support ensure that clients receive feature-rich, maintainable web applications that can adapt and scale to meet their evolving business needs.');
$VueCard->showButton(false);
?>

<?php get_header(); ?>

<main class="services">

	<div class="banner">

		<div class="container">

			<div class="row">

				<div class="col-lg-12">

					<h1 class="title"><?php echo $post->post_title; ?></h1>

				</div>

			</div>

		</div>

	</div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12">

				<article>

					<div class="row row-cols-auto row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-gap-4">

						<div class="col">

							<?php $WordPressCard->render(); ?>

						</div>

						<div class="col">

							<?php $LaravelCard->render(); ?>

						</div>

						<div class="col">

							<?php $VueCard->render(); ?>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
