<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whiteboard
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="site-info">
          <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'whiteboard' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'whiteboard' ), 'WordPress' ); ?></a>
          <span class="sep"> | </span>
          <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'whiteboard' ), 'Whiteboard', '<a href="https://adwhite.com" rel="designer">adWhite</a>' ); ?>
        </div><!-- .site-info -->
      </div> <!-- .row -->
    </div> <!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
