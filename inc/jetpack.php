<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package wcs_2013
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function wcs_2013_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'wcs_2013_jetpack_setup' );
