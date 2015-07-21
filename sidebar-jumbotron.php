<?php
/**
 * The jumbotron for home page.
 *
 * @package rockshow
 */

if ( ! is_active_sidebar( 'jumbotron' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<div class="container">
		<div class="row">
			<div class="col-md-12 home-feature">
				<?php dynamic_sidebar( 'jumbotron' ); ?>
			</div>
		</div>
	</div>
</div><!-- #secondary .jumbotron -->


