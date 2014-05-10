<?php
/**
 * The template for displaying tags
 *
 */

get_header(); ?>
<div class="f-wrapper inner-banner">
    <div class="wrapper">
        <h1>Read Our Blog</h1>
        <?php
        if( has_post_thumbnail() ) {
            echo the_post_thumbnail();
        }
        ?>
    </div>
</div>
<div class="f-wrapper breadcrumb-cont">
    <div class="wrapper">
        <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
    </div>
</div>
<div class="wrapper">
    <main class="content index-content clearfix">
        <section>
            <?php
            //if( function_exists( do_sociable() ) ){ do_sociable(); }
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    get_template_part('content', get_post_format());
                endwhile;
            endif;
            if(function_exists('wp_paginate')) {
                wp_paginate();
            }
            ?>
        </section>
        <?php get_sidebar('post'); ?>
    </main>
</div>

<?php get_footer(); ?>