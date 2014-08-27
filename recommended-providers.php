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
<title>360 Neuromuscular Therapy Resources</title>
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
    <h1>recommended Providers</h1>
    <div class="tagline">We  believe it takes a village to optimize recovery and prevention programs.  &nbsp;360 NMT regularly collaborates with and recommends the following   providers.</div>
  </div>
    <div id="ContentTxt">
    <!-- Wrapper -->
      <div class="AccordionWrap">
        <div class="accordion"> 
          <!-- Trigger -->
          <header class="accordionTopRadius">
            <div class="AccTitleLarge">Acupuncture</div>
            <div class="indicator" >&nbsp;</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">
            <ul>
              <li>
                <p><strong>Denise Devereaux,  Lic. Ac.</strong><br>
                  360 NMT<br>
                  35 Highland Circle<br>
                  Needham, MA 02494<br>
                  781-444-3609<br>
                <a href="http://360nmt.com/">360nmt.com</a></p>
              </li>
              <li>
                <p><strong>                Fannie Koa,  Lic. Ac.</strong><br>
                  360 NMT<br>
                  35 Highland Circle<br>
                  Needham, MA 02494<br>
                  781-444-3609<br>
                <a href="http://360nmt.com/">360nmt.com</a></p>
              </li>
              <li>
                <p><strong>Peter Faust, M.A.c.</strong><br>
                  Healing Arts of Belmont<br>
                  7 Williston Road<br>
                  Belmont, MA 02478<br>
                  617-484-4325<br>
                <a href="http://www.peterfaust.com/" target="_blank">peterfaust.com</a><br>
                <br>
                </p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Alexander Technique</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">
            <ul>
              <li>
                <p><strong>Diane Hovenesian, C.A.T.</strong><br>
                Healing Well Studio
                <br>
                8 Hickory Drive
                <br>
                Medfield, MA 02052
                <br>
                508-359-9355
                <br>
                <a href="http://www.healingwellstudio.com/" target="_blank">healingwellstudio.com</a></p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Breathing Training</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">
            <ul>
              <li>
                <p><strong>Hadas Golan,  MS/CCC-SLP</strong><br>
                  Breatheon Inc.  Breathing Center<br>
                  72 Vine Street<br>
                  Chestnut Hill, MA  02467<br>
                  617-610-2662<br>
              <a href="http://www.breatheon.com">breatheon.com</a></p></li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Chiropractic</div>
          </header>
          <!-- Content Section -->
          <section class="content">
            <ul>
              <li>
                <p><strong>Peter Gale, DC</strong><br>
                  <strong>Nathaniel  Tiplady, DC</strong><br />
                  1410 Highland Ave.<br />
                  Needham, MA 02492<br />
                  781-449-5722<br />
                <a href="http://www.needhamchiropractic.com/" target="blank">needhamchiropractic.com</a></p></li>
              <li>
                <p><strong>Kelly Jackson, DC</strong><br />
                  Natick Sports Chiropractic<br />
                  190 N Main St., Suite 2<br />
                  Natick, MA 01760<br />
                  508-651-2646<br>
                &nbsp;</p>
              </li>
              <li>
                <p><strong>Tom Michaud, DC</strong><br />
                  Michaud Chiropractic Ctr<br />
                  517 Washington Street<br />
                  Newton, MA 02458<br />
                  617-969-2225<br>
  &nbsp;              </p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Dance & Performing Arts Medicine</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li>
                <p><strong>Lauren Elson, M.D.</strong><br>
                  65 Walnut Street<br>
                  Suite 260<br>
                  Wellesley, MA 02481<br>
                  781-431-9144<br>
                  <a href="http://www.spauldingrehab.org" target="_blank">spauldingrehab.org</a>              </p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Dental  &amp; TMJ</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">
            <ul>
              <li>
                <p><strong>Richard Gillis, DMD</strong><br>
                  1211 Highland Ave<br>
                  Needham, MA 02494<br>
                  781-444-4782<br>
                <a href="http://www.gillisdental.com" target="_blank">gillisdental.com</a></p>
                </li>
              <li>
                <p><strong>Gerald Maher, DMD</strong><br>
                  <span class="noWrap">Dental Associates of NE</span><br>
                  40 Second Ave<br>
                  Waltham, MA 02451<br>
                  781-890-4900<br>
                <a href="http://www.bostonsmile.com" target="_blank">bostonsmile.com</a></p>
              </li>
              <li>
                <p><span class="noWrap"><strong>Murad Padamsee, DMD</strong></span><br>
                  40 Grove Street,<br>
                  Suite 415<br>
                  Wellesley, MA 02482<br>
                781-239-3397</p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Dermatology</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li>              
                <p><strong>Pamela Weinfeld, MD</strong><br>
                  <span class="noWrap">Dermatology &amp;  Skincare Assoc</span><br>
                  10 Laurel Ave<br>
                  Suite 300<br>
                  Wellesley, MA 02481<br>
                  781-235-8155<br>
                dermatologyandskincare.com</p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Functional Medicine</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li>
                <p><strong>Visions Healthcare  Ctr</strong><br>
                  170 Worchester Street<br>
                  Wellesley MA, 02481<br>
                  781-431-1333<br>
                <a href="http://www.visionshealthcare.com" target="_blank">visionshealthcare.com</a></p>
              </li>
              <li>
                <p><strong>Richard Donahue, MD,  MPH</strong><br>
                  137 Newbury Street<br>
                  6th Floor<br>
                  Boston, MA 02116<br>
                  617-585-1500<br>
                <a href="http://www.personalhealthmd.com" target="_blank">personalhealthmd.com</a></p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Integrative Medicine</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">
            <ul>
              <li>              
                <p><strong>Visions Healthcare Ctr</strong><br>
                  170 Worcester Street<br>
                  Wellesley MA, 02481<br>
                  781-431-1333 <br>
                <a href="http://www.visionshealthcare.com" target="_blank">.visionshealthcare.com</a> </p>
              </li>
              <li>
                <p><strong>Osher Center Brigham<br>
                &amp; Women's  Hospital</strong><br>
                  850 Boylston Street<br>
                  Chestnut Hill, MA  02467<br>
                  617-732-9700<br>
                <a href="http://www.brighamandwomens.com/" target="_blank">brighamandwomens.com</a></p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Neurology</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li>
                <p><strong>Karen Dudich, M.D.</strong><br>
NW Neurology Assoc. P.C.<br>
                  2000 Washington Street<br>
                  Suite 567, Green Building<br>
                  Newton,  MA 02462 <br>
                <a href="http://www.nwneurology.com/">nwneurology.com/</a>              </p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Nutrition</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li>              
                <p><span class="noWrap"><strong>Joan Buchbinder, RD</strong></span><br>
                  The Nutrition Coaches<br>
                  1400 Center Street<br>
                  Suite L200
                  <br>
                  Newton Center, MA 02459<br>
                  Phone: 
                617-558-5536</p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Occupational Therapy</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li>
                <p><strong>Meredith   Starr, MS, OTR/L</strong><br>
Osher Center Brigham<br>
                  &amp; Women's  Hospital<br>
                  850 Boylston Street<br>
                  Chestnut Hill, MA  02467<br>
                617-654-7111<br>
                  <a href="http://brighamandwomens.org/Departments_and_Services/medicine/Services/oshercenter/default.aspx">brighamandwomens.org</a></p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header class="accbottom">
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Orthopedic Surgery</div>
          </header>
          
          <!-- Content Section -->
          <section class="content accordionBottomRadius">          
            <ul>
              <li>
                <p><strong>Andrew Chapman, MD</strong><br>
                  Harvard Vanguard,<br>
Dedham

                  Med.  Assoc.<br>
617-654-7111<br>
                  <a href="http://www.harvardvanguard.org">harvardvanguard.org</a></p>
              </li>
              <li>
                <p><strong>Alan Curtis, MD</strong><br>
                  830 Boylston Street<br>
                  Suite 107<br>
                  Chestnut Hill, MA  02467<br>
                <a href="http://www.bostonssc.com" target="_blank">bostonssc.com</a><br>
                </p>
              </li>
              <li>
                <p><strong>Lawrence Higgins, MD</strong><br>
                  Brigham &amp; Women&rsquo;s<br>
                  75 Francis Street<br>
                  Boston, MA 02115<br>
                  617-732-5322<br>
                <a href="http://www.bostonshoulderinstitute.com">bostonshoulderinstitute.com</a></p>
              </li>
              <li>
                <p><strong>Laurie Katz, MD</strong><br>
                  NWOA<br>
                  2000 Washington St. <br>
                  Ste 314<br>
                  Newton, MA 02494<br>
                  617-964-0024<br>
                  <a href="http://www.nwoa.com/" target="_blank">nwoa.com
                </a></p>
              </li>
              <li>
                <p><strong>Brian P. McKeon, MD</strong><br>
                  840 Winter Street<br>
                  Waltham, MA 02451<br>
                  781-890-2133<br>
                  <a href="http://www.bostonssc.com" target="_blank">bostonssc.com
                </a></p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
      </div>
    </div>
    <div id="ContentTxt_right">
    <!-- Wrapper -->
      <div class="AccordionWrap">
        <div class="accordion"> 
          <!-- Trigger -->
          <header class="accordionTopRadius">
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Orthotics</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li>
                <p><strong>Cheryl Maurer,   MSPT, C.Ped</strong><br>
                  Functional Mechanics<br>
                  1050 Waltham Street<br>
                  Suite 330<br>
                  Lexington, MA 02421<br>
                  781-538-5200<br>
  <a href="http://www.functionalmechanics.com" target="_blank">functionalmechanics.com</a></p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Osteopathy (DO)</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li>              
                <p><strong>Carina O'Neill, DO</strong><br>
                  Spaulding  Rehabilitation<br>
                  300 Granite Street<br>
                  Braintree, MA 02184<br>
                  781-843-1145<br>
                <a href="http://www.spauldingrehab.org/Braintree">spauldingrehab.org/Braintree</a></p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion">
            <!-- Trigger -->
            <header>
              <div class="indicator" >&nbsp;</div>
              <div class="AccTitleLarge">Physiatrists</div>
            </header>
            <!-- Content Section -->
            <section class="content">
              <ul>
                <li>
                  <p><strong>Allison Bailey, MD</strong><br>
                    Integrated Health &amp;  Fitness<br>
                    617-492-4432<br>
                    <a href="http://www.ihfaboston.com" target="_blank">ihfaboston.com</a></p>
                </li>
              </ul>
              <ul>
                <li>
                  <p><strong>Joanne Borg-Stein, MD</strong><br>
                    65 Walnut Street<br>
                    Suite 260<br>
                    Wellesley, MA 02481<br>
                    781-431-9144<br>
                    <a href="http://www.spauldingrehab.org" target="_blank">spauldingrehab.org</a></p>
                </li>
              </ul>
              <ul>
                <li>
                  <p><strong>Nitin Jain, MD, MSPH</strong><br>
                    850 Boylston Street<br>
                    Chestnut Hill, MA 02467<br>
                    617-732-9500<br>
                    <a href="http://www.brighamandwomens.org" target="_blank">brighamandwomens.org</a> <br>
                    <br>
                  </p>
                </li>
              </ul>
              <ul>
                <li>
                  <p><strong>Jonathan Bean, MD</strong><br>
                    1575 Cambridge Street<br>
                    Cambridge, MA 02138<br>
                    <a href="http://www.spauldingrehab.org/" target="_blank">spauldingrehab.org</a><br>
                    <br>
                    <br>
                  </p>
                </li>
              </ul>
              <ul>
                <li>
                  <p><strong>Lauren Elson, MD</strong><br>
                    65 Walnut Street<br>
                    Suite 260<br>
                    Wellesley, MA 02481<br>
                    781-431-9144<br>
                    <a href="http://www.spauldingrehab.org">spauldingrehab.org</a></p>
                </li>
              </ul>
              <div class="clearBoth"></div>
            </section>
          </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Pain Management</div>
          </header>
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li>
                <p><strong>Boston PainCare  Ctr</strong><br>
                  85 First Ave<br>
                  Waltham, MA 02451<br>
                  781-647-7246<br>
                <a href="http://www.bostonpaincare.com" target="_blank">bostonpaincare.com</a></p>
              </li>
              <li>
                <p><strong>Dana Zalkind, MD</strong><br>
                  NE Baptist  Hospital<br>
                  125 Parker Hill Ave<br>
                  Boston, MA 02120<br>
                  617-754-5800<br>
              <a href="http://www.nebh.org" target="_blank">nebh.org</a></p>
              </li>
              <li>
                <p><strong>Spaulding Outpatient<br>
Ctr Medford</strong><br>	
                  Functional Pain<br>
Management Program<br>
                  101 Main St., Ste 101<br>
                  Medford, MA 02155<br>
              <a href="http://www.spauldingrehab.org/services/outpatient/pain-rehabilitation.aspx" target="_blank">spauldingrehab.org</a></p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Physical Therapy</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li>              
                <p><strong>Jeff Carlson, PT</strong><br>
                  Train Boston<br>
                  34 Washington Street<br>
                  Wellesley, MA 02481<br>
                  781-263-9993<br>
                <a href="http://www.trainboston.com/" target="_blank">trainboston.com</a>            </p>
              </li>
              <li>              
                <p><strong>Steve Crowell, MSPT</strong><br>
                  Rebound Physical  Therapy<br>
                  203 Oak Street<br>
                  Natick, MA 01760<br>
                  508-651-0051<br>
                  <a href="http://www.rebound-pt.com" target="_blank">www.rebound-pt.com</a><br>
                  <br>
                </p>
              </li>
              <li>              
                <p><strong>Laura Diamond, MSPT</strong><br>
                  Aquatic Therapy  Specialty<br>
  <span class="noWrap">Diamond Physical  Therapy</span><br>
                  410 Boston Post Rd,
                  Ste 29<br>
                  Sudbury, MA 01766<br>
                  617-803-8730<br>
                <a href="http://www.diamondphysicaltherapy.com" target="_blank">diamondphysicaltherapy.com</a></p>
              </li>
              <li>              
                <p><strong>Susan Bloom, PT, SCS</strong><br>
                  Kennedy Bros.<br>
                  633 Highland Ave<br>
                  Needham, MA 02494<br>
                  781-444-1614<br>
  <a href="http://www.kennedybrospt.com" target="_blank">kennedybrospt.com<br>
  <br>
  </a>              </p>
              </li>
              <li>              
                <p><strong>Joshua  Bachand,  DPT</strong><br>
                  Kennedy Bros.<br>
                  311 Arsenal Street<br>
                  Watertown, MA 02472<br>
                  617-924-5100<br>
  <a href="http://www.kennedybrospt.com" target="_blank">kennedybrospt.com</a></p>
              </li>
              <li>              
                <p><strong>Tim Fagerson, DPT</strong><br>
                  SOS-PT, Inc<br>
                  148 Linden St., Ste  B-8<br>
                  Wellesley, MA 02482<br>
                  781-263-9977<br>
  <a href="http://www.sos-pt.com">sos-pt.com</a><br>
  <a href="http://www.drfagerson.com" target="_blank">drfagerson.com</a>              </p>
              </li>
              <li>              
                <p><strong>Kristen Lung, DPT</strong><br>
                  1320 Centre Street<br>
                  Newton Center, MA  02459<br>
                  617-467-5585<br>
  <a href="http://www.sportsandpt.com" target="_blank">sportsandpt.com</a><br>
  <br>
                </p>
              </li>
              <li>              
                <p><strong>Matt Penney, DPT, SCS</strong><br>
                  Advanced Sports  Therapy<br>
                  62 Walnut Street<br>
                  Wellesley, MA 02481<br>
                  781-235-5275<br>
  <a href="http://www.advancedorthopedic.net" target="_blank">advancedorthopedic.net</a></p>
              </li>
              <li>              
                <p><strong>James Ruetenik, DPT<br>
                Gregory Vescera, PT</strong><br>
                  Soma Physical Therapy<br>
                  43 Charles Street<br>
                  Needham, MA 02494<br>
                  781-400-1236<br>
  <a href="http://www.somaptandrehab.com/" target="_blank">somaptandrehab.com</a>            </p>
              </li>
              <li>              
                <p><strong>Spaulding Cambridge<br>
Outpatient Center </strong><br>
1575  Cambridge Street<br>
Cambridge, MA 02138<br>
                <a href="http://www.spauldingrehab.org" target="_blank">spauldingrehab.org</a><br>
                <br>
                <br>
                </p>
              </li>
              <li>              
                <p><strong>Spaulding Wellesley<br>
Outpatient Center </strong><br>
                  65 Walnut Street<br>
                  Suite 260<br>
                  Wellesley, MA 02481<br>
                  781-431-9144<br>
                <br>
                </p>
              </li>
              <li>              
                <p><strong>Kate Werda, DPT</strong><br>
                  Furnace Brook  PT<br>
                  104 Quarry Street<br>
                  Quincy, MA 02169<br>
  <a href="http://www.furnacebrookpt.com" target="_blank">furnacebrookpt.com</a></p>
              </li>
            </ul>         
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Podiatry</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li>
                <p><strong>Richard  Cullen,  DPM</strong><br>
                  300 Chestnut Street<br>
                  Suite 500<br>
                  Needham, MA 02492<br>
                  781-444-7137 </p>
              </li>
              <li>
                <p><strong>Jonathan  Kaplan,  DPM</strong><br>
                  Newton Family Foot  Care<br>
                  963 Watertown Street<br>
                  West Newton, MA 02465<br>
                617-964-5830 </p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Primary Care</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li>
                <p><strong>Personal MD&rsquo;s</strong><br>
                  25 Boylston Street<br>
                  Suite 312<br>
                  Chestnut Hill, MA  02467<br>
                  617-307-3200<br>
                  <a href="http://www.personalmds.com/" target="_blank">personalmds.com</a></p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Strength and Conditioning</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li class="longAddress">
                <p><strong>Pure Performance  Training</strong><br>
                  19 Wexford Street<br>
                  Needham, MA 02494<br>
                  781-400-1803<br>
                <a href="http://www.pureperformancetraining.com" target="_blank">pureperformancetraining.com</a></p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Running Injuries</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li class="longAddress">
                <p><strong>Irene Davis PhD, PT </strong><br>
                  <strong>Robert Morrison, DPT</strong><br>
                  Spaulding Nat'l
Running Ctr<br>
                  1575 Cambridge St<br>
                  Cambridge, MA 02138<br>
                  617-952-6833<br>
                  <a href="http://www.spauldingrehab.org/services/outpatient/natl-running-center.aspx">SpauldingRunningCenter.com</a>
                </p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Vein & Aesthetics</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li>
                <p><strong>Judith Hondo, MD</strong><br>
                  333 Elm Street<br>
                  Suite 205<br>
                  Dedham, MA 02026<br>
                  781-251-0029<br>
                  <a href="http://www.veinfix.com/" target="_blank">veinfix.com</a></p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header>
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Women’s Health/ Pelvic Pain</div>
          </header>
          
          <!-- Content Section -->
          <section class="content">          
            <ul>
              <li>
                <p><strong>Raquel K. Perlis,  PT</strong><br>
                  332 Washington Street<br>
                  Wellesley, MA 02481<br>
                  781-237-9006<br>
                <a href="http://www.pthelp.com/v" target="_blank">pthelp.com</a></p>
              </li>
              <li>
                <p><strong>Marathon Physical  Therapy</strong><br>
                  425 Centre Street<br>
                  Newton, MA 02458<br>
                  617-244-1990<br>
                  <a href="http://www.marathonphysicaltherapy.com/" target="_blank">marathonphysicaltherapy.com</a></p>
                <p>&nbsp;</p>
              </li>
            </ul>
            <div class="clearBoth"></div>
          </section>
        </div>
        <div class="accordion"> 
          <!-- Trigger -->
          <header class="accbottom">
            <div class="indicator" >&nbsp;</div>
            <div class="AccTitleLarge">Our Heroes</div>
          </header>
          
          <!-- Content Section -->
          <section class="content accordionBottomRadius">          
            <ul>
              <li>
                <p><strong>Leon Chaitow, ND, DO</strong><br>
                  London Medical Centre<br>
                  144 Harley Street<br>
                  London W1G7LE<br>
                <a href="http://leonchaitow.com/" target="_blank">LeonChaitow.com</a></p>
              </li>
            <li>
              <p><strong>Jan Dommerholt, DPT</strong><br> 
              Bethesda Physio Care
<br>
4405 East-West Hwy<br>
Suite 403 <br>
Bethesda, MD 20814<br>
Phone:  301-656-5613<br>
<a href="http://bethesdaphysiocare.com/" target="_blank">bethesdaphysiocare.com</a></p>
            </li>
              <li>
                <p><strong>Robert Gerwin, MD</strong><br>
                  Pain &amp;  Rehab. Medicine<br>
                  7830 Old Georgetown  Rd<br>
                  Suite C15<br>
                  Bethesda, MD 20814<br>
                  301-656-0220<br>
  <a href="http://painpoints.com/">painpoints.com</a></p>
              </li>
              <li>
                <p><strong>Judith DeLany, LMT</strong><br>
                  900 14th Avenue North<br>
                  St. Petersburg, FL 33705<br>
                  727-821-7167<br>
                  <a href="http://www.nmtcenter.com/" target="_blank">nmtcenter.com</a><br>
                  <br>
                  <br>
                </p>
              </li>
              <li>
                <p><strong>Helene Langevin, MD</strong><br>
                  <span class="noWrap">Director,
                  Osher Center </span><br>
                  Brigham &amp; Women&rsquo;s  Hospital<br>
                  850 Boylston Street<br>
                  Chestnut Hill, MA  02467<br>
                  617-732-9700<br>
                  <a href="http://brighamandwomens.org/Departments_and_Services/medicine/Services/oshercenter/default.aspx" target="_blank">brighamandwomens.org</a>              </p>
              </li>
              <li>
                <p><strong>Prof. Dr. Andry Vleeming</strong><br>
                  University of Ghent Belgium<br>
                  Visiting Faculty<br>
                  <span class="noWrap">University of New Endgland</span><br>
                  Biddeford, ME 04007 </p>
              </li>
            </ul>
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
