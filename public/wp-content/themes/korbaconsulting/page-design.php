<?php
$card1 = new Card();
$card1->setTitle('Enhanced User Experience (UX)');
$card1->setExcerpt(' Implementing quality design principles ensures that websites and applications are intuitive, visually appealing, and user-friendly, resulting in higher user satisfaction and engagement.');
$card1->showButton(false);

$card2 = new Card();
$card2->setTitle('Improved Brand Image');
$card2->setExcerpt('Quality design helps convey a professional and trustworthy brand image, instilling confidence in visitors and potential customers, which can positively impact conversion rates.');
$card2->showButton(false);

$card3 = new Card();
$card3->setTitle('Reduced Development Costs');
$card3->setExcerpt('By adhering to design principles from the outset, web consultancies can avoid costly redesigns and modifications down the road, saving clients both time and money.');
$card3->showButton(false);

$card4 = new Card();
$card4->setTitle('Better Accessibility and Inclusivity');
$card4->setExcerpt('Quality design considers accessibility standards, making web content available to a wider audience, including those with disabilities, which aligns with ethical and legal obligations.');
$card4->showButton(false);

$card5 = new Card();
$card5->setTitle('Competitive Advantage');
$card5->setExcerpt('Well-designed websites and applications stand out in a crowded online landscape, giving clients a competitive edge by attracting and retaining users and customers.');
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
