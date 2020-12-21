<?php
if ( function_exists('register_sidebar') ) {
   register_sidebar(array(
       'before_widget' => '<li id="%1$s" class="widget %2$s">',
       'after_widget' => '</li>',
       'before_title' => '<h3 class="widgettitle">',
       'after_title' => '</h3>',
   ));
}

add_theme_support( 'post-thumbnails' );

function new_excerpt_length($length) {
	return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');


function eexcludePages($query) {
        if ($query->is_search) {
        $query->set('post_type', 'post');
                                }
        return $query;
}
add_filter('pre_get_posts','eexcludePages');

function new_excerpt_more($more) {
       global $post;
	return '...</p><p class="readmore"><a href="'. get_permalink($post->ID) . '"> Read more</a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');

remove_action('wp_head', 'wp_generator');




?>