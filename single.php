<?php get_header(); ?>
<div id="main" <?php  if ( in_category( 'travel' )) echo 'style="width:100%"';  ?> >
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
<div class="clear"></div>
<p style="padding: 15px 0 0;border-top: dotted 1px #888" class="meta">Posted on <span><?php the_time('F jS Y') ?></span> in <?php the_category(', ') ?> with <?php comments_popup_link('no comments', '1 comment', '% comments'); ?> <?php the_tags('| Tags: ', ', ', ''); ?> <?php edit_post_link('Edit', ' | ', ''); ?></p>
<?php if(function_exists('selfserv_shareaholic')) { selfserv_shareaholic(); } ?>
			
				
			<p id="postlinks" ><?php next_post_link('&laquo; %link | '); ?><?php previous_post_link('%link &raquo;'); ?></p>
</div>

<div id="googa"><script type="text/javascript"><!--
google_ad_client = "ca-pub-8381646024586913";
/* charveyad1 */
google_ad_slot = "5107237701";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
	<?php comments_template('', true); ?>
		
	



	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div><!-- END OF MAIN -->
<?php if ( in_category( 'travel' )){ } else  { get_sidebar(); }; ?>

<?php get_footer(); ?>