<div id="hp-testimonial" class="bg clear">
	<div class="container insidepad">
		<div id="hp-testimonial-video">

		<?php echo do_shortcode('[fve]'. get_field('testimonial_video_link', 'option') .'[/fve]'); ?>

		</div>
		<div id="hp-testimonial-content-container">
			<h4>Ask Our Clients,<br>D-Mak Delivers.</h4>
			<div>
				<?php
					if(is_active_sidebar('google-review-sidebar')){dynamic_sidebar('google-review-sidebar');}
				?>
			</div>
		</div>
	</div>
</div>


<!-- https://player.vimeo.com/video/189040143 -->