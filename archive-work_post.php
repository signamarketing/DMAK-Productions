<?php

/*

Template Name: Work

*/



//https://dmakproductions.com/work/

?>



<?php get_header(); ?>



<div id="pageheader-bg" class="bg clear" style="background-image:url(/wp-content/uploads/2018/09/videos-page-bg-2.jpg);">

	<div id="pageheader" class="container insidepad">

		<h1 class="page-title">The Art of Video</h1>

		<p class="short-description">Craft. Create. Deliver.<?php// the_field('short_description', page-id-1217); ?></p>

	</div>

</div>



<div id="pagevideo-bg" class="bg clear" style="background-image: url('<?php the_field( "background_image" );  ?>');">

	<div id="pagevideo" class="container insidepad">
		<div class="fve-video-wrapper fve-image-embed fve-thumbnail-image youtube" style="padding-bottom:56.25%;">
			<?php echo do_shortcode('[fve]'. get_field('videos_page_video_link', 'option') .'[/fve]'); ?>
		</div>

		<?php// echo do_shortcode('[fve]'. get_field('video', page-id-1217) .'[/fve]'); ?>

	</div>

</div>



<div id="work-cats-bg" class="bg clear">

	<div id="work-cats" class="container insidepad">

		<ul id="workcat-list">

		<li class="cat-all"><a href="<?php echo get_option('home'); ?>/videos/">All</a></li>

		<li class="cat-animated"><a href="<?php echo get_option('home'); ?>/videos/category/animated/">Animated</a></li>

		<li class="cat-commercial"><a href="<?php echo get_option('home'); ?>/videos/category/commercial/">Commercial</a></li>

		<li class="cat-corp"><a href="<?php echo get_option('home'); ?>/videos/category/corporate/">Corporate</a></li>

		<li class="cat-event"><a href="<?php echo get_option('home'); ?>/videos/category/event/">Event</a></li>

		<li class="cat-fashion"><a href="<?php echo get_option('home'); ?>/videos/category/fashion/">Fashion</a></li>

		<li class="cat-medical"><a href="<?php echo get_option('home'); ?>/videos/category/medical/">Medical</a></li>

		<li class="cat-realestate"><a href="<?php echo get_option('home'); ?>/videos/category/real-estate/">Real Estate</a></li>

		<li class="cat-web"><a href="<?php echo get_option('home'); ?>/videos/category/web/">Web</a></li>

		</ul>

	</div>

</div>





<div id="work-bg" class="bg clear">

	<div id="work" class="nocontainer">



		<div id="category-description">

		</div>



		<div id="work-posts">





			<?php



			$args = array(

				'post_type' => 'work_post',

				'tax_query' => array(

						array(

							'taxonomy' => 'work_categories',

							'field' => 'slug',

							'terms' => array( 'event', 'fashion', 'corporate', 'music-video' )

						)

					)

				);

			$query = new WP_Query( $args );





			if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>



				<article class="featuredpost">
					<div id="img-container-for-bg-action">
					<a href="<?php the_permalink() ?>">

						<div class="videoplay"></div>

						<div class="slides-container">

							<?php the_post_thumbnail('work_postthumbnail'); ?>



						</div>

					</a>
					</div>
					<div class="featured-text">

						<!-- <p class="featuredtags"><?php// the_terms('', 'work_categories'); ?></p> -->

						<!-- <p class="featureddate"><?php the_time('j F Y') ?></p> -->

						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

					</div>

				</article>



			<?php endwhile; endif; ?>



		</div>

	</div>

</div>
<?php get_template_part( 'portfolio-logos', '' ); ?>
<div id="ready-to-get-started-banner" class="bg clear">
	<div class="container insidepad">
		<div id="ready-to-get-started-banner-container">
		<div><h2>Ready to Get Your Project Started?</h2></div>
			<div style="min-width:0;max-width:  100%;"><a href="/contact/">Contact Us Now</a>
		</div>
		</div>
	</div>
</div>
<?php get_template_part( 'testimonial-section', '' ); ?>
<?php get_template_part( 'instagram-section', '' ); ?>

<?php get_footer(); ?>