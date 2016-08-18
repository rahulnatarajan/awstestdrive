<?php
/**
 * Filter content with empty post title
 *
 * @since irex
 */

add_filter('the_title', 'irex_lite_untitled');
function irex_lite_untitled($title) {
	if ($title == '') {
		return __('Untitled','irex-lite');
	} else {
		return $title;

	}
}
