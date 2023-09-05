<?php
class Card {

	private int|null $id = null;
	private string $title = '';
	private string $excerpt = '';
	private string $description = '';
	private string $permalink = '';
	private array $tags = [];
	private string $date = '';
	private bool $hasButton = true;
	private string $buttonLabel = 'Read More';
	private string $size = 'full';
	private array $thumbnail = [];
	private string $fallbackImage = FALLBACK_IMAGE_LOCATION;

	public function __construct (object $post = null, array $options = []) {

		if (isset($post)) {
		
			$this->id = $post->ID;
			$this->title = $post->post_title;
			$this->excerpt = wpautop($post->post_excerpt);
			$this->description = apply_filters('the_content', $post->post_content);
			$this->permalink = get_permalink($post->ID);
			$this->date = get_the_date('U', $post->ID);

			if (isset($options['fallbackImage'])) {
		
				$this->fallbackImage = $options['fallbackImage'];
			}

			if (isset($options['size'])) {
			
				$this->size = $options['size'];
			}

			$this->setThumbnail([
				'fallbackImage' => $this->fallbackImage,
				'size' => $this->size
			]);
		}
	}

	public function render () {
	
		require 'Component.php';
	}

	public function setTitle (string $title)  {
	
		$this->title = $title;
	}

	public function setExcerpt (string $excerpt)  {
	
		$this->excerpt = $excerpt;
	}

	public function setDescription (string $description)  {
	
		$this->description = $description;
	}

	public function setPermalink (string $permalink)  {
	
		$this->permalink = $permalink;
	}

	public function setDate (string $date)  {

		$this->date = $date;
	}

	public function setTags (array $tags)  {

		$this->tags = $tags;
	}

	public function setThumbnail (array $options) {
	
		$this->thumbnail = getThumbnailByPostId($this->id, $options);
	}

	public function setButtonLabel (string $buttonLabel) {
	
		$this->buttonLabel = $buttonLabel;
	}

	public function showButton (bool $hasButton = true) {
	
		$this->hasButton = $hasButton;
	}

	public function getTitle ()  {
	
		return $this->title;
	}

	public function getExcerpt ()  {
	
		return $this->excerpt;
	}

	public function getDescription ()  {
	
		return $this->description;
	}

	public function getPermalink ()  {
	
		return $this->permalink;
	}

	public function getDate ()  {

		return $this->date;
	}

	public function getTags ()  {

		return $this->tags;
	}

	public function getThumbnail () {

		return $this->thumbnail;
	}

	public function getButtonLabel () {
	
		return $this->buttonLabel;
	}

	public function hasButton () {
	
		return $this->hasButton;
	}
}