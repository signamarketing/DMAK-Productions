<?php
/*
Template Name: DMAK Video Proudction Landing NEW 
*/
get_header(); ?>

	<section class="landing-bg padding-small">
		<div class="container">

			<div class="row mb4">
				<div class="full-width text-center">
					<h1 class="page-title-landing"><?php echo get_field('landing_page_title'); ?></h1>
					<p class="page-subtitle"><?php echo get_field('landing_page_subtitle'); ?></p>
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
					<h3 class="mb4"><?php echo get_field('first_column_title'); ?></h3>
					<?php the_field('first_column_text'); ?>
				</div>

				<div class="half last">
					<h3 class="mb4"><?php echo get_field('second_column_title'); ?></h3>
					<?php the_field('second_column_list'); ?>
				</div>
			</div>

			<?php get_template_part( 'portfolio-logos', '' ); ?>
		</div>
	</section>

	<?php get_template_part( 'testimonial-section', '' ); ?>

<?php get_footer(); ?>