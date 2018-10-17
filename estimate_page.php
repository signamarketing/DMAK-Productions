<?php

/*

Template Name: Estimate

*/

?>



<?php get_header(); ?>



<div id="pageheader-bg" class="bg clear" style="background-image:url(/wp-content/uploads/2018/09/estimate-bg.jpg)">

	<div id="pageheader" class="container insidepad">

		<h1 class="page-title"><?php the_field( "displayed_page_title" );  ?></h1>

		<p class="short-description"><?php the_field( "short_description" );  ?></p>

	</div>

</div>



<!-- <div id="pagedescription-bg" class="bg clear">

	<div id="pagedescription" class="container insidepad">

		<div class="estimatedescription-content">

			<?php //the_field( "estimate_description" );  ?>

		</div>

	</div>

</div> -->



<div id="pagedescription-contact-bg" class="bg clear estimate-page">

	<div id="pagedescriptioncontact" class="container insidepad">

		<div id="fyreoverride" class="contact-container">			

			<!--<div class="contact-form"><?php// echo do_shortcode('[contact-form-7 id="1224" title="Estimate: Video Production"]'); ?></div>-->

			<div class="estimatedescription-content">
				<?php the_field( "estimate_description" );  ?>
			</div>

			<div class="contact-form"><?php echo do_shortcode('[gravityform id="1" title="true" description="false" ajax="true"]'); ?></div>

		</div>

	</div>

</div>
<?php get_template_part( 'portfolio-logos', '' ); ?>
<?php get_template_part( 'instagram-section', '' ); ?>





<?php get_footer(); ?>