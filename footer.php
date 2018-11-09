	<footer id="footer" class="clear">



	<div id="twitterfeedbg" class="bg">

		<div id="twitterfeed" class="container insidepad">
		<div id="twitter-1"><Img src="/wp-content/uploads/2018/08/blue-twitter-bird.png" alt="blue twitter bird"></div>
			<?php get_sidebar(); ?>
		</div>

	</div>
	
	<div id="newsletter" style="background-image:url(/wp-content/uploads/2018/09/newsletter-bg.jpg)">
		<div class="container insidepad">
			<div id="newsletter-img">
				<img alt="newsletter booklet" src="/wp-content/uploads/2018/10/newsletter-img-2.jpg">
			</div>
			<div id="newsletter-content">
				<p>Download your guide to corporate videos <br><span>and why you need them!</span></p>

				<!-- <div id="newsletter-gform">
					<?php gravity_form( 2, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex, $echo = true ); ?>
				</div> -->
				<div id="newsletter-gform">
					<!-- Begin MailChimp Signup Form -->
					<div id="mailchimp">
						<style>
							#mailchimp {
								background: transparent;
							}
							#mailchimp #mc_embed_signup_scroll {
								padding: 0px;
								display: flex;
								align-items: center;
								justify-content:start;
								width: 100%;
							}
							#mailchimp input {
									padding: 20px 30px;
									height: 64px;
									height: 53px;
									padding: 14px 20px;
									font-size: 19px;
									border: solid 1px #959595 ;
									width: 280px ;
									max-width: 100%;
									margin-right: 15px;
									font-weight:normal !important;
								}
								#mailchimp input:last-child {margin-right:40px;}
							#mailchimp input.email {color:#6a6463; background: #fff; border: solid 1px #959595; }
							#mailchimp input.name {color:#6a6463; background: #fff; border: solid 1px #959595;}
							#mailchimp input[type="submit"] {
										padding: 9px 22px;
										height: 62px;
										font-size: 24px;
										font-weight: bold !important;
										font-family: Arimo;
										margin: 0px;
										border: 2px solid #face09;
										border-radius: 0px;
										color: #ece9e9;
										background-color: transparent;
										transition: .3s all;
										text-align:center;
										width:220px;
										max-width:100%;
									}
							#mailchimp input[type="submit"]:hover {     background-color: #face09;color: #2e2928; }
							@media (max-width:1145px){#mailchimp #mc_embed_signup_scroll{justify-content:space-between;}#mailchimp input:last-child {margin-right:0px;}}
							@media(max-width:1085px) {
								#mailchimp #mc_embed_signup_scroll {flex-direction: column;}
								#mailchimp input {margin-bottom:20px}
								#newsletter-content p {
										margin: auto;
										margin-bottom: 43px;
										text-align: center;
									}

						}
						@media(max-width:1085px) {
							#mailchimp {margin-bottom: 11px;}
							#mailchimp #input-row {
									flex-direction: column;
									display: flex;
								}
								#newsletter-content p {margin-top:6px;}
								#mailchimp input {margin-right:0px;}
								#mailchimp input[type="submit"] {width:280px !important;}
								
						}

						@media(max-width:767px) {
							
							div#newsletter-content p {
								margin-top: 14px;
							}
						}
						</style>
						<form action="https://dmakproductions.us7.list-manage.com/subscribe/post?u=bdb6add4ced5784e1723851ca&amp;id=91b7696e19" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll">
							<div class="mc-field-group" id="input-row">
								<input type="text" size=”30″ value="Name" name="MMERGE3" class="required" id="mce-MMERGE3" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">

								<input type="email" size=”30″ value="Email" name="EMAIL" class="required email" id="mce-EMAIL" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
							</div>

							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bdb6add4ced5784e1723851ca_91b7696e19" tabindex="-1" value=""></div>
							<div class="clear"><input type="submit" value="Download Now" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
							</div>
						</form>
					</div>

					<!--End mc_embed_signup-->
					
				</div>
			</div>
		</div>
	</div>


<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

	<div id="footerbottombg" class="bg">

		<div id="footerbottom" class="container insidepad">

			<div class="footer-1">
				<h3>About Us</h3>
				<p><?php bloginfo('description'); ?></p>

			</div>

			<div class="footer-2">
				<h3>Quick Links</h3>
				<?php footer_links(); ?>
			</div>

			<div class="footer-3">
				<h3>Follow Us</h3>
				<div id="social-container">
				<div><a href="https://www.facebook.com/DMakProductions" target="_blank"><img style="display: block;width: 18px; margin: auto;" alt="go to dmak facebook" src="/wp-content/uploads/2018/10/fb-social.png"></a></div>
				<div><a href="https://www.youtube.com/user/Dmakproductions" target="_blank"><img alt="go to dmak youtube" src="/wp-content/uploads/2018/10/youtube-social.png"></a></div>
				<div><a href="https://www.instagram.com/dmakproductions/" target="_blank"><img alt="go to dmak insta" src="/wp-content/uploads/2018/10/insta-social.png"></a></div>
				<div><a href="https://twitter.com/Dmakproductions" target="_blank"><img alt="go to dmak twitter" src="/wp-content/uploads/2018/10/twitter-social.png"></a></div>
				</div>
			</div>

			<div class="footer-4">
				<h3>Get In Touch</h3>

				<p class="menu-item">Address: <?php the_field('address_info', page-id-1205); ?></p>

				<p class="menu-item">Email Us: <a href="mailto:<?php the_field('email_address', page-id-1205); ?>">info@dmakproductions.com</a></p>

				<p class="menu-item">Office Phone: <a href="tel:<?php the_field('phone_number', page-id-1205); ?>"><?php the_field('phone_number', page-id-1205); ?></a></p>
			</div>

		</div>

	</div>


<div style="background-color:#0c0b0b; display:block; text-align:center; width:100%; padding:20px;">
	<p style="font-size:14px; color:#fff;">© 2018 DMAK Productions</p>
</div>
	

</footer>

<!-- jQuery is called via functions.php -->


<script>
var ctkloaded = 0;
function ctkvidinit()
{
   if(ctkloaded == 0)
   {   
      jQuery.getScript("/wp-content/plugins/wd-instagram-feed/js/wdi_frontend.js?ver=1.2.10");
      
      (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=Comments&version=v2.3"+"";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk2'));
    
      window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));

      console.log("loaded...");
      
      ctkloaded = 1;   
   } 
}

jQuery(document).ready(function(){
    
    jQuery(document).mousemove(function(e) {
      setTimeout(ctkvidinit, 300);
    });
    
    jQuery(document).on("touchstart",function(){
      setTimeout(ctkvidinit, 300);
    });
    
});

</script>
<script src="<?php bloginfo('template_directory'); ?>/_/js/waypoints.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/_/js/waypoints-sticky.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.cycle.all.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>
<?php wp_footer(); ?>



	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">


<script type="text/javascript">

	// jQuery(document).ready(function($) {
	//     $('a.mtoggle').click(function() {
	//         $('#mobilenav').toggle("slow");
	//     });
	// });
	$(document).ready(function(){
	  	$("a.mtoggle").click(function(){
	    	$("#mobilenav").slideToggle(700);
	  	});
	});
</script>

	<a style="height:0!important; float:left !important;" href="//www.dandb.com/verified/business/704600777/" target="_blank" rel="nofollow"><img style="height:0!important; float:left !important;" src="//www.dandb.com/verified/seal/pixel/?t=704600777" /></a>

</body>

</html>