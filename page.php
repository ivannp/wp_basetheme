<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
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
		?>
	</div><!-- #primary -->
</div><!-- #main-content -->
<?php
get_footer();
