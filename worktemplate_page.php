<?php
/*
Template Name: Work Category
*/
?>

<?php get_header(); ?>
	
<div id="pageheader-bg" class="bg clear">
	<div id="pageheader" class="container insidepad">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<h2 class="short-description"><?php the_field( "short_description" );  ?></h2>
	</div>
</div>

<div id="pagevideo-bg" class="bg clear" style="background-image: url('<?php the_field( "background_image" );  ?>');">
	<div id="pagevideo" class="container insidepad">
		<?php echo do_shortcode('[fve]'. get_field('video') .'[/fve]'); ?>
	</div>
</div>

<div id="pagedescription-bg" class="bg clear">
	<div id="pagedescription" class="container insidepad">
		<h1 class="black-section-title"><?php the_field( "lower_section_title" );  ?></h1>
		<div class="pagedescription-content">
			<?php the_field( "work_description" );  ?>
		</div>
	</div>
</div>

<div id="pagemainsection-bg" class="bg clear">
	<div id="pagemainsection" class="container insidepad">
		<div class="clientsection">
			<h1 class="white-section-title">Selected Clients</h1>
		</div>
		<div class="clientsection-logos">
			<div class="client-logo logo-first">
				<img src="<?php the_field( "client_logo" );  ?>">
			</div>
			<div class="client-logo">
				<img src="<?php the_field( "client_logo_two" );  ?>">
			</div>
			<div class="client-logo">
				<img src="<?php the_field( "client_logo_three" );  ?>">
			</div>
			<div class="client-logo">
				<img src="<?php the_field( "client_logo_four" );  ?>">
			</div>
			<div class="client-logo logo-first">
				<img src="<?php the_field( "client_logo_five" );  ?>">
			</div>
			<div class="client-logo">
				<img src="<?php the_field( "client_logo_six" );  ?>">
			</div>
			<div class="client-logo">
				<img src="<?php the_field( "client_logo_seven" );  ?>">
			</div>
			<div class="client-logo">
				<img src="<?php the_field( "client_logo_eight" );  ?>">
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>