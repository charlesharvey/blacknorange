<?php
/*
Template Name: ScrapBook
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/scrapbook.css" media="screen" />
<div id="postboard" >
	<?php query_posts('post_type=scrap&posts_per_page=20');?>
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<?php 
			$class = "col1";
			$colsize =  get_post_meta($post->ID, 'colsize', true); 
			
			if ($colsize){
				$class = "col" . $colsize; 
			} else {
				if (in_category( 'video')) $class = "col2";
			};
			$class = (in_category( 'quote')) ? "col2 quote" : $class; 
			
			$embed =  get_post_meta($post->ID, 'embed', true); 
		?>
		

		
			<div class="post <?php echo $class;?>" >
				<?php if ($embed) : ?>
					<?php echo $embed; ?>
					<h2 style="margin-bottom:10px"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php 
the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
			
				<?php elseif ( in_category('quote')) : ?>
					<h2><blockquote>&ldquo;<?php the_title(); ?>&rdquo;</blockquote></h2>
					<?php echo "<p><cite>~" . get_the_excerpt() . '</cite></p>'; ?>
				<?php else : ?>
					<?php if(has_post_thumbnail()) : ?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a><?php endif;?>
					<h2 style="margin-bottom:10px"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
				<?php endif; ?>

			</div>

		<?php endwhile; ?>
		
		<ul class="post col4" id="postlinks">
			<li><?php next_posts_link('&laquo; Older Entries') ?></li><li><?php previous_posts_link('Newer Entries &raquo;') ?></li>
		</ul>
		
	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
	</div>



	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.masonry.min.js" type="text/javascript"></script>

	<script type="text/javascript">
		$(function(){  
		$('#postboard').masonry({
			itemSelector: '.post',
			columnWidth : 240

			
		});
	
	});			

	</script>	

<?php get_footer(); ?>