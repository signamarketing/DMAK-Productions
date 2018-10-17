<?php
/*
Template Name: Photography
*/
?>

<?php get_header(); ?>

<div id="pageheader-bg" class="bg clear" style="background-image:url('<?php the_field( "hero_img_bg" );  ?>');">
	<div id="pageheader" class="container insidepad">
		<h1 class="page-title"><?php the_field("displayed_page_title"); ?></h1>
		<p class="short-description"><?php the_field( "short_description" ); ?></p>
	</div>
</div>

<!-- <div id="pagevideo-bg" class="photography bg clear" style="background-image: url('<?php //the_field( "background_image" );  ?>');">
	<div id="pagevideo" class="container insidepad">
		<?php //echo do_shortcode('[huge_it_gallery id="2"]');?>
	</div>
</div> -->
<div id="photography" class="photography bg clear">
	<div id="photgraphy-flex-container" class="container insidepad">
			<?php the_field( "photography_paragraph" ); ?>
<?php echo do_shortcode('[foogallery id="2764"]'); ?>
	</div>
</div>

<div id="ready-to-get-started-banner" class="bg clear">
	<div class="container insidepad">
		<div id="ready-to-get-started-banner-container">
		<div><h2>Ready to Get Your Project Started?</h2></div>
			<div style="min-width:0;max-width:  100%;"><a href="/contact/">Contact Us Now</a>
		</div>
		</div>
	</div>
</div>

<?php get_template_part( 'portfolio-logos', '' ); ?>
<?php get_template_part( 'testimonial-section', '' ); ?>
<?php get_template_part( 'instagram-section', '' ); ?>
<?php get_footer(); ?>