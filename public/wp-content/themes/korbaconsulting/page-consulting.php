<?php
$ConsultingCard1 = new Card();
$ConsultingCard1->setAlignment('center');
$ConsultingCard1->setIcon('fa-solid fa-ranking-star');
$ConsultingCard1->showIcon(true);
$ConsultingCard1->setTitle('Performance-Driven KPI Analysis');
$ConsultingCard1->setExcerpt('We meticulously analyze key performance indicators (KPIs) to measure the effectiveness of your web solutions. Our data-driven approach helps you make informed decisions and optimize your online presence for maximum ROI.');
$ConsultingCard1->showButton(false);

$ConsultingCard2 = new Card();
$ConsultingCard2->setAlignment('center');
$ConsultingCard2->setIcon('fa-solid fa-chart-line');
$ConsultingCard2->showIcon(true);
$ConsultingCard2->setTitle('ROI-Centric Strategies');
$ConsultingCard2->setExcerpt('Our services are designed with ROI in mind. We develop and implement strategies that not only enhance your web presence but also deliver tangible returns on your investment, ensuring every dollar spent counts.');
$ConsultingCard2->showButton(false);

$ConsultingCard3 = new Card();
$ConsultingCard3->setAlignment('center');
$ConsultingCard3->setIcon('fa-solid fa-bars-progress');
$ConsultingCard3->showIcon(true);
$ConsultingCard3->setTitle('Streamlined Processes');
$ConsultingCard3->setExcerpt('We optimize web development processes to ensure efficiency and cost-effectiveness. By eliminating bottlenecks and enhancing workflows, we save you time and resources while delivering high-quality solutions on time.');
$ConsultingCard3->showButton(false);

$ConsultingCard4 = new Card();
$ConsultingCard4->setAlignment('center');
$ConsultingCard4->setIcon('fa-solid fa-magnifying-glass-chart');
$ConsultingCard4->showIcon(true);
$ConsultingCard4->setTitle('Data-Backed Insights');
$ConsultingCard4->setExcerpt('We leverage effective analysis techniques to provide you with actionable insights. Our data-driven recommendations and continuous monitoring enable you to adapt and improve your web strategies for sustained success.');
$ConsultingCard4->showButton(false);

$ConsultingCard5 = new Card();
$ConsultingCard5->setAlignment('center');
$ConsultingCard5->setIcon('fa-solid fa-gears');
$ConsultingCard5->showIcon(true);
$ConsultingCard5->setTitle('Customized Solutions');
$ConsultingCard5->setExcerpt('We understand that one size doesn\'t fit all. Our services are tailored to your unique business needs, ensuring that your web solutions align perfectly with your goals, industry, and target audience.');
$ConsultingCard5->showButton(false);
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

							<?php $ConsultingCard1->render(); ?>

						</div>

						<div class="col">

							<?php $ConsultingCard2->render(); ?>

						</div>

						<div class="col">

							<?php $ConsultingCard3->render(); ?>

						</div>

						<div class="col">

							<?php $ConsultingCard4->render(); ?>

						</div>

						<div class="col">

							<?php $ConsultingCard5->render(); ?>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
