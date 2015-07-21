<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package rockshow
 */

?>

	</div><!-- #content -->

	<?php if (is_front_page() ) { ?>

	<div class="container">
		<div class="row">
			<div class="col-md-4 home-widget">
				<?php get_sidebar('home-left'); ?>
			</div>

			<div class="col-md-4 home-widget">
				<?php get_sidebar('home-middle'); ?>
			</div>

			<div class="col-md-4 home-widget">
				<?php get_sidebar('home-right'); ?>
			</div>
		</div>
	</div>

	<?php } ?>

	<div class="container">
		<div class="row">

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<p class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo( 'name' ) ?></a></p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->

		</div><!-- .row -->
	</div><!-- .container -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
