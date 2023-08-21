<?php
$attachment = get_attachment($post->ID);
$author_name = get_the_author_meta('display_name', $post->post_author);
?>

<?php get_header(); ?>

<main>

	<div class="banner">

		<div class="container">

			<div class="row">

				<div class="col-lg-12">

					<h1 class="title">Blog</h1>

				</div>

			</div>

		</div>

	</div>

	<div class="container">

		<div class="row">

			<div class="col-lg-8">

				<article>

					<h3><?php echo $post->post_title; ?></h3>
					<p><strong><?php echo $author_name; ?></strong> &nbsp;|&nbsp; <?php echo get_the_date(); ?>

					<?php
					if (!empty($attachment['url'])) {
					?>

					<figure>

						<img src="<?php echo $attachment['url']; ?>" alt="<?php echo $attachment['alt_text']; ?>" class="img-fluid rounded" />

						<?php if (!empty($attachment['caption'])) { ?>

						<figcaption>

							<?php echo $attachment['caption']; ?>
							
						</figcaption>

						<?php } ?>

					</figure>

					<?php
					}
					?>

					<?php echo $post->post_content; ?>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
