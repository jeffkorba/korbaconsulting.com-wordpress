<?php
$card1 = new Card();
$card1->setTitle('Performance-Driven KPI Analysis');
$card1->setExcerpt('We meticulously analyze key performance indicators (KPIs) to measure the effectiveness of your web solutions. Our data-driven approach helps you make informed decisions and optimize your online presence for maximum ROI.');
$card1->showButton(false);

$card2 = new Card();
$card2->setTitle('ROI-Centric Strategies');
$card2->setExcerpt('Our services are designed with ROI in mind. We develop and implement strategies that not only enhance your web presence but also deliver tangible returns on your investment, ensuring every dollar spent counts.');
$card2->showButton(false);

$card3 = new Card();
$card3->setTitle('Streamlined Processes');
$card3->setExcerpt('We optimize web development processes to ensure efficiency and cost-effectiveness. By eliminating bottlenecks and enhancing workflows, we save you time and resources while delivering high-quality solutions on time.');
$card3->showButton(false);

$card4 = new Card();
$card4->setTitle('Data-Backed Insights');
$card4->setExcerpt('We leverage effective analysis techniques to provide you with actionable insights. Our data-driven recommendations and continuous monitoring enable you to adapt and improve your web strategies for sustained success.');
$card4->showButton(false);

$card5 = new Card();
$card5->setTitle('Customized Solutions');
$card5->setExcerpt('We understand that one size doesn\'t fit all. Our services are tailored to your unique business needs, ensuring that your web solutions align perfectly with your goals, industry, and target audience.');
$card5->showButton(false);
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

							<?php $card1->render(); ?>

						</div>

						<div class="col">

							<?php $card2->render(); ?>

						</div>

						<div class="col">

							<?php $card3->render(); ?>

						</div>

						<div class="col">

							<?php $card4->render(); ?>

						</div>

						<div class="col">

							<?php $card5->render(); ?>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
