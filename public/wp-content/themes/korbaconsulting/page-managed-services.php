<?php
$card1 = new Card();
$card1->setTitle('Focus on Core Business');
$card1->setExcerpt('Managed services allow web consultancies to offload routine tasks such as server maintenance, security updates, and monitoring, enabling them to focus on delivering high-value web solutions and strategic consulting to clients.');
$card1->showButton(false);

$card2 = new Card();
$card2->setTitle('Scalability and Flexibility');
$card2->setExcerpt('Managed services providers often offer scalable solutions, allowing web consultancies to adapt to changing client needs without the burden of infrastructure management, ensuring they can efficiently handle projects of any size.');
$card2->showButton(false);

$card3 = new Card();
$card3->setTitle('Enhanced Security and Compliance');
$card3->setExcerpt('Managed services providers typically have specialized expertise in security and compliance, reducing the risk of data breaches and legal issues for web consultancies and their clients.');
$card3->showButton(false);

$card4 = new Card();
$card4->setTitle('Cost Savings');
$card4->setExcerpt('By outsourcing various technical and operational aspects, web consultancies can reduce their overhead costs, including hiring and training specialized staff, which can lead to improved profitability and competitive pricing for clients.');
$card4->showButton(false);

$card5 = new Card();
$card5->setTitle('Continuous Innovation');
$card5->setExcerpt('Managed services providers often stay on the cutting edge of technology, ensuring that web consultancies and their clients benefit from the latest tools and solutions without the need for constant research and development efforts.');
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
