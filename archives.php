<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<div id="main">
<div class="post">

<h2>Archives</h2>

<?php smart_archives(); ?>

<div id="catcontainer">
<h2>Categories</h2>
<ul><?php wp_list_categories('orderby=name&show_count=1&title_li='); ?> </ul>


</div>

<br/>

</div>
</div><!-- END OF MAIN -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>