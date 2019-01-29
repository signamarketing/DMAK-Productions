<?php
/*
Template Name: DMAK Home Page
*/
?>

<?php get_header(); ?>
<section id="video-bg"> 
		<div class="hp-video-filter"></div>
		<div id="description" class="container insidepad">
		<h1 class="homepage-title"><?php the_field("intro_heading"); ?></h1>
		<?php 
			the_field("introduction_paragraph");
		?>

		</div>
	<video autoplay loop muted id="bgvid">
		<source src="/wp-content/uploads/2019/01/DMAK_Productions_Homepage_Background_3.mp4" type="video/mp4">
	</video>
</section>

<div id="midcontainer" class="bg clear">
	<div id="workexperience" class="container insidepad" >
		<div id="ourexpertise" style="background-image:url(/wp-content/uploads/2018/09/hp-our-expertise-bg-min.jpg);background-size: cover;">
			<div>
			<h2><?php the_field( "our_expertise_title" );  ?></h2>
			<p><?php the_field( "our_expertise_text" );  ?></p>
			<div class="home-button"><a class="large-button center" href="/video-production-services/">View Services</a></div>
			</div>
		</div>

		<div id="ourwork" style="background-image:url(/wp-content/uploads/2018/09/hp-our-work-bg-min.jpg);background-size: cover;">
			<div>
			<h2><?php the_field( "our_work_title" );  ?></h2>
			<p><?php the_field( "our_work_text" );  ?></p>
			<div class="home-button"><a class="large-button center" href="/videos/">View Work</a></div>
			</div>
		</div>
	</div>
</div>

<div id="featuredvideosbg" class="bg clear">
	<div id="featuredvideos" class="nocontainer">
		<h2>What We Do</h2>

			<?php $my_query = new WP_Query('showposts=5&post_type=work_post&work_categories=featured');
			while ($my_query->have_posts()) : $my_query->the_post();?>		
				<article class="featuredpost" style="float:left;">
				<div id="img-container-for-bg-action">
					<a href="<?php the_permalink() ?>">

						<div class="videoplay"></div>

						<div class="slides-container">

							<?php the_post_thumbnail('work_postthumbnail'); ?>



						</div>

					</a>
					</div>
					<div class="featured-text">
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					</div>
				</article>
			<?php endwhile; ?>
	</div>


	<?php get_template_part( 'portfolio-logos', '' ); ?>
</div>

<?php get_template_part( 'testimonial-section', '' ); ?>



<div id="feedbg-1" class="bg clear">
	<div id="feed" class="container insidepad">
		<div class="bloghome-end"><h2>Insightful Blogs You Can Use</h2></div>
		<div class="bloghome">
				<?php $args = array( 'post_type' => 'blog_post', 'posts_per_page' => 3 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="blog-entry-single">
					<div class="blog-entry-thumb-single">
						<a href="<?php the_permalink(); ?>">
							
							<?php the_post_thumbnail('blog_thumbnail'); ?>
						</a>
					</div>
					<h2 class="blog-entry-title-single">
						<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
                    
					</h2>
				</div>
			<?php endwhile; ?>
		</div>
		<div class="bloghome-end"><a href="<?php echo get_option('home'); ?>/blog/">View Blog</a></div>
	</div>
</div>




<?php get_template_part( 'instagram-section', '' ); ?>

<?php get_footer(); ?>