<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p>This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->
<div id="commentsdiv">
<?php if ( !empty($comments_by_type['comment']) ) : ?>

 

<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>
<ol class="commentol">
<?php wp_list_comments('type=comment'); ?>
</ol>
<?php endif; ?>

<?php if ( ! empty($comments_by_type['pings']) ) : ?>
<br/>
<h3 id="pings" style="padding-bottom:0">Trackbacks/Pingbacks</h3>
<ol class="commentol">
<?php wp_list_comments('type=pings'); ?>
</ol>

<?php endif; ?>
</div>
<br/><br/>
<?php comment_form(); ?>