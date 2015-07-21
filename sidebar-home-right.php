<?php
/**
 * Home right widget area.
 *
 * @package rockshow
 */

if ( ! is_active_sidebar( 'home-right' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'home-right' ); ?>
</div><!-- #secondary .col-md-4 -->

