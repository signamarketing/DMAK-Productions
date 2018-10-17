<?php get_header(); ?>
YOO
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div id="entrytopbg" class="bg">
		<article id="entrytop" class="container">			
			<div class="entry-title"><?php the_title(); ?></div>
			<span class="entry-date"><?php the_time(get_option('date_format')); ?></span><span class="entry-attribution"> — </span><span class="author">Posted By: 
			<?php the_author_posts_link(); ?><?php edit_post_link('Edit this entry',' • ',''); ?></span>
			<ul id="entry-category-list">Filed Under: <?php $categories = get_the_category(); $separator = ' '; $output = ''; if($categories){
				foreach($categories as $category) {
				$output .= '<li><a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '"><span class="'.$category->cat_name.'" >•</span>'.$category->cat_name.'</a></li>'.$separator;}echo trim($output, $separator);}?>
			</ul>
		</article>
	</div>	

	<div id="entrycontentbg" class="bg">
		<article class="entry-content">
			<div id="entry-gallery">
				<div class="slides-container">
					<?php $args = array('post_type' => 'attachment','numberposts' => -1,'post_status' => null,'post_parent' => $post->ID); $attachments = get_posts( $args ); if ( $attachments ) { foreach ( $attachments as $attachment ) {echo '<img src="'; echo wp_get_attachment_url($attachment->ID); echo '">';}}?>
				</div>
			</div>
			<div id="entry-text">
				<?php the_content(); ?>
				<span class="entry-tags"><?php the_tags( 'Tags: ', ' • ', ''); ?></span>							
			</div>
		</article>
	</div>

	<?php endwhile; endif; ?>
	
<?php get_footer(); ?>