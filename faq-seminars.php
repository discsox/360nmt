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
<title>360 Neuromuscular Therapy Semiars FAQ</title>
<?php 
  //initialize variables  
	  $menuFix = "";
	  //$menuFix = "onClick=\"window.location='#'\"";
?>
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
<link href="_styles/acc_style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="_scripts/accordion.js"></script>
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
    <h1>Seminars FAQ</h1>
    <div class="center" style="margin:auto;"> 
      <span class=" roundedCorners"><img src="_images/banner_girl.jpg" alt="Image1" class="marginTB2pc marginLR2pc"></span> 
      <span class=" roundedCorners"><img src="_images/banner_mouth.jpg" alt="Image2" class="marginTB2pc marginLR2pc"></span> 
      <span class=" roundedCorners"><img src="_images/banner_picture.jpg" alt="Image3" class="marginTB2pc marginLR2pc"></span> 
      <span class=" roundedCorners"><img src="_images/banner_man_side.jpg" alt="test" class="marginTB2pc marginLR2pc"></span>
    </div>
  </div>
  <div class="clearBoth"></div>
  <div id="ContentTxt">
  
  <!-- Wrapper -->
    <div class="AccordionWrap">
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accordionTopRadius">
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">What training course programs are offered at 360 NMT?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">360 offers  two distinct seminar series, the combination of which results in the most  comprehensive NMT training curriculum in the country:</p>
          <ol>
            <li><strong>Manual Trigger Point Therapy (MTT)</strong>; a branch of <a href="http://myopainseminars.com/seminars/travell/mtt/index.html" target="_blank"><strong>Myopain Seminars</strong></a>
              <ul>
                <li><strong>Theory</strong>: 28 hours of self-directed online education modules </li>
                <li><strong>Practical</strong>: 72 hours hands-on training for specific manual trigger point deactivation techniques. 180 muscles are covered over three, 3-day courses</li>
                <li> Graduates achieve Certification in Manual Trigger Point Therapy (CMTPT) <br>
                  <br>
                </li>
              </ul>
            </li>
            <li><strong>NeuroMuscular Techniques (NMT</strong>); a branch of <a href="seminars-overview.php"><strong>360 NMT® Seminars</strong></a>
              <ul>
                <li>Six, single day courses (48 hours) streamlining theory and practical application of NMT hand techniques (gliding, friction, lifting and deep cross-fiber)</li>
                <li>Each day integrates the muscles covered with clinical reasoning and treatment strategizing</li>
                <li>Graduates achieve Certified Neuromuscular Therapist (CNMT) </li>
              </ul>
            </li>
          </ol>
          <!--<div class="clearBoth">&nbsp;&nbsp;</div>-->
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">What is the difference between MTT and NMT?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">Manual Trigger Point Therapy (MTT) is a very specific trigger point deactivation method. The four-part manual process includes identification and deactivation of trigger points, reinforcement techniques and a homecare activity.</p>
          <p class="textInfoStyle"> NeuroMuscular Techniques (NMT) comprises traditional neuromuscular hand techniques (such as gliding and cross fiber friction) applied in reasoned sequences based upon real-time postural analysis and muscle length testing </p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">Which courses should I take first?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p>The MTT and NMT curriculums  have been designed so that students can take them in any order. Each course within  each program is a stand-alone module. Due to academic pain science component of  the MTT program, it is recommended that some students take NMT prior to MTT. <strong><a href="contact-us.php">Contact us</a></strong> directly if you have any questions regarding which course program is best for  you.</p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">
            <p>What makes 360&rsquo;s NMT Certification different?</p>
          </div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">We  have taken what we consider the best of the traditional NMT techniques and  integrated them real-time clinical reasoning. Each course teaches an aspect of  postural analysis and treatment for specific muscles within the transverse,  sagittal or horizontal planes. Our streamlined certification is shorter and  cost effective, providing an immediate toolbox to successfully treat  soft-tissue driven pain cases. Our faculty members all have active clinical  practices and continuously discuss, test and perfect methods taught within this  course program.</p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">What  qualifications do I need?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">Students  need to be legally able to apply manual techniques to the body in their  particular state. Professionals that have attended courses include massage  therapists, acupuncturists, physical therapists, physical therapy assistants,  occupational therapists and athletic trainers.</p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">Prerequisites / Preparation?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">There are no prerequisites to take any courses, but prior knowledge of muscle attachments, actions, fiber direction and innervation is highly recommended. 
</p>
          <p class="textInfoStyle"><a href="myopain-seminars.php"><strong>Myopain Seminars</strong></a> MTT Courses require the following texts: Vizniak’s <em>‘Muscle Manual’</em>, and Dommerholt and Huijbregt’s <em>‘Myofascial Trigger Points’</em>.They are available for sale at the 360 NMT clinic. It is recommended to be familiar with materials within these texts prior to class. </p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">What  do courses cost?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <ul class="normal">
            <li>Each 3-day Myopain Seminars MTT course is $595. 
            </li>
            <li>Each 1-day NMT course is $150.              </li>
            <li>Please note that the return-on-investment is very high in a short amount of time. </li>
          </ul>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accbottom">
          <div class="AccTitleSmall">Can  I save costs if registering for multiple courses?</div>
          <div class="indicator" >&nbsp;</div>
        </header>
        
        <!-- Content Section -->
        <section class="content accordionBottomRadius">
          <p class="textInfoStyle">Yes, registering for course bundles can save you money.</p>
          <p class="textInfoStyle">The pre-payment cost of all three MTT courses is $1,500,  a saving of $285 (this includes access to the online materials). Additionally, members of the IMS or NAMTPT save 10% on  all MTT courses. Reviewers within first 2 years receive 20% off.</p>
          <p>Pre-payment of the six NMT courses costs  $765, a savings of $135. Please see <a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-104"><strong>registration</strong></a> forms for details and cancellation policies.        </p>
        </section>
      </div>
    </div>
  </div>
  <div id="ContentTxt_right"><!-- Wrapper -->
    <div class="AccordionWrap">
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accordionTopRadius">
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">What are Myopain Seminars?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle"><strong><a href="http://www.myopainseminars.com/" target="_blank">Myopain Seminars</a></strong> is a  post-graduate, professional education program that teaches evidence-informed  treatment techniques and management of myofascial pain. The curriculum was  originally developed and taught by Robert Gerwin, MD and Jan Dommerholt, DPT,  and is named in honor of trigger point pioneer Dr. Janet Travell. Stewart Wild  and Katie Adams were the first massage graduates to pass the prestigious  certification exams at Myopain Seminars and are proud to be on the Myopain  Seminars Manual Trigger Point Therapy faculty.<br>
          </p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">What are 360 NMT<sup>&reg;</sup> Seminars?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p>360 NMT Seminars offers  massage therapy continuing education in a variety of formats. At the core is  the NeuroMuscular Techniques course program and certification that Stewart Wild  and Katie Adams synthesized based on their combined 40+ years of practice. Both  Stewart and Katie also teach smaller adjunct Master Classes on specific topics  such as acute pain and advanced postural analysis. 360 NMT regularly hosts  guest lectures and workshops, bringing thought leaders and alternative health  experts to the Boston area. For upcoming courses see <strong><a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-104">Dates &amp; Registration</a></strong>.</p>
<p class="textInfoStyle">&nbsp;</p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">How do I register?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p><strong>Manual Trigger Point Therapy</strong> course registration is through the home office in  Bethesda, MD. Please go to <strong><a href="http://www.myopainseminars.com/" target="_blank">myopainseminars.com</a></strong>and download the Manual  Trigger Point Therapy registration form and fax to 301.654.0333. </p>
          <p><strong>NeuroMuscular  Techniques</strong> course registration is through <strong><a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-104" target="_blank">360nmt.com</a></strong></p>
</section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">What is NeuroMuscular Therapy (NMT)?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">NeuroMuscular  Therapy is an advanced manual therapy modality that addresses muscle damage and  dysfunction, postural aberrations, neurological entrapments and myofascial  trigger points. Muscle pain and deconditioning can originate from overuse,  overload, hyper-tone, spasm, functional asymmetries and structural imbalances. Successful  application of NMT reduces pain and improves joint range-of-motion, muscle  activation patterns, proprioception and kinesthesia. NMT is especially valuable  for myofascial pain syndromes.</p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">What is Myofascial Pain Syndrome?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">Myofascial  pain is defined by the presence of <em>active</em> trigger points. They often contribute to, or source, of chronic pain of  muscular origin. Possibly 9 out of 10 people also have <em>latent</em> trigger points that, despite not causing spontaneous pain,  can cause performance deficits.</p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">Why should I study NeuroMuscular Therapy?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p>It has been estimated that  100 million adult Americans suffer from chronic pain. Researchers have  estimated that between 75- 85 % of this pain is muscular in origin. There is a  great need for more gifted and highly trained hands-on therapists to help  reverse this epidemic. NeuroMuscular Therapists that specialize in solving  enigmatic pain riddles will have rewarding careers. <strong></strong></p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">What is the 360 NMT<sup>&reg;</sup> Mastery Concept?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p>The 360 NMT Mastery  Certification will be the highest level of NMT training available in the  country. Requirements to achieve Mastery include passing both the MTT and NMT practical  and theoretical examinations, reading research papers, writing case studies,  clinical observation time and demonstrating competency in advanced postural  analysis and muscle length testing. 360 NMT Mastery graduates will be leaders  in the field of manual myofascial pain treatment and collaborate on patient  care with physiatrists, pain physicians, orthopedists, physical therapists and  chiropractors. This program will be launching in late 2014.</p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accbottom">
          <div class="AccTitleSmall">How long does it take to attain NMT Mastery</div>
          <div class="indicator" >&nbsp;</div>
        </header>
        
        <!-- Content Section -->
        <section class="content accordionBottomRadius">
          <p class="textInfoStyle">Because  of the high level of academic theory in the MTT tract, and the many practical  methods for assessment and treatment in NeuroMuscular Techniques, 360 NMT  Mastery is most likely to be studied and completed over a 2-year period.  Fast-track course study will be available. <strong><a href="contact-us.php">Contact us</a></strong> for more information. </p>
        </section>
      </div>
    </div>
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
