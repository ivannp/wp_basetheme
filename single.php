<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div id="main-content" class="col12 main-content">
	<div id="content" class="site-content blog-roll" role="main">
		<?php
            while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
            endwhile;
            if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		?>
	</div><!-- #primary -->
</div><!-- #main-content -->
<?php
get_footer();