<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>
	
<div id="pageheader-bg" class="bg clear" style="background-image: url('<?php the_field("hero-img-bg");  ?>');">
	<div id="pageheader" class="container insidepad">
		<h1 class="page-title"><?php the_field("displayed_page_title") ?></h1>
		<p class="short-description"><?php the_field( "short_description" );  ?></p>
	</div>
</div>

<div id="pagevideo-bg" class="bg clear" style="background-image: url('<?php the_field( "background_image" );  ?>');">
	<div id="pagevideo" class="container insidepad">
		<?php echo do_shortcode('[fve]'. get_field('video') .'[/fve]'); ?>
	</div>
</div>

<div id="pagedescription-services-bg" class="bg clear">
	<div id="pagedescriptionwhite" class="container insidepad">
		<h2 class=""><?php the_field( "long_description_title" );  ?></h2>
		<div class="services-what-we-do-col">
			<div class="pagedescription-content">
				<?php the_field( "long_description" );  ?>
			</div>
			<div class="page-sidebar">
				<div class="sidebar-content">
					<?php the_field( "list_1" );  ?>
					<?php the_field( "list_2" );  ?>
				<?php// the_field( "video_services" );  ?>
				</div>
				<!--<h2 class="page-sidebar-section">We also provide:</h2>
				<div class="sidebar-content"><?php// the_field( "also_services" );  ?></div>
				<h2 class="page-sidebar-section">Additional Services Include:</h2>
				<div class="sidebar-content"><?php// the_field( "additional_services" );  ?></div>-->
			</div>
		</div>
	</div>
</div>
<div id="pagedescription-services-bg-2" class="bg clear">
	<div id="" class="container insidepad">
		<div class="services-get-started-col">
			<div class="page-sidebar">
					<h2>Ready to Get Your<br> Project Started?</h2>
					<div><a href="/contact/">Contact Us Now</a></div>
			</div>
			
			
			<div class="pagedescription-content">
				<h2><?php the_field( "long_description_title_2" );  ?></h2>
				<?php the_field( "long_description_2" );  ?>
			</div>

		</div>
	</div>
</div>
<?php get_template_part( 'portfolio-logos', '' ); ?>

<?php get_template_part( 'testimonial-section', '' ); ?>

<?php get_template_part( 'instagram-section', '' ); ?>


<?php get_footer(); ?>