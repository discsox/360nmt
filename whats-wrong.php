<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=""><!-- InstanceBegin template="/Templates/main_template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<!--<![endif]-->
<?php 
  //initialize variables  
	  $menuFix = "";
	  $menuFix = "onClick=\"window.location='#'\"";

  //check working directory and set path accordingly  
  
  $workingDir = getcwd() ;
  if(preg_match("/\b(templates|team|cases)\b/", $workingDir)){
    //echo "We are in one of the sub Directories";
	include  '_includes/vars.php';
	$dirPrefix = '../'; //useful for other includes
  } else{
	include  '_includes/vars.php'; 
	$dirPrefix = ''; 
  } 
?> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="Title" -->
<title>What's Wrong?</title>
<!-- InstanceEndEditable -->
<?php if(!$production):?> 
    <link href="_styles/boilerplate.css" rel="stylesheet" type="text/css" />
    <link href="_styles/styles.css" rel="stylesheet" type="text/css">
    <link href="_styles/fluid_360.css" rel="stylesheet" type="text/css" />
<?php else:?>
    <link href="_styles/styles.css" rel="stylesheet" type="text/css">
<?php endif;?>
<link href='http://fonts.googleapis.com/css?family=Krona+One' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="_images/360_favicon.ico" type="image/x-icon" />
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

<!-- InstanceBeginEditable name="Head" -->
<script src="_scripts/jquery.imagemapster.js"></script>
<!-- InstanceEndEditable -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39652735-1', '360nmt.com');
  ga('send', 'pageview');

</script>
</head>
<body>
<div class="gridContainer clearfix"  <?=$menuFix;?> >
<div id="Logo360"><a href="index.php"><img src="_images/360_logo_160_8.png" alt="360nmt logo"></a></div>
<div id="HeaderContainer">
      <div id="Logo">&nbsp;</div>
      <div id="Title">
      <h2>360 Neuromuscular Therapy</h2>
      <div class="registerIcon"> <a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-104" target="_blank"><img name="RegisterLink" src="_images/space.gif" width="44" height="44" alt="Register Link"></a> </div>
      <div class="heading3Reg"><a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-104" target="_blank">Seminar<span class="hide_br"> <br>
          </span> Registration</a><br>
          <a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-106" target="_blank">Workshop<span class="hide_br"> <br>
          </span> Registration</a></div>
      <div class="CalendarIcon"> <a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-102&sView=week" target="_blank" id="MakeAppointment"><img name="ApointmentLink" src="_images/space.gif" width="44" height="44" alt="Apointment Link"></a>
        <div class="day">
          <?=date("l"); ;?>
        </div>
        <div class="DayNumber">
          <?=date("j"); ;?>
        </div>
      </div>
      <div class="heading3"><a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-102&sView=week" target="_blank">Make<span class="hide_br"> <br>
        </span> Appointment</a></div>
    </div>
      <div id="Navigation">
        <nav><!-- #BeginLibraryItem "/Library/navigation.lbi" --><ul>
              <li><a href="#">How We Help</a> 
                <ul>
                      <li><a href="whats-wrong.php">Overview</a></li>
                      <li><a href="cases/head-and-neck.php">Head &amp; Neck</a></li>
                      <li><a href="cases/arm-and-shoulder.php">Shoulder &amp; Arm</a></li>
                      <li><a href="cases/torso-and-back.php">Torso &amp; Back</a></li>
                      <li><a href="cases/pelvis-and-hip.php">Pelvis &amp; Hip</a></li>
                      <li><a href="cases/leg-and-foot.php">Leg &amp; Foot</a></li>
                      <li><a href="cases/pain-syndromes.php">Pain Syndromes</a></li>
                      <li><a href="cases/other-syndromes.php">Other Issues</a></li>
                  </ul>
              </li>
              <li><a href="#">Services</a> 
                  <ul>
                      <li><a href="services.php">All Services</sup></a></li>
                      <li><a href="360nmt.php">360 NMT<sup>&reg;</sup></a></li>
                      <li><a href="trigger-point-dry-needling.php">Trigger Point Dry Needling</a></li> 
                      <li><a href="acupuncture.php">Acupuncture</a></li> 
                      <li><a href="team/peter.php">Corrective Movement</a></li>
                    <li><a href="pilates.php">Pilates</a></li>
                      <li><a href="pricing.php">Pricing</a></li>
                      <li><a href="faq-services.php">FAQ</a></li>
                  </ul>
              </li>
              <li><a href="team.php">Team</a></li>
              <li><a href="#">Seminars</a>
                  <ul>
                      <li><a href="seminars-overview.php">Seminars Overview</a></li>
                      <li><a href="neuromuscular-techniques.php">NeuroMuscular Techniques</a></li>
                      <li><a href="myopain-seminars.php">Myopain Seminars</a></li>
                      <li><a href="guest-lectures.php">Guest Workshops &amp; Lectures</a></li>
                      <li><a href="faculty.php">360 NMT Teaching Faculty</a></li>
                      <li><a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-104" target="_blank">Course Dates &amp; Registration</a></li>
                      <li><a href="faq-seminars.php">Seminar FAQ</a></li>
                  </ul>
              </li>
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
                  var customSearchControl =   new google.search.CustomSearchControl('010019495098111598081:h9zib0tjftg', customSearchOptions);
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
					  margin-right: -2px;
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
	margin-right: 0;
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
          </ul><!-- #EndLibraryItem --></nav>
      </div> 
  </div>
  <!-- InstanceBeginEditable name="Content" -->
  <div class="center" id="ContentFull">
    <h1>What's Wrong?</h1>
  </div>
<div id="ContentTxt"> 
  <p class=" WhiteBox center marginB20">Click a region of the body map...</p>
  <p class="MainTxt"><img src="_images/body_map.png" alt="Body Map" name="bodies" usemap="#BodyMap" id="bodies">
      <map name="BodyMap"><area shape="poly" coords="285,257,283,271,283,284,288,314,297,347,301,359,299,371,302,381,297,402,299,413,311,456,308,475,298,481,310,486,315,486,325,486,329,482,327,472,327,459,329,424,333,413,325,384,331,367,333,351,328,329,332,310,332,260,338,260,339,327,338,353,339,366,343,380,339,406,338,413,346,439,344,460,345,469,343,483,353,486,367,486,376,480,370,478,366,472,363,464,369,427,374,405,369,377,370,361,380,322,385,283,383,257,333,260" href="cases/leg-and-foot.php" data-key="LnF"><area shape="poly" coords="337,111,353,93,353,84,355,65,360,57,363,44,357,43,360,29,347,13,333,9,318,13,309,27,309,44,307,44,308,55,315,64,317,81,316,96" href="cases/head-and-neck.php" data-key="HnN"><area shape="poly" coords="262,256,264,276,251,280,239,280,236,263,246,255,250,208,261,184,265,151,262,131,274,103,287,101,316,82,316,92,285,139,283,169,279,194,276,219,269,231" href="cases/arm-and-shoulder.php" alt="Arm &amp; Shoulder" data-key="SnA" ><area shape="poly" coords="435,261,435,279,424,281,413,278,405,273,408,255,402,234,391,216,392,180,380,133,353,93,353,83,378,97,395,103,403,113,408,132,406,146,409,181,420,200,421,225,425,254" href="cases/arm-and-shoulder.php" alt="Arm &amp; Shoulder" data-key="SnA" ><area shape="poly" coords="97,80,56,100,41,137,44,148,42,172,29,202,32,222,25,250,19,254,17,275,31,277,37,276,45,271,43,248,59,212,61,176,72,140,94,98" href="cases/arm-and-shoulder.php" alt="Arm &amp; Shoulder" data-key="SnA" ><area shape="poly" coords="212,253,212,275,201,280,188,276,182,269,186,253,179,229,170,213,165,171,157,128,131,90,133,79,153,95,166,95,184,126,181,141,186,158,188,181,198,201,197,228,202,251" href="cases/arm-and-shoulder.php" alt="Arm &amp; Shoulder" data-key="SnA" >
        <area shape="poly" coords="95,95,115,109,131,93,132,81,135,58,144,40,138,37,138,23,128,13,114,9,99,13,90,27,90,37,86,40,88,55,94,56,97,62,97,76" href="cases/head-and-neck.php"  data-key="HnN">
        <area shape="poly" coords="96,95,114,109,133,93,158,131,162,152,155,172,156,181,152,197,114,210,74,196,75,168,68,157,79,127" href="cases/torso-and-back.php" alt="torso" data-key="TnB">
        <area shape="poly" coords="316,94,337,112,353,95,383,134,385,160,378,172,373,206,336,236,296,202,295,190,284,163,285,141" href="cases/torso-and-back.php" alt="Back" data-key="TnB">
        <area shape="poly" coords="114,210,152,197,158,215,156,222,163,245,117,257,66,246,73,226,71,211,74,196" href="cases/pelvis-and-hip.php" data-key="PnH">
        <area shape="poly" coords="336,236,372,207,377,212,376,219,382,230,381,243,383,252,385,262,336,260,284,262,288,247,288,235,294,214,294,201" href="cases/pelvis-and-hip.php" data-key="PnH">
        <area shape="poly" coords="67,247,65,256,64,279,69,304,80,339,87,355,85,364,85,373,78,392,80,403,92,446,90,465,81,477,81,482,89,486,100,487,109,482,110,469,104,456,110,414,114,403,106,374,112,357,114,341,109,319,113,297,112,258,117,259,120,317,119,343,120,356,126,370,120,396,119,403,127,429,129,450,126,459,124,477,132,486,140,486,151,485,153,475,141,466,144,454,150,417,155,395,150,367,151,351,161,312,164,273,162,245,116,257" href="cases/leg-and-foot.php" data-key="LnF">
        <area shape="poly" coords="28,351,27,360,18,371,18,375,7,384,9,387,21,380,24,387,22,397,22,404,26,412,27,402,27,394,31,391,32,402,32,407,33,416,37,416,37,399,39,393,42,402,43,411,46,411,46,401,45,389,51,404,53,403,51,391,52,382,51,371,46,362,46,351" href="cases/arm-and-shoulder.php" data-key="SnA">
        <area shape="poly" coords="433,375,430,392,430,411,429,417,429,424,424,429,416,428,410,422,409,414,406,402,401,385,400,370,403,368,403,365,407,364,408,357,410,356,413,354,416,354,418,350,421,350,421,363,425,364,425,352,431,350,433,357,432,364" href="cases/leg-and-foot.php" data-key="LnF">
      </map>
    </p>
  </div>
  <div id="ContentTxt_right">    
    <h2>Select a Region</h2>
    <p class="textInfoStyle gray">We have compiled over 50 case examples of how 360 NMT has assisted with soft-tissue injuries, pain conditions and performance maintenance. 
If you do not see your specific issue it doesn’t mean we can’t help with treatment or recommendations. Please <a href="contact-us.php">contact us</a>  for more information. </p>
    <p class="conditionList"><strong><a href="cases/head-and-neck.php" class="conditionLink" id="HnN">HEAD &amp; NECK</a></strong><br>
      <strong><a href="cases/arm-and-shoulder.php" class="conditionLink" id="SnA">SHOULDER &amp; ARM</a></strong><br>
      <strong><a href="cases/torso-and-back.php" class="conditionLink" id="TnB">TORSO &amp; BACK</a></strong><br>
      <strong><a href="cases/pelvis-and-hip.php" class="conditionLink" id="PnH">PELVIS &amp; HIP </a></strong><br>
      <strong><a href="cases/leg-and-foot.php" class="conditionLink" id="LnF"v>LEG &amp; FOOT</a></strong><br>
      <strong><a href="cases/pain-syndromes.php" class="conditionLink">PAIN SYNDROMES</a></strong><br>
    <strong><a href="cases/other-syndromes.php" class="conditionLink">OTHER ISSUES</a></strong></p>
</div>
  <!-- InstanceEndEditable -->
  <div id="SocialMedia"><a href="http://www.linkedin.com/company/3207247" target="_blank"><img src="_images/linkedin_logo.png" alt="LinkedIn Logo" title="360 NMT on LinkedIn"></a><a href="http://www.facebook.com/pages/360-NeuroMuscular-Therapy/53751713585" target="_blank"><img src="_images/facebook_logo.png" alt="Facebook Logo" title="360 NMT on Facebook"></a><a href="https://twitter.com/360nmt" target="_blank"><img src="_images/twitter_logo.png" alt="RSS Logo" title="Twitter 360 NMT"></a><a href="http://www.360nmt.com/blog/?feed=rss2" target="_blank"><img src="_images/rss_icon.png" alt="RSS Logo" title="360 NMT Feed"></a><a href="http://www.yelp.com/biz/360-neuromuscular-therapy-needham" target="_blank"><img src="_images/yelp_logo.png" alt="Yelp Logo" title="360 NMT on Yelp"></a><a href="http://www.youtube.com/user/360NMT" target="_blank"><img src="_images/youtube_logo.png" alt="YouTube Logo" title="360 on YouTube"></a><a href="http://visitor.r20.constantcontact.com/d.jsp?llr=y4d9uddab&p=oi&m=1102855344120&sit=nrfb4cveb&f=7fea30c9-e438-45bb-8d00-bce37227059b" target="_blank"><img src="_images/constan_contact_logo.png" class="paddingR5" alt="Constant Contact Logo" title="360NMT News Letter"></a>
    <!--<img src="../images/patch_logo.png" alt="Patch Logo"  class="paddingR5"title="360 NMT on Patch">-->
  </div><!-- #BeginLibraryItem "/Library/Footer.lbi" --><div id="Footer">
    <div id="Footer1">
      <p><a href="resources.php">Resources</a></p>
      <p><a href="recommended-providers.php">Recommended Providers</a></p>
      <p><a href="therapist-locator.php">Therapist Locator</a></p>
    </div>
    <div id="Footer2">
      <p><a href="forms.php">Forms</a></p>
      <p><a href="homecare.php">Homecare</a></p>
      <p><a href="testimonials.php">Testimonials</a></p>
    </div>
      <div id="Spacer"></div>
    <div id="Footer3">
      <p><a href="about-us.php">About Us</a></p>
      <p><a href="contact-us.php">Contact</a></p>
      <p><a href="employment.php">Employment</a></p>
    </div>
    <div id="Footer4">
      <p><a href="blog.php">Blog</a></p>
    <div id="BgOverlay"></div>	
    <div id="MapOverlay">
      <div id="CloseMap">Close Map<span>X</span></div>
    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=35+Highland+Circle+Needham+MA+02494&amp;sll=42.306173,-71.219286&amp;sspn=0.0471,0.068321&amp;gl=us&amp;ie=UTF8&amp;hq=&amp;hnear=35+Highland+Cir,+Needham+Heights,+Norfolk,+Massachusetts+02494&amp;t=m&amp;ll=42.312608,-71.222992&amp;spn=0.022215,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
      <!--<small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=35+Highland+Circle+Needham+MA+02494&amp;sll=42.306173,-71.219286&amp;sspn=0.011775,0.01708&amp;gl=us&amp;ie=UTF8&amp;hq=&amp;hnear=35+Highland+Cir,+Needham+Heights,+Norfolk,+Massachusetts+02494&amp;t=m&amp;ll=42.306197,-71.219301&amp;spn=0.022217,0.036478&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>-->
       </div>
<p class="marginT6px"><a href="#" id="Location" >Location</a></p>
      <p class="address">
      35 Highland Circle, 2nd Floor<br>
      Needham, MA 02494<br>
      Phone: 781-444-3609</p>
    </div>
  </div><!-- #EndLibraryItem --><div id="CopyRight">&copy; 2004 - 2014, 360 NMT&reg;, LLC. All Rights Reserved | <a href="privacy.php">Privacy Statement</a> | <a href="terms.php">Terms of Service</a> | <a href="hipaa.php">HIPAA  Policy</a></div>
  <div id="Watermark"><img src="_images/rosette_half21.png" alt="Watermark"></div>
</div>
<!-- InstanceBeginEditable name="ReadyFunction" -->
<script language="javascript">
  $(document).ready(function() {	    
	  //get the ID of the image that is used with the map
	  $imageId = "#"+$("img[usemap]").attr('id');
	  $($imageId).mapster({
	  fillColor: 'ff0000',
	  fillOpacity: 0.3,
	  clickNavigate: true,
	  showToolTip: true,
	  
      mapKey: 'data-key',
	  areas:  [{
               key: "SnA", 
               toolTip: "Shoulder & Arm"
            },
            {
                key: "HnN",
               toolTip: "Head & Neck"
            },
            {
                key: "TnB",
               toolTip: "Torso & Back"
            },
            {
                key: "PnH",
               toolTip: "Pelvis & Hip"
            },
            {
                key: "LnF",
               toolTip: "Leg & Foot"
            }
			]
     });
	 
	 //highlight the graphic when mouseover link
	 // requires the links to have the same ID/key as the map areas
	 $('.conditionLink').mouseover(function() {
		 //get the ID of the image that is used with the map
		 $imageId = "#"+$("img[usemap]").attr('id');
		  //console.log('MapID', $imageId);
		 $($imageId).mapster('highlight',false);
		$($imageId).mapster('highlight',$(this).attr('id'));
	 });
	 $(window).resize(function(){
		$windowWidth = $(window).width();
		$mapWidth = $(window).width()*0.4;
		if ($windowWidth <= 480) { 
			$mapWidth = $windowWidth*0.85 ;
		} 
		else {		
			$mapWidth = $windowWidth*0.4 ;
		}		
		if ($windowWidth*0.4 > 450) { 
				$mapWidth = 450;
		}
		//alert ($mapHeight);
		//console.log('width:', $windowWidth);
		  $($imageId).mapster('resize', $mapWidth, 0, 200);
	});
	 
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
</script>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
