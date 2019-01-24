<?php
/*
Template Name: DMAK Video Proudction Landing NEW 
*/
get_header(); ?>

	<section class="landing-bg padding-small">
		<div class="container">

			<div class="row mb4">
				<div class="full-width text-center">
					<h1 class="page-title-landing">Grow Your Business with Video Content</h1>
					<p class="page-subtitle">Get a quote on your project. Contact us today.</p>
				</div>
			</div>

			<div class="row">
				<!-- Video -->
				<div class="col-8">
					<div class="fve-video-wrapper fve-image-embed fve-thumbnail-image youtube">
						<?php echo do_shortcode('[fve]https://vimeo.com/189035053[/fve]'); ?>
					</div>
				</div>

				<!-- Form -->
				<div class="col-4 col-last">
					<div id="landing-contact-form-shadow-bg">
						<?php echo do_shortcode('[gravityform id="3" title="false" description="false"]'); ?>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="bg-dkgrey padding-small">
		<div class="container">
			<div class="row">
				<div class="half first">
					<h3 class="mb4">Intuitive Expertise</h3>
					<p>We treat each client as a creative partenr. Our process begins with a co-created strategic plan and ends with excitement to share what we've made together.</p>
					<p>As producers, we balance commerical and art in a way that generates reults without sacrificing the overall experience.</p>
				</div>

				<div class="half last">
					<h3 class="mb4">Complete Video Services</h3>
					<div class="list-half">
						<ul>
							<li><p>Video Production</p></li>
							<li><p>Post-Production</p></li>
							<li><p>Video Editing</p></li>
							<li><p>3D Animation</p></li>
							<li><p>Motion Graphics</p></li>
							<li><p>Photography</p></li>
						</ul>
					</div>
					<div class="list-half">
						<ul>
							<li><p>Cinematography</p></li>
							<li><p>Aerial Photos &amp; Video</p></li>
							<li><p>Video Marketing</p></li>
							<li><p>Production Crew</p></li>
							<li><p>Green Screen</p></li>
							<li><p>Video Brochures</p></li>
						</ul>
					</div>
				</div>
			</div>

			<?php get_template_part( 'portfolio-logos', '' ); ?>
		</div>
	</section>

	<?php get_template_part( 'testimonial-section', '' ); ?>

<?php get_footer(); ?>