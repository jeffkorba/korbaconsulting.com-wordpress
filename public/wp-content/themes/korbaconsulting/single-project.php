<?php
$author_name = get_the_author_meta('display_name', $post->post_author);
$thumbnail = Thumbnail::getByPostId($post->ID);
$terms = get_the_terms($post->ID, 'technology');
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

					<div class="mb-2"><?php echo $post->post_content; ?></div>

					<h5>Technologies</h5>

					<?php foreach ($terms as $term) { ?>

						<span class="badge text-bg-secondary"><?php echo $term->name; ?></span>

					<?php } ?>

				</article>

			</div>

			<div class="col-lg-4">

				<aside>

					<?php
					if (!empty($thumbnail['url'])) {
					?>

					<figure class="border rounded">

						<img src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt']; ?>" class="img-fluid rounded" />

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
