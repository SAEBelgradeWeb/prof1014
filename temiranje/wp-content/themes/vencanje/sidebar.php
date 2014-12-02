<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package vencanje
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<ul>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</ul><!-- #secondary -->
