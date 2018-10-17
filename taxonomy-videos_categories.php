<?php
/*
Template Name: Work
*/

//https://dmakproductions.com/work/category/ ... /
?>

<?php get_header(); ?>

<div id="pageheader-bg" class="bg clear">
	<div id="pageheader" class="container insidepad">
		<h1 class="page-title">Work
			<?php if (is_tax('work_categories', 'Corporate')) : ?>
			: Corporate
			<?php elseif (is_tax('work_categories', 'Music Video')) : ?>
			: Music Video
			<?php elseif (is_tax('work_categories', 'Fashion')) : ?>
			: Fashion
			<?php elseif (is_tax('work_categories', 'Event')) : ?>
			: Event
			<?php else : ?>
			<?php endif; ?>
		</h1>
		<h2 class="short-description">This is what we do.<?php the_field('short_description', page-id-1217); ?></h2>
	</div>
</div>

<!-- <div id="pagevideo-bg" class="bg clear" style="background-image: url('<?php the_field( "background_image" );  ?>');">
	<div id="pagevideo" class="container insidepad">
		<?php echo do_shortcode('[fve]'. get_field('demo_reel_video', page-id-1217) .'[/fve]'); ?>
	</div>
</div> -->

<div id="work-cats-bg" class="bg clear">
	<div id="work-cats" class="container insidepad">
		<ul id="workcat-list">
<li class="cat-all"><a href="<?php echo get_option('home'); ?>/videos/">All</a></li>
<li class="cat-corp"><a href="<?php echo get_option('home'); ?>/videos/category/corporate/">Corporate</a></li>
<li class="cat-fashion"><a href="<?php echo get_option('home'); ?>/videos/category/fashion/">Fashion</a></li>
<li class="cat-event"><a href="<?php echo get_option('home'); ?>/videos/category/event/">Event</a></li>
<li class="cat-commercial"><a href="<?php echo get_option('home'); ?>/videos/category/commercial/">Commercial</a></li>
<li class="cat-realestate"><a href="<?php echo get_option('home'); ?>/videos/category/real-estate/">Real Estate</a></li>
<li class="cat-medical"><a href="<?php echo get_option('home'); ?>/videos/category/medical/">Medical</a></li>
<li class="cat-animated"><a href="<?php echo get_option('home'); ?>/videos/category/animated/">Animated</a></li>
<li class="cat-web"><a href="<?php echo get_option('home'); ?>/videos/category/web/">Web</a></li>
	</div>
</div>

<div id="work-bg" class="bg clear">
	<div id="work" class="nocontainer">
		<div id="category-description">
			<?php if (is_tax('work_categories', 'Corporate')) : ?>
				<p>We know that corporate video production is more about just shooting and editing. It's about communicating your company’s vision, inspiring staff, informing your audience, profiling your business, expressing values, promoting your product, training employees, and capturing a moment in a original and imaginative way.</p>
			<?php elseif (is_tax('work_categories', 'Fashion')) : ?>
				<p>Whether you’re in need of a runway video during Fashion Week, a web video production to promote your brand and image, a product demo featuring your latest collection, or a behind-the-scenes video of your photo shoot, we know you want the best in fashion video production. That's fine, we do too. We'll bring talented and creative cinematographers who know how to film fashion so your video can be as distinctive as your style. Guaranteed.
</p>
			<?php elseif (is_tax('work_categories', 'Event')) : ?>
				<p>D-Mak Productions produces projects for conventions, conferences, festivals, concerts, and large scale corporate meetings. If you need a team with many years of proven success that will get it done efficiently and effectively, giving you a professional quality video without interfering with the event, then you’ve come to the right place. Plus, we also can create fantastic videos to play at your event if needed.</p>
			<?php else : ?>
				<p>This is the text to describe All</p>
			<?php endif; ?>
		</div>

		<div id="work-posts">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article class="featuredpost">
					<a href="<?php the_permalink() ?>">
						<div class="videoplay"></div>
						<div class="slides-container">
							<?php the_post_thumbnail('work_postthumbnail'); ?>
						</div>
					</a>
					<div class="featured-text">
						<p class="featuredtags"><?php the_terms('', 'work_categories'); ?></p>
						<!-- <p class="featureddate"><?php the_time('j F Y') ?></p> -->
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					</div>
				</article>

			<?php endwhile; endif; ?>

		</div>
	</div>
</div>



<?php get_footer(); ?>