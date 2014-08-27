<?php
	session_start();
	require 'vendor/autoload.php';
	require ('_includes/config.php');
// Configuration	
	$debugXML= false;
	$debug = false	;
	$_ResultCount = 0;
	$_MBService = "SiteService";
	$_MBRequest = "GetPrograms";
	$_useDates = false;
	$startdateformat = null;
	$enddateformat = null;
	$startdatetag = "StartDateTime";
	$enddatetag = "EndDateTime";
	$otherservice = "ScheduleType";
	$otherservicevalue = "Appointment";
	$otherservice2 = "OnlineOnly";
	$otherservicevalue2 = false;
	$resultTags = "Programs";
	$resultTag = "Program";
	

	
	//Make Request to MB to get Appointment/Program types
	$response = MB_Request ($_MBService, $_MBRequest, $_useDates, $startdateformat, $startdatetag, $enddateformat, $enddatetag, $otherservice, $otherservicevalue, $otherservice2, $otherservicevalue2);
	 //check for errors
	if ($_ResultCount < 1) {
		$hasError = '_ResultCount_error';
		$_ResultCount_error = 'ui-state-error';
		$_SESSION['_ResultCount']= 0;		
	} else {	    
		$_ResultCount_error = null;
		$_SESSION['_ResultCount']=$_ResultCount;		
	}
?>
	<?php 
	  //If the form has been submitted
	  if(isset($_POST['submit'])) {
		  $hasError = null;
				
		  ////Check to make sure that the StartDate field is not empty
//		  if(trim($_POST['_StartDate']) == '') {
//			  $hasError = '_StartDate_error';
//			  $_StartDate_error = 'ui-state-error';
//			  $_SESSION['_StartDate']='';
//		  } else {
//			  $_StartDate = trim($_POST['_StartDate']);
//			  //test date format
//			  try {
//				  $startdate = new DateTime($_StartDate);
//			  } catch (Exception $e) {
//				  $hasError = '_StartDateSyntax_error';
//				  $_StartDateSyntax_error = 'ui-state-error'; 
//				  $_SESSION['_StartDate']='';
//				  //echo $e->getMessage();
//				  //echo "<br> $_StartDate: " . $_StartDate;
//				  //echo "<br> $hasError: " . $hasError;
//			  }
//			  if(!isset($hasError)) { //If no errors are found 			  
//				  //echo "$_StartDate: " . $_StartDate;
//				  $_StartDate_error = null;
//				  $_StartDateSyntax_error = null;
//				  $_SESSION['_StartDate']=$_StartDate;
//				  $startdateformat = $startdate->format('Y-m-d');
//			  }
//		  }
//		  //Check to make sure that the EndDate field is not empty
//		  if(trim($_POST['_EndDate']) == '') {
//			  $hasError = '_EndDate_error';
//			  $_EndDate_error = 'ui-state-error';
//			  $_SESSION['_EndDate']='';
//		  } else {
//			  $_EndDate = trim($_POST['_EndDate']);
//			  //test date format
//			  try {
//				$enddate = new DateTime($_EndDate);
//			  } catch (Exception $e) {;	
//				  $hasError = '_EndDateSyntax_error';			  
//				  $_EndDateSyntax_error = 'ui-state-error';
//				  $_SESSION['_EndDate']='';
//			  }
//			  if(!isset($hasError)) { //If no errors are found 
//				  $_EndDate_error = null;
//				  $_EndDateSyntax_error = null;
//				  $_SESSION['_EndDate']=$_EndDate;
//				  $enddateformat = $enddate->format('Y-m-d');
//			  }
//		  }
		  if(!isset($hasError)) {
			  //check Date range
			  //if  ((strtotime($_StartDate) - strtotime($_EndDate)) > 0)  {				  
//				  $hasError = '_Range_error';
//				  $_Range_error = 'ui-state-error';
//			  }

			  //If there is no error, Make Request to MB to get Appointment types
	$response = MB_Request ($_MBService, $_MBRequest, $_useDates, $startdateformat, $startdatetag, $enddateformat, $enddatetag, $otherservice, $otherservicevalue, $otherservice2, $otherservicevalue2);
			  
			  //check for errors
			  if ($_ResultCount < 1) {
				  $hasError = '_ResultCount_error';
				  $_ResultCount_error = 'ui-state-error';
				  $_SESSION['_ResultCount']= 0;		
			  } else {	    
				  $_ResultCount_error = null;
				  $_SESSION['_ResultCount']=$_ResultCount;		
			  }
		  }
	  }
	?>
<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=""><!-- InstanceBegin template="../Templates/main_template.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
	include  '../_includes/vars.php'; 
	$dirPrefix = ''; 
  } 
?> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="Title" -->
<title>Contact 360 Neuromuscular Therapy</title>
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
<link rel="stylesheet" href="../_styles/jquery-ui-1.10.3.custom.min.css">
<script src="../_scripts/jquery-ui-1.10.3.custom.min.js"></script>
<?php 
  //turn off menu fix  
	  $menuFix = "";
  // init check box
	 $newsandevents = "checked";
?>
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
                      <li><a href="../cases/head-and-neck.php">Head &amp; Neck</a></li>
                      <li><a href="../cases/arm-and-shoulder.php">Shoulder &amp; Arm</a></li>
                      <li><a href="../cases/torso-and-back.php">Torso &amp; Back</a></li>
                      <li><a href="../cases/pelvis-and-hip.php">Pelvis &amp; Hip</a></li>
                      <li><a href="../cases/leg-and-foot.php">Leg &amp; Foot</a></li>
                      <li><a href="../cases/pain-syndromes.php">Pain Syndromes</a></li>
                      <li><a href="../cases/other-syndromes.php">Other Issues</a></li>
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
  <div id="Left60percent">
    <div class="borderRight">
      <h1 class="center paddingTB2pc marginLR10pc underlined">Find Programs
      </h1>

	  <?php //When there are no errors
         if (!(isset($_ResultCount_error))) :?>
      <h3 class="center">
        <?php if($_ResultCount>0) : ?>
      </h3>
      <p class="center">We found  <?=$_ResultCount; ?> programs.
	    <?php endif; ?>	
      </p>
		 <?php else:?>  
          <h3 class="center"> Sorry there are no progrms! </h3>
                    <p class="center">Please try your search again. </p>
         <?php endif; ?>	
          
      <?php 
	  if(isset($hasError)) { //If errors are found 
		  if ($debug) {
			  echo("<P>hasError  " . $hasError  . "</P>");
		  }
		?>
      <div class="formFeedback">
		  <?php		
			if(isset($_StartDate_error)) { ?>
				
				<div class="ui-state-error ui-corner-all">
                    <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;margin-top: 3px;"></span>
                    Please enter a Start Date 
            </div>
				<?php
			}	
			if(isset($_StartDateSyntax_error)) { ?>
				
				<div class="ui-state-error ui-corner-all">
                    <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;margin-top: 3px;"></span>
                    Please enter a Start Date with the correct format
            </div>
				<?php
			}
			if(isset($_EndDate_error)) { ?>
				
				<div class="ui-state-error ui-corner-all">
                    <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;margin-top: 3px;"></span>
                    Please enter a End Date
                </div>
				<?php
			}
			if(isset($_EndDateSyntax_error)) { ?>
				
				<div class="ui-state-error ui-corner-all">
                    <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;margin-top: 3px;"></span>
                    Please enter a End Date with the correct format
                </div>
				<?php
			}
			if(isset($_Range_error)) { ?>
				
				<div class="ui-state-error ui-corner-all">
                    <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;margin-top: 3px;"></span>
                    Please enter a  valid range. <br />
                End Date cannot be before Start Date! </div>
			<?php
			}
			?>
        </div>
	  <?php
      }
      ?> 
	  <div class="marginLR10pc">
        <form action="GetPrograms.php" method="post" class="formBackground radius8">
          <!--<div class="left" id="fieldsContainer">
            <input type="text" size="10" name="_StartDate" maxlength="10" value="<?=$_SESSION['_StartDate'];?>" id="_StartDate" placeholder="Start Date" class="<?=$_StartDate_error;?> <?=$_StartDateSyntax_error;?> ui-corner-all Datepicker right"/>
            <label for="StartDate" class="right marginR5px">Start Date:</label>
            <br />
            <input type="text" size="10" name="_EndDate" maxlength="10" value="<?=$_SESSION['_EndDate'];?>" id="_EndDate" placeholder="End Date" class="<?=$_EndDate_error;?> <?=$_EndDateSyntax_error;?> ui-corner-all Datepicker right"/>
            <label for="EndDate" class="right marginR5px">End Date:</label>
            <br>
            <div class="marginLR5pc right noWrap Txt12px">Format: mm/dd/yyyy </div>
          </div>-->
          <br>
          <br>
          <input name="submit" type="submit" class="right"  value="Search"/>
        for online programs
        </form>
                
      </div>
    </div>
    </div>
  <div id="Right40percet">
      <h2 class="center">Address</h2>
<div class="">
  <div class="AddressContainer ">
    <p class=" borderOrange radius8 center shadow"><br>
      <strong>360  NeuroMuscular Therapy</strong><br>
      35 Highland Circle, 2nd Floor<br>
      Needham, MA 02494<br>
      <br>
      Phone: 781-444-3609<br>
      Fax: 781-400-1790 <br>
      Email: <a href="mailto:info@360nmt.com">info@360nmt.com</a><br>
      <br>
    </p>
  </div>
    </div>
      <h2 class="center"><br>
    </h2>
  </div>
  <div id="ContentFull"> 
  
          <?php //form submitted and no errors
           //if ((isset($_POST['submit'])) &&($_ResultCount > 0)) :?>
          <?php if (($_ResultCount > 0)) :?>
            <h2>Available Programs</h2>   
              <?php
              if ($debugXML) {
                  echo "var dump: <br>" ;
                  var_dump($response->$resultTags->$resultTag);
                  echo "<br> End var dump: <br>" ;
              }
              ?>
              <div class="MainTxt">
                  <?php
				  $programs = toArray($response->$resultTags->$resultTag);
                  ?>
                  <?php foreach($programs as $class): 
                  //foreach($response->Classes->Class as $class): ?>
                      <div class="formBackground radius8 paddingLR2pc">
                          <h3>
                              <?php echo $class->Name; ?> (<?php echo $class->ID; ?>)
                          </h3>
                          
                          <p>
                              <br>
							  <?php echo $class->ScheduleType ;?>
                          </p>
                          <p>ClassID: <?php echo $class->ID; ?></p>
                      </div>
                  <?php endforeach; ?>    
    </div>
          <?php endif; ?>	
      
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
  </div><!-- #EndLibraryItem --><div id="CopyRight">&copy; 2004 - 2013, 360 NMT&reg;, LLC. All Rights Reserved | <a href="../privacy.php">Privacy Statement</a> | <a href="../terms.php">Terms of Service</a> | <a href="../hipaa.php">HIPAA  Policy</a></div>
  <div id="Watermark"><img src="../_images/rosette_half21.png" alt="Watermark"></div>
</div>
<!-- InstanceBeginEditable name="ReadyFunction" --> 
<script language="javascript">
  $(document).ready(function() {
	  
	  $(function(){
		   $.datepicker.setDefaults( 
			 $.extend($.datepicker.regional[""])
		   );
		   $("#_StartDate").datepicker({ minDate: 0 });
		   $("#_EndDate").datepicker({ minDate: 0 });
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
