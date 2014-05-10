<?php
/**
 * The sub template for displaying content of a post
 *
 */
?>
<?php
	$sz = sizeof($posts);
	$lastPost = $posts[$sz-1];
	$class = null;

	if ($lastPost->ID == $post->ID){
		$class = 'last';
	}

?>
<article class="<?php echo $class; ?>">
	<h1><a href="<?php echo get_permalink();?>"><?php the_title(); ?></a></h1>
	<span class="dateAuthors"><?php the_date('F j, Y');?> BY <span class="author"><?php the_author(); ?></span> |  <?php if ( comments_open() ) comments_popup_link('LEAVE A COMMENT'); ?></span>
	<p><?php echo get_the_excerpt(); ?></p>
<!--	<span class="postMeta">-->
<!--		<span>FILED UNDER: </span>--><?php //the_category(' '); ?><!-- --><?php //the_tags("| <span>TAGGED WITH: </span>", ' '); ?>
<!--	</span>-->
    <a class="readmore" href="<?php echo get_permalink();?>">Read More &gt;</a>
</article>