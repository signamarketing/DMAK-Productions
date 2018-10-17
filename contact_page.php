<?php

/*

Template Name: Contact

*/

?>



<?php get_header(); ?>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvxbXiGuTHOi5YrJnX21DUh8NM-OFcEr4&sensor=false"></script>

<script src="<?php bloginfo('template_directory'); ?>/_/js/gmap.js"></script>	



<div id="pageheader-bg" class="bg clear" style="background-image:url('<?php the_field( "hero_img_bg" );  ?>');">

	<div id="pageheader" class="container insidepad">

		<h1 class="page-title"><?php the_field( "displayed_page_title" );  ?></h1>

		<h2 class="short-description"><?php the_field( "short_description" );  ?></h2>

	</div>

</div>

<div id="contact-page-info-bg">
	<div class="container insidepad">
		<div class="contact-address">
			<h4>Mail Address</h4>
			<p><?php the_field( "address_info" );  ?></p>
		</div>
		<div class="contact-office-phone">
			<h4>Office Phone</h4>
			<p><a href="tel:<?php the_field( "phone_number" );  ?>"><?php the_field( "phone_number" );  ?></a></p>
		</div>
	</div>
</div>

<div id="pagemap-bg" class="bg clear">

	<div id="map-canvas"></div>

</div>


<div id="pagedescription-contact-bg" class="bg clear">

	<div id="pagedescriptioncontact" class="container insidepad">
<div id="contact-form-shadow-bg">
		<h2 class="black-section-title"><?php the_field( "long_description_title" );  ?></h2>
		<h3 style="text-align:center;"><?php the_field( "long_description_sub-title" );  ?></h3>
		<br>
		<div style="text-align:center;"><?php the_field( "left_content" );  ?></div>
		<div class="contact-container">			
			<div class="contact-form"><?php echo do_shortcode('[contact-form-7 id="2255" title="Contactpage"]'); ?></div>
		</div>
</div>
	</div>

</div>







<?php get_footer(); ?>