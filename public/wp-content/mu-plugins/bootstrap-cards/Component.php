<div class="card h-100">

	<?php
	if (!empty($this->getThumbnail())) {
	?>
	
	<img class="card-img-top" src="<?php echo $this->getThumbnail()['url']; ?>" alt="<?php echo $this->getTitle(); ?>">

	<?php
	}
	?>

	<div class="card-body <?php echo $this->getAlignment(); ?>">

		<?php
		if ($this->hasIcon()) {
		?>

		<i class="<?php echo $this->getIcon(); ?> fa-3x mb-3"></i>

		<?php
		}
		?>

		<h5 class="card-title"><?php echo $this->getTitle(); ?></h5>

		<p class="card-text"><?php echo $this->getExcerpt(); ?></p>

		<?php
		$tags = $this->getTags();

		if (!empty($tags)) {

			foreach ($tags as $tag) {
		?>

		<span class="badge text-bg-secondary"><?php echo $tag->name; ?></span>

		<?php
			}
		}
		?>
		
		<?php
		if ($this->hasButton() && !empty($this->getPermalink())) {
		?>

		<a href="<?php echo $this->getPermalink(); ?>" class="btn btn-primary"><?php echo $this->getButtonLabel(); ?></a>
		
		<?php
		}
		?>

	</div>

</div>