<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package rockshow
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-md-4" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary .col-md-4 -->

</div><!-- .row -->
</div><!-- .container -->
