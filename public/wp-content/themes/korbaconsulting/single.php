<?php
$author_name = get_the_author_meta('display_name', $post->post_author);
$thumbnail = getThumbnailByPostId($post->ID);
$tags = get_the_tags($post->ID);
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

			<div class="col-12">

				<article>

					<div class="row">

						<div class="col-lg-8">

							<section>

								<h3><?php echo $post->post_title; ?></h3>

								<p><strong><?php echo $author_name; ?></strong> &nbsp;|&nbsp; <?php echo get_the_date(); ?>

								<div class="mb-4"><?php echo $post->post_content; ?></div>

								<h5>Tags</h5>

								<?php
								if ($tags) {

									foreach ($tags as $tag) {
								?>

									<span class="badge text-bg-secondary"><?php echo $tag->name; ?></span>

								<?php
									}
								}
								else {
								?>

								N/A
								
								<?php
								}
								?>

							</section>

						</div>

						<div class="col-lg-4">

							<aside>

								<?php
								if (!empty($thumbnail['url'])) {
								?>

								<figure class="border rounded">

									<img src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['altText']; ?>" class="img-fluid rounded" />

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

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
