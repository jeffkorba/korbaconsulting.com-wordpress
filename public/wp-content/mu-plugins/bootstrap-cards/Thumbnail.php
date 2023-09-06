<?php
Class Thumbnail {

	private int|null $id = null;
	private string $alt = '';
	private array $meta = [];
	private string $caption = '';
	private string $url = '';
	private string $size = 'full';

	public function __construct (array $thumbnail, string $size = 'full') {
	
		if (isset($thumbnail['id'])) {

			$this->id = $thumbnail['id'];
		}

		if (isset($thumbnail['alt'])) {

			$this->alt = $thumbnail['alt'];
		}

		if (isset($thumbnail['caption'])) {

			$this->caption = $thumbnail['caption'];
		}

		if (isset($thumbnail['url'])) {

			$this->url = $thumbnail['url'];
		}

		$this->size = $size;
	}

	public function setAlt (string $alt) {
	
		$this->alt = $alt;
	}

	public function setCaption (string $caption) {
	
		$this->caption = $caption;
	}

	public function setUrl (string $url) {
	
		$this->url = $url;
	}

	public function setSize (string $size) {
	
		$this->size = $size;
	}

	public function get () {
	
		return [
			'id' => $this->id,
			'alt' => $this->alt,
			'meta' => $this->meta,
			'caption' => $this->caption,
			'url' => $this->url
		];
	}

	public function getAlt () {
	
		return $this->alt;
	}

	public function getCaption () {
	
		return $this->caption;
	}

	public function getUrl () {
	
		return $this->url;
	}

	public function getSize () {
	
		return $this->size;
	}

	public static function getByPostId (int $postId, string $size = 'full') {

		
		$id = get_post_thumbnail_id($postId);
		
		$attachment_metadata = wp_get_attachment_metadata($id);
		
		$alt = get_post_meta($id, '_wp_attachment_image_alt', true);
		$meta = isset($attachment_metadata['image_meta']) ? $attachment_metadata['image_meta'] : null;
		$caption = wp_get_attachment_caption($id);
		$url = get_the_post_thumbnail_url($postId, $size);

		if (empty($url) || file_exists(get_attached_file($id)) === false) {

			$url = get_bloginfo('template_url') . FALLBACK_IMAGE_LOCATION;
		}

		return [
			'id' => $id,
			'alt' => $alt,
			'meta' => $meta,
			'caption' => $caption,
			'url' => $url
		];
	}
}