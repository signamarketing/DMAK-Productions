<?php
/*
Template Name: DMAK Video Proudction Landing NEW 
*/
get_header(); ?>

	<section id="fyreoverride">
		<div id="descriptionbg">

			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1>Grow Your BUsiness with Video Content</h1>
						<h2>Get a quote on your project. Contact us today.</h2>
					</div>
				</div>

				<div class="row">
					<!-- Video -->
					<div class="col-sm-8 col-xs-12">
						<div class="fve-video-wrapper fve-image-embed fve-thumbnail-image youtube" style="padding-bottom:56.25%;">
							<?php echo do_shortcode('[fve]https://vimeo.com/189035053[/fve]'); ?>
						</div>
					</div>

					<!-- Form -->
					<div class="col-sm-4 col-xs-12">
						<?php echo do_shortcode('[contact-form-7 id="2014" title="landing_businees"]'); ?>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="bg-dkgrey padding-small">
		<div class="container">
			<div class="row">
				<div class="half first">
					<h2>Intuitive Expertise. </h2>
					<p>We treat each client as a creative partenr.</p>
				</div>

				<div class="half last">
					<h2>Complete Video Services</h2>
					<ul>
						<li><p>Video Production</p></li>
						<li><p>Post-Production</p></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>