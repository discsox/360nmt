<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<?php 
  //initialize variables  
	  $menuFix = "";
	  $menuFix = "onClick=\"window.location='#'\"";
?> 

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>360 Neuromuscular Therapy</title>
<link href="_styles/boilerplate.css" rel="stylesheet" type="text/css">
<link href="_styles/styles.css" rel="stylesheet" type="text/css">
<link href="_styles/fluid_360.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Krona+One' rel='stylesheet' type='text/css'>
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="_scripts/respond.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script language="javascript">

$(window).load(function () {
  // run code after all has loaded
    $('.centerIt').css({
        position:'absolute',
        top: ($('#Slider').outerHeight() - $('.centerIt').outerHeight()*1.2)/2
    }); 
  //$(window).resize();
});
</script>
<!--<script language="javascript">
  $(document).ready(function() {
  
	   $('#Location').click(function() {
			$('#MapOverlay,#BgOverlay').animate({
				  opacity: "toggle"
				 }, 1000
			);
	   }); 
	   $('#CloseMap').click(function() {
			$('#MapOverlay,#BgOverlay').animate({
				  opacity: "toggle"
				 }, 1000
			);
	   });
  });
</script>--><script src="_royalslider/jquery.royalslider.min.js" /></script>
<link href="_royalslider/royalslider.css" rel="stylesheet">
<link href="_royalslider/rs-default.css" rel="stylesheet">
<!--<script />// To initially run the function:
$(window).resize();</script>-->
</head>
<body>
<!--<div class="gridContainer clearfix" onClick="window.location='#'">-->
<div class="gridContainer clearfix" <?=$menuFix;?> >
<div id="Logo360"><a href="index.php"><img src="_images/360_logo_160_8.png" alt="360nmt logo"></a></div>
<div id="HeaderContainer">
      <div id="Logo">&nbsp;</div>
      <div id="Title">
          <h1>360 Neuromuscular Therapy</h1>
          <a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=5589" target="_blank"><img name="ApointmentLink" src="_images/space.gif" width="44" height="44" alt="Apointment Link"></a>
        <div class="CalendarIcon">
            <div class="day">
            <?=date("l"); ;?>
          </div>
            <div class="DayNumber">
            <?=date("j"); ;?>
            </div>
          </div>
          <div class="heading3"><a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=5589" target="_blank">Make Appointment</a></div>
          
      </div>
      <div id="Navigation">
        <nav>
          <ul>
              <li><a href="#">Services</a>
                  <ul>
                      <li><a href="#">360 NMT<sup>&reg;</sup></a></li>
                      <li><a href="#">Acupuncture</a></li>
                      <li><a href="#">Pilates</a></li>
                      <li><a href="pricing.php">Pricing</a></li>
                      <li><a href=#>FAQ's</a></li>
                  </ul>
              </li>
              <li><a href="#">Symptoms</a></li>
              <li><a href="#">Seminars</a>
                  <ul>
                      <li><a href="#">360 Master Classes</a></li>
                      <li><a href="#">Myopain Seminar</a></li>
                      <li><a href="#">Posture Analysis</a></li>
                      <li><a href="#">Faculty</a></li>
                      <li><a href="#">Registration</a></li>
                      <li><a href="#">FAQ's</a></li>
                  </ul>
              </li>
              <li><a href="team.php">Team</a></li>
              <li class="search_container" >

                <div id='cse' style='width: 100%;'>Loading</div>
				<script src='//www.google.com/jsapi' type='text/javascript'></script>
                <script type='text/javascript'>
                google.load('search', '1', {language: 'en', style: google.loader.themes.V2_DEFAULT});
                google.setOnLoadCallback(function() {
                  var customSearchOptions = {};
                  var orderByOptions = {};
                  orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
                  customSearchOptions['enableOrderBy'] = true;
                  customSearchOptions['orderByOptions'] = orderByOptions;
                  customSearchOptions['overlayResults'] = true;
                  var customSearchControl =   new google.search.CustomSearchControl('002646908333670893476:yy9wbiupekw', customSearchOptions);
                  customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
                  var options = new google.search.DrawOptions();
                  options.setAutoComplete(true);
                  customSearchControl.draw('cse', options);
                }, true);		
                </script>
                <style type='text/css'>
				  #cse {
					  text-align:right;
				  }
				  .cse .gsc-control-cse div, .gsc-control-cse div {	
					  width: 97%;
				  }
				  .cse .gsc-control-cse, .gsc-control-cse {
					  padding: 0;
					  background-color: transparent;
					  border: 1px none transparent;
				  }
				  form.gsc-search-box {
					  margin: 0;
				  }
				  table.gsc-search-box {
					  margin-bottom: 0;
				  }
				  table.gsc-search-box td {
					  vertical-align: top;
				  }
				  .gsc-search-box-tools .gsc-search-box .gsc-input {
					  padding-right: 0px;
					  height: 15px !important;
				  }
				  .gsc-input-box {
					  height: 15px;
					  padding-bottom: 5px;
				  }
				  input.gsc-input {
					  font-size: 14px;
				  }
				  .cse input.gsc-search-button, input.gsc-search-button {
   /* background-color: #E46C0A;
    background-image: -moz-linear-gradient(center top , #E46C0A, #F7C397);*/
	background: #e46c0a; /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2U0NmMwYSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmN2MzOTciIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #e46c0a 0%, #f7c397 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e46c0a), color-stop(100%,#f7c397)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #e46c0a 0%,#f7c397 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #e46c0a 0%,#f7c397 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #e46c0a 0%,#f7c397 100%); /* IE10+ */
background: linear-gradient(to bottom,  #e46c0a 0%,#f7c397 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e46c0a', endColorstr='#f7c397',GradientType=0 ); /* IE6-8 */

    border: 1px solid #E46C0A;
				  }
				  .cse .gsc-search-button input.gsc-search-button-v2, input.gsc-search-button-v2 {
					  margin-top: 2px;
					  padding: 1px 2px;
				  }
				  .gsib_a {
					  padding-left: 0;
					  padding-right: 0;
				  }
				  .gs-result .gs-title, .gs-result .gs-title * {
					  width:110%;
				  }
				  .gs-title a {
					  padding:0;
				  }
				  .gsc-results-wrapper-overlay {
					  width:70% !important;
				  }
				  .gsc-above-wrapper-area {
					  width: 50% !important;
				  }
				  .gsc-webResult .gsc-result {
					  padding: 0;
				  }
				  .gsc-results-close-btn {
					   width: 12px !important;
				  }
                </style>
              </li>
          </ul>
        </nav>
      </div>
  </div>
<div id="Slider"><!--<img src="images/slide_bg.jpg" alt="bg" style="float:left;">-->
    <div id="content-slider-1" class="royalSlider contentSlider rsDefault"> 
      <!--<div style="/* [disabled]position:relative; */">-->
      <div> <img class="rsImg" src="_images/broken_link.jpg" data-rsw="400" data-rsh="330">
        <div class="centerIt">
          <h3>Trigger points are often the missing link of pain puzzles</h3>
          <p class="textSlidshow  hideInMobile">Trigger points are enigmatic and not seen on x-rays. Referred pain from trigger points can mimic symptoms from joints, organs and other pathologies. If everything else has been ruled out, your pain might be sourced from trigger points.</p>
        </div>
        <span class="LearnMore hideInMobile">Learn More ></span> </div>
      <div> <img class="rsImg" src="_images/woman.jpg" data-rsw="400" data-rsh="330">
        <div class="centerIt">
          <h3>Pain is isolating</h3>
          <p class="textSlidshow  hideInMobile">Pain can affect your whole life. Prolonged pain changes the nervous system. 360 NMT treatments combine evidence-informed research and proven manual techniques to interrupt pain pathways and restore function. We want you to play in the places that you used to ache. </p>
        </div>
        <span class="LearnMore hideInMobile">Learn More ></span> </div>
      <div> <img class="rsImg" src="_images/egg_shells.jpg" data-rsw="400" data-rsh="330">
        <div class="centerIt">
          <h3>Posture is the beginning of all movement</h3>
          <p class="textSlidshow  hideInMobile">Does poor posture lead to pain? Or, does pain cause poor posture? When movement hurts, 360 NMT assesses postural patterns. Some muscles shorten and tighten, others weaken and lengthen. Regardless of what happened first, we will help help you break out of your postural shell.</p>
        </div>
        <span class="LearnMore hideInMobile">Learn More ></span> </div>
      <div> <img class="rsImg" src="_images/neck_muscles.jpg" data-rsw="400" data-rsh="330">
        <div class="centerIt">
          <h3>Treat Local, Think Global</h3>
          <p class="textSlidshow  hideInMobile">Muscles don't work in isolation. They interface with every part of the body via fascia, the "global glue" that binds everything together. Our clinical experience has proven that we need to not only treat local symptoms, but also treat all functionally related muscles. Results are quicker and last longer.</p>
        </div>
        <span class="LearnMore hideInMobile">Learn More ></span> </div>
      <div> <img class="rsImg" src="_images/pen_paper.jpg" data-rsw="400" data-rsh="330">
        <div class="centerIt">
          <h3>360 NMT is the bridge</h3>
          <p class="textSlidshow  hideInMobile">360 NMT has ongoing collaborative relationships with top healthcare providers in the Greater Boston area. We provide adjunct manual treatment for rehabilitation programs prescribed by physical therapists, pain care specialists, orthopedists, physiatrists and chiropractors.</p>
        </div>
        <span class="LearnMore hideInMobile">Learn More ></span> </div>
      <div> <img class="rsImg" src="_images/stew_katie.jpg" data-rsw="400" data-rsh="330">
        <div class="centerIt">
          <h3>360 NMT is a teaching clinic</h3>
          <p class="textSlidshow  hideInMobile">International NMT instructor Stewart Wild and 360 NMT founder Katie Adams presents regularly  at medical conferences and teach advanced continuing education seminars for manual therapists. Together they created a vision for what has now become the leading neuromuscular treatment and training clinic in New England.</p>
        </div>
      <span class="LearnMore hideInMobile">Learn More ></span> </div>
      <div> <img class="rsImg" src="_images/skeleton.jpg" data-rsw="400" data-rsh="330">
        <div class="centerIt">
          <h3>360 NMT is the bridge</h3>
          <p class="textSlidshow  hideInMobile">360 NMT has ongoing collaborative relationships with top healthcare providers in the Greater Boston area. We provide adjunct manual treatment for rehabilitation programs prescribed by physical therapists, pain care specialists, orthopedists, physiatrists and chiropractors.</p>
        </div>
      <span class="LearnMore hideInMobile">Learn More ></span> </div>
    </div>
  </div>
  <div id="ContentTxt">
    <h2>Problem-solving Massage Therapy</h2>
    <p class="MainTxt">360 NMT<sup>&reg;</sup> integrates trigger point deactivation techniques with advanced massage therapy to alleviate pain. Our treatments are informed by the most recent myofascial research available. The NMT modality is extremely effective to eliminate muscular sourced pain. Receiving NMT is also a proactive choice for injury prevention, maintenance and wellness. </p>
  </div>
  <div id="ContentNews">
    <div class="ContentNews">
      <h2 class="purple">News &amp; events</h2>
      <ul>
        <li>Lorem ipsum <a href="#">dolor</a> sit amet </li>
        <li>Consectetur adipiscing elit. </li>
        <li>Vivamus at nibh dui. Nulla rhoncus tellus at augue</li>
        <li> interdum tristique. </li>
      </ul>
    </div>
  </div>
  <div id="SocialMedia"><a href="http://www.linkedin.com/pub/katie-plummer-adams/9/2b/72a" target="_blank"><img src="_images/linkedin_logo.png" alt="LinkedIn Logo" title="360 NMT on LinkedIn"></a><a href="http://www.facebook.com/pages/360-NeuroMuscular-Therapy/53751713585" target="_blank"><img src="_images/facebook_logo.png" alt="Facebook Logo" title="360 NMT on Facebook"></a><a href="http://www.360nmt.com/blog/?feed=rss2" target="_blank"><img src="_images/rss_icon.png" alt="RSS Logo" title="360 NMT Feed"></a><a href="http://www.yelp.com/biz/360-neuromuscular-therapy-needham" target="_blank"><img src="_images/yelp_logo.png" alt="Yelp Logo" title="360 NMT on Yelp"></a><a href="http://360nmt.com/blog/index.php" target="_blank"><img src="_images/wordpress_logo.png" alt="WordPress Logo" title="360 Blog"></a><a href="http://www.youtube.com/user/KatieAdams360" target="_blank"><img src="_images/youtube_logo.png" class="paddingR5" alt="YouTube Logo" title="360 on YouTube"></a><!--<img src="../images/patch_logo.png" alt="Patch Logo"  class="paddingR5"title="360 NMT on Patch">--></div>
  <div id="Footer">
    <div id="Footer1">
      <p><a href="#">Resources</a></p>
      <p><a href="#">Research</a></p>
      <p><a href="#">Homecare</a></p>
    </div>
    <div id="Footer2">
      <p><a href="#">Testimonials</a></p>
      <p><a href="#">Policies</a></p>
      <p><a href="therapist-locator.php">Find an NMT</a></p>
    </div>
      <div id="Spacer"></div>
    <div id="Footer3">
      <p><a href="#">Contact Us</a></p>
      <p><a href="#">Forms</a></p>
      <p><a href="#">Employment</a></p>
    </div>
    <div id="Footer4">
    <div id="BgOverlay"></div>	
    <div id="MapOverlay">
      <div id="CloseMap">Close Map<span>X</span></div>
    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=35+Highland+Circle+Needham+MA+02494&amp;sll=42.306173,-71.219286&amp;sspn=0.0471,0.068321&amp;gl=us&amp;ie=UTF8&amp;hq=&amp;hnear=35+Highland+Cir,+Needham+Heights,+Norfolk,+Massachusetts+02494&amp;t=m&amp;ll=42.312608,-71.222992&amp;spn=0.022215,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
      <!--<small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=35+Highland+Circle+Needham+MA+02494&amp;sll=42.306173,-71.219286&amp;sspn=0.011775,0.01708&amp;gl=us&amp;ie=UTF8&amp;hq=&amp;hnear=35+Highland+Cir,+Needham+Heights,+Norfolk,+Massachusetts+02494&amp;t=m&amp;ll=42.306197,-71.219301&amp;spn=0.022217,0.036478&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>-->
       </div>
<p><a href="#" id="Location" >Location</a></p>
      <p class="address">
      35 Highland Circle, 2nd Floor<br>
      Needham, MA 02494<br>
      Phone: 781-444-3609<br>
Fax: 781-400-1790&nbsp;</p>
    </div>
  </div>
  <div id="CopyRight">&copy; 2004 - 2013, 360 NMT, Inc. All Rights Reserved | <a href="privacy.php">Privacy Statement</a> | <a href="terms.php">Terms of Service</a></div>
  <div id="Watermark" ><img src="_images/rosette_half21.png" alt="Watermark"></div>
</div>
<script id="addJS">
jQuery(document).ready(function($) {
  // Please note that autoHeight option has some conflicts with options like imageScaleMode, imageAlignCenter and autoScaleSlider
  // it's recommended to disable them when using autoHeight module
  $('#content-slider-1').royalSlider({
    autoHeight: true,
	//autoScaleSlider: true,
    arrowsNav: true,
	delay: 0,
	//arrowsNavHideOnTouch: true,
	//transitionSpeed: 0,
    fadeinLoadedSlide: false,
    //controlNavigationSpacing: 0,
    //controlNavigation: 'tabs',
    controlNavigation: 'bullets',
	controlsInside: true,
    imageScaleMode: 'none',
    imageAlignCenter:false,
    loop: true,
    loopRewind: true,
    numImagesToPreload: 10,
    keyboardNavEnabled: true,
    usePreloader: false,
	autoPlay: {
    		// autoplay options go gere
    		enabled: true,
    		pauseOnHover: true,
			delay: 5000
    	}
  });
var slider = $('.royalSlider').data('royalSlider');
slider.ev.on('rsBeforeSizeSet', function() {
   //console.log(slider.width, slider.height);
   //console.log(slider.height, $('.centerIt').outerHeight());
   $('.centerIt').css({
        position:'absolute',
        //left: ($(window).width() - $('.className').outerWidth())/2,
        //top: ($('#Slider').outerHeight() - $('.centerIt').outerHeight())/2
        top: (slider.height - $('.centerIt').outerHeight()*1.2)/2
        //top: ($('#content-slider-1').outerHeight() - $('.centerIt').outerHeight())/2
    });
});
//$(window).resize(function(){
//$(window).bind('resize', function () { 
//    $('.centerIt').css({
//        position:'absolute',
        //left: ($(window).width() - $('.className').outerWidth())/2,
//        top: ($('#Slider').outerHeight() - $('.centerIt').outerHeight())/2
        //top: ($('#content-slider-1').outerHeight() - $('.centerIt').outerHeight())/2
//    });

//}).triggerHandler('resize');
//});
//  });
  
  //$(document).ready(function() {
	   $('#Location').click(function() {
			$('#MapOverlay,#BgOverlay').animate({
				  opacity: "toggle"
				 }, 1000
			);
	   }); 
	   $('#CloseMap').click(function() {
			$('#MapOverlay,#BgOverlay').animate({
				  opacity: "toggle"
				 }, 1000
			);
	   });
	   
 // });
});
</script>
</body>
</html>
