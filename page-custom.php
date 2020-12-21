<?php
/*
Template Name: PhotographyTemplate
*/
?>



<?php get_header(); ?>
<div id="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
		
		<div class="inner">
			<h2 ><?php the_title(); ?></h2>
			
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		<?php get_flickrRSS(); ?>
	
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		</div>
			<div class="bottom"></div>
		</div>
	
	</div><!-- END OF MAIN -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>