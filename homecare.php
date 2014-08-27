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
<title>360 Neuromuscular Therapy Homecare</title>
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
<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>
<!--<script type="text/javascript" src="_scripts/jquery.fitvids.js"></script>-->
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
    <h1>homecare</h1>
  </div>
  <div class="clearBoth"></div>
  <div id="ContentTxt"><!-- Wrapper -->
    <div class="AccordionWrap">
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accordionTopRadius">
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">90/90 (supine / sidelying)</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle"><a href="#" onClick="MM_openBrWindow('_videos/90-90.php','','resizable=yes,width=1020,height=632')"><img src="_videos/90_90.jpg" alt="90-90"></a></p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">Nutrition and MPS</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="TitleUnderlined">Biochemical  recommendations for people in prolonged pain</p>
          <p>Deficiencies and insufficiencies  of certain metabolites have been seen in many chronic pain conditions and can create  a predisposition to the activation of trigger points and subsequent perpetuation  of myofascial pain syndromes. Deficiencies are values that fall outside the normal  range. Insufficiencies can be found in the low parts of range and can be  equally problematic whenever demand is high.</p>
          <p>The following table has been  compiled according to the recommendations of Robert Gerwin MD, Pain and  Rehabilitation Medicine, Bethesda, MD; Tim Taylor, MD and Anna Bittner, MD, of Pain  Relief Home, Richmond, VA. Support studies are quoted in the text books <em>&lsquo;Myofascial Pain and Dysfunction&rsquo; </em> by Travell &amp; Simons, &lsquo;<em>Trigger Point Therapy for Low Back Pain&rsquo; </em>by Sauer &amp; Biancalana  and &lsquo;<em>Myofascial Trigger Points&rsquo;</em> by  Dommerholt &amp; Huijbregts.</p>
          <div id="NutritionTable">
            <table width="100%"  border="1" cellpadding="0" cellspacing="0" class="" >
              <tr>
                <td width="20%" rowspan="2" align="center" valign="middle" bgcolor="#F8DFB5" class="tableTitleDynamic"><div class="gray">Supplement</div></td>
                <td colspan="2" align="center" valign="middle"  bgcolor="#FFFFFF" class="tableTitleDynamic"><div class="gray">Normal Range for</div></td>
                <td width="40%" rowspan="2" align="center" valign="middle" bgcolor="#852B68" class="tableTitleDynamic" >We recommend</td>
              </tr> 
              <tr>
                <td width="20%" align="center" valign="top" bgcolor="#E4A54E" class="tableTitleDynamic">Men</td>
                <td width="20%" align="center" valign="top" bgcolor="#ec7519" class="tableTitleDynamic">Women</td>
              </tr>
              <tr>
                <td colspan="4" align="left" bgcolor="#FDF4E3" class="tableValues"><p><strong>Test results should be <em><u>at or greater</u></em> than the following values</strong></p></td>
              </tr>
              <tr>
                <td align="center" valign="middle" bgcolor="#F8DFB5" class="tableValues">Ferritin<br> 
                (the storage form of iron)</td>
                <td colspan="2" align="center" bgcolor="#FFFFFF" class="tableValues">50  ng/ml</td>
                <td align="center" bgcolor="#FFFFFF" class="tableValues">Eating red meat remains the best delivery  system for iron. Spirulina etc. can help vegetarians. Take iron tablets with  vitamin C</td>
              </tr>
              <tr>
                <td align="center" bgcolor="#F8DFB5" class="tableValues">Vitamin  B1 (thiamin)</td>
                <td colspan="2" align="center" bgcolor="#FFFFFF" class="tableValues">4.0  mcg/l</td>
                <td align="center" bgcolor="#FFFFFF" class="tableValues">&nbsp;</td>
              </tr>
              <tr>
                <td align="center" bgcolor="#F8DFB5" class="tableValues">Vitamin  B6 </td>
                <td align="center" bgcolor="#FFFFFF" class="tableValues">5.4-6.7  mcg/l</td>
                <td align="center" bgcolor="#FFFFFF" class="tableValues">2.0-2.8  mcg/l</td>
                <td align="center" bgcolor="#FFFFFF" class="tableValues">&nbsp;</td>
              </tr>
              <tr>
                <td align="center" bgcolor="#F8DFB5" class="tableValues">Vitamin  B12 </td>
                <td colspan="2" align="center" bgcolor="#FFFFFF" class="tableValues">350  pcg/ml</td>
                <td align="center" bgcolor="#FFFFFF" class="tableValues">Found  in animal protein</td>
              </tr>
              <tr>
                <td align="center" bgcolor="#F8DFB5" class="tableValues">Vitamin  D3 (25-OH)</td>
                <td colspan="2" align="center" bgcolor="#FFFFFF" class="tableValues">50  ng/ml</td>
                <td align="center" bgcolor="#FFFFFF" class="tableValues"><p>Take  Vitamin D3 with fatty food.<br>
                  Drs  Taylor &amp; Bittner super-supplement as high as 5,000 IU Vit D3 twice per day  for one month, then 5,000 IU once a day until levels normalize. Recheck levels  after 6 weeks from onset of supplementation.</p>
See also <a href="http://www.vitaminDcouncil.org" target="_blank">www.vitaminDcouncil.org</a></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#F8DFB5" class="tableValues">Serum  Folate</td>
                <td colspan="2" align="center" bgcolor="#FFFFFF" class="tableValues">5.4  mg/ml</td>
                <td align="center" bgcolor="#FFFFFF" class="tableValues">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4" align="left" bgcolor="#FDF4E3" class="tableValues"><p><strong>Test results should fall within the following  ranges</strong></p></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#F8DFB5" class="tableValues">Thyroid  Stimulating Hormone (TSH)</td>
                <td colspan="2" align="center" bgcolor="#FFFFFF" class="tableValues">0.4-2.0  micro IU/ml</td>
                <td align="center" bgcolor="#FFFFFF" class="tableValues">Hypothyroidism  is mostly a female condition</td>
              </tr>
              <tr>
                <td align="center" bgcolor="#F8DFB5" class="tableValues">Serum  Calcium</td>
                <td colspan="2" align="center" bgcolor="#FFFFFF" class="tableValues">8.5-10.6  mg/dl</td>
                <td align="center" bgcolor="#FFFFFF" class="tableValues">&nbsp;</td>
              </tr>
              <tr>
                <td align="center" bgcolor="#F8DFB5" class="tableValues">Red  cell Magnesium</td>
                <td colspan="2" align="center" bgcolor="#FFFFFF" class="tableValues">1.7  – 4.5 mg/dl</td>
                <td align="center" bgcolor="#FFFFFF" class="tableValues">Magnesium malate has less side-effects</td>
              </tr>
              <tr>
                <td align="center" bgcolor="#F8DFB5" class="tableValues">Serum  Potassium</td>
                <td colspan="2" align="center" bgcolor="#FFFFFF" class="tableValues">3.5-5.2  mmoll</td>
                <td align="center" bgcolor="#FFFFFF" class="tableValues">&nbsp;</td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <table width="100%"  border="1" cellpadding="0" cellspacing="0" class="" >
              <tr>
                <td colspan="2" align="center" valign="middle"  bgcolor="#FDF4E3" class="tableTitleDynamic"><div class="gray">Anti-inflammatory and Pro-inflammatory foods</div></td>
              </tr> 
              <tr>
                <td width="50%" align="center" valign="top" bgcolor="#E4A54E" class="tableTitleDynamic">Anti-inflammatory </td>
                <td width="50%" align="center" valign="top" bgcolor="#ec7519" class="tableTitleDynamic">Pro-inflammatory </td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tableValues"><p>Fruits<br>
                  Vegetables<br>
                  Nuts<br>
                  Potatoes<br>
                  Fresh fish<br>
                  Wild Game<br>
                  Grass/pasture-fed meat<br>
                  Omega-3 eggs<br>
                  Organic extra virgin olive oil<br>
                  Organic coconut oil<br>
                  Organic butter<br>
                  Dark chocolate<br>
                  Stout beer<br>
                  Red wine<br>
                  Balsamic vinegar<br>
                  Spices: ginger, turmeric,<br>
                  garlic, oregano, marjoram,<br>
                cumin, etc.</p></td>
                <td align="center" bgcolor="#FFFFFF" class="tableValues alignTop"><p>Refined grains<br>
                  Whole grains<br>
                  Grain/flour products<br>
                  Grain-fed meats/eggs<br>
                  Most packaged foods<br>
                  Most processed foods<br>
                  Deep fried food                 <br>
                  Trans fats (margarine, and in most packaged / processed foods)<br>
                Corn, safflower, sunflower, soybean oil<br>
                Most commercial salad dressings</p></td>
              </tr>
            </table>
          </div>
          <p>Reference: Liebenson C. <em>Rehabilitation of the Spine</em>, 2nd Edition (2007), Chapter 30, page 730 <em>‘Nutritional Considerations for Inflammation and Pain’ </em>by David R. Seaman DC</p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">Brügger Exercise</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle"><a href="#" onClick="MM_openBrWindow('_videos/bruegger.php','','resizable=yes,width=1020,height=632')"><img src="_videos/bruegger.jpg" alt="Brügger"></a></p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">Diagonal Cross-arm Lunges</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle"><a href="#" onClick="MM_openBrWindow('_videos/cross-lunge.php','','resizable=yes,width=1020,height=632')"><img src="_videos/cross_lunge.jpg" alt="Cross-arm Lunges"></a></p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">Foot Rehab</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle"><strong>COMING SOON</strong></p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accbottom">
          <div class="AccTitleSmall">HiLo Breathing</div>
          <div class="indicator" >&nbsp;</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle"><a href="#" onClick="MM_openBrWindow('_videos/hi-lo.php','','resizable=yes,width=1020,height=632')"><img src="_videos/hi_lo.jpg" alt="Hi-Lo Breathing on Chair"></a></p>
          <p class="textInfoStyle">&nbsp;</p>
          <p class="textInfoStyle"><a href="#" onClick="MM_openBrWindow('_videos/hi-lo-floor.php','','resizable=yes,width=1020,height=632')"><img src="_videos/hi_lo_floor.jpg" alt="Hi-Lo Breathing on the floor"></a></p>
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
          <div class="AccTitleSmall">Sleep Hygiene</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="TitleUnderlined"> History </p>
          <p class="textInfoStyle">Before the light bulb was invented we used to average 9-10 hours sleep per day. We also worked harder, ate more naturally and had way less continual stimulation. We slept long and well. </p>
          <p class="TitleUnderlined">Unhealthy habits</p>
          <ul class="normal">
            <li>Not really physically tired when going to bed</li>
            <li>Overeating or eating and drinking too close to bed-time</li>
            <li>Stimulated too close to bed-time by TV, computing, work projects</li>
            <li>Over-worry about things; deadlines, finances, family or friends health </li>
            <li>Out of synch with diurnal rhythms; especially with shift work</li>
            <li>Daytime napping for more than 45 minutes</li>
            <li>Medications that interfere with deep sleep</li>
          </ul>
          <p class="TitleUnderlined">Bedroom environment  components that interfere with sleep</p>
          <ul class="normal">
            <li>Room too warm or too cold</li>
            <li>Room too bright</li>
            <li>An easily visible, or loud alarm clock time</li>
            <li>A cordless phone in the bedroom (high electromagnetic forces)</li>
            <li>Room too cluttered with stuff</li>
            <li>Pets sleeping on the bed</li>
            <li>Mattress over 8-10 years old</li>
            <li>Pillows over 2 years old</li>
            <li>Covers too heavy or restrictive</li>
            <li>Spouse or partner that is restless, noisy, or generates too much heat</li>
          </ul>
          <p class="TitleUnderlined">Medical  conditions that interfere with sleep</p>
          <ul class="normal">
            <li>Respiratory disorders</li>
            <li>Cardiovascular disorders</li>
            <li>Gastrointestinal disorders</li>
            <li>Musculoskeletal pain and dysfunction</li>
            <li>Diabetes</li>
            <li>Renal disorders</li>
            <li>Prostate problems and small bladder causing urinary frequency</li>
            <li>Cancer</li>
            <li>Dementia</li>
            <li>Dental disorders</li>
            <li>Restless leg syndrome or Periodic Limb Movement Disorder (PLMD)</li>
            <li>Fibromyalgia (alpha wave intrusion)</li>
          </ul>
          <p class="TitleUnderlined">Medications  that can interfere with sleep</p>
          <ul class="normal">
            <li>Antihistamines: Benadryl (daytime drowsiness)</li>
            <li>Sympathomimetic Amines: bronchodilators and decongestants</li>
            <li>Antihypertensives and Beta blockers: Clonidine, Aldomet, Reserpine (daytime drowsiness)</li>
            <li>Steroids: Prednisone, dexamethasone</li>
            <li>Thyroid medications: </li>
            <li>Anti-epileptics and antipsychotics (daytime drowsiness)</li>
            <li>Parkinson medications: (daytime drowsiness)</li>
            <li>Stimulants for ADHD</li>
            <li>Anticholinesterase drugs for Alzheimer&rsquo;s</li>
            <li>Antidepressants: Prozac, Fluoxetine</li>
            <li>Analgesics: opiates, Tramadol, Ultram</li>
            <li>Chemotherapeutics: (nausea and vomiting)<strong></strong></li>
            <li>Diuretics: (frequency at night)<strong></strong></li>
          </ul>
          <strong><br clear="all">
          </strong>
          <p class="TitleUnderlined">Strategies for  better sleep</p>
          <ul class="normal">
            <li>Consistency of sleep habits – develop a routine and stick to it</li>
            <li>Expose yourself to bright light on waking – tell your body it&rsquo;s daytime</li>
            <li>Expose yourself to bright light late in the day – keep your body awake longer</li>
            <li>No napping after 3 pm (45 minutes maximum per day)</li>
            <li>Do a bit more physical activity during the day</li>
            <li>Develop a relaxing pre-bedtime routine</li>
            <li>Make the bedroom less noisy and less bright</li>
            <li>Remove the TV, radio, laptop and cordless phone from the bedroom</li>
            <li>Have a silent alarm clock without a bright display</li>
            <li>Keep the bedroom temperature in the low 60&rsquo;s</li>
            <li>Reduce fluid consumption in the evening to avoid the need to urinate during the night</li>
            <li>Avoid caffeine and reduce alcohol intake</li>
            <li>Avoid late evening phone calls, computer games, emailing</li>
            <li>Use the guest room if necessary for uninterrupted sleep</li>
          </ul>
          <p class="TitleUnderlined">Pre-bed Routines</p>
          <ul class="normal">
            <li>Have a warm (&lt; 102° F) shower, 15 minute bath or spa bath just before bedtime (add Epsom       salts)</li>
            <li>Play relaxing background or ambient music</li>
            <li>Meditate or read calming books to relax </li>
          </ul>
          <p class="TitleUnderlined">In-bed routines</p>
          <ul class="normal">
            <li>Breathing technique for stress relief</li>
            <ul class="normal">
              <li>Position the tongue on  the roof of the mouth just behind the upper teeth</li>
              <ul class="normal">
                <li>Breathe in through the nose to a count of seven</li>
                <li>Hold the breath for a   count of eight</li>
                <li>Breathe out through   the mouth to a count of 4 </li>
              </ul>
            </ul>
            <li>Concentrate on diaphragmatic breathing, with the abdomen rising on the inhalation</li>
            <li>Use a contract / relax method to identify and reduce muscle tension in the body</li>
          </ul>
          <p class="TitleUnderlined">Health in general</p>
          <ul class="normal">
            <li>At least 7 ½ - 8 hours of sleep </li>
            <li>Eat food that is varied, brightly colored, comprehensive and can be sustainably eaten</li>
            <ul class="normal">
              <li>High in Omega 3s,  folic acid, vitamins D, B12</li>
              <li>Foods that contains  D-Phenylalanine to prevent endorphin breakdown</li>
              <ul class="normal">
                <li>Chocolate, cocoa,   meats, wheat, soy, cheeses </li>
              </ul>
              <li>Eat foods that contain Tryptophan to stimulate serotonin production (combine with Vit B6)</li>
              <ul class="normal">
                <li>Diary, meats, turkey, fish, whole grains, nuts, soy products, beans, rice</li>
              </ul>
            </ul>
            <li>Control your weight (don&rsquo;t eat big portions of those listed above)</li>
            <li>Increase your daytime exercise</li>
            <ul class="normal">
              <li>Switches down the  amygdala and produces endorphins</li>
            </ul>
            <li>Get more fun in to your life – laugh more, play around</li>
            <li>Don&rsquo;t sweat the small stuff – and it&rsquo;s all small stuff</li>
            <li>De-stress – allocate yourself quality &lsquo;me&rsquo; time</li>
            <li>Develop a passion – have a project</li>
            <li>Spend time helping others</li>
            <li>Follow the three components to happiness</li>
            <ul class="normal">
              <li>Pleasure – comfort,  safety, food, shelter</li>
              <li>Engagement – be  personally involved with other people or causes</li>
              <li>Meaning – develop  purposes in life</li>
            </ul>
          </ul>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">Supine Bridges</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle"><a href="#" onClick="MM_openBrWindow('_videos/supine-bridge.php','','resizable=yes,width=1020,height=632')"><img src="_videos/supine_bridge.jpg" alt="Verstegen Stretch"></a></p>
          <p class="textInfoStyle">&nbsp;</p>
          <p class="textInfoStyle"><a href="#" onClick="MM_openBrWindow('_videos/supine-bridge-ball.php','','resizable=yes,width=1020,height=632')"><img src="_videos/supine_bridge_ball.jpg" alt="Verstegen Stretch"></a></p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">Three Way Movements</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle"><a href="#" onClick="MM_openBrWindow('_videos/3-way-move-1.php','','resizable=yes,width=1020,height=632')"><img src="_videos/3_way_move1.jpg" alt="Verstegen Stretch"></a></p>
          <p class="textInfoStyle">&nbsp;</p>
          <p class="textInfoStyle"><a href="#" onClick="MM_openBrWindow('_videos/3-way-move-2.php','','resizable=yes,width=1020,height=632')"><img src="_videos/3_way_move2.jpg" alt="Verstegen Stretch"></a></p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">Verstegen's 'World's Greatest Stretch'</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle"><a href="#" onClick="MM_openBrWindow('_videos/verstegen-stretch.php','','resizable=yes,width=1020,height=632')"><img src="_videos/verstegen_stretch.jpg" alt="Verstegen Stretch"></a></p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleSmall">Alternates: for diagonal training</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <p class="textInfoStyle"><a href="#" onClick="MM_openBrWindow('_videos/diagonal-training.php','','resizable=yes,width=1020,height=632')"><img src="_videos/diagonal_training.jpg" alt="Verstegen Stretch"></a></p>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accbottom">
          <div class="AccTitleSmall">Wall Angels</div>
          <div class="indicator" >&nbsp;</div>
        </header>
        
        <!-- Content Section -->
        <section class="content accordionBottomRadius"> <a href="#" onClick="MM_openBrWindow('_videos/wall-angels.php','','resizable=yes,width=1020,height=632')"><img src="_videos/wall_angels.jpg" alt="Wall Angels"></a></section>
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
	   
	  // Target your .container, .wrapper, .post, etc.
	  $("section").fitVids();
  });
</script> 
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
