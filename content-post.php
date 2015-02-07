<?php
/**
 * Created by PhpStorm.
 * User: Abhijeet
 * Date: 11/1/2014
 * Time: 12:02 PM
 */
	$sz = sizeof($posts);
	$lastPost = $posts[$sz-1];
	$class = 'blog_roll ';

	if ($lastPost->ID == $post->ID){
        $class .= 'last';
    }
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>
    <header class="entry-header">
        <?php 	the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
        <div class="post-meta-data">
           <?php
               $today_date = the_date('Y-m-d','','',FALSE);
               echo '<time class="date-pmd" datetime="'.$today_date.'" title="'.$today_date.'">'.$today_date.'</time>';
               // echo '<time class="dateAuthors" datetime="2015-01-25" title="2015-01-25">2015-01-25</time>';
           ?>
        </div>
    </header><!-- .entry-header -->
    <?php
        $f_image = NULL;
        if (has_post_thumbnail()){
            echo '<a href="'.get_the_permalink().'">'.get_the_post_thumbnail($post->ID,'large').'</a>';
            $f_image = true;
        }
    ?>
    <div class="entry-summary">
        <?php
            if ($f_image) {
                the_excerpt();
            } else {
                // custom_the_excerpt($post,120,'...');
                the_content();
            }
            //the_excerpt();
        ?>
    </div><!-- .entry-summary -->
</article><!-- #post-## -->
