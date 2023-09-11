<?php
class Card {

	private int|null $id = null;
	private string $title = '';
	private string $excerpt = '';
	private string $description = '';
	private string $permalink = '';
	private array $tags = [];
	private string $date = '';
	private bool $showButton = true;
	private bool $showIcon = false;
	private string $alignment = 'left';
	private string $icon = '';
	private string $buttonLabel = 'Read More';
	private array $thumbnail = [];

	public function __construct (object $post = null, string $size = 'full') {

		if (isset($post)) {
		
			$this->id = $post->ID;
			$this->title = $post->post_title;
			$this->excerpt = wpautop($post->post_excerpt);
			$this->description = apply_filters('the_content', $post->post_content);
			$this->permalink = get_permalink($post->ID);
			$this->date = get_the_date('U', $post->ID);
			$this->thumbnail = Thumbnail::getByPostId($post->ID, $size);
		}
	}

	public function render () {
	
		require 'Component.php';
	}

	public function setAlignment (string $alignment)  {

		if ($alignment == 'left') {
		
			$this->alignment = 'text-start';
		}
		else if ($alignment == 'right') {
		
			$this->alignment = 'text-end';
		}
		else if ($alignment == 'center') {
		
			$this->alignment = 'text-center';
		}
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

	public function setIcon (string $icon)  {

		$this->icon = $icon;
	}

	public function setTags (array $tags)  {

		$this->tags = $tags;
	}

	public function setThumbnail (array $thumbnail) {
	
		$this->thumbnail = $thumbnail;
	}

	public function setButtonLabel (string $buttonLabel) {
	
		$this->buttonLabel = $buttonLabel;
	}

	public function showButton (bool $showButton = true) {
	
		$this->showButton = $showButton;
	}

	public function showIcon (bool $showIcon = true) {
	
		$this->showIcon = $showIcon;
	}

	public function getAlignment () {
	
		return $this->alignment;
	}

	public function getTitle () {
	
		return $this->title;
	}

	public function getExcerpt () {
	
		return $this->excerpt;
	}

	public function getDescription () {
	
		return $this->description;
	}

	public function getPermalink () {
	
		return $this->permalink;
	}

	public function getDate () {

		return $this->date;
	}

	public function getIcon () {

		return $this->icon;
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
	
		return $this->showButton;
	}

	public function hasIcon () {
	
		return $this->showIcon;
	}
}