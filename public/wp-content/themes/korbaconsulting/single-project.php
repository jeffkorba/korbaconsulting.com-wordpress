<?php
$author_name = get_the_author_meta('display_name', $post->post_author);
$thumbnail = get_thumbnail($post->ID);

$terms = get_terms([
    'taxonomy'   => 'technology',
    'hide_empty' => false
]);
?>

<?php get_header(); ?>

<main>

	<div class="banner">

		<div class="container">

			<div class="row">

				<div class="col-lg-12">

					<h1 class="title">Projects</h1>

				</div>

			</div>

		</div>

	</div>

	<div class="container">

		<div class="row">

			<div class="col-lg-8">

				<article>

					<h3><?php echo $post->post_title; ?></h3>

					<?php echo $post->post_content; ?>

					<h5>Technologies</h5>

					<?php foreach ($terms as $term) { ?>

						<span class="badge text-bg-secondary"><?php echo $term->name; ?></span>

					<?php } ?>

				</article>

			</div>

			<div class="col-lg-4">

				<aside class="mt-5">

					<?php
					if (!empty($thumbnail['url'])) {
					?>

					<figure class="border rounded">

						<img src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt_text']; ?>" class="img-fluid rounded" />

						<?php if (!empty($thumbnail['caption'])) { ?>

						<figcaption>

							<?php echo $thumbnail['caption']; ?>
							
						</figcaption>

						<?php } ?>

					</figure>

					<?php
					}
					?>

				</aside>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
