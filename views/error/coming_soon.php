	<script>
	
		$(document).ready(function(){
			$("#countdown").countdown({
				date: "16 November 2013 00:00:00",
				format: "on"
			},
			
			function() {
				// callback function
			});
		});
	
	</script>
<link rel="stylesheet" href="<?php echo URL; ?>css/styles.css" />
<script src="<?php echo URL; ?>js/countdown.js"></script>
<!--[if IE]>
               <style type="text/css">
                     .timer { display: none !important; }
                     div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
                </style>
            <![endif]-->
<style>.slider-container,.orbit-wrapper,.cosmo-slider{overflow:hidden;height:350px!important;}#featured .content{display:none}#featured .content:first-child,#featured.orbit .content{display:block;}</style>
<div class="row unbox-x">
    <div class="slider-container" style="height:350px">
        <div class="cosmo-slider" id="featured" style='height: 290px;'>
            <div style="background-image: url( <?php echo URL; ?>/wp-content/uploads/sites/14/2012/06/2697056760_b09f704c1a_o.jpg);background-position:left;background-repeat:no-repeat;background-attachment:scroll;" class="content orbit-slide">
                <div class="row">
                    <div class="six columns left">
                    </div>
                    <div class="six columns slide-description-container right" style='text-align: center ;'>
                        <h2 style="margin-bottom: -1px;"><a>Discover Your Social Interests</a>  </h2>
                        <p style="margin-bottom: 10px;">Show Your Interest<br/> Use the social bar to get the latest updates. 
                            <br/>Thank You</p>
                        <ul id="countdown" style='margin-bottom: -80px;'>
                <li>
                    <span class="days">00</span>
                    <p class="timeRefDays">days</p>
                </li>
                <li>
                    <span class="hours">00</span>
                    <p class="timeRefHours">hours</p>
                </li>
                <li>
                    <span class="minutes">00</span>
                    <p class="timeRefMinutes">minutes</p>
                </li>
                <li>
                    <span class="seconds">00</span>
                    <p class="timeRefSeconds">seconds</p>
                </li>
            </ul>
                        
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<script>
    jQuery(window).load(function() {
        /* Orbit slider */
        jQuery('#featured').orbit({
            animation: 'fade', // fade, horizontal-slide, vertical-slide, horizontal-push
            animationSpeed: 500, // how fast animtions are
            timer: true, // true or false to have the timer
            advanceSpeed: 5000, // if timer is enabled, time between transitions 
            pauseOnHover: true, // if you hover pauses the slider
            startClockOnMouseOut: true, // if clock should start on MouseOut
            startClockOnMouseOutAfter: 1000, // how long after MouseOut should the timer start again
            directionalNav: true, // manual advancing directional navs
            captions: false,
            bullets: false, // true or false to activate the bullet navigation
            bulletThumbs: false, // thumbnails for the bullets
            bulletThumbLocation: '', // location from this file where thumbs will be
            afterSlideChange: function(prev, current) {
            },
            fluid: true
        });
        jQuery('.orbit-wrapper .slider-nav').hide();
        jQuery('.orbit-wrapper').hover(function() {
            jQuery('.orbit-wrapper .slider-nav').show();
        });
        jQuery('.orbit-wrapper').mouseleave(function() {
            jQuery('.orbit-wrapper .slider-nav').hide();
        });
    });
</script>
<section id="main">
    <div class="row">
     

<div id="lightbox-banner" style="display: none">
    <script type="text/javascript"><!--
google_ad_client = "ca-pub-0993660073106193";
/* Req */
google_ad_slot = "6371658367";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
    
  <div id="simplemodal-caption">
    Advertisement
  </div>
</div>
<script type="text/javascript">
jQuery(function ($) {
  $('#lightbox-banner').modal();
});
</script>



    </div>
</section>
<script type="text/javascript" src=<?php URL; ?>js/jquery.simplemodal.js"></script>
<link href="<?php URL; ?>css/jquery.simplemodal.css" rel="stylesheet" />