<div class="notification-group">

	<?php
	foreach ($args as $notification) {

		if (strlen($notification['description']) > 100) {

			$notification['description'] = substr($notification['description'], 0, 99) . '...';
		}
	?>
	<div class="notification-item">
		<a href="<?php echo $notification['link']; ?>">
			<h6 class="widget-title"><?php echo $notification['title']; ?></h6>
			<?php echo $notification['description']; ?>
		</a>
	</div>
	<?php
	}
	?>
	
</div>