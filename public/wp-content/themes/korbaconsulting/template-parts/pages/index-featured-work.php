<?php
$args = [
	'post_type' => 'client',
	'post_status' => 'publish',
	'posts_per_page' => 3,
	'meta_key' => 'featured_client',
	'meta_value' => true
];

$query = new WP_Query($args);

if ($query->have_posts()) {

	$clients = $query->get_posts();
?>

<div class="featured-work">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<h5>Featured Work</h5>

				<div class="row row-cols-auto row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-gap-4">

					<?php
					foreach($clients as $client) {
					?>

					<div class="col">
						<div class="card h-100">
							<img class="card-img-top" src="<?php echo get_thumbnail($client->ID)['url']; ?>" alt="<?php echo $client->post_title; ?>">
						</div>
					</div>

					<?php
					}
					?>

				</div>

			</div>

		</div>

	</div>

</div>

<?php
}
?>