<?php

/*

Template Name: Blog

*/

?>



<?php get_header(); ?>



<div id="blog-single-bg" class="bg clear">

	<div id="blog-single" class="container insidepad">

		<div id="blog-posts-single">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="single-blog-post-content">
				<h1 class="blog-entry-title-single"><?php the_title(); ?></h1>

				<span class="blog-entry-author-single">by <?php the_author_posts_link(); ?></span>
				<div class="blog-entry-date-single"><?php the_time('j F Y') ?></div>

				<div class="blog-entry-content-single">
					<div class="blog-entry-thumb-single"><?php the_post_thumbnail('blog_thumbnail'); ?></div>
					<?php the_content(); ?>
					<div id="newsletter">
						<div class="container insidepad">
							<div id="newsletter-img">
								<img alt="newsletter booklet" src="/wp-content/uploads/2018/09/newsletter-img.jpg">
							</div>
							<div id="newsletter-content">
								<p>Download your guide to corporate videos <br><span>and why you need them!</span></p>
								<div id="newsletter-gform">
									<?php get_template_part( 'blog-mailchimp-form', '' ); ?>
								</div>
							</div>
						</div>
					</div>
					<div id="pagination-links">

						<div class="alignleft-blog"><i class="fa fa-angle-double-left"></i><?php previous_post_link('%link', 'Previous post'); ?></div>

						<div class="alignright-blog"><?php next_post_link('%link', 'Next post'); ?><i class="fa fa-angle-double-right"></i></div>

					</div>
					<div id="after-single-post-content">
						<div id="author-extra-content">
							<div>
								<h4 class="blog-entry-author-single"><?php the_author_posts_link(); ?></h4>
								<p>Article by Joe Forte, owner and producer at D-Mak Productions, a Scottsdale video production company specializing in producing corporate, commercial, digital and branded media content.</p>
							</div>
						</div>

						<?php echo do_shortcode('[easy-social-share buttons="facebook,twitter,google,linkedin" morebutton="1" morebutton_icon="dots" counters=0 style="button" template="metro" native="yes" fullwidth="yes"]'); ?> 

						<div style="background-color:#fff;    padding: 10px;"><?php echo do_shortcode('[fbcomments url="" width="100%" count="off" num="3" linklove="0" countmsg="wonderful comments!"]'); ?></div>
					</div>
				
				</div>

			</div>

			<?php endwhile; endif; ?>

		</div>

	</div>

</div>

<?php get_template_part( 'instagram-section', '' ); ?>



<?php get_footer(); ?>