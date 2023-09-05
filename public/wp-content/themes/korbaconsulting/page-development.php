<?php
$DevelopmentCard1 = new Card();
$DevelopmentCard1->setTitle('Scalable Architectural Patterns');
$DevelopmentCard1->setExcerpt('Scalable architectural patterns empower clients with the flexibility to expand their web applications seamlessly as their user base grows. This scalability ensures that clients can handle increased traffic, maintain consistent performance, and evolve their digital presence in alignment with their business objectives, ultimately maximizing their online success.');
$DevelopmentCard1->showButton(false);

$DevelopmentCard2 = new Card();
$DevelopmentCard2->setTitle('Microservice Mindset');
$DevelopmentCard2->setExcerpt('This approach offers clients increased agility and scalability by breaking down complex systems into smaller, independent services that can be developed, deployed, and scaled individually. By enabling clients to efficiently adapt to changing market demands, reduce system downtime, and streamline maintenance, it ultimately ensures the long-term success and competitiveness of their web applications.');
$DevelopmentCard2->showButton(false);

$DevelopmentCard3 = new Card();
$DevelopmentCard3->setTitle('Core Technologies');
$DevelopmentCard3->setExcerpt('We specialize in JavaScript and PHP, offering unparalleled expertise in these core technologies. We harness the power of JavaScript for dynamic front-end experiences and PHP for server-side functionality, ensuring seamless integration and performance optimization.');
$DevelopmentCard3->showButton(false);

$DevelopmentCard4 = new Card();
$DevelopmentCard4->setTitle('Agile Development Process');
$DevelopmentCard4->setExcerpt('Our consultancy follows a typical Agile development process, emphasizing collaboration and adaptability. With iterative development cycles, frequent client feedback, and a commitment to client-centric solutions, we ensure that your evolving needs are met efficiently and effectively throughout the project lifecycle.');
$DevelopmentCard4->showButton(false);
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

					<div class="row row-cols-auto row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-gap-4 mb-4">

						<div class="col">

							<?php $DevelopmentCard1->render(); ?>

						</div>

						<div class="col">

							<?php $DevelopmentCard2->render(); ?>

						</div>

						<div class="col">

							<?php $DevelopmentCard3->render(); ?>

						</div>

						<div class="col">

							<?php $DevelopmentCard4->render(); ?>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
