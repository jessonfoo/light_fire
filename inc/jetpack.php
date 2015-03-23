<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package light_fire
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function light_fire_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'light_fire_jetpack_setup' );
