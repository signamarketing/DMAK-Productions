<div id="stickypostbg">
	<article <?php post_class() ?> id="stickypost">
		<?php $my_query = new WP_Query('category_name=Featured&showposts=1');
		  while ($my_query->have_posts()) : $my_query->the_post();
		  $do_not_duplicate = $post->ID; ?>
	
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<div class="entry">
			<?php the_content(); ?>
		</div>
		<footer class="postmetadata">
			<?php the_tags('Tags: ', ', ', '<br />'); ?>
			Posted in <?php the_category(', ') ?> | 
			<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
		</footer>
	</article>
   <?php endwhile; ?>
</div>