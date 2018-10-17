<?php
/*
Template Name: Landing page
*/
?>

<?php //get_header();  
wp_head(); ?>
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<title> Video Production - D-Mak Productions </title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/files/style2.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/typography.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/files/form.css" type="text/css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/files/form2.css" type="text/css">
        <link rel="stylesheet" id="contact-form-7-css" href="<?php echo get_template_directory_uri(); ?>/files/styles.css" type="text/css" media="all">
<link rel="stylesheet" id="al-theme-css" href="<?php echo get_template_directory_uri(); ?>/files/theme.css" type="text/css" media="all">
<link rel="stylesheet" id="al-responsive-css" href="<?php echo get_template_directory_uri(); ?>/files/responsive.css" type="text/css" media="all">
            <style>
                .header{
                    background: transparent;
                }
                .header-center .header-text{
                    color:#272727;
                    font-weight: 400;
                    font-size:44px;
                    line-height: 130%;
                }
                .header-center .header-text strong{
                    font-weight:700;
                }
                .header-center{
                    max-width: 1170px;
                    width: 100%;
                }
                .leadbox-content-wrapper, #form-preview fieldset, fieldset{
                    width:100%;
                    max-width: 500px;
                }
                textarea {
                  height: 100px;
                }
                #leadpages-fieldset input.input, textarea.input{
                    background-color: #fff;
                    border:1px solid #ddd;
                    box-shadow: none;
                    margin-bottom: 10px;
                    font-weight: 700;
                    padding:15px;
                    font-size: 18px;
                    font-style: normal;
                }
                #form-preview button[type=submit], #leadpages-submit-button{
                    border:0;
                    padding:20px;
                    font-size: 18px;
                }
                ::-webkit-input-placeholder{
                    color:#777 !important;opacity: 1;
                }
                :-moz-placeholder{color:#777 !important;opacity: 1;}
                ::-moz-placeholder{color:#777 !important;opacity: 1;}
                :-ms-input-placeholder{color:#777 !important;opacity: 1;}
                .back-guarantee-center {
                    margin: 0 auto;
                    padding: 43px 0 51px;
                    width: 100%;
                    max-width: 1024px;
                }
                #leadpages-form-image{
                    margin: 0 15pt 5pt 5pt;
                }
                #guarantee-section input[type=text],
                #guarantee-section input[type=email],
                #guarantee-section textarea{
                    background:#eee;
                    width: 100%;
                    margin-bottom: 5px;
                    border: 1pt solid #ddd;
                    box-shadow: none;
                    box-sizing: border-box;
                    color: #5a5a5a;
                    display: block;
                    font-size: 1.2em;
                    line-height: 1.2em;
                    padding: 0.6em 12pt;
                    transition: border 0.2s linear 0s, box-shadow 0.2s linear 0s;
                    border-radius: 3px;
                }
                #guarantee-section textarea{
                    height:50px;
                    font-weight: 400;
                }
                #guarantee-section span.wpcf7-not-valid-tip{
                    text-align: left;
                }
                #guarantee-section span.wpcf7-form-control-wrap{
                    display: block;
                    width:90%;
                }
                .box-wrapper{
                    width:100%;
                    max-width:1170px;
                    margin:0 auto 40px;
                }
                .box-wrapper .box{
                    float:left;
                    width:48%;
                        padding:1%;
                }
                .box-wrapper .box img{
                    width: 100%;
                }
                .box-wrapper .box2{
                    float:right;
                }
                .box-wrapper .blue_box{
                    background: #000010;
                    border-radius:3px;
                    padding:10px;
                }
                .box-wrapper .blue_box p{
                    color:#fff;
                }
                .box-wrapper .blue_box img{
                    width:auto;
                    max-width: 100px;
                    float: left;
                    margin-right: 10px;
                }
                .box-wrapper .blue_box h4{
                    color:#fff;
                    text-transform: capitalize;
                }
                .box-wrapper .blue_box input{
                    background-color:#fff;
                    box-shadow:none;
                    max-width:350px;
                    margin-bottom: 5px;
                }
                .blue_box div.wpcf7 img.ajax-loader{
                    width:auto;
                    float: none;
                }
                .blue_box span.wpcf7-not-valid-tip{
                    color:red;
                }
                  .box-wrapper .btn-download{
                    background-color: #f8931f;
                    border-color: #2298DD;
                    border-bottom: 2px solid #b0431c;
                    border-radius: 3px;
                   
                    padding:10px;
                  }
                  .box-wrapper .btn-download span{
                    display: inline-block;
                    background-color: #f35925;
                    padding:10px;
                    margin-left: 10px;
                  }
                #leadpages-submit-button{
                    text-align: center;
                }
                div.wpcf7-validation-errors {
                border: 0 solid #f7e700;
                color: red;
                }
                div.wpcf7-mail-sent-ok {
                border: 0px solid #398f14;
                font-size: 18px;
                line-height: 26px;
                color: #444;
                }
                .money-back .day {
                color: #ffa800;
                font-size: 36px;
                font-weight: 700;
                line-height: 38px;
                margin: 40px 0 20px;
                }

                @media screen and (max-width:979px){
                    .header-center .header-text{
                        font-size:34px;
                    }
                }
                @media screen and (max-width:767px){
                    .box-wrapper .box,.box-wrapper .box2{
                        float:none;
                        width:auto;
                    }
                }
                @media screen and (max-width:480px){
                    .header-center .header-text{
                        font-size:24px;
                    }
                }
                .videoWrapper {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 */
    padding-top: 25px;
    height: 0;
}
.videoWrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.black_box{
    background: #000;
    padding:20px 20px 0;
}
#leadpages-form-title{
    color:#fff !important;
}
            </style>

<body style="background:#fff" style="font-family: "aperculight","Arial",sans-serif;">
        
            <div class="main-page" id="main-page">
                <div id="guarantee-section" class="back-guarantee leadstyle-container">
                    <div class="header">
                        <div class="header-center leadstyle-container" style="padding-bottom:20px">
                            <div class="header-text leadstyle-text">
                                Do you know what to look for when hiring a <strong>video production</strong> company?
                            </div>
                        </div>
                    </div>
                    <div class="box-wrapper">
                        <div class="box box1">
                                <div class="videoWrapper">
                                 <?php  while (have_posts()) : the_post(); ?>
                     
                                        <?php the_field('video1'); ?>
                                        <?php endwhile; ?>
                                </div>
                        </div>
                        <div class="box box2">
                            <div class="blue_box">
                                <h4>"Get Our FREE Video Production Success Guide direct to your Inbox"</h4>
                                <p><img class="pull-left" src="<?php echo get_template_directory_uri(); ?>/files/image05.png">
                               In this eBook, you'll learn</p>
                                <div class="wpcf7" id="wpcf7-f1369-o1" dir="ltr" lang="en-US">
<div role="alert" class="screen-reader-response">Your message was sent successfully. Thanks.</div>
<ul style="padding-left:130px;">
<li>Ten Reasons to Use Video</li>
<li>Nine Critical Videos Every Business Needs</li>
<li>The Process of Producing and Successful Corporate Video</li>
</ul>

<?php echo do_shortcode('[contact-form-7 id="2013" title="landing_page_download"]'); ?>
</div>                            </div>

                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="back-guarantee leadstyle-container" id="guarantee-section">
                        <div class="back-guarantee-center">
                            <div class="black_box">
                                <div id="leadpages-form-title" style="">
                                    <div style="text-align: center; font-size: 30px;"><strong>Ready to Start Growing Your Business with Video Content? <br><br> Get a 24 Hour Estimate Below... (or give us a call at <a href="tel:+14802371267">602-926-0036</a>)</strong>
                                    </div>
                                </div>
                                <div style="display:block; margin:auto; text-align: center">
                                    <img id="leadpages-form-image" src="<?php echo get_template_directory_uri(); ?>/files/logo.png">
                                             
                                        <?php echo do_shortcode('[contact-form-7 id="2014" title="landing_businees"]'); ?>
                                                                   </div>
                            </div>
                        </div>
                        <div id="money-back" class="money-back">
                            <p class="day leadstyle-text" id="guarantee-title"><span style="color:#696969;"><span style="font-family: raleway;">
                            Your Video Content Strategy Could Look Like This
                            </span></span></p>
                            <div class="box-wrapper">
                                <div class="box box1">
                                    <div class="video" id="video">
                                     <?php  while (have_posts()) : the_post(); ?>
                                        <?php the_field('video_2'); ?>
                                        <?php endwhile; ?>
                                    </div>
                                    </div><!-- /.box1 -->
                                    <div class="box box2">
                                        <div class="video" id="video">
                                         <?php  while (have_posts()) : the_post(); ?>
                                           <?php the_field('video_3'); ?>
                                        <?php endwhile; ?>
                                        </div>
                                        </div><!-- /.box2 -->
                                        </div><!-- /.box-wrapper -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <div class="footer-popup-wrapper_new">
                        <div style="display: block;" class="footer-popup-btn_new">Chat With Us<div class="close_popup">x</div><span class=""></span></div>
                        <div style="display: none;" class="footer-popup-box_new">
                            <div class="wpcf7" id="wpcf7-f1127-o3" dir="ltr" lang="en-US">
<div role="" class="screen-reader-response"></div>
 <?php echo do_shortcode('[contact-form-7 id="2015" title="landing_chat"]'); ?>

</div>                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <script src="<?php echo get_template_directory_uri(); ?>/files/jquery_009.js"></script>
                    
                    <script src="<?php echo get_template_directory_uri(); ?>/files/jquery_007.js" type="text/javascript"></script>
                    <style>
                        div.pp_default .pp_content, div.light_rounded .pp_content {
                        background-color: transparent;
                        }
                    </style>
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
                   
</body>

<?php 

wp_footer();

//get_footer(); ?>