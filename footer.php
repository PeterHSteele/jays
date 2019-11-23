<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jays
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-widgets">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
		<div class="site-info">
			<!--<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jays' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'jays' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>-->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'jays' ), 'jays', '<a href="https://peterhsteele.com">Peter</a>' );
				jays_copyright_date();
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
