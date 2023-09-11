<?php
$DesignCard1 = new Card();
$DesignCard1->setAlignment('center');
$DesignCard1->setIcon('fa-solid fa-object-group');
$DesignCard1->showIcon(true);
$DesignCard1->setTitle('Enhanced User Experience (UX)');
$DesignCard1->setExcerpt(' Implementing quality design principles ensures that websites and applications are intuitive, visually appealing, and user-friendly, resulting in higher user satisfaction and engagement.');
$DesignCard1->showButton(false);

$DesignCard2 = new Card();
$DesignCard2->setAlignment('center');
$DesignCard2->setIcon('fa-solid fa-swatchbook');
$DesignCard2->showIcon(true);
$DesignCard2->setTitle('Improved Brand Image');
$DesignCard2->setExcerpt('Quality design helps convey a professional and trustworthy brand image, instilling confidence in visitors and potential customers, which can positively impact conversion rates.');
$DesignCard2->showButton(false);

$DesignCard3 = new Card();
$DesignCard3->setAlignment('center');
$DesignCard3->setIcon('fa-solid  fa-hand-holding-dollar');
$DesignCard3->showIcon(true);
$DesignCard3->setTitle('Reduced Development Costs');
$DesignCard3->setExcerpt('By adhering to design principles from the outset, web consultancies can avoid costly redesigns and modifications down the road, saving clients both time and money.');
$DesignCard3->showButton(false);

$DesignCard4 = new Card();
$DesignCard4->setAlignment('center');
$DesignCard4->setIcon('fa-solid fa-universal-access');
$DesignCard4->showIcon(true);
$DesignCard4->setTitle('Better Accessibility and Inclusivity');
$DesignCard4->setExcerpt('Quality design considers accessibility standards, making web content available to a wider audience, including those with disabilities, which aligns with ethical and legal obligations.');
$DesignCard4->showButton(false);

$DesignCard5 = new Card();
$DesignCard5->setAlignment('center');
$DesignCard5->setIcon('fa-solid fa-person-running');
$DesignCard5->showIcon(true);
$DesignCard5->setTitle('Competitive Advantage');
$DesignCard5->setExcerpt('Well-designed websites and applications stand out in a crowded online landscape, giving clients a competitive edge by attracting and retaining users and customers.');
$DesignCard5->showButton(false);
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

							<?php $DesignCard1->render(); ?>

						</div>

						<div class="col">

							<?php $DesignCard2->render(); ?>

						</div>

						<div class="col">

							<?php $DesignCard3->render(); ?>

						</div>

						<div class="col">

							<?php $DesignCard4->render(); ?>

						</div>

						<div class="col">

							<?php $DesignCard5->render(); ?>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
