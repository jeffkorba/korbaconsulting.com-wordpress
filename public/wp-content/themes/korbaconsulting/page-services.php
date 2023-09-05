<?php
$consulting_posts = get_posts([
	'name' => 'consulting',
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
]);
$development_posts = get_posts([
	'name' => 'development',
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
]);
$design_posts = get_posts([
	'name' => 'design',
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
]);
$managed_services_posts = get_posts([
	'name' => 'managed-services',
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
]);

$ConsultingCard = new Card($consulting_posts[0]);
$ConsultingCard->setButtonLabel('Learn More');

$DevelopmentCard = new Card($development_posts[0]);
$DevelopmentCard->setButtonLabel('Learn More');

$DesignCard = new Card($design_posts[0]);
$DesignCard->setButtonLabel('Learn More');

$ManagedServicesCard = new Card($managed_services_posts[0]);
$ManagedServicesCard->setButtonLabel('Learn More');
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
							
							<?php $ConsultingCard->render(); ?>

						</div>

						<div class="col">
							
							<?php $DevelopmentCard->render(); ?>

						</div>

						<div class="col">
							
							<?php $DesignCard->render(); ?>

						</div>

						<div class="col">
							
							<?php $ManagedServicesCard->render(); ?>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
