<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>
	
<div id="pageheader-bg" class="bg clear" style="background-image:url('<?php the_field( "hero_img_bg" );  ?>');">
	<div id="pageheader" class="container insidepad">
		<h1 class="page-title"><?php the_field( "displayed_page_title" );?></h1>
		<p class="short-description"><?php the_field( "short_description" );  ?></p>
	</div>
</div>

<div id="pagevideo-bg" class="bg clear">
	<div id="pagevideo" class="container insidepad">
		<?php echo do_shortcode('[fve]'. get_field('video') .'[/fve]'); ?>
	</div>
</div>

<div id="pagedescription-services-bg" class="bg clear" style="background-color:#2d2827;">
	<div id="pagedescription" class="container insidepad">
		<h2 class="black-section-title dream-big"><?php the_field( "long_description_title" );  ?></h2>
		<div id="company-who-we-are-content" class="pagedescription-content">
			<?php the_field( "long_description" );  ?>
		</div>
	</div>
</div>

<div id="pagemainsection-company-bg" class="bg clear" style="background-image:url(/wp-content/uploads/2018/08/company-bg.jpg);">
	<div id="pagemainsection" class="container insidepad">
		<div class="whatseparates">
			<p><?php the_field( "what_separates_snippet" );  ?></p>
		</div>
		<div class="whatseparates-sections">
			<div class="whatseparates-col1 company-col">
				<div class="whatseparates-title">
					<?php the_field( "first_column" );  ?>
				</div>
				<div class="whatseparates-content">
					<?php the_field( "first_column_paragraph" );  ?>
				</div>			
			</div>
			<div class="whatseparates-col2 company-col">
				<div class="whatseparates-title">
					<?php the_field( "second_column_title" );  ?>
				</div>
				<div class="whatseparates-content">
					<?php the_field( "second_column_paragraph" );  ?>
				</div>			
			</div>
			<div class="whatseparates-col3 company-col">
				<div class="whatseparates-title">
					<?php the_field( "third_column_title" );  ?>
				</div>
				<div class="whatseparates-content">
					<?php the_field( "third_column_paragraph" );  ?>
				</div>			
			</div>
		</div>
	</div>
</div>
<div id="ready-to-get-started-banner" class="bg clear">
	<div class="container insidepad">
		<div id="ready-to-get-started-banner-container">
		<div><h2>Let's Do Some Business!</h2></div>
			<div style="min-width:0;max-width:  100%;"><a href="/contact/">Contact Us Now</a>
		</div>
		</div>
	</div>
</div>
<?php get_template_part( 'portfolio-logos', '' ); ?>
<?php get_template_part( 'testimonial-section', '' ); ?>
<?php get_template_part( 'instagram-section', '' ); ?>
<?php get_footer(); ?>