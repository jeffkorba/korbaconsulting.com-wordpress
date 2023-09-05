<?php
function getThumbnailByPostId (int $postId, array $options = []) {

	$size = isset($options['size']) ? $options['size'] : 'full';
	$fallbackImage = isset($options['fallbackImage']) ? $options['fallbackImage'] : FALLBACK_IMAGE_LOCATION;

	$thumbnailId = get_post_thumbnail_id($postId);
	$thumbnailMeta = wp_get_attachment_metadata($thumbnailId);
	$thumbnailUrl = get_the_post_thumbnail_url($postId, $size);

	if (empty($thumbnailUrl) || file_exists(get_attached_file($thumbnailId)) === false) {

		$thumbnailUrl = get_bloginfo('template_url') . $fallbackImage;
	}

	return [
		'id' => $thumbnailId,
		'altText' => get_post_meta($thumbnailId, '_wp_attachment_image_alt', true),
		'meta' => isset($thumbnailMeta['image_meta']) ? $thumbnailMeta['image_meta'] : null,
		'caption' => wp_get_attachment_caption($thumbnailId),
		'url' => $thumbnailUrl
	];
}