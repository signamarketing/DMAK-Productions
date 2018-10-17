<?php

/*

Template Name: Work

*/



//https://dmakproductions.com/work/category/ ... /

?>



<?php get_header(); ?>



<div id="pageheader-bg" class="bg clear" style="background-image:url(/wp-content/uploads/2018/09/videos-page-bg-2.jpg);">

	<div id="pageheader" class="container insidepad">

		<h1 class="page-title">The Art of Video: <?php single_cat_title( '', true ); ?></h1>

		<h2 class="short-description">Craft. Create. Deliver.<?php the_field('short_description', page-id-1217); ?></h2>

	</div>

</div>



<!-- <div id="pagevideo-bg" class="bg clear" style="background-image: url('<?php// the_field( "background_image" );  ?>');">

	<div id="pagevideo" class="container insidepad">

		<?php// echo do_shortcode('[fve]'. get_field('demo_reel_video', page-id-1217) .'[/fve]'); ?>

	</div>

</div> -->





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

			<?php if (is_tax('work_categories', 'Animated')) : ?>

				<p>We take full advantage of the flexibility and versatility that animation gives us. Animation allows us to stretch the boundaries of our imaginations and develop concepts that are not always feasible with video. We approach visual storytelling with unlimited creativity and art when dealing with an animated video.</p>

			<?php elseif (is_tax('work_categories', 'Commercial')) : ?>

				<p>Whether it’s a broadcast commercial or an online spot, we can work out a perfect solution for you. We have the capacity to create high quality commercials that stand out from the crowd. We can even help market and promote your commercial!</p>

			<?php elseif (is_tax('work_categories', 'Corporate')) : ?>

				<p>We know that corporate video production is more about just shooting and editing. It's about communicating your company’s vision, inspiring staff, profiling your business, promoting your product, training employees, and capturing a moment in a original and imaginative way. </p>

			<?php elseif (is_tax('work_categories', 'Event')) : ?>

				<p>D-Mak Productions produces projects for conventions, conferences, festivals, concerts, and large scale corporate meetings. If you need a team with many years of proven success that will get it done efficiently and effectively, then you’ve come to the right place. We give you a professional quality video without interfering with the event. Plus, we also can create fantastic videos to play at your event if needed.</p>

			<?php elseif (is_tax('work_categories', 'Fashion')) : ?>

				<p>Whether you’re in need of a runway video during Fashion Week, a web video to promote your brand and image, a product demo featuring your latest collection, or a behind-the-scenes video of your photo shoot, we know you want the best in fashion video production. That's fine, we do too. We'll bring talented and creative cinematographers who know how to film fashion so your video can be as distinctive as your style. Guaranteed.</p>

			<?php elseif (is_tax('work_categories', 'Medical')) : ?>

				<p>From videos for marketing and tradeshows, to video sales aids and creative implementation, our medical videos have been proven successful for all types of visual communication. Enjoy hassle-free completion for all facets of your project, and even better, use your medical video production to cross-purpose your marketing opportunities. Stream live video to your website, or enhance your trade show demonstrations with your D-Mak Productions-created medical video production.</p>

			<?php elseif (is_tax('work_categories', 'Real Estate')) : ?>

				<p>We bring professional video production to hotels, resorts, commercial properties, retail and residential developments. By shooting high-quality video tours of homes for sale, apartment complexes, commercial and industrial buildings, and vacation rentals, we supercharge your sales and marketing process. </p>

			<?php elseif (is_tax('work_categories', 'Web')) : ?>

				<p>The trend for web video is constantly growing and more and more people are seeing the benefit of using web videos to promote their organizations. It’s really more than a trend. It’s a necessity. Your potential clients want video content. There is no better way to educate and engage your web visitors than with a web video. Let us help you develop a web video series that works for you.</p>

			<?php else : ?>

				<p>This is the text to describe All</p>

			<?php endif; ?>

		</div>



		<div id="work-posts">



			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



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

						<!-- <p class="featureddate"><?php// the_time('j F Y') ?></p> -->

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
<?php get_template_part( 'instagram-section', '' ); ?>






<?php get_footer(); ?>