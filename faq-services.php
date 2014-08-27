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
  <div class="center" id="ContentFull">
    <h1>Services FAQ</h1>
    <div style="margin:auto;">
      <span class=" roundedCorners"><img src="_images/banner_point_chart.jpg" alt="test" class="marginTB2pc marginLR2pc"></span>
    <span class=" roundedCorners"><img src="_images/banner_pilates_studio.jpg" alt="test" class="marginTB2pc marginLR2pc"></span>
    <span class=" roundedCorners"><img src="_images/banner_chart.jpg" alt="test" class="marginTB2pc marginLR2pc"></span>
    <span class=" roundedCorners"><img src="_images/banner_skeleton.jpg" alt="test" class="marginTB2pc marginLR2pc"></span></div>
  </div>
  <div class="clearBoth"></div>
<div id="ContentTxt"><!-- Wrapper -->
    <div class="AccordionWrap">
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accordionTopRadius">
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">What is NeuroMuscular Therapy (NMT)?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">Simply stated, NeuroMuscular Therapy (NMT) is problem solving massage therapy. 
NMT treatment is informed by postural analysis and information gathered from a comprehensive health and injury history. Advanced manual therapy techniques are then applied to reduce pain and improve function. Homecare activities reinforce positive outcomes for long lasting results
.
          </p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="AccTitleSmall" id="history">What is the History of NMT?</div>
          <div class="indicator" >&nbsp;</div>
        </header>
        
        <!-- Content Section -->
        <section class="content accordionBottomRadius">
                  <p class="textInfoStyle">NMT has origins in Ayurvedic, osteopathic and chiropractic medicine. It’s been around since the 1930s, first in Europe, then in the United States. 
</p>
                  <p class="textInfoStyle">In Europe, Stanley Lief, DO and Boris Chaitow, DO originally developed Ayurvedic manual therapy principles. Lief emphasized palpation to assess sensitivity soft tissue. 
                  </p>
                  <p class="textInfoStyle">In America, in the 1940s and 50s, Dr. Janet Travell established herself as a specialist in treating muscle pain, publishing many journal papers. Travell became the first female personal physician to a President in the White House, treating Kennedy with Trigger Point injections to relax ‘cramps’ in his spinal muscles. In 1983, Travell and David Simons, MD published the first of two trigger point texts <em>‘<a href="http://www.amazon.com/Myofascial-Pain-Dysfunction-Trigger-Manual/dp/0683083635/ref=sr_1_1?ie=UTF8&qid=1379262731&sr=8-1&keywords=travel+and+simons" target="_blank">Myofascial Pain and Dysfunction – The Trigger Point Manual Vol 1</a></em>’.  These revered texts have been translated into many foreign languages.</p>
                  <p class="textInfoStyle"> An American chiropractor named Raymond Nimmo (1904-86) came across Travell’s trigger point theories and noted that these noxious points coincided with his own clinical soft-tissue findings. Dr. Nimmo, who rejected the ‘bone out of place’ paradigm, may be considered the grandfather of NMT in America.</p>
                  <p class="textInfoStyle"> Paul St. John (a student of Nimmo) popularized Nimmo’s work throughout the 1970’s and onwards. He called the modality <em>St. John Neuromuscular Therapy</em><sup>&#8482;</sup>. Judith DeLany, LMT, trained and taught for St. John, and went on to develop her own seminar program that she called <em>NMT American Version</em><sup>&#8482;</sup>.</p>
                  <p class="textInfoStyle"> Throughout the century, the European and American versions maintained a similar theoretical base, but employed different manual techniques. In 1996, a groundbreaking relationship between Leon Chaitow, DO, ND (European, nephew of Boris Chaitow) and the Judith DeLany (American) resulted in the publication <em>Modern Neuromuscular Techniques</em>. Dr. Chaitow and DeLany later combined their talents and ideas again to write the seminal two volume texts called <a href="http://www.amazon.com/Clinical-Application-Neuromuscular-Techniques-Volume/dp/0443068151/ref=sr_1_2?ie=UTF8&qid=1379264661&sr=8-2&keywords=chaitow+and+DeLany" target="_blank"><em>Clinical Application of Neuromuscular Techniques</em></a>.</p>
                  <p class="textInfoStyle"> Stewart Wild studied the St. John method in New Zealand and taught NMT at the New Zealand College of Massage from 1998-2004. After emigrating to the U.S., he studied and taught The American Version™ for Judith DeLany (2005-09). Katie Adams also studied under DeLany and founded 360 NMT® in 2004. See <strong><a href="about-us.php">About Us</a></strong> for more on Katie and Stewart’s partnership.</p>
                  <p class="textInfoStyle"> 360 NMT<sup>&reg;</sup> techniques integrate the best of the St. John, DeLany and Chaitow methods with the trigger point deactivation techniques of Jan Dommerholt, DPT and Robert Gerwin, MD. Leaders in the field of myofascial pain, Dommerholt and Gerwin founded <strong><a href="http://www.myopainseminars.com/" target="_blank">Myopain Seminars</a></strong> which honors Dr. Janet Travell and is considered the seminal Myofascial Trigger Point Therapy training program in the United States.  Katie and Stewart are on faculty for Myopain Seminars and continue to train, teach and work at the 360 NMT clinic in Massachusetts. </p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accbottom">
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">What makes NMT different?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">Two words: <strong>Trigger Points.</strong><br>
A cornerstone of the NMT treatment protocol includes evidence-informed trigger point deactivation techniques. When combined in sequences with gliding, friction and stretching (all NMT fundamentals), results are enduring. </p>
        </section>
      </div>
    </div>
      <p>&nbsp;</p>
    <div class="AccordionWrap">
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accordionTopRadius">
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall"><strong>What is the difference between Acupuncture and TrP Dry  Needling</strong>?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">There are many similarities and differences between acupuncture and dry needling. Both use small solid filament needles to penetrate the skin. 360 NMT offers dry needling and acupuncture as separate session types. Both are performed by licensed acupuncturists.</p>
          <p class="textInfoStyle"><a href="trigger-point-dry-needling.php"><strong>Dry needling</strong></a> at 360 NMT is strictly based on Western medicine principles and targets myofascial trigger points in shorter, efficient time increments. </p>
          <p class="textInfoStyle"><strong><a href="acupuncture.php">Acupuncture</a></strong> sessions treat physical and emotional conditions along energy meridians of the body and can include Chinese herbal medicine.</p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">Which therapist should I see at 360 NMT?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">You  can confidently see anyone on the 360 NMT staff for excellent muscular therapy.  Everyone has the same &ldquo;tool belt&rdquo; of techniques and approach to treatment.&nbsp;They are &lsquo;soft-tissue detectives&rsquo; – therapists who embrace  the challenge of searching for the roots of chronic, hard-to-explain pain.  Staff members have advanced, post-graduate training uniquely focused in  evidence-based techniques for pain management. Most are either Nationally  Certified NMTs or Certified Manual Trigger Point Therapists (or both).&nbsp;That said, each therapist has unique experiences  with patient treatment and his/her special area of clinical interest.&nbsp;They all train and work together with Stewart Wild  and Katie Adams.&nbsp;If you are  uncertain who to schedule with, call us. We will listen to your story and will  make recommendations appropriate for your specific condition or concerns</p>
        </section>
      </div>
      <div class="accordion"> 
              <!-- Trigger -->
              <header class="accbottom">
                <div class="indicator" >&nbsp;</div>
                <div class="AccTitleSmall">What makes 360 NMT<sup>&reg;</sup> different?</div>
        </header>
              
              <!-- Content Section -->
              <section class="content">
                <p class="textInfoStyle">Two words: <strong>Ability & Agility</strong>. <br>
      Rooted in <strong id="history_proxy"><a href="#">NMT History</a></strong>, 360 NMT<sup>&reg;</sup> treatments streamline what we think are the best techniques available with new, cutting-edge myofascial pain research. Our therapists have the highest massage qualifications in the country (CNMT & CMTPT). Their academic ability is combined with therapeutic agility. They make adept and meaningful changes to NMT treatment programs based upon patient feedback.</p>
              </section>
      </div>
    </div>
      <p>&nbsp;</p>
  </div>
  <div id="ContentTxt_right"><!-- Wrapper -->
    <div class="AccordionWrap">
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accordionTopRadius">
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">What is a Trigger Point?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">Trigger points are discreet, painful spots found within dense bands of skeletal muscle. They can be locally tender, but are able to send pain to far distant parts of the body. For example a spot in the calf muscle can set off jaw pain. We kid you not. They are great masqueraders. Trigger points can mimic nerve pain, joint pain, disc pain and organ pain. </p>
</section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="AccTitleSmall">What is Myofascial Pain Syndrome? </div>
          <div class="indicator" >&nbsp;</div>
        </header>
        
        <!-- Content Section -->
        <section class="content accordionBottomRadius">
                  <p class="textInfoStyle">Myofascial pain is defined by the presence of active trigger points. There are two types of trigger points: active & latent. Possibly nine-out-of-ten people have latent trigger points that, despite not causing spontaneous pain, can lead to performance deficits. These latent points can revert to active ones, sourcing spontaneous pain. MPS was the life’s work of trigger po<sup>®</sup>int pioneers <strong><a href="http://www.myopainseminars.com/seminars/travell/index.html" target="_blank">Janet Travell, MD and David Simons, MD</a></strong> who co-wrote the seminal texts <em>Myofascial Pain and Dysfunction – The Trigger Point Manuals Vols. 1&2.</em></p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accbottom">
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">How can NMT be used diagnostically?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">If the “big stuff” has been ruled out and symptoms persist, NMT can help discern what part of your pain is driven from soft-tissue. It often prevents more expensive testing and/or more invasive procedures. </p>
          <p class="textInfoStyle">NMT is also helpful when exercises seem to cause more pain. For example, post-operative patients benefit from treatment when pain impedes strength gains in PT, but the surgeon sees no problem on imaging films. NMT can eliminate muscular sources of pain and strain on the surgical site, and successfully get you through a rehabilitation plateau. </p>
        </section>
      </div>
    </div>
      <p>&nbsp;</p>
    <div class="AccordionWrap">
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accordionTopRadius">
          <div class="indicator" >&nbsp;</div>
         <div class="AccTitleSmall">Do I get treatment during my Initial Evaluation?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">Yes. However, the Initial Evaluation is longer to allow time for information gathering, postural and dynamic assessment, clinical reasoning. There will be hands-on treatment. Subsequent NMT sessions are generally shorter with less analysis and focus on reducing symptoms, restoring musculoskeletal balance and achieving treatment goals. All 360 NMT sessions include trigger point therapy, neuromuscular techniques and homecare recommendations to maintain gains made in session.</p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">Does 360 NMT take insurance?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p>At  present, we do not direct bill insurance. What we can do is provide you with  statements for services rendered to submit to your insurance company for  out-of-network reimbursement. We welcome consumer-driven activism and will assist  with documentation needed by your specific plan. </p>
<p class="textInfoStyle">&nbsp;</p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">How many sessions do I need?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">Our general “rule of thumb” is as follows: 360 NMT initially recommends 3-4 treatments to see if we can make an improvement. We look for a change in pain levels, increased activity tolerance and/or functional improvement. Subsequent recommendations for length and frequency of treatment are customized. If there is no change, we re-evaluate and make referrals to <a href="recommended-providers.php"><strong>other colleagues</strong></a>. </p>
        </section>
      </div> 
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accbottom">
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">Does my FSA benefits card work at 360 NMT?</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle">Many  clients use their Flexible Spending Account (pre-tax health benefit) cards at  360 NMT. We can generate receipts at year-end for your FSA and we recommend considering  NMT treatments when deciding how much funding to put into your account  annually.</p>
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
	   $("#history_proxy").click(
		  function(){
			  $("#history").click();
		  }
	   );
  });
</script>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
