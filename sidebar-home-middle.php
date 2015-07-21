<?php
/**
 * Home middle widget area.
 *
 * @package rockshow
 */

if ( ! is_active_sidebar( 'home-middle' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'home-middle' ); ?>
</div><!-- #secondary .col-md-4 -->
