<?php
	session_start();
?>
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
<title>Contact 360 Neuromuscular Therapy</title>
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
<link rel="stylesheet" href="_styles/jquery-ui-1.10.3.custom.min.css">
<!--<script src="scripts/jquery-ui-1.10.3.custom.min.js"></script>-->
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
  <div id="Left60percent">
    <div class="borderRight">
      <h1 class="center">Contact Us</h1>
      <p class="MainTxt underlined paddingB2pc marginB20">Please enter your information below and we will get back to you right away...</p>
  <?php

	//If the form is submitted
	if(isset($_POST['submit'])) {
	  //echo("<P>Got here!  " . $hasError  . "</P>");
	  $hasError = null;
	   
	  //get the dropdown values and store them in session variables 
	    $contactmedia = $_POST['contactmedia'];
		$_SESSION['contactmedia']=$contactmedia;
	    $contactday = $_POST['contactday'];
		$_SESSION['contactday']=$contactday;
	    $contacttime = $_POST['contacttime'];
		$_SESSION['contacttime']=$contacttime;
		
		
		//Init variables for check boxes
			  $newsandevents = "";
//			  $Checkbox2= "";
		
		//CheckboxGroup is an array of all the checked boxes values
			  $CheckboxGroup = $_POST['CheckboxGroup'];
			  if ($CheckboxGroup) {
				foreach ($CheckboxGroup as $Checkboxvalue) {
				  //save the checked boxes in a session variable and 
				  switch ($Checkboxvalue) {
					case "newsandevents":
					  $newsandevents = "checked";
					break;
//					case "checkbox2":
//					  $checkbox2 = "checked";
//					break;
				  }
				  //echo "Value: $Checkboxvalue<br />\n";
				}
			  }
		
		//check captcha
		//include_once $_SERVER['DOCUMENT_ROOT'] . '/_securimage/securimage.php';
		include_once '_securimage/securimage.php';
		$securimage = new Securimage();
		if ($securimage->check($_POST['captcha_code']) == false) {
		  // the code was incorrect
		  // you should handle the error so that the form processor doesn't continue
		 
		  $hasError = 'captcha_error';
		  $captcha_error = 'ui-state-error';
		  //echo 'got here';
		  // or you can use the following code if there is no validation or you do not know how
		  //echo "The security code entered was incorrect.<br /><br />";
		  //echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
		  //exit;
		}
		
	  //Check to make sure sure that a valid email address is submitted	  		  
	  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
	  if(($email == '') || (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
		  $hasError = 'email_error';
		  $email_error = 'ui-state-error';
		  $_SESSION['email']='';
	  } else {
		  $_SESSION['email']=$email;
		  $email_error = null;
	  } 
	  	
	
	  
	  //Check to make sure that the Hearabout field is not empty
	  if(trim($_POST['hearabout']) == '') {
		  $hasError = 'hearabout_error';
		  $hearabout_error = 'ui-state-error';
		  $_SESSION['hearabout']='';
	  } else {
		  $hearabout = trim($_POST['hearabout']);
		  $hearabout_error = null;
		  $_SESSION['hearabout']=$hearabout;
	  }
	  
	  //Check to make sure that the state field is not empty
	  if(trim($_POST['state']) == '') {
		  $hasError = 'state_error';
		  $state_error = 'ui-state-error';
		  $_SESSION['state']='';
	  } else {
		  $state = trim($_POST['state']);
		  $state_error = null;
		  $_SESSION['state']=$state;
	  }
	  
	  //Check to make sure that the zip field is not empty
	  if(trim($_POST['zip']) == '') {
		  $hasError = 'zip_error';
		  $zip_error = 'ui-state-error';
		  $_SESSION['zip']='';
	  } else {
		  $zip = trim($_POST['zip']);
		  $zip_error = null;
		  $_SESSION['zip']=$zip;
	  }
	  
	  //DON'T Check to make sure that the city field is not empty
	  if(trim($_POST['city']) == '') {
		  $hasError = 'city_error';
		  $city_error = 'ui-state-error';
		  $_SESSION['city']='';
	  } else {
		  $city = trim($_POST['city']);
		  $city_error = null;
		  $_SESSION['city']=$city;
	  }
  
	  //Check to make sure that the address2 field is not empty
	  //if(trim($_POST['address2']) == '') {
//		  $hasError = 'address2_error';
//		  $address2_error = 'ui-state-error';
//		  $_SESSION['address2']='';
//	  } else {
		  $address2 = trim($_POST['address2']);
		  $address2_error = null;
		  $_SESSION['address2']=$address2;
//	  }
  
	  //Check to make sure that the address field is not empty
	  if(trim($_POST['address']) == '') {
		  $hasError = 'address_error';
		  $address_error = 'ui-state-error';
		  $_SESSION['address']='';
	  } else {
		  $address = trim($_POST['address']);
		  $address_error = null;
		  $_SESSION['address']=$address;
	  }
	  
	  	  //Clean why coaching line
	  if(function_exists('stripslashes')) {
		  $questionsandcomments = stripslashes(trim($_POST['questionsandcomments']));
	  } else {
		  $questionsandcomments = trim($_POST['questionsandcomments']);
	  } 
	  if($questionsandcomments == '') {
		  $hasError = 'questionsandcomments_error';
		  $questionsandcomments_error = 'ui-state-error';
		  $_SESSION['questionsandcomments']='';
	  } else {
		  $_SESSION['questionsandcomments']=$questionsandcomments;
		  $questionsandcomments_error = null;
	      //echo("<P>Got here!  " . $questionsandcomments  . "</P>");
	  }

	  //Check to make sure that the phone field is not empty
	  if(trim($_POST['phone']) == '') {
		  $hasError = 'phone_error';
		  $phone_error = 'ui-state-error';
		  $_SESSION['phone']='';
	  } else {
		  $phone = trim($_POST['phone']);
		  $phone_error = null;
		  $_SESSION['phone']=$phone;
	  }
	  
	  //Check to make sure that the lastname field is not empty
	  if(trim($_POST['lastname']) == '') {
		  $hasError = 'lastname_error';
		  $lastname_error = 'ui-state-error';
		  $_SESSION['lastname']='';
	  } else {
		  $lastname = trim($_POST['lastname']);
		  $lastname_error = null;
		  $_SESSION['lastname']=$lastname;
	  }
	  
	  //Check to make sure that the First Name field is not empty
	  if(trim($_POST['firstname']) == '') {
		  $hasError = 'firstname_error';
		  $firstname_error = 'ui-state-error';
		  $_SESSION['firstname']='';
	  } else {
		  $firstname = trim($_POST['firstname']);
		  $firstname_error = null;
		  $_SESSION['firstname']=$firstname;
	  }
	  
	 	  //If there is no error, send the email
	  if(!isset($hasError)) {
		  $subject = '360NMT Contact Form';
		  $emailTo = 'kadams@360nmt.com'; //Put your own email address here, comma separate multiple email addresses
		  //$emailTo = 'marcello@discsox.com'; 
		  $textTo = '5088018378@txt.att.net';
		  //$textTo = '4086560764@txt.att.net';
		  		  //get contents of store email file
		  $storeEmail = file_get_contents('./store_email.php', true);
		  //replace the info with variable values
		  //$storeEmail = str_replace("cust_reqemail", $reqemail, $storeEmail);
		  //$storeEmail = str_replace("cust_appremail", $appremail, $storeEmail);
		  $storeEmail = str_replace("cust_firstname", $firstname, $storeEmail);
		  $storeEmail = str_replace("cust_lastname", $lastname, $storeEmail);
		  $storeEmail = str_replace("cust_address", $address, $storeEmail);
		  $storeEmail = str_replace("cust_line2address", $address2, $storeEmail);
		  $storeEmail = str_replace("cust_city", $city, $storeEmail);
		  $storeEmail = str_replace("cust_state", $state, $storeEmail);
		  $storeEmail = str_replace("cust_zip", $zip, $storeEmail);
		  $storeEmail = str_replace("cust_email", $email, $storeEmail);
		  $storeEmail = str_replace("cust_phone", $phone, $storeEmail);
		  $storeEmail = str_replace("cust_questionsandcomments", $questionsandcomments, $storeEmail);
		  $storeEmail = str_replace("cust_hearabout", $hearabout, $storeEmail);
		  $storeEmail = str_replace("cust_contactmedia", $contactmedia, $storeEmail);
		  $storeEmail = str_replace("cust_contactday", $contactday, $storeEmail);
		  $storeEmail = str_replace("cust_contacttime", $contacttime, $storeEmail);
		  if ($newsandevents=="checked") {
			$storeEmail = str_replace("cust_newsandevents", "Checked", $storeEmail);
		  } else {			  
			$storeEmail = str_replace("cust_newsandevents", "Not checked" , $storeEmail);
		  }
		  
		  //get contents of text message file
		  $textmsg = file_get_contents('./store_text_msg.php', true);
		  //replace the email title with the actual customer name
		  $textmsg = str_replace("cust_firstname", $firstname, $textmsg);
		  $textmsg = str_replace("cust_lastname", $lastname, $textmsg);
		  $textmsg = str_replace("cust_email", $email, $textmsg);
		  $textmsg = str_replace("cust_phone", $phone, $textmsg);
		  $textmsg = str_replace("cust_contactmedia", $contactmedia, $textmsg);
		  
		  /* Specify your SMTP Server, Port and Valid From Address */
		  ini_set("SMTP","mail.360nmt.com");
		  ini_set("smtp_port","8889");
		  ini_set("sendmail_from","info@360nmt.com");
		  
		  //$headers = 'From: info@kapcoaching.com <'.$emailTo.'>' . "\r\n" ;
		  $headers = 'From: info@360nmt.com' . "\r\n" ;
		  $headers .= 'Reply-To: ' . $email . "\r\n" ;
		  $headers .= "MIME-Version: 1.0\r\n";
		  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		  //send text message
		  mail($textTo, $subject, $textmsg, $headers);
		  //send store email
		  mail($emailTo, $subject, $storeEmail, $headers);
		  $emailSent = true;
	  }
  }  
?>
      
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="formBackground radius8" id="contactform">
        <div id="fieldsContainer">
          <?php 
	  if(isset($hasError)) { //If errors are found 
		  //echo("<P>hasError  " . $hasError  . "</P>");
		?>
          <div class="formFeedback">
            <?php		
	    if(isset($firstname_error)) {
		?>
            <div class="ui-state-error ui-corner-all"><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>Please enter a First Name</div>
            <?php
		}
		if(isset($lastname_error)) { 
		?>
            <div class="ui-state-error ui-corner-all"><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>Please enter a Last Name</div>
            <?php
		}
		if(isset($address_error)) { 
		?>
            <div class="ui-state-error ui-corner-all"><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>Please enter an Address</div>
            <?php
		}
		if(isset($address2_error)) { 
		?>
            <div class="ui-state-error ui-corner-all"><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>Please enter an  address line 2 </div>
            <?php
		}
		if(isset($city_error)) { 
		?>
            <div class="ui-state-error ui-corner-all"><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>Please enter City</div>
            <?php
		}
		if(isset($state_error)) { 
		?>
            <div class="ui-state-error ui-corner-all"><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>Please enter a State</div>
            <?php
		}
		if(isset($zip_error)) { 
		?>
            <div class="ui-state-error ui-corner-all"><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>Please enter a Zip Code </div>
            <?php
		}
		if(isset($email_error)) { 
		?>
            <div class="ui-state-error ui-corner-all"><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>Please enter valid e-mail information</div>
            <?php
		}
		if(isset($phone_error)) { 
		?>
            <div class="ui-state-error ui-corner-all"><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>Please enter phone number</div>
            <?php
		}
		if(isset($questionsandcomments_error)) { 
		?>
            <div class="ui-state-error ui-corner-all"><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>Please enter your questions and/or comments</div>
            <?php
		}
		if(isset($hearabout_error)) { 
		?>
            <div class="ui-state-error ui-corner-all"><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>How did you hear about us? </div>
            <?php
		}
		if(isset($captcha_error)) { 
		?>
            <div class="ui-state-error ui-corner-all"><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>Please re-enter the text in the image </div>
            <?php
		}
		?>
          </div>
          <?php 
	  } 
	?>
          <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
          <div class="formFeedback">
            <div class="ui-state-highlight radius8 borderOrange">
              <div class="Xit"> <a href="contact-us.php" class="white">X</a> </div>
              <p><span class="ui-icon ui-icon-info radius8" style="float: left; margin-right: .3em;"></span><strong>Thank you <?php echo $firstname;?> for submitting our contact form. </strong></p>
              <p><br />
                We will get in touch with you as soon as possible. </p>
              <p>&nbsp;</p>
              <p>Best, <br>
                The 360 NMT Team</p>
            </div>
          </div>
          <?php } ?>
          <div class="left">
            <label for="firstname">First Name:</label>
            <input type="text" size="20" name="firstname" maxlength="25" value="<?=$_SESSION['firstname'];?>" id="firstname" placeholder="First Name"  class="<?=$firstname_error;?> ui-corner-all" />
          </div>
          <div class="left">
            <label for="lastname">&nbsp;Last Name:</label>
            <input type="text" size="20" name="lastname" maxlength="25" value="<?=$_SESSION['lastname'];?>" id="lastname" placeholder="Last Name"  class="<?=$lastname_error;?> ui-corner-all" />
          </div>
          <div class="left">
            <label for="address" style="display: bblock">&nbsp;Address 1:</label>
            <input type="text" size="20" name="address" maxlength="45" value="<?=$_SESSION['address'];?>" id="address" placeholder="Address Line 1"  class="<?=$address_error;?> ui-corner-all">
          </div>
          <div class="left">
            <label for="address2">&nbsp;Address 2:</label>
            <input type="text" size="20" name="address2" maxlength="45" value="<?=$_SESSION['address2'];?>" id="address2" placeholder="Address Line 2 (optional)"  class="<?=$address2_error;?> ui-corner-all">
          </div>
          <div class="clearBoth">&nbsp;&nbsp;</div>
          <div class="left">
            <label for="city">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; City:</label>
            <input type="text" size="12" name="city" maxlength="35" value="<?=$_SESSION['city'];?>" id="city" placeholder="City"  class="<?=$city_error;?> ui-corner-all">
            </div>
          <div class="left">
            <label for="state">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;State:</label>
            <input type="text" size="2" name="state" maxlength="20" value="<?=$_SESSION['state'];?>" id="state" placeholder="state"  class="<?=$state_error;?> ui-corner-all">
            </div>
          <div class="left">
            <label for="zip">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Zip:</label>
            <input type="text" size="5" name="zip" maxlength="11" value="<?=$_SESSION['zip'];?>" id="zip" placeholder="zip"  class="<?=$zip_error;?> ui-corner-all">
            </div>
          <div class="clearBoth"></div>
<div class="left">
            <label for="email">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Email:</label>
            <input type="text" size="20" name="email" maxlength="50" value="<?=$_SESSION['email'];?>" id="email"  placeholder="Enter Email"  class="<?=$email_error;?> ui-corner-all" />
          </div>
          <div class="left">
            <label for="phone">&nbsp; &nbsp; &nbsp; &nbsp;Phone:</label>
            <input type="text" size="11" name="phone" maxlength="50" value="<?=$_SESSION['phone'];?>" id="phone"  placeholder="Enter Phone #"  class="<?=$phone_error;?> ui-corner-all" />
          </div>
          <div class="clearBoth"></div>
          <div class="inputContainer left">
            <label for="questionsandcomments" class="block">Enter your Questions / Comments</label>
            <textarea name="questionsandcomments" id="questionsandcomments" cols="45" rows="5" placeholder="Enter your question and/or comments"  class="<?=$questionsandcomments_error;?> ui-corner-all"><?=$_SESSION['questionsandcomments'];?>
</textarea>
          </div>
          <div class="inputContainer left">
            <label for="hearabout (optional)">How did you hear about us?</label>
            <input type="text" size="20" name="hearabout" maxlength="20" value="<?=$_SESSION['hearabout'];?>" id="hearabout" placeholder="How did you hear about us?"  class="<?=$hearabout_error;?> ui-corner-all">
            </div>
          <div class="clearBoth">&nbsp;&nbsp;</div>
          <div class=" left">
            <div class="inputContainer">
              <div class="formTitle">What are your contact preferences?</div>
              <div class="left">
                <label for="contactmedia">Contact me:</label>
                <select name="contactmedia">
                  <option value="email" <?php echo ($_SESSION['contactmedia'] == 'email') ? 'selected="selected"' : ''; ?> >by Email</option>
                  <option value="phone" <?php echo ($_SESSION['contactmedia'] == 'phone') ? 'selected="selected"' : ''; ?> >by Phone</option>
                  <option value="text message" <?php echo ($_SESSION['contactmedia'] == 'text message') ? 'selected="selected"' : ''; ?> >by Text Message</option>
                </select>
              </div>
<div class="left">
                <label for="contactday">My best day is:</label>
                <select name="contactday">
                  <option value="Any Day" <?php echo ($_SESSION['contactday'] == 'Any Day') ? 'selected="selected"' : ''; ?> >any Day</option>
                  <option value="Weekday" <?php echo ($_SESSION['contactday'] == 'Weekday') ? 'selected="selected"' : ''; ?> >a Weekday</option>
                  <option value="Weekend" <?php echo ($_SESSION['contactday'] == 'Weekend') ? 'selected="selected"' : ''; ?> >a Weekend</option>
                  <option value="Monday" <?php echo ($_SESSION['contactday'] == 'Monday') ? 'selected="selected"' : ''; ?> >a Monday</option>
                  <option value="Tuesday" <?php echo ($_SESSION['contactday'] == 'Tuesday') ? 'selected="selected"' : ''; ?> >a Tuesday</option>
                  <option value="Wednesday" <?php echo ($_SESSION['contactday'] == 'Wednesday') ? 'selected="selected"' : ''; ?> >a Wednesday</option>
                  <option value="Thursday" <?php echo ($_SESSION['contactday'] == 'Thursday') ? 'selected="selected"' : ''; ?> >a Thursday</option>
                  <option value="Friday" <?php echo ($_SESSION['contactday'] == 'Friday') ? 'selected="selected"' : ''; ?> >a Friday</option>
                  <option value="Saturday" <?php echo ($_SESSION['contactday'] == 'Saturday') ? 'selected="selected"' : ''; ?> >a Saturday</option>
                  <option value="Sunday" <?php echo ($_SESSION['contactday'] == 'Sunday') ? 'selected="selected"' : ''; ?> >a Sunday</option>
                </select>
                <label for="contacttime"></label>
                <select name="contacttime">
                  <option value="Anytime" <?php echo ($_SESSION['contacttime'] == 'Anytime') ? 'selected="selected"' : ''; ?> >Anytime</option>
                  <option value="Morning" <?php echo ($_SESSION['contacttime'] == 'Morning') ? 'selected="selected"' : ''; ?> >in the Morning</option>
                  <option value="Luchtime" <?php echo ($_SESSION['contacttime'] == 'Luchtime') ? 'selected="selected"' : ''; ?> >at Luchtime</option>
                  <option value="Afternoon" <?php echo ($_SESSION['contacttime'] == 'Afternoon') ? 'selected="selected"' : ''; ?> >in the Afternoon</option>
                  <option value="Evening" <?php echo ($_SESSION['contacttime'] == 'Evening') ? 'selected="selected"' : ''; ?> >in the Evening</option>
                </select>
              <div class="clearBoth"></div>
              </div>
              <div class="left">
                <label for="CheckboxGroup1_0">Inform me about News and Events*: </label>
                  <!--<input name="CheckboxGroup[]" type="checkbox" id="CheckboxGroup1_0" value="newsandevents" <?=$_SESSION['newsandeventsChecked'];?> />-->
                <input name="CheckboxGroup[]" type="checkbox" id="CheckboxGroup1_0" value="newsandevents" <?=$newsandevents;?> />
              </div>
              <div class="clearBoth marginB20"></div>
              <div class="left">
              <img src="_securimage/securimage_show.php" alt="CAPTCHA Image" class="left" id="captcha" />
              <div class="left marginL20">
                          <label for="captcha_code" class="block">Enter image text in  field below</label>
                <input type="text" name="captcha_code" size="10" maxlength="6"   placeholder="Enter image txt" class="<?=$captcha_error;?> ui-corner-all" />
                <a href="#" title="New Image" onclick="document.getElementById('captcha').src = '_securimage/securimage_show.php?' + Math.random(); return false">&nbsp;&nbsp;<img src="_securimage/images/refresh.gif" alt="New Image" width="22" height="20" border="0" class="absmiddle" /></a>&nbsp;
                <object data="_securimage/securimage_play.swf?audio=_securimage/securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000" type="application/x-shockwave-flash" width="19" height="19" class="absmiddle">
                  <param name="movie" value="_securimage/securimage_play.swf?audio=_securimage/securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000" />
                  
                </object>
              </div>
</div>
            </div>
            <div class="clearBoth"></div>
          </div>
        </div>
        <div class="clearBoth"></div>
        <div id="submitContainer"><input name="submit" class="buttons" type="submit" value="Submit Contact Form" id="submit" />
        </div>
        <div class="clearBoth"></div>
        <div class="Txt12px  paddingL5pc  "><strong>*</strong>We respect your privacy and treat your infomation with great respect. 360 NMT will never sell or share your information with others and will never send you spam emails!</div>
      </form>
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
      Map
</h2>
<div class="GoogleMap"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=embed&amp;hl=en&amp;geocode=%3BCWXXMuAK1HroFX2KhQIdqkfB-ykTi_4AIYLjiTHuWUiFO5mGcg&amp;q=35+Highland+Circle+Needham+MA+02494&amp;sll=42.306173,-71.219286&amp;sspn=0.0471,0.068321&amp;gl=us&amp;ie=UTF8&amp;hq=&amp;hnear=35+Highland+Cir,+Needham+Heights,+Norfolk,+Massachusetts+02494&amp;t=m&amp;daddr=35+Highland+Cir,+Needham+Heights,+MA+02494&amp;z=14&amp;iwloc=ddw1&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;hl=en&amp;geocode=%3BCWXXMuAK1HroFX2KhQIdqkfB-ykTi_4AIYLjiTHuWUiFO5mGcg&amp;q=35+Highland+Circle+Needham+MA+02494&amp;sll=42.306173,-71.219286&amp;sspn=0.0471,0.068321&amp;gl=us&amp;ie=UTF8&amp;hq=&amp;hnear=35+Highland+Cir,+Needham+Heights,+Norfolk,+Massachusetts+02494&amp;t=m&amp;daddr=35+Highland+Cir,+Needham+Heights,+MA+02494&amp;z=14&amp;iwloc=ddw1" target="_blank" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>
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
