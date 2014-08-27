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
<title>360 Neuromuscular HIPAA Policy</title>
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
<title>360 Neuromuscular Therapy Terms of Service</title>
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
  <div id="GenText">
      <h1 class="center">NOTICE OF PRIVACY PRACTICES</h1>
      <p class="center marginLR5pc"><strong>THIS NOTICE DESCRIBES HOW MEDICAL INFORMATION ABOUT YOU MAY BE USED AND DISCLOSED AND HOW YOU CAN GET ACCESS TO THIS INFORMATION. PLEASE REVIEW IT CAREFULLY.</strong></p>
    <p class="center marginLR5pc">&nbsp;</p>
      <p class="textInfoStyle">This  Notice of Privacy Practices describes how we may use and disclose your  protected health information (PHI) to carry out treatment, payment or health  care operations and for other purposes that are permitted or required by law.  It also describes your rights to access and control your protected health  information. &ldquo;Protected health information&rdquo; is information about you, including  demographic information that may identify you and that relates to your past,  present or future physical or mental health or condition related health care  services. </p>
      <p class="TitleUnderlined">HOW WE MAY USE AND DISCLOSURE (RELEASE) PHI </p>
    <p class="textInfoStyle">Use means sharing health information within our practice.  Disclose means release of PHI outside our practice.  We may use and disclosure PHI in the following ways without getting specific permission. </p>
    <p class="textInfoStyle"><strong><u>Treatment:</u></strong> We will use and disclose your protected health information to provide, coordinate, or manage your health care and any related services. This includes the coordination or management of your health care with a third party. For example, we would disclose your protected health information, as necessary, to a home health agency that provides care to you. For example, your protected health information may be provided to a physician to whom you have been referred to ensure that the physician has the necessary information to diagnose and treat you.</p>
      <p class="textInfoStyle"> <u><strong>To obtain payment:</strong></u> We may use/disclose your PHI to bill and collect payment for your health care services.  We may release portions of your PHI to the Medicaid or Medicare program or a third party payor to determine if they will make payment, to get prior approval and to support any claim or bill. 
      </p>
      <p class="textInfoStyle"><u><strong>Healthcare Operations:</strong></u> We may use or disclose, as-needed, your PHI in order to support the business activities of our practice. These activities include, but are not limited to, quality assessment activities, employee review activities, training, licensing, and conducting or arranging for other business activities. In addition, we may use a sign-in sheet at the registration desk where you will be asked to sign your name. We may also call you by name in the waiting room when your specialist is ready to see you. We may use or disclose your projected health information, as necessary, to contact you to remind you of your appointment.</p>
      <p class="textInfoStyle">We may use or disclose your protected health information in the following situations without your authorization. These situations include: as Required By Law, Public Health issues as required by law: Communicable Diseases: Health Oversight: Abuse or Neglect: Food and Drug Administration requirements: Legal Proceedings: Law Enforcement: Coroners, Funeral Directors, and Organ Donation: Research: Criminal Activity: Military Activity and National Security: Workers’ Compensation: Inmates: Required Uses and Disclosures: Under the law, we must make disclosures to you and when required by the Secretary of the Department of Health and Human Services to investigate or determine our compliance with the requirements of Section 164,500. 
      </p>
      <p class="textInfoStyle"><strong>Other Permitted and Required Uses and Disclosures</strong> Will be made only with your consent, authorization or opportunity to object unless required by law. 
      </p>
      <p class="textInfoStyle"><strong>You may revoke this authorization</strong>, at any time, in writing, except to the extent that your physician or the physician’s practice has taken an action in reliance on the use or disclosure indicated in the authorization. 
      </p>
      <p class="TitleUnderlined">YOUR RIGHTS REGARDING PHI 
      </p>
      <p class="textInfoStyle">You, or a personal representative with legal authority to make health care decisions on your behalf, have the right to:</p>
      <ul class=" marginLR5pc justified">
        <li> Request restrictions on uses and disclosures of your record for treatment, payment or health care operations. All requests must be made in writing. The law does not require us to agree to restriction requests. For emergency treatment, we may use or disclose restricted information. The right to request restrictions does not apply to uses and disclosures required by law.</li>
        <li> Request confidential communications of PHI in a certain way or at a certain place. All requests must be made in writing. If we accept your request, we will require you to provide information about payment handling, alternate address, and contact method. 
        </li>
        <li>Inspect and copy PHI that may be used to make decisions about you. Access to your records may be restricted in limited circumstances. The law permits us to charge a fee for copying costs.</li>
        <li>Request us to amend information that may be used to make decisions about you. We are not required to agree to your request. You must request an amendment in writing and supply a reason to support your request.
        •	Receive an accounting of certain disclosures of your PHI. The accounting right does not apply to disclosures that you have authorized or to disclosures for treatment, payment, and health care operations.</li>
        <li>Obtain a paper copy of this Notice upon request.
        </li>
      </ul>
      <p class="TitleUnderlined">HOW TO FILE A COMPLAINT
      </p>
      <p class=" textInfoStyle">We are required by law to maintain the privacy of, and provide individuals with, this notice of your legal duties and privacy practices with respect to protected health information. If you think that we may have violated your privacy rights or you disagree with any action we have taken with regard to your health information, we want you, your family, or your guardian to speak with us.  If you present a complaint, your care will not be affected in any way. You may file a complaint by contacting us directly. You may also send a written complaint to the U.S. Department of Health and Human Services, J.F.K. Federal Building - Room 1875, Boston, MA 02203, Voice phone 617-565-1340, or email to OCRComplaint@hhs.gov. We will take no retaliatory action against you if you file a complaint about our privacy practices.  You may complain to us or to the Secretary of Health and Human Service if you believe your privacy rights have been violated by us. <strong>We will not retaliate against you for filing a complaint.</strong>    </p>
    <p class="marginL5pc">4852-3526-3254, v.  1  </p>
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
