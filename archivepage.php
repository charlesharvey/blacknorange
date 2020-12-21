<?php
/*
Template Name: ArchivesPage
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
		<div class="inner">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			
				<p class="meta">Posted on <span><?php the_time('F jS Y') ?></span> in <?php the_category(', ') ?> with <?php comments_popup_link('no comments', '1 comment', '% comments'); ?> <?php edit_post_link('Edit', ' | ', ''); ?></p>
				<a class="thumba" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
				
<?php 

if ( in_category( 'video' )) { 
	the_content();

} else {

the_excerpt();
}; ?>
			</div>
			<div class="bottom"></div>
		
			</div>



		<?php endwhile; ?>
		
		<?php if(function_exists('wp_paginate')) {	wp_paginate();} ?>
		
	<?php else : ?>
		<div class="post"><h2>Not Found</h2>
		<div class="inner">
		
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		</div>
		<div class="bottom"></div>
		</div>
	<?php endif; ?>
	</div><!-- END OF MAIN -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>