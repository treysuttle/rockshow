<?php
/**
 * Home left widget area.
 *
 * @package rockshow
 */

if ( ! is_active_sidebar( 'home-left' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'home-left' ); ?>
</div><!-- #secondary .col-md-4 -->
