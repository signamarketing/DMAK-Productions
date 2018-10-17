<?php
/*
Template Name: Work
*/
?>

<?php get_header(); ?>

<div id="pageheader-bg" class="bg clear">
	<div id="pageheader" class="container insidepad">
		<h1 class="page-title">Work</h1>
		<h2 class="short-description">This is whadddt we do.</h2>
	</div>
</div>


<div id="blog-bg" class="bg clear">
	<div id="blog" class="container insidepad">
		<div id="blog-posts">

			<?php $args = array( 'post_type' => 'work_post', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
	the_title();
	echo '<div class="entry-content">';
	the_excerpt();
	echo '</div>';
endwhile;
 ?>
			<div class="blog-entry">
				<div class="blog-entry-left">
					<div class="blog-entry-date"><?php the_time('j F Y') ?></div>
					<div class="blog-entry-thumb"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('blog_thumbnail'); ?></a></div>
				</div>
				<div class="blog-entry-right">
					<h1 class="blog-entry-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
					<div class="blog-entry-excerpt"><?php echo substr(get_the_excerpt(), 0,200); ?>...</div>
					<span class="blog-entry-tags"><?php the_tags('Tags: ','  '); ?></span>
					<span class="blog-entry-author">Author: <?php the_author_posts_link(); ?></span>
				</div>
			</div>

			<?php endwhile; endif; ?>

		</div>
	</div>
</div>



<?php get_footer(); ?>