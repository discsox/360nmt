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
<title>360 Neuromuscular Therapy Services</title>
<?php 
  //initialize variables  
	  $menuFix = "";
	  //$menuFix = "onClick=\"window.location='#'\"";
?>
<link href="_styles/acc_style.css" rel="stylesheet" type="text/css">
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
  <div id="ContentFull">
    <h1 class="center">Services</h1>
    <div class="center" style="margin:auto;"> 
      <span class=" roundedCorners"><img src="_images/banner_girl.jpg" alt="Image1" class="marginTB2pc marginLR2pc"></span> 
      <span class=" roundedCorners"><img src="_images/banner_pilates.jpg" alt="Image2" class="marginTB2pc marginLR2pc"></span> 
      <span class=" roundedCorners"><img src="_images/banner_dn.jpg" alt="Image3" class="marginTB2pc marginLR2pc"></span> 
    <span class=" roundedCorners"><img src="_images/banner_point_chart.jpg" alt="test" class="marginTB2pc marginLR2pc"></span><!-- Wrapper -->    </div>
<div class="AccordionWrap">
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accordionTopRadius">
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleLarge">360 NMT<sup>&reg;</sup></div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">360  NMT<sup>&reg;</sup> signature treatments are recommended for prolonged, troublesome, and often  enigmatic muscle pain and dysfunction. They are also recommended for injury  prevention and as an adjunct to physical therapy. Treatments address soft  tissue sources of the pain derived from muscle, fascia, tendons, ligament, and  nerve entrapments.</p>
          <p class="textInfoStyle"> 360  NMT's advanced practitioners are nationally certified in either NeuroMuscular  Therapy (CNMT) and/or Manual Trigger Point Therapy (CMTPT). They use an  &lsquo;evidence-informed&rsquo; neuromuscular approach to resolve pain. Examples of <strong><a href="whats-wrong.php">conditions</a></strong> treated in the upper body include whiplash, headache  and migraine, TMJ, neck and shoulder pain, epicondylosis, and carpal tunnel  syndrome, among others. Examples in the lower body include chronic back pain,  pelvic pain, sciatic and hip pain, IT Band syndrome, patella femoral syndrome,  and plantar fasciitis, among many others.</p>
          <p class="textInfoStyle">Initial evaluations include a detailed postural  assessment and muscle length testing to ascertain the effect of short and tight  muscles on bones and joints. Manual and soft-tissue techniques are used to  deactivate trigger points, improve muscular imbalance, resolve nerve  entrapments, and correct static and dynamic postural distortion. Homecare  activities may be recommended to expedite recovery time. Cumulative results  from NMT treatment include decreased pain, improved performance and increased  joint range-of-motion. </p>
          <p class="textInfoStyle">Therapists: <a href="team/lachlan.php">Lachlan Croteau</a>, <a href="team/denise.php">Denise Devereaux</a>,  <a href="team/bridget.php">Bridget Devine</a>, <a href="team/sarah.php">Sarah Ernst-Edwards</a>, <a href="team/lisa.php">Lisa Gorman</a>,<a href="team/timothy.php"> Timothy Shaw</a>,<a href="team/ean.php"> Ean Spangler</a></p>
          <p class="textInfoStyle"><a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-102&sView=week" target="_blank"><strong>Schedule an appointment</strong></a></p>
          <p class="textInfoStyle">For pricing click <a href="pricing.php"><strong>here</strong></a></p>
          <div class="clearBoth"></div>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleLarge">Resident NMT</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">Resident  treatments are recommended for less complex cases with muscle soreness, muscle  tightness or stiffness and minor strains. They are also ideal for expediting  recovery, injury prevention, performance-maintenance, performance-enhancement  and general wellbeing.</p>
          <p class="textInfoStyle"> During  the course of a treatment, symptoms from muscle tension, guarding, fibrosis,  scarring, contraction knots, adhesions and trigger points may be addressed.  Therapeutic and deep massage techniques will be combined with cross fiber  friction, trigger point, and local stretching to achieve long lasting results.</p>
          <p class="textInfoStyle">All 360 NMT Resident providers are Licensed Massage  Therapists (LMTs) in the state of Massachusetts and belong to a recognized  professional massage organization. Additionally, they will be undergoing  advanced post-graduate studies in Manual Trigger Point Therapy and  Neuromuscular Therapy at 360 NMT.</p>
          <p class="textInfoStyle">&nbsp;</p>
          <p class="textInfoStyle">Therapist:<a href="team/lisa_r.php">Lisa Rotondi</a>, <a href="team/nicole.php">Nicole Teter-Downin</a></p>
          <p class="textInfoStyle"><strong><a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-102&sView=week" target="_blank">Schedule an appointment</a></strong></p>
          <p class="textInfoStyle">For pricing click <a href="pricing.php"><strong>here</strong></a></p>
          <div class="clearBoth"></div>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accbottom">
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleLarge">Trigger Point Dry Needling</div>
        </header>
        
        <!-- Content Section -->
        <section class="content accordionBottomRadius">
          <p class="textInfoStyle">Dry  Needling is a trigger point deactivation technique in which a sterile, single  use, disposable, solid filament needle is inserted into the skin and muscle  directly. It can be used for a variety of musculoskeletal problems and follows  strict treatment protocol guidelines. Dry Needling allows trigger points to be  treated in tissue too deep to be effectively deactivated by manual (hands-on) compression  methods.</p>
          <p class="textInfoStyle"> Benefits  of Dry Needling include: reduction of local  pain and muscle spasticity, increased joint range-of-motion, improved muscle  activation patterns,&nbsp;and&nbsp;reduction in&nbsp;central sensitization  (widespread pain). It is essential to elicit local a twitch  response (spinal cord reflex) as the first step in breaking a myofascial pain  cycle. Most patients do not feel the insertion of the needles, but the twitch  responses from muscles can cause a very brief, sometimes painful response. This  is a therapeutic and a desirable reaction.</p>
          <p class="textInfoStyle">Various methods of mechanical stimulation of the  needle are used once the point has been identified. The idea is to create a  small (but patient tolerable) pocket of damage to the fibers that contain the  trigger point. This may be followed by some compression, a stretch, and maybe  heat. Some post-treatment bruising and soreness may be noticed. This  post-treatment inflammatory response and subsequent tissue repair may itself  account for the efficacy of the treatment.</p>
          <p class="textInfoStyle">&nbsp;</p>
          <p class="textInfoStyle">Therapist: <a href="team/brendan.php">Brendan Carney</a>, <a href="team/erika.php">Erika Bourne</a></p>
          <p class="textInfoStyle"><strong><a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-102&sView=week" target="_blank">Schedule an appointment</a></strong></p>
          <p class="textInfoStyle">For pricing click <a href="pricing.php"><strong>here</strong></a>          </p>
          <div class="clearBoth"></div>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleLarge">Acupuncture</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
              <p class="textInfoStyle">Acupuncture is effective at accessing the systemic aspects of your health. It is a true mind-body medicine that reveals patterns of disharmony in the body that conventional western medicine often overlooks. A common benefit of acupuncture is relaxation. It is one of the very best ways towards better health and lower stress levels. </p>
    <p class="textInfoStyle"> Acupuncture is a form of traditional Chinese medicine which involves the insertion of fine, sterile needles in specific points in the body. This ancient art of healing is used to unblock and stimulate the flow of energy within our bodies, returning it to a state of health when overall balance is achieved</p>
    <p class="textInfoStyle">Acupuncture is a gentle, safe and powerful form of medicine. It works well on its own or as part of a larger program of integrative care. At 360 NMT, acupuncture can be very valuable for reducing pain in patients that are too sensitive for manual hands-on therapy. It is quite effective in decreasing pain and restoring range of motion to joints that have suffered a loss in mobility, sometimes without using any local points in the affected area. Frozen shoulder, for instance, can be treated effectively with a point on the leg.  </p>
    <p class="textInfoStyle">Many theories try to explain how acupuncture works, citing its various influences on the connective tissue, muscles, circulation, nervous and endocrine system. One thing is becoming increasingly clear: combining acupuncture with standard western medical care yields excellent results. Acupuncture generally improves sleep, digestion and reduces stress - possibly the best set of side effects any form of medicine has ever offered.</p>
          <p class="textInfoStyle">Therapist: <a href="team/fannie.php">Fannie Koa</a></p>
          <p class="textInfoStyle"><strong><a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-102&sView=week" target="_blank">Schedule an appointment</a></strong></p>
          <p class="textInfoStyle">For pricing click <a href="pricing.php"><strong>here</strong></a></p>
          <div class="clearBoth"></div>
          <div class="clearBoth"></div>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleLarge">Pilates</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">Pilates is a movement system designed to strengthen,  stretch and balance the body. 360 NMT recommends&nbsp;private Pilates instruction for  patients&nbsp;looking to improve posture, establish proper movement patterns or  increase activity levels as injuries heal. It is also excellent for overall  tone and core conditioning.</p>
          <p class="textInfoStyle"><strong><a href="team/lynn.php">Lynn Enos</a></strong> teaches Classical Pilates, which is the original work developed by Joseph  Pilates with little or no deviation. His original work differs from other  methods in that he adheres to an exercise order. The purpose of the order is to  consistently recruit muscles in a specific firing pattern that helps to create (and  re-educate) muscle memory.          </p>
          <p class="textInfoStyle">&nbsp;</p>
          <p class="textInfoStyle">Provider: <a href="team/lynn.php">Lynn Enos</a></p>
          <p class="textInfoStyle"><strong><a href="pilates.php" target="_blank">Schedule an appointment by contacting Lynn directly</a></strong></p>
          
          <div class="clearBoth"></div>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accbottom">
          <div class="AccTitleLarge">Master NMT/Owners</div>
          <div class="indicator" >&nbsp;</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">360  Master NMT sessions are recommended for prolonged myofascial pain symptoms  resulting from trauma, excessive overuse, hypermobility, spinal injuries,  surgeries and cases with multiple injury zones. Initial evaluations are either  75 or 90 minutes and combine a detailed static and dynamic postural assessment  with hands-on treatment. Previous medical and pharmacological interventions are  also reviewed as perpetuating pain factors. With patient permission, Master NMT  therapists will communicate with other medical professionals to create  customized and effective treatment plans.</p>
          <p class="textInfoStyle"> Subsequent  visits are generally preceded by a shorter postural assessment to monitor  gains. The first priority is to remove pain. Improvement to all other soft  tissue dysfunctions, muscular imbalances and asymmetries will follow with  continued treatment. </p>
          <p class="textInfoStyle">Master NMT providers are certified in Neuromuscular  Therapy (CNMT) and Manual Trigger Point Therapy (CMTPT) with many years of  experience in the field. They have experience in other modalities such as  strength and conditioning, visceral manipulation, craniosacral therapy, neural  mobilization and acknowledged movement rehabilitation therapies. 360 Master  therapists teach post-graduate neuromuscular courses and regularly present at  local and national medical conferences</p>
          <p class="textInfoStyle">&nbsp;</p>
          <p class="textInfoStyle">Therapist: <a href="team/katie.php">Katie Adams,</a> <a href="team/stew.php">Stewart Wild</a></p>
          <p class="textInfoStyle"><strong><a href="http://clients.mindbodyonline.com/ws.asp?studioid=5589&stype=-102&sView=week" target="_blank">Schedule an appointment</a></strong></p>
          <p class="textInfoStyle">Pricing: &nbsp;&nbsp;<a href="pricing.php"><strong>Katie Adams</strong></a><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="team/stew.php"><strong>Stew Wild</strong></a></p>
          <div class="clearBoth"></div>
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
