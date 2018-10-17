<?php
/*
Template Name: Work
*/
?>

<?php get_header(); ?>

<div id="pageheader-bg" class="bg clear">
	<div id="pageheader" class="container insidepad">
		<h1 class="page-title">Work</h1>
		<h2 class="short-description">This is what we do.</h2>
	</div>
</div>

<div id="work-cats-bg" class="bg clear">
	<div id="work-cats" class="container insidepad">
		<ul id="workcat-list">
			<li><a href="../work/">All</a></li>
			<li><a href="">Demo Reel</a></li>
			<li><a href="../work/category/corporate/">Corporate</a></li>
			<li><a href="">Music</a></li>
			<li><a href="">Fashion</a></li>
			<li><a href="">Event</a></li>
	</div>
</div>


<div id="work-bg" class="bg clear">
	<div id="work" class="nocontainer">
		<div id="work-posts">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article class="featuredpost">
					<a href="<?php the_permalink() ?>">
						<div class="videoplay"></div>
						<div class="slides-container">
						<?php $args = array(
						   'post_type' => 'attachment',
						   'numberposts' => -1,
						   'post_status' => null,
						   'post_parent' => $post->ID
						  );

						  $attachments = get_posts( $args );
						     if ( $attachments ) {
						        foreach ( $attachments as $attachment ) {
						           echo wp_get_attachment_image( $attachment->ID, 'thumbnail' );
						          }
						     }

						 ?>
						</div>
					</a>
					<div class="featured-text">
						<p class="featuredtags"><?php the_terms('', 'work_categories'); ?></p>
						<p class="featureddate"><?php the_time('j F Y') ?></p>
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					</div>
				</article>

			<?php endwhile; endif; ?>

		</div>
	</div>
</div>



<?php get_footer(); ?>