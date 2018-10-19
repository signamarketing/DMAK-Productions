<?php
/*
Template Name: Press
*/
?>

<?php get_header(); ?>

<div id="pageheader-bg" class="bg clear" style="background-image:url(/wp-content/uploads/2018/09/blog-bg-2.jpg)">
	<div id="pageheader" class="container insidepad">
		<h1 class="page-title">Press</h1>
		<h2 class="short-description">All acknowledgments and thanks.</h2>
	</div>
</div>


<!-- <div id="blog-bg" class="bg clear">
	<div id="blog" class="nocontainer">
				<div class="press-height">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="presspage-entry">
				<div class="presspage-thumb"><a href="<?php the_field('press_link'); ?>" target="_blank"><?php the_post_thumbnail(); ?></a></div>
				<div class="press-content">
					<a class="from-press" href="#">— Press</a>
					<h1 class="presshome-title"><a href="<?php the_field('press_link'); ?>" target="_blank"><?php the_title(); ?></a></h1>
					<div class="presshome-excerpt"><?php echo substr(get_the_excerpt(), 0,200); ?></div>
				</div>
			</div>
		
		<?php endwhile; endif; ?>
		</div>
	</div>
</div> -->


<div id="blog-bg" class="bg clear">

	<div id="blog" class="container insidepad">

		<div id="blog-posts-single">

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
	<div class="blog-entry-single">
					<div class="blog-entry-thumb-single">
						<a href="<?php the_field('press_link'); ?>" target="_blank">
							<?php the_post_thumbnail('blog_thumbnail'); ?>
						</a>
					</div>
					<h2 class="blog-entry-title-single">
						<a href="<?php the_field('press_link'); ?>" target="_blank">
							<?php the_title(); ?>
						</a>
                    
					</h2>
				</div>
    <?php endwhile; ?>
<?php endif; ?>

		</div>

	</div>

</div>

<!-- <div id="pagination-bg" class="bg clear">
	<div id="pagination" class="container insidepad">
		<div id="pagination-links">
			<?php// wp_pagenavi(); ?>
		</div>
	</div>
</div> -->
<?php get_template_part( 'instagram-section', '' ); ?>

<?php get_footer(); ?>