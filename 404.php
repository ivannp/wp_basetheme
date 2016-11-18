<?php
/**
* The template for displaying 404 pages (Not Found)
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header(); ?>
<div id="main-content" class="col12 main-content"> 
	<?php get_sidebar('categories'); ?> 
	<div id="content" class="site-content single-post" role="main"> 
		<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>
			<header class="entry-header"><h1 class="page-title"><?php _e( 'Not Found', 'twentyfourteen' ); ?></h1></header><!-- .entry-header -->
				<div class="entry-summary">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfourteen' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-summary -->
		</article><!-- #post-## -->
	</div><!-- #main-content --> 
<?php 
get_footer();
