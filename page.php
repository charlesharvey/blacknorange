<?php get_header(); ?>
<div id="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">


	
			<h1 ><?php the_title(); ?></h1>
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		
	
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		
			
		</div>
	
	</div><!-- END OF MAIN -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>