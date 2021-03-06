<?php
/*
Template Name: author
*/
?>

<?php get_header(); ?>

<div id="pageheader-bg" class="bg clear" style="background-image:url(/wp-content/uploads/2018/09/blog-bg-2.jpg)">
	<div id="pageheader" class="container insidepad">
		<h1 class="page-title"><?php $username = get_userdata( $post->post_author ); ?>   Author: <?php echo $username->nickname; ?> </h1>
		<h2 class="short-description">All blog posts by <?php echo $username->nickname; ?></h2>
	</div>
</div>


<div id="blog-bg" class="bg clear" >

<div id="blog" class="container insidepad">

	<div id="blog-posts-single">

<?php echo do_shortcode('[ajax_load_more post_type="blog_post" posts_per_page="9" scroll="false" transition_container="false" button_label="Load More"]'); ?>
<!-- <div class="blog-entry-single">
<div class="blog-entry-thumb-single"><a href="<?php //the_permalink(); ?>"><?php// the_post_thumbnail('blog_thumbnail'); ?></a></div>
<div class="blog-entry-date-single"><?php// the_time('j F Y') ?></div>
<h1 class="blog-entry-title-single"><a href="<?php// the_permalink(); ?>"><?php// the_title(); ?></a></h1>
</div> -->
	</div>

</div>

</div>

<?php get_template_part( 'instagram-section', '' ); ?>

<?php get_footer(); ?>

