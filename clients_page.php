<?php
/*
Template Name: Clients
*/
?>

<?php get_header(); ?>
	
<div id="pageheader-bg" class="bg clear" style="background-image:url('<?php the_field( "hero_img_bg" );  ?>');">
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

<div id="client-page-bg" class="bg clear">
	<div id="pagedescription" class="container insidepad">
		<h2 class="black-section-title"><?php the_field( "lower_section_title" );  ?></h2>
		<div class="pagedescription-content">
			<?php the_field( "work_description" );  ?>
			<!-- <div>
				<p>You might recognize many of the names on our video client list. That's because our Phoenix Arizona production company has been the go-to partner of choice for large and small companies searching for more than just a camera operator.</p>
				<br>
 				<p>They turn to us for collaborative film and video production services, such as advertising and marketing video concepts, corporate event ideas, and advice on how to turn content or a single idea into something that moves the audience.</p>
			</div>
			<div>
			<p>The outcome? Many of the following companies return to us each time they need creative guidance and video production services.</p>
			<br>
  			<p>We welcome any proposal or idea you take our way.</p>
			<br>
 			<p>If you're searching for an experienced and trusted partner for video concepts, direction and production, Contact Us.</p>
			</div> -->

		</div>
	</div>
</div>

<div id="pagemainsection-bg" class="bg clear clients">
	<div id="pagemainsection" class="container insidepad">
		<div class="clientsection">
			<h2 class="white-section-title">Selected Clients</h2>
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