<?php
$ManagedServicesCard1 = new Card();
$ManagedServicesCard1->setAlignment('center');
$ManagedServicesCard1->setIcon('fa-solid fa-building');
$ManagedServicesCard1->showIcon(true);
$ManagedServicesCard1->setTitle('Focus on Core Business');
$ManagedServicesCard1->setExcerpt('Managed services allow web consultancies to offload routine tasks such as server maintenance, security updates, and monitoring, enabling them to focus on delivering high-value web solutions and strategic consulting to clients.');
$ManagedServicesCard1->showButton(false);

$ManagedServicesCard2 = new Card();
$ManagedServicesCard2->setAlignment('center');
$ManagedServicesCard2->setIcon('fa-solid fa-layer-group');
$ManagedServicesCard2->showIcon(true);
$ManagedServicesCard2->setTitle('Scalability and Flexibility');
$ManagedServicesCard2->setExcerpt('Managed services providers often offer scalable solutions, allowing web consultancies to adapt to changing client needs without the burden of infrastructure management, ensuring they can efficiently handle projects of any size.');
$ManagedServicesCard2->showButton(false);

$ManagedServicesCard3 = new Card();
$ManagedServicesCard3->setAlignment('center');
$ManagedServicesCard3->setIcon('fa-solid fa-shield');
$ManagedServicesCard3->showIcon(true);
$ManagedServicesCard3->setTitle('Enhanced Security and Compliance');
$ManagedServicesCard3->setExcerpt('Managed services providers typically have specialized expertise in security and compliance, reducing the risk of data breaches and legal issues for web consultancies and their clients.');
$ManagedServicesCard3->showButton(false);

$ManagedServicesCard4 = new Card();
$ManagedServicesCard4->setAlignment('center');
$ManagedServicesCard4->setIcon('fa-solid fa-sack-dollar');
$ManagedServicesCard4->showIcon(true);
$ManagedServicesCard4->setTitle('Cost Savings');
$ManagedServicesCard4->setExcerpt('By outsourcing various technical and operational aspects, web consultancies can reduce their overhead costs, including hiring and training specialized staff, which can lead to improved profitability and competitive pricing for clients.');
$ManagedServicesCard4->showButton(false);

$ManagedServicesCard5 = new Card();
$ManagedServicesCard5->setAlignment('center');
$ManagedServicesCard5->setIcon('fa-solid fa-arrows-spin');
$ManagedServicesCard5->showIcon(true);
$ManagedServicesCard5->setTitle('Continuous Innovation');
$ManagedServicesCard5->setExcerpt('Managed services providers often stay on the cutting edge of technology, ensuring that web consultancies and their clients benefit from the latest tools and solutions without the need for constant research and development efforts.');
$ManagedServicesCard5->showButton(false);
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

							<?php $ManagedServicesCard1->render(); ?>

						</div>

						<div class="col">

							<?php $ManagedServicesCard2->render(); ?>

						</div>

						<div class="col">

							<?php $ManagedServicesCard3->render(); ?>

						</div>

						<div class="col">

							<?php $ManagedServicesCard4->render(); ?>

						</div>

						<div class="col">

							<?php $ManagedServicesCard5->render(); ?>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
