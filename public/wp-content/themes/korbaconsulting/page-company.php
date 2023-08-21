<?php
$blog_slug = 'blog';
$about_slug = 'about';

$blog_args = [
	'name' => $blog_slug,
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
];

$about_args = [
	'name' => $about_slug,
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
];

$blog = get_posts($blog_args)[0];
$about = get_posts($about_args)[0];
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
							<div class="card h-100">
								<img class="card-img-top" src="<?php echo get_thumbnail($blog->ID)['url']; ?>" alt="<?php echo $blog->post_title; ?>">
								<div class="card-body">
									<h5 class="card-title"><?php echo $blog->post_title; ?></h5>
									<p class="card-text"><?php echo wpautop($blog->post_excerpt); ?></p>
									<a href="<?php echo get_permalink($blog->ID); ?>" class="btn btn-primary">Read More</a>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="card h-100">
								<img class="card-img-top" src="<?php echo get_thumbnail($about->ID)['url']; ?>" alt="<?php echo $about->post_title; ?>">
								<div class="card-body">
									<h5 class="card-title"><?php echo $about->post_title; ?></h5>
									<p class="card-text"><?php echo wpautop($about->post_excerpt); ?></p>
									<a href="<?php echo get_permalink($about->ID); ?>" class="btn btn-primary">Learn More</a>
								</div>
							</div>
						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
