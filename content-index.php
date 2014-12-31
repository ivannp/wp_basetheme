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
        <span class="dateAuthors"><?php the_date('F j, Y');?></span>
    </header><!-- .entry-header -->
    <?php
    $f_image = NULL;
    if (has_post_thumbnail()){
        echo '<a class="blog-roll-link" href="'.get_permalink().'">'.get_the_post_thumbnail($post->ID,'large').'</a>';
        $f_image = true;
    }
    ?>
    <div class="entry-summary">
        <?php
        if ($f_image) {
            the_excerpt();
        } else {
            custom_the_excerpt($post,120,'...');
        }
        //the_excerpt();
        ?>
        <a class="readmore" href="<?php echo get_permalink(); ?>">Read More</a>
    </div><!-- .entry-summary -->
</article><!-- #post-## -->
