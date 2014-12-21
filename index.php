<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div id="main-content" class="col12 main-content">
    <?php get_sidebar('categories'); ?>
	<div id="content" class="site-content blog-roll" role="main">
		<?php
			if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    get_template_part( 'content', 'post' );
                endwhile;
                if(function_exists('wp_paginate')) { wp_paginate(); }
            endif;
		?>
	</div><!-- #primary -->
</div><!-- #main-content -->
<?php
get_footer();
