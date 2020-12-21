<div id="sidebar">
<ul>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) { ?>

	
	
		<h3>Recent Posts</h3>
		<ul id="recentposts">
		<?php query_posts('showposts=4'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(50,50)); ?></a><a href="<?php the_permalink() ?>"><?php the_title() ?></a><span class="meta">Posted <?php the_time('F jS') ?> with <?php comments_popup_link('no comments', '1 comment', '% comments'); ?></span></li>
<?php endwhile; endif; ?>
		</ul>
		
		
		<h3>Twitter</h3>
		<?php twitter_messages('charlesharvey', 5); ?>
		
		

		<h3>Tags</h3>
		<?php wp_tag_cloud(); ?>
		
		
		<?php  include (TEMPLATEPATH . '/searchform.php'); ?>
		
	<?php }; ?>

		<!--<li class="widget" id="subscribewidget">
			<h3>Subscribe</h3>
			<a href="http://feeds.feedburner.com/charlesharvey">
				Click here to be automatically updated to new posts and features
			</a>

		</li>-->	

		
	</ul>
</div>
<div class="clear"></div>