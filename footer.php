<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php //get_sidebar( 'footer' ); ?>
		</footer><!-- #colophon -->
	</div><!-- #page -->
	</div><!-- m-wrap -->
	<?php wp_footer(); ?>
<script>
jQuery(document).ready(function($) {

$('#mobile-nav').on('click', function() {
 $('body').toggleClass('nav-active');

});

});

</script>
</body>
</html>
