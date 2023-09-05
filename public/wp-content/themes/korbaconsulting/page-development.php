<?php
$card1 = new Card();
$card1->setTitle('Scalable Architectural Patterns');
$card1->setExcerpt('Scalable architectural patterns empower clients with the flexibility to expand their web applications seamlessly as their user base grows. This scalability ensures that clients can handle increased traffic, maintain consistent performance, and evolve their digital presence in alignment with their business objectives, ultimately maximizing their online success.');
$card1->showButton(false);

$card2 = new Card();
$card2->setTitle('Microservice Mindset');
$card2->setExcerpt('A microservice architecture offers clients increased agility and scalability by breaking down complex systems into smaller, independent services that can be developed, deployed, and scaled individually. This approach enables clients to efficiently adapt to changing market demands, reduce system downtime, and streamline maintenance, ultimately ensuring the long-term success and competitiveness of their web applications.');
$card2->showButton(false);

$card3 = new Card();
$card3->setTitle('Pairing Technologies');
$card3->setExcerpt('We specialize in JavaScript and PHP, offering unparalleled expertise in these core technologies. We harness the power of JavaScript for dynamic front-end experiences and PHP for server-side functionality, ensuring seamless integration and performance optimization.');
$card3->showButton(false);

$card4 = new Card();
$card4->setTitle('Agile Development Process');
$card4->setExcerpt('Our consultancy follows a typical Agile development process, emphasizing collaboration and adaptability. With iterative development cycles, frequent client feedback, and a commitment to client-centric solutions, we ensure that your evolving needs are met efficiently and effectively throughout the project lifecycle.');
$card4->showButton(false);

$card5 = new Card();
$card5->setTitle('WordPress');
$card5->setExcerpt('We excel in custom WordPress solutions, tailoring the world\'s most popular content management system to meet your specific requirements. Whether it\'s building a corporate website, e-commerce platform, or a blog, we leverage the full potential of WordPress to deliver user-friendly and feature-rich websites.');
$card5->showButton(false);

$card6 = new Card();
$card6->setTitle('Laravel');
$card6->setExcerpt('Laravel offers clients the advantage of rapid development, robust security features, and an extensive ecosystem of plugins and packages. This results in faster time-to-market, reduced development costs, and the confidence that their web applications will be both feature-rich and highly secure, ultimately enhancing their online presence and user experiences.');
$card6->showButton(false);

$card7 = new Card();
$card7->setTitle('Vue.js');
$card7->setExcerpt('Vue.js empowers clients with exceptionally responsive and interactive web interfaces, enhancing user engagement and satisfaction. Its modular architecture and strong developer community support ensure that clients receive feature-rich, maintainable web applications that can adapt and scale to meet their evolving business needs.');
$card7->showButton(false);
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

					<h3>Process</h3>

					<div class="row row-cols-auto row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-gap-4 mb-4">

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

					</div>

					<h3>Technology</h3>

					<div class="row row-cols-auto row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-gap-4">

						<div class="col">

							<?php $card5->render(); ?>

						</div>

						<div class="col">

							<?php $card6->render(); ?>

						</div>

						<div class="col">

							<?php $card7->render(); ?>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
