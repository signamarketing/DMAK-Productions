<?php
get_header(); ?>
<div id="fyreoverride">
	
<div id="description" class="container insidepad">			

<h1>Do you know what to look for when hiring a <strong>video production</strong> company?</h1>
		</div>
		<div id="introvideo" class="container insidepad">
			<?php echo do_shortcode('[fve]https://vimeo.com/189035053[/fve]'); ?>
		</div>
	</div>

	<div id="midcontainer" class="container insidepad">
		<div id="" class="half first">
<img id="corp-cover" src="http://dmakproductions.com/wp-content/uploads/2016/02/corporate-videos.jpg"/>
			<h2>Get Our FREE Video Production Success Guide direct to your Inbox</h2>
			<h3>In this eBook, you'll learn:</h3>
			<ul>
				<li>12 Critical Videos Every Business Needs</li>
				<li>Why Video is the Most Effective Method of Communicating Your Message</li>
				<li>How to Effectively Use The Various Types of Videos to Meet Business Objectives</li>
			</ul>
			<?php echo do_shortcode('[contact-form-7 id="2013" title="landing_page_download"]'); ?>
		</div>
		<div id="" class="half last">
			<h2>Ready to Start Growing Your Business with Video Content?</h2>
			<h3>Give us a call at <a href="tel:+602-926-0036">602-926-0036</a> or get an estimate within 24 hours by filling the form below</h3>

			<?php echo do_shortcode('[contact-form-7 id="2014" title="landing_businees"]'); ?>
		</div>
	</div>

	<div id="foot-chat" class="footer-popup-wrapper_new">
		<div style="display: block;" class="footer-popup-btn_new">
			Chat With Us<div class="close_popup">x</div><span class=""></span>
		</div>
		<div style="display: none;" class="footer-popup-box_new">
			<div class="wpcf7" id="wpcf7-f1127-o3" dir="ltr" lang="en-US">
				<div role="" class="screen-reader-response"></div>
				<?php echo do_shortcode('[contact-form-7 id="2015" title="landing_chat"]'); ?>
			</div>                        
		</div>
	</div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/files/jquery_009.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/files/jquery_007.js" type="text/javascript"></script>
<script type="text/javascript">
	function trackAdWordsConversion(goal_id,goal_label,goal_value,goal_url,callback) {
	// Create an image
	var img = document.createElement("img");

	// An optional callback function to run follow up processed after the conversion has been tracked
	if(callback && typeof callback === "function") {
		img.onload = callback;
	}

	// Construct the tracking beacon using the goal parameters
	var trackingUrl = "http://www.googleadservices.com/pagead/conversion/"+goal_id;
	trackingUrl += "/?random="+new Date().getMilliseconds();
	trackingUrl += "&value="+goal_value;
	trackingUrl += "&label="+goal_label;
	trackingUrl += "&guid=ON&script=0&url="+encodeURI(goal_url);
	img.src = trackingUrl;
	console.log(img);

	// Add the image to the page
	document.body.appendChild(img);

	// Don't display the image
	img.style = "display: none;";
	}
	jQuery(document).ready(function () {
		jQuery("[rel^='opt_prettyPhoto']").prettyPhoto({
			social_tools:false,
			deeplinking:false,
			default_width:900,
			changepicturecallback: function(){
				jQuery(window).trigger('resize');
				jQuery('a.pp_close').click(function(){
					$.prettyPhoto.close();
				});
			}
		});
		jQuery('.footer-popup-btn_new').click(function ()
		{
			jQuery(".footer-popup-box_new").toggle();
		});
		jQuery(".footer-popup-btn_new").click(function(){
			jQuery( ".footer-popup-btn_new span" ).toggleClass( "bounce" );
		});
		function show_chat(){
			jQuery(".footer-popup-btn_new").show(500);
		}
		jQuery(document).click(function(){
			jQuery(".close_popup").click(function(){
				jQuery(".footer-popup-wrapper_new").hide(500);
			}); });
		setTimeout(function()
			{ show_chat(); }, 0);
	});
	function _meeting_callback(){
		$("#leadpages-fieldset p").hide();
		ga('send', 'event', 'event', 'submit', 'goal');
	}
	function _hide_form(){
		jQuery('.footer-popup-box_new .wpcf7-form-control').hide();
		ga('send', 'event', 'event', 'submit', 'goal');
	}
</script>
<?php get_footer(); ?>