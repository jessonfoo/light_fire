<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package light_fire
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


<?php dynamic_sidebar( 'sidebar-1' ); ?>

