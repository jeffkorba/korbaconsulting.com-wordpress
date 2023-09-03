<div class="card h-100">

	<img class="card-img-top" src="<?php echo get_thumbnail($args->ID)['url']; ?>" alt="<?php echo $args->post_title; ?>">

	<div class="card-body">

		<h5 class="card-title"><?php echo $args->post_title; ?></h5>

		<p class="card-text"><?php echo wpautop($args->post_excerpt); ?></p>

		<?php
		if (isset($args->terms)) {

			foreach ($args->terms as $term) {
		?>

		<span class="badge text-bg-secondary"><?php echo $term->name; ?></span>

		<?php
			}
		}
		?>
		
		<?php
		if (isset($args->button_label)) {
		?>
		<a href="<?php echo get_permalink($args->ID); ?>" class="btn btn-primary"><?php echo $args->button_label; ?></a>
		<?php
		}
		?>

	</div>

</div>