<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div class="sidebar sidebar-cat" id="secondary">
	<?php if ( is_active_sidebar( 'sidebar-cat' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-cat' ); ?>
	<?php endif; ?>
</div><!-- #secondary -->
