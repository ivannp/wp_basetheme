<?php
/**
 * The template for displaying blog roll
 *
 */

get_header(); ?>
<div class="f-wrapper inner-banner">
    <div class="wrapper">
        <h1>Read Our Blog</h1>
        <?php
        if( has_post_thumbnail() ) {
            echo the_post_thumbnail();
        } else {
            echo '<img width="990" height="220" src="http://bravo.wsistaging.net/wp-content/uploads/2014/03/inner-image.png" class="attachment-post-thumbnail wp-post-image" alt="inner-image">';
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
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style ">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_linkedin_counter"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                <a class="addthis_counter addthis_pill_style"></a>
            </div>
            <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5331882042d971ca"></script>
            <!-- AddThis Button END -->
            <?php
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
