<?php get_header(); ?>
<div id="main">





<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts("cat=-83&paged=$paged")
?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			
		<?php
		$value =  get_post_meta($post->ID, 'link', true); 
		if ($value) { 
			$link = $value;
		} else {
			$link = get_permalink($post->ID);
		};

		?>
				
			<h2><a href="<?php echo $link; ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>	
			<p class="meta">Posted on <a href="/<?php the_time('Y/m');  ?>" title="<?php the_time('l jS F Y \a\t g:ia');?>"><?php the_time('F jS Y') ?></a> in <?php the_category(', ') ?> with <?php comments_popup_link('no comments', '1 comment', '% comments'); ?> <?php edit_post_link('Edit', ' | ', ''); ?></p>
			<a class="thumba" href="<?php echo $link;?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" <?php if($value) echo ' target="_blank" ';?>><?php the_post_thumbnail(); ?></a>
		<?php 
		if (!$value) {
				if ( in_category( 'video' )) { 
				the_content();
			} else {
			the_excerpt();
			};
		};
		?>
			</div>

		<?php endwhile; ?>
		
		<?php if(function_exists('wp_paginate')) {	wp_paginate();} ?>
		
	<?php else : ?>
		<div class="post"><h2>Not Found</h2>
	
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	
		</div>
	<?php endif; ?>
	</div><!-- END OF MAIN -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>