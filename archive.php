<?php get_header(); ?>
		<div id="main" style="padding-top:20px ">	
		<div id="abc">
		<?php if (have_posts()) : ?>
		
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2>Archive for <?php the_time('F jS, Y'); ?></h2>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2>Archive for <?php the_time('F, Y'); ?></h2>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2>Archive for <?php the_time('Y'); ?></h2>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2>Author Archive</h2>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2>Blog Archives</h2>
		<?php } ?>
	
	
		
		<?php while (have_posts()) : the_post(); ?>

<?php
	$value =  get_post_meta($post->ID, 'link', true); 
	if ($value) { 
		$link = $value;
	} else {
		$link = get_permalink($post->ID);
	};
?>

	
	<div class="post" >
				<h3><a href="<?php echo $link; ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<p class="meta" style="margin:5px 0 -10px">Posted on <span><?php the_time('F jS Y') ?></span> in <?php the_category(', ') ?> with <?php comments_popup_link('no comments', '1 comment', '% comments'); ?> <?php edit_post_link('Edit', ' | ', ''); ?></p>
<?php if ( in_category( 'video' )) { 
   the_content(); 
} else {
  // the_post_thumbnail( array(80,80) );
   the_excerpt(); 
}; ?>
		<div class="clear"></div>		
			</div>
				
				
		<?php endwhile; ?>

		<?php if(function_exists('wp_paginate')) {	wp_paginate();} ?>

	<?php else : ?>
			

		<div class="post" >
			<h2>Not Found</h2>
			<p>Sorry, no posts match your query</p>
	
		</div>

	<?php endif; ?>
	</div>
	</div><!-- END OF MAIN -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>