<?php get_header(); ?>

<?php if(is_home() && !is_paged()): ?>

<div id="descriptionbg" class="bg clear">
	<div id="description" class="container insidepad">
		<?php  bloginfo('description'); ?>
		<div class="learnmore-button">
			<a class="large-button" href="<?php echo get_option('home'); ?>/about/">Learn More</a>
		</div>
	</div>
</div>

<div id="introvideobg" class="bg clear">
	<div id="introvideo" class="container insidepad">
		<?php echo do_shortcode('[fve]'. get_field('video') .'[/fve]'); ?>
	</div>
</div>

<div id="midcontainer" class="bg clear">
	<div id="buildbrand" class="container insidepad">
		<h1><?php the_field( "build_your_brand_title" );  ?></h1>
		<p><?php the_field( "build_your_brand_text" );  ?></p>
		<div class="webinarsignup">			
			<?php echo do_shortcode('[contact-form-7 id="1220" title="Build Your Brand (Home)"]'); ?>
		</div>
	</div>
	<div id="workexperience" class="container insidepad">
		<div id="ourexpertise">
			<h1><?php the_field( "our_expertise_title" );  ?></h1>
			<p><?php the_field( "our_expertise_text" );  ?></p>
			<div class="home-button"><a class="large-button center" href="<?php echo get_option('home'); ?>/video-production-services/">View Services</a></div>
		</div>

		<div id="ourwork">
			<h1><?php the_field( "our_work_title" );  ?></h1>
			<p><?php the_field( "our_work_text" );  ?></p>
			<div class="home-button"><a class="large-button center" href="<?php echo get_option('home'); ?>/work/">View Work</a></div>
		</div>
	</div>
	<div id="bizvideo" class="container insidepad">
			<h1>The Business Video Success Guide</h1>
			<div class="slider"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/_/img/ebook.gif" alt="Sign Up for our eBook!"></a></div>
			<div class="newsletter-text">Subscribe to our newsletter and receive our free eBook:</div>
			<?php echo do_shortcode('[contact-form-7 id="1221" title="Business Video Subscribe"]'); ?>
	</div>
</div>

<div id="featuredvideosbg" class="bg clear">
	<div id="featuredvideos" class="nocontainer">
		<h1>Featured Work</h1>
		<h2><a href="<?php echo get_option('home'); ?>/work/">View All Work</a></h2>
			<?php $my_query = new WP_Query('showposts=5&post_type=work_post&work_categories=featured');
			while ($my_query->have_posts()) : $my_query->the_post();?>		
				<article class="featuredpost" style="float:left;">
					<a href="<?php the_permalink() ?>">
						<div class="videoplay"></div>
						<div class="slides-container">
							<?php the_post_thumbnail('work_postthumbnail'); ?>
						</div>
					</a>
					<div class="featured-text">
						<p class="featuredtags"><?php the_terms('', 'work_categories'); ?></p>
						<p class="featureddate"><?php the_time('j F Y') ?></p>
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					</div>
				</article>
		<?php endwhile; ?>
	</div>
</div>

<div id="feedbg" class="bg clear">
	<div id="feed" class="container insidepad">
		<div class="bloghome">
		<div class="bloghome-end"><a href="<?php echo get_option('home'); ?>/blog/">Blog</a></div>
				<?php $args = array( 'post_type' => 'blog_post', 'posts_per_page' => 3 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="bloghome-entry">
						<div class="bloghome-entry-left">
							<div class="entry-date"><?php the_time('j F Y') ?></div>
							<div class="entry-thumb"><a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a></div>
						</div>
						<div class="bloghome-entry-right">
							<a class="from-blog" href="<?php echo get_option('home'); ?>/blog/">— Blog</a>
							<h1 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
							<div class="entry-excerpt"><?php echo custom_field_excerpt(); ?></div>
							<span class="entry-tags">Tags: <?php the_terms('', 'blog_tags'); ?></span>
							<span class="entry-author">Author: <?php the_author_posts_link(); ?></span>
						</div>
					</div>
			<?php endwhile; ?>
		<div class="bloghome-end"><a href="<?php echo get_option('home'); ?>/blog/">View All Blog Posts</a></div>
		</div>
		<div class="presshome">
		<div class="presshome-end"><a href="<?php echo get_option('home'); ?>/press/">Press</a></div>
				<?php $args = array( 'post_type' => 'press_post', 'posts_per_page' => 2 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="presshome-entry">
						<a href="<?php the_field('press_link'); ?>" target="_blank">
							<div class="presshome-thumb"><a href="<?php the_field('press_link'); ?>" target="_blank"><?php the_post_thumbnail('press_postthumbnail'); ?></a></div>
							<div class="press-content">
								<a class="from-press" href="<?php echo get_option('home'); ?>/press/">— Press</a>
								<h1 class="presshome-title"><a href="<?php the_field('press_link'); ?>" target="_blank"><?php the_title(); ?></a></h1>
								<div class="presshome-excerpt"><?php echo substr(get_the_excerpt(), 0,200); ?></div>
							</div>
						</a>
					</div>
			<?php endwhile; ?>
		<div class="presshome-end"><a href="<?php echo get_option('home'); ?>/press/">View All Press</a></div>
		</div>
		<div class="home-sidebar">
			<div class="home-instagram">
				<div class="instahome-end"><a href="http://www.instagram.com/dmakproductions" target="_blank">Instagram</a></div>
				<div id="instafeed"></div>
				<script src="<?php bloginfo('template_directory'); ?>/_/js/instafeed.min.js"></script>
				<div class="instahome-end"><a href="http://www.instagram.com/dmakproductions" target="_blank">View Our Instagram</a></div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>