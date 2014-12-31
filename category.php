<?php
/**
 * The template for displaying Category pages
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
			echo '<h1 class="archive-title">Category Archives: '.single_cat_title( '', false ).'</h1>';
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