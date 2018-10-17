<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
REGULAR OLD PAGE.PHP
	<div id="entrytopbg" class="bg">
		<article id="entrytop" class="container">			
			<h1 class="entry-title-page"><?php the_title(); ?></h1>
		</article>
	</div>
	<div id="entrycontentbg" class="bg">
	<article class="entry-content-page">	
			<div id="entry-text-page">
				
				<?php the_content(); ?>					
			</div>
		</article>
	</div>
			
				


	<?php endwhile; endif; ?>
	
<?php get_footer(); ?>