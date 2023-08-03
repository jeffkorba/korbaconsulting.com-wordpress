<?php
get_header();
the_post();

$attachment = get_attachment(get_the_ID());
?>

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

					<h3><?php the_title(); ?></h3>
					<p><strong><?php the_author(); ?></strong> &nbsp;|&nbsp; <?php the_date(); ?>

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

					<p><?php the_content(); ?>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
