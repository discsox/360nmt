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
    <h1>Resources</h1>
    <div class="tagline"></div>
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
        <h2 class="Txt14px">Links </h2>
        <ul>
            <li>
              <p><a href="http://www.the-scientist.com/?articles.view/articleNo/35301/title/The-Science-of-Stretch" target="_blank">University of Vermont<br>
College of Medicine<br>
research on Acupuncture<br>
and Connective tissue</a></p>
            </li>
            <li>
              <p>JAMA Internal Medicine -<br>
<a href="http://archinte.jamanetwork.com/article.aspx?articleid=1357513" target="_blank">Acupuncture for Chronic<br>
Pain</a> <br>
<br>
              </p>
            </li>
            <li>
              <p>	NY Times article -<br>
<a href="http://well.blogs.nytimes.com/2012/09/11/acupuncture-provides-true-pain-relief-in-study/?_php=true&_type=blogs&smid=fb-share&_r=0" target="_blank">Acupuncture Provides<br>
True Pain Relief in Study<br>
<br>
</a></p>
            </li>
            <li>
              <p><a href="http://www.healthcmi.com/Acupuncture-Continuing-Education-News/1305-acupuncture-antidepressant-connection-for-depression" target="_blank">Acupuncture in the<br>
treatment of depression<br>
<br>
              </a></p>
            </li>
            <li>
              <p><a href="http://www.dailymail.co.uk/health/article-2226402/Acupuncture-relieve-extreme-tiredness-suffered-breast-cancer-patients.html" target="_blank">Helping breast cancer<br>
patients with fatigue</a><br>
<br>
              </p>
            </li>
            <li>
              <p><a href="http://www.cnn.com/2013/02/19/health/acpuncture-allergies/index.html" target="_blank">CNN: Acupuncture may<br>
be antidote for allergies</a><br>
<br>
              </p>
            </li>
            <li>
              <p><a href="http://www.medicaldaily.com/carnie-wilsons-disorder-singer-treating-bells-palsy-acupuncture-244673" target="_blank">Singer treats Bell's Palsy<br>
with Acupuncture </a></p>
            </li>
          </ul>
          <div class="clearBoth"></div>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="AccTitleLarge">Blogs</div>
          <div class="indicator" >&nbsp;</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <ul>
            <li><a href="http://www.bodyinmind.org" target="_blank">bodyinmind.org</a> </li>
            <li><a href="http://leonchaitow.com" target="_blank">leonchaitow.com</a> </li>
            <li><a href="http://www.craigliebenson.com" target="_blank">craigliebenson.com</a> </li>
            <li><a href="http://www.mikereinold.com" target="_blank">mikereinold.com</a> </li>
          </ul>
          <div class="clearBoth"></div>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="AccTitleLarge">Books / DVDs </div>
          <div class="indicator" >&nbsp;</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <h3 class="Underlined marginLR5pc marginT10px"> Books</h3>
          <ul>
            <li>
              <p><a href="http://www.lww.com/webapp/wcs/stores/servlet/product__11851_-1_9012052_Prod-9780683306200" target="_blank">Clinical Mastery in the<br>
                Treatment of Myofascial<br>
                Pain</a><br>
                Lucy   		Whyte Ferguson,  <br>
                Robert   		Gerwin <br>
                <a href="http://www.lww.com/webapp/wcs/stores/servlet/product__11851_-1_9012052_Prod-9780683306200" target="_blank"><img src="_images/buy_it_now.png" alt="Buy it now"></a></p>
            </li>
            <li>
              <p><a href="http://www.amazon.com/gp/product/1572242388/ref=as_li_qf_sp_asin_il_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=1572242388&linkCode=as2&tag=360com03-20&linkId=XKVFX64NNQCB4LCM" target="_blank">Fibromyalgia and Chronic<br>
                Myofascial Pain</a><br>
                <br>
                 Devin J. Starlanyl,<br>
                 Mary Ellen Copeland<br>
                 <a href="http://www.amazon.com/gp/product/1572242388/ref=as_li_qf_sp_asin_il_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=1572242388&linkCode=as2&tag=360com03-20&linkId=XKVFX64NNQCB4LCM" target="_blank"><img src="_images/buy_it_now.png" alt="Buy it now"></a><br>
              </p>
            </li>
            <li>
              <p><a href="http://www.amazon.com/gp/product/0443101787/ref=as_li_qf_sp_asin_il_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=0443101787&linkCode=as2&tag=360com03-20&linkId=K6N22U52NLBGXXBB" target="_blank">Movement Stability and <br>
                Lumbopelvic Pain </a><br>
                Andry Vleeming,<br>
                Vert Mooney,<br>
                Rob Stoeckart<br>
                <a href="http://www.amazon.com/gp/product/0443101787/ref=as_li_qf_sp_asin_il_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=0443101787&linkCode=as2&tag=360com03-20&linkId=K6N22U52NLBGXXBB" target="_blank"><img src="_images/buy_it_now.png" alt="Buy it now"></a><br>
              </p>
            </li>
            <li>
              <p><a href="http://www.proedinc.com/customer/productView.aspx?id=5072" target="_blank">Myofascial Manipulation</a><br>
                <br>
                Robert I. Cantu,<br>
Alan J. Grodin,<br>
Robert W. Stanborough<br>
                <a href="http://www.proedinc.com/customer/productView.aspx?id=5072" target="_blank"><img src="_images/buy_it_now.png" alt="Buy it now"></a>
              </p>
            </li>
            <li>
              <p><a href="http://www.jblearning.com/catalog/9780763779740/" target="_blank">Myofascial Trigger Points</a><br>
                 	<br>
               	Jan Dommerholt,<br>
Peter Huijbregts<br>
                <a href="http://www.jblearning.com/catalog/9780763779740/" target="_blank"><img src="_images/buy_it_now.png" alt="Buy it now"></a><br>
                <br>
              </p>
            </li>
            <li>
              <p><a href="http://www.jblearning.com/catalog/9780763752835/" target="_blank">Tension-Type and<br>
                Cervicogenic Headache</a><br>
                 	César Fernández-<br>
               	de-las-Peñas,<br>
Lars Arendt-Nielsen,<br>
Robert D. Gerwin<br>
                <a href="http://www.jblearning.com/catalog/9780763752835/" target="_blank"><img src="_images/buy_it_now.png" alt="Buy it now"></a><br>
              </p>
            </li>
            <li>
              <p><a href="http://www.amazon.com/gp/product/1608824942/ref=as_li_qf_sp_asin_il_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=1608824942&linkCode=as2&tag=360com03-20&linkId=KLNUFMRPWDWGYLVK" target="_blank">The Trigger Point <br>
                Therapy Workbook<br>
              </a><br>
 Clair Davies,<br>
Amber Davies<br>
                <a href="http://www.amazon.com/gp/product/1608824942/ref=as_li_qf_sp_asin_il_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=1608824942&linkCode=as2&tag=360com03-20&linkId=KLNUFMRPWDWGYLVK" target="_blank"><img src="_images/buy_it_now.png" alt="Buy it now"></a>
              </p>
            </li>
            <li>
              <p><a href="http://www.bookdepository.com/Trigger-Point-Dry-Needling-Jan-Dommerholt/9780702046018" target="_blank">Trigger Point <br>
                Dry Needling</a>
                <br>
                Jan Dommerholt,<br>
Cesar Fernandez-<br>
de-las-Peñas<br>
                <a href="http://www.bookdepository.com/Trigger-Point-Dry-Needling-Jan-Dommerholt/9780702046018" target="_blank"><img src="_images/buy_it_now.png" alt="Buy it now"></a></p>
            </li>
            <li>
              <p><a href="http://www.amazon.com/gp/product/1572245638/ref=as_li_qf_sp_asin_il_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=1572245638&linkCode=as2&tag=360com03-20&linkId=ETE6BGLDML7TWVCH" target="_blank">Trigger Point Therapy<br>
                for Low Back Pain</a><br>
                <br>
 Mary Biancalana,<br>
Sharon Sauer <br>
                <a href="http://www.amazon.com/gp/product/1572245638/ref=as_li_qf_sp_asin_il_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=1572245638&linkCode=as2&tag=360com03-20&linkId=ETE6BGLDML7TWVCH" target="_blank"><img src="_images/buy_it_now.png" alt="Buy it now"></a></p>
            </li>
            <div class="clearBoth">&nbsp;&nbsp;</div>
<h3 class="Underlined marginLR5pc marginT10px"> DVDs</h3>
            <li>
              <p><a href="http://www.1shoppingcart.com/app/?Clk=5141806" target="_blank">Functional Stability<br>
Training - Upper Body</a><br>
                Cressey & Reinold <br>
                <a href="http://www.1shoppingcart.com/app/?Clk=5141806" target="_blank"><img src="_images/buy_it_now.png" alt="Buy it now"></a></p>
            </li>
            <li>
              <p><a href="http://www.1shoppingcart.com/app/?Clk=5141806" target="_blank">Functional Stability<br>
Training - Core</a><br>
                Cressey & Reinold <br>
                <a href="http://www.1shoppingcart.com/app/?Clk=5141806" target="_blank"><img src="_images/buy_it_now.png" alt="Buy it now"></a></p>
            </li>
            <li>
              <p><a href="http://www.1shoppingcart.com/app/?Clk=5141806" target="_blank">Functional Stability<br>
Training - Lower Body</a><br>
                Cressey & Reinold <br>
                <a href="http://www.1shoppingcart.com/app/?Clk=5141806" target="_blank"><img src="_images/buy_it_now.png" alt="Buy it now"></a></p>
            </li>
            <li>
              <p><a href="http://www.1shoppingcart.com/app/?Clk=5141795" target="_blank">Optimal Shoulder<br>
Performance</a><br>
                Cressey & Reinold <br>
                <a href="http://www.1shoppingcart.com/app/?Clk=5141795" target="_blank"><img src="_images/buy_it_now.png" alt="Buy it now"></a></p>
            </li>
            <li>
              <p><a href="http://www.1shoppingcart.com/app/?af=1560725" target="_blank">More Reinold/Wilk<br>
Products</a><br>
                <a href="http://www.1shoppingcart.com/app/?af=1560725" target="_blank"><img src="_images/buy_it_now.png" alt="Buy it now"></a></p>
            </li>
          </ul>
          <div class="clearBoth"></div>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="AccTitleLarge">Conference Presentations</div>
          <div class="indicator" >&nbsp;</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <div class="clearBoth"></div>
          <h3 class="Underlined marginLR5pc marginT10px"> Boston Sports Medicine Symposium </h3>
          <ul>
            <li>
              <p><a href="_pdfs/BSSS_2012pptv3.1.pdf" target="_blank"> 2012 Boston Sports<br>
                Medicine Symposium<br>
                Presentation </a><br>
              </p>
            </li>
            <li>
              <p><a href="_pdfs/BSSS_2013_KatieAdams.pdf" target="_blank"> 2013 Boston Sports<br>
                Medicine Symposium<br>
                Handouts </a><br>
              </p>
            </li>
          </ul>
          <div class="clearBoth"></div>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="AccTitleLarge">Pain Research</div>
          <div class="indicator" >&nbsp;</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <ul>
            <li>
              <p><a href="http://360nmt.com/pdfs/J_Bone_Joint_Surg_Br_2011_Gwilym.pdf" target="_blank">Evidence   That Central<br>
                Sensitisation is Present in<br>
                Patients with Shoulder<br>
                Impingement Syndrome<br>
                andInfluences the<br>
                Outcome
                After Surgery</a></p>
            </li>
            <li>
              <p><a href="http://360nmt.com/pdfs/Expectations%20of%20increased%20and%20decreased%20pain%20explain%20the%20effect%20of%20conditioned%20pain%20modulation%20in%20females" target="_blank">Expectations of Increased<br>
                and Decreased Pain<br>
                Explain the Effect of<br>
                Conditioned Pain<br>
                Modulation
                in Females</a><br>
                <br>
              </p>
            </li>
            <li>
              <p><a href="http://360nmt.com/pdfs/pain_and_the_neuromatrix_in_the_brain.pdf" target="_blank">Pain and the Neuromatrix<br>
                in the Brain</a></p>
            </li>
            <li>
              <p><a href="http://360nmt.com/pdfs/Dommerholt_Myalgia_after_WAD_2005.pdf" target="_blank">Persistent Myalgia<br>
                Following Whiplash</a></p>
            </li>
          </ul>
          <div class="clearBoth"></div>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accbottom">
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleLarge">Professional Organizations</div>
        </header>
        
        <!-- Content Section -->
        <section class="content accordionBottomRadius">
          <ul>
            <li class="longAddress">
              <p><strong>American Massage Therapy<br>
                Association</strong> (AMTA)<br>
                <a href="http://www.amtamassage.org" target="_blank">amtamassage.org</a></p>
            </li>
            <li class="longAddress">
              <p><strong>International Myopain Society</strong><br>
                <a href="http://www.myopain.org" target="_blank">myopain.org</a><br>
                <br>
              </p>
            </li>
            <li class="longAddress">
              <p><strong>National Assoc. of Myofascial</strong><strong><br>
                </strong><span class="noWrap"><strong>Trigger Point Therapists</strong></span><br>
                <a href="http://myofascialtherapy.org" target="_blank">myofascialtherapy.org</a></p>
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
          <div class="AccTitleLarge">Self Care Products</div>
          <div class="indicator" >&nbsp;</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <ul>
            <li>
              <p> <a href="http://www.triggerpointproducts.com" target="_blank">Trigger Point Products</a></p>
            </li>
          </ul>
          <div class="clearBoth"></div>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="AccTitleLarge">TED Talks</div>
          <div class="indicator" >&nbsp;</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <ul>
            <li>
              <p><strong>Elliot Krane:</strong><br>
                <a href="http://www.ted.com/talks/elliot_krane_the_mystery_of_chronic_pain.html?quote=1755" target="_blank">The mystery
                of chronic pain </a><br>
              </p>
            </li>
            <li>
              <p><strong>Jill Bolte Taylor:</strong><br>
                <a href="http://www.ted.com/talks/jill_bolte_taylor_s_powerful_stroke_of_insight.html" target="_blank">My stroke of insight </a><br>
              </p>
            </li>
            <li>
              <p><strong>Lorimer Moselely:</strong><br>
                <a href="http://www.ted.com/talks/elliot_krane_the_mystery_of_chronic_pain.html?quote=1755" target="_blank"> Why things hurt </a><br>
              </p>
            </li>
          </ul>
          <div class="clearBoth"></div>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="AccTitleLarge">Trigger Point Research</div>
          <div class="indicator" >&nbsp;</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <h3 class="Underlined marginLR5pc marginT10px"> Websites </h3>
          <ul>
            <li>
              <p><a href="http://www.dgs.eu.com/en/research.html" target="_blank">David G. Simons<br>
                Academy</a></p>
            </li>
            <li>
              <p><a href="http://homepages.sover.net/~devstar/reading_room.htm" target="_blank">Devin J. Starlanyl<br>
                Reading Room</a></p>
            </li>
            <li>
              <p><a href="http://leonchaitow.com/articles/v" target="_blank">Leon Chaitow<br>
                Health Education</a></p>
            </li>
            <li>
              <p><a href="http://www.myopainseminars.com/resources/" target="_blank">Myopain Seminars</a></p>
            </li>
          </ul>
          <div class="clearBoth"></div>
          <h3 class="Underlined marginLR5pc"> Articles </h3>
          <ul>
            <li>
              <p><a href="http://360nmt.com/pdfs/Dry_needling_peripeheral_and_centrral_JMMT_19-4.pdf" target="_blank">Dry Needling - Peripheral<br>
                and Central<br>
                Considerations</a><br>
                <br>
              </p>
            </li>
            <li>
              <p><a href="http://360nmt.com/pdfs/Article_Interrater.pdf" target="_blank">Interrater Reliability of<br>
                Palpation of Myofascial<br>
                Trigger Points in Three<br>
                Shoulder Muscles</a></p>
            </li>
            <li>
              <p><a href="http://360nmt.com/pdfs/Article_TrP_Perpetuating_Factors.pdf" target="_blank">Neural and Join<br>
                Afferences as Etiologic or<br>
                Perpetuating Factors of<br>
                Myofascial Trigger Points</a></p>
            </li>
            <li>
              <p><a href="http://360nmt.com/pdfs/Grieve_2011_Soleus_TrPs_and_ROM.pdf" target="_blank">The   Immediate Effect of<br>
                Soleus Trigger Point<br>
                Pressure Release on<br>
                Restricted   Ankle Joint<br>
                Dorsiflexion: <br>
                A Pilot
                Randomised<br>
                Controlled
                Trial</a></p>
            </li>
            <li>
              <p><a href="http://360nmt.com/pdfs/Bron_Tx_of_TrPs_in_chronic_shoulder_2011.pdf" target="_blank">Treatment of Myofascial<br>
                Trigger Points in Patients<br>
                with Chronic Shoulder<br>
                Pain: A Randomized,<br>
                Controlled Trial</a></p>
            </li>
            <li>
              <p><a href="http://360nmt.com/pdfs/myofascial_trigger_points.pdf" target="_blank">Uncovering the<br>
                biochemical milieu of<br>
                myofascial trigger points<br>
                using in vivo microdialysis<br>
                </a></p>
            </li>
          </ul>
          <div class="clearBoth"></div>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header>
          <div class="AccTitleLarge">Web Sites</div>
          <div class="indicator" >&nbsp;</div>
        </header>
        
        <!-- Content Section -->
        <section class="content">
          <ul>
            <li>
              <p><a href="http://www.painstory.org/eu" target="_blank">painstory.org/eu </a></p>
            </li>
            <li>
              <p><a href="http://www.1shoppingcart.com/app/?Clk=5141808" target="_blank">RehabWebinars.com</a></p>
            </li>
            <li>
              <p><a href="http://www.sover.net/~devstar" target="_blank">sover.net/~devstar </a></p>
            </li>
          </ul>
          <div class="clearBoth"></div>
        </section>
      </div>
      <div class="accordion"> 
        <!-- Trigger -->
        <header class="accbottom">
          <div class="indicator" >&nbsp;</div>
          <div class="AccTitleLarge">360 NMT Press</div>
        </header>
        
        <!-- Content Section -->
        <section class="content accordionBottomRadius">
          <ul>
            <li>
              <p><a href="_pdfs/Is_Kong_King.pdf" target="_blank">Is Kong King?</a><br>
                New England Runner.<br>
                Nov/Dec 2006</p>
            </li>
            <li>
              <p><a href="_pdfs/NeuroMuscular_101.pdf" target="_blank">NeuroMuscular 101</a><br>
                New England Runner.<br>
                Mar/April 2006</p>
            </li>
            <li>
              <p><a href="_pdfs/Pain_Killer.pdf" target="_blank">Pain Killer</a><br>
                An article on Katie and<br>
                360 NMT from her alma<br>
                mater, Ithaca College</p>
            </li>
            <li>
              <p><a href="_pdfs/Sorely_Needed_Answers.pdf" target="_blank">Sorely Needed Answers</a><br>
                Stew Wild discusses<br>
                post-marathon muscle soreness.<br>
                New England Runner, 2007</p>
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
