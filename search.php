<?php get_header(); ?>
		<div id="main" style="padding-top:20px ">	
		<div id="abc">
	<?php if (have_posts()) : ?>

	<h2>Search Results for '<?php the_search_query(); ?>'</h2>

		
		<?php while (have_posts()) : the_post(); ?>
<?php
	$value =  get_post_meta($post->ID, 'link', true); 
	if ($value) { 
		$link = $value;
	} else {
		$link = get_permalink($post->ID);
	};
?>
			<div class="post">
	
				<h3><a href="<?php echo $link; ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<p class="meta" style="margin:5px 0 -10px">Posted on <span><?php the_time('F jS Y') ?></span> in <?php the_category(', ') ?> with <?php comments_popup_link('no comments', '1 comment', '% comments'); ?> <?php edit_post_link('Edit', ' | ', ''); ?></p>
			
<?php if ( in_category( 'video' )) { 
   the_content(); 
} else {

   the_excerpt(); 
}; ?>
<div class="clear"></div>
			</div>
		
		<?php endwhile; ?>

		<?php if(function_exists('wp_paginate')) {	wp_paginate();} ?>

	<?php else : ?>
		<div class="post">
			<h3>No posts found. Try a different search?</h3>
		
	
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	
		</div>
	<?php endif; ?>
	</div>
	</div><!-- END OF MAIN -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>