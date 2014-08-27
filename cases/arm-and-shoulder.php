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
	include  '../_includes/vars.php';
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
<title>Shoulder and Arm Pain</title>
<!-- InstanceEndEditable -->
<?php if(!$production):?> 
    <link href="../_styles/boilerplate.css" rel="stylesheet" type="text/css" />
    <link href="../_styles/styles.css" rel="stylesheet" type="text/css">
    <link href="../_styles/fluid_360.css" rel="stylesheet" type="text/css" />
<?php else:?>
    <link href="../_styles/styles.css" rel="stylesheet" type="text/css">
<?php endif;?>
<link href='http://fonts.googleapis.com/css?family=Krona+One' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="../_images/360_favicon.ico" type="image/x-icon" />
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
<script src="../_scripts/respond.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- InstanceBeginEditable name="Head" -->
<script src="../_scripts/jquery.imagemapster.js"></script>
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
<div id="Logo360"><a href="../index.php"><img src="../_images/360_logo_160_8.png" alt="360nmt logo"></a></div>
<div id="HeaderContainer">
      <div id="Logo">&nbsp;</div>
      <div id="Title">
      <h2>360 Neuromuscular Therapy</h2>
      <div class="registerIcon"> <a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-104" target="_blank"><img name="RegisterLink" src="../_images/space.gif" width="44" height="44" alt="Register Link"></a> </div>
      <div class="heading3Reg"><a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-104" target="_blank">Seminar<span class="hide_br"> <br>
          </span> Registration</a><br>
          <a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-106" target="_blank">Workshop<span class="hide_br"> <br>
          </span> Registration</a></div>
      <div class="CalendarIcon"> <a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-102&sView=week" target="_blank" id="MakeAppointment"><img name="ApointmentLink" src="../_images/space.gif" width="44" height="44" alt="Apointment Link"></a>
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
                      <li><a href="../whats-wrong.php">Overview</a></li>
                      <li><a href="head-and-neck.php">Head &amp; Neck</a></li>
                      <li><a href="arm-and-shoulder.php">Shoulder &amp; Arm</a></li>
                      <li><a href="torso-and-back.php">Torso &amp; Back</a></li>
                      <li><a href="pelvis-and-hip.php">Pelvis &amp; Hip</a></li>
                      <li><a href="leg-and-foot.php">Leg &amp; Foot</a></li>
                      <li><a href="pain-syndromes.php">Pain Syndromes</a></li>
                      <li><a href="other-syndromes.php">Other Issues</a></li>
                  </ul>
              </li>
              <li><a href="#">Services</a> 
                  <ul>
                      <li><a href="../services.php">All Services</sup></a></li>
                      <li><a href="../360nmt.php">360 NMT<sup>&reg;</sup></a></li>
                      <li><a href="../trigger-point-dry-needling.php">Trigger Point Dry Needling</a></li> 
                      <li><a href="../acupuncture.php">Acupuncture</a></li> 
                      <li><a href="../team/peter.php">Corrective Movement</a></li>
                    <li><a href="../pilates.php">Pilates</a></li>
                      <li><a href="../pricing.php">Pricing</a></li>
                      <li><a href="../faq-services.php">FAQ</a></li>
                  </ul>
              </li>
              <li><a href="../team.php">Team</a></li>
              <li><a href="#">Seminars</a>
                  <ul>
                      <li><a href="../seminars-overview.php">Seminars Overview</a></li>
                      <li><a href="../neuromuscular-techniques.php">NeuroMuscular Techniques</a></li>
                      <li><a href="../myopain-seminars.php">Myopain Seminars</a></li>
                      <li><a href="../guest-lectures.php">Guest Workshops &amp; Lectures</a></li>
                      <li><a href="../faculty.php">360 NMT Teaching Faculty</a></li>
                      <li><a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-104" target="_blank">Course Dates &amp; Registration</a></li>
                      <li><a href="../faq-seminars.php">Seminar FAQ</a></li>
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
  <div id="ContentTxt">
    <h2 class="center">Shoulder &amp; Arm</h2>
    <p class=" WhiteBox center marginB20">Click a region of the body map...</p>
    <p class="MainTxt"><img src="../_images/arrm_shoulder.png" alt="Body Map" name="arm" usemap="#Map" id="arm">
      <map name="Map">
        <area shape="poly" coords="326,171,328,189,326,202,306,228,299,229,285,245,278,255,269,259,260,259,253,251,270,233,285,219,286,209,296,186,315,172" href="thumb-pain.php" data-key="TP">
        <area shape="poly" coords="120,192,129,230,128,263,190,246,173,219,169,182" href="epicondyle-pain-tennis-elbow.php" data-key="TE">
        <area shape="poly" coords="189,245,199,280,198,326,206,373,167,380,154,341,134,305,128,286,129,268,129,232,119,184,118,164,113,150,120,130,117,102,168,105,159,131,166,150,169,181,173,218" href="nerve-entrapments-of-arm.php" data-key="NE">
        <area shape="poly" coords="164,82,158,61,137,25,120,11,101,8,82,3,68,29,102,68,135,92" href="frozen-shoulder.php" data-key="SP">
        <area shape="poly" coords="323,135,345,135,331,185,295,187,308,177,316,169,321,162" href="de-quervain-syndrome.php" data-key="DQS">
        <area shape="poly" coords="381,172,389,186,395,203,399,225,306,226,286,210,295,188,321,163,323,136,385,134,389,142" href="carpal-tunnel-syndrome.php" data-key="CTS">
        <area shape="poly" coords="198,328,206,373,210,383,219,386,202,398,163,403,169,392,152,334,139,315,127,287,129,268,192,252,199,279" href="carpal-tunnel-syndrome.php" alt="Carpal Tunnel" data-key="CTS">
      </map>
      
    </p>
    <div class="linkBoxWhite"><a href="../whats-wrong.php">&lt;-Back to  Overview</a></div>
  </div>
  <div id="ContentTxt_right">    
    <h2>    Select  Condition</h2>
    <p class="conditionList">
      <!--<strong><a href="#" class="conditionLink" onmouseover="HighlightArea('CTS');">Carpal Tunnel Syndrome</a></strong><br>-->
      <strong><a href="carpal-tunnel-syndrome.php" class="conditionLink" id="CTS">Carpal Tunnel Syndrome</a></strong><br>
      <strong><a href="de-quervain-syndrome.php" class="conditionLink" id="DQS">de  Quervain&rsquo;s Syndrome</a></strong><br>
      <strong><a href="epicondyle-pain-tennis-elbow.php" class="conditionLink" id="TE">Tennis Elbow</a></strong><br>
      <strong><a href="frozen-shoulder.php" class="conditionLink" id="SP">Frozen  Shoulder</a></strong><br>
      <strong><a href="nerve-entrapments-of-arm.php" class="conditionLink" id="NE">Nerve  Entrapments (arm)</a></strong><br>
      <strong><a href="post-op-unexplained-pain.php" class="conditionLink" id="SP">Shoulder  (post-op pain)</a></strong><br>
      <strong><a href="rotator-cuff-tears.php" class="conditionLink" id="SP">Rotator  Cuff Tears</a></strong><br>
      <strong><a href="shoulder-impingement-syndromes.php" class="conditionLink" id="SP">Shoulder  Impingement Syndromes</a></strong><br>
    <strong><a href="thumb-pain.php" class="conditionLink" id="TP">Thumb  Pain</a></strong></p>
    <p>&nbsp;</p>
    <p class="textInfoStyle gray">We know every case is different. <a href="../contact-us.php">Contact&nbsp;Us</a> if you don't see your specific condition to learn how neuromuscular therapy might assist you.</p>
  </div>
  <!-- InstanceEndEditable -->
  <div id="SocialMedia"><a href="http://www.linkedin.com/company/3207247" target="_blank"><img src="../_images/linkedin_logo.png" alt="LinkedIn Logo" title="360 NMT on LinkedIn"></a><a href="http://www.facebook.com/pages/360-NeuroMuscular-Therapy/53751713585" target="_blank"><img src="../_images/facebook_logo.png" alt="Facebook Logo" title="360 NMT on Facebook"></a><a href="https://twitter.com/360nmt" target="_blank"><img src="../_images/twitter_logo.png" alt="RSS Logo" title="Twitter 360 NMT"></a><a href="http://www.360nmt.com/blog/?feed=rss2" target="_blank"><img src="../_images/rss_icon.png" alt="RSS Logo" title="360 NMT Feed"></a><a href="http://www.yelp.com/biz/360-neuromuscular-therapy-needham" target="_blank"><img src="../_images/yelp_logo.png" alt="Yelp Logo" title="360 NMT on Yelp"></a><a href="http://www.youtube.com/user/360NMT" target="_blank"><img src="../_images/youtube_logo.png" alt="YouTube Logo" title="360 on YouTube"></a><a href="http://visitor.r20.constantcontact.com/d.jsp?llr=y4d9uddab&p=oi&m=1102855344120&sit=nrfb4cveb&f=7fea30c9-e438-45bb-8d00-bce37227059b" target="_blank"><img src="../_images/constan_contact_logo.png" class="paddingR5" alt="Constant Contact Logo" title="360NMT News Letter"></a>
    <!--<img src="../images/patch_logo.png" alt="Patch Logo"  class="paddingR5"title="360 NMT on Patch">-->
  </div><!-- #BeginLibraryItem "/Library/Footer.lbi" --><div id="Footer">
    <div id="Footer1">
      <p><a href="../resources.php">Resources</a></p>
      <p><a href="../recommended-providers.php">Recommended Providers</a></p>
      <p><a href="../therapist-locator.php">Therapist Locator</a></p>
    </div>
    <div id="Footer2">
      <p><a href="../forms.php">Forms</a></p>
      <p><a href="../homecare.php">Homecare</a></p>
      <p><a href="../testimonials.php">Testimonials</a></p>
    </div>
      <div id="Spacer"></div>
    <div id="Footer3">
      <p><a href="../about-us.php">About Us</a></p>
      <p><a href="../contact-us.php">Contact</a></p>
      <p><a href="../employment.php">Employment</a></p>
    </div>
    <div id="Footer4">
      <p><a href="../blog.php">Blog</a></p>
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
  </div><!-- #EndLibraryItem -->
  <div id="CopyRight">&copy; 2004 - 2014, 360 NMT&reg;, LLC. All Rights Reserved | <a href="../privacy.php">Privacy Statement</a> | <a href="../terms.php">Terms of Service</a> | <a href="../hipaa.php">HIPAA  Policy</a></div>
  <div id="Watermark"><img src="../_images/rosette_half21.png" alt="Watermark"></div>
</div>
<!-- InstanceBeginEditable name="ReadyFunction" -->
<script language="javascript">
	//function HighlightArea(key) {
//	 alert(key);
//	 $('#arm').mapster('highlight',key);
//	}
	
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
               key: "CTS", 
               toolTip: "Carpal Tunnel Syndrome"
            },
            {
                key: "TP",
               toolTip: "Thumb Pain"
            },
            {
                key: "TE",
               toolTip: "Tennis Elbow"
            },
            {
                key: "NE",
               toolTip: "Nerve Entrapments"
            },
            {
                key: "SP",
               toolTip: "Shoulder Pain"
            },
            {
                key: "DQS",
               toolTip: "De Quervain Syndrome"
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
		if ($windowWidth*0.4 > 500) { 
				$mapWidth = 500;
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
