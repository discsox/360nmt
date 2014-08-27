<?php
	session_start();
	require 'vendor/autoload.php';
	require ('_includes/config.php');
// Configuration	
	$debugXML= false;
	$debug = false;
	$_ResultCount = 0;
	$_MBService = "ClassService";
	$_MBRequest = "GetClasses";
	$_useDates = true;	
	$startdatetag = "StartDateTime";
	$enddatetag = "EndDateTime";
	$resultTags = "Classes";
	$resultTag = "Class";
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 

<html>
	<head>
		<title>List of Classes</title>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	</head>
	<body>
    
	<?php 
	  //If the form has been submitted
	  if(isset($_POST['submit'])) {
		  $hasError = null;
			//if ((!isset($_POST['submit'])) || ($_SESSION['ResultCount'] == 0))  {
				
		  //Check to make sure that the StartDate field is not empty
		  //Check to make sure that the StartDate field is not empty
		  if(trim($_POST['_StartDate']) == '') {
			  $hasError = '_StartDate_error';
			  $_StartDate_error = 'ui-state-error';
			  $_SESSION['_StartDate']='';
		  } else {
			  $_StartDate = trim($_POST['_StartDate']);
			  //test date format
			  try {
				  $startdate = new DateTime($_StartDate);
			  } catch (Exception $e) {
				  $hasError = '_StartDateSyntax_error';
				  $_StartDateSyntax_error = 'ui-state-error'; 
				  $_SESSION['_StartDate']='';
				  //echo $e->getMessage();
				  //echo "<br> $_StartDate: " . $_StartDate;
				  //echo "<br> $hasError: " . $hasError;
			  }
			  if(!isset($hasError)) { //If no errors are found 			  
				  //echo "$_StartDate: " . $_StartDate;
				  $_StartDate_error = null;
				  $_StartDateSyntax_error = null;
				  $_SESSION['_StartDate']=$_StartDate;
				  $startdateformat = $startdate->format('Y-m-d');
			  }
		  }
		  //Check to make sure that the EndDate field is not empty
		  if(trim($_POST['_EndDate']) == '') {
			  $hasError = '_EndDate_error';
			  $_EndDate_error = 'ui-state-error';
			  $_SESSION['_EndDate']='';
		  } else {
			  $_EndDate = trim($_POST['_EndDate']);
			  //test date format
			  try {
				$enddate = new DateTime($_EndDate);
			  } catch (Exception $e) {;	
				  $hasError = '_EndDateSyntax_error';			  
				  $_EndDateSyntax_error = 'ui-state-error';
				  $_SESSION['_EndDate']='';
			  }
			  if(!isset($hasError)) { //If no errors are found 
				  $_EndDate_error = null;
				  $_EndDateSyntax_error = null;
				  $_SESSION['_EndDate']=$_EndDate;
				  $enddateformat = $enddate->format('Y-m-d');
			  }
		  }
		  if(!isset($hasError)) {
			  //check Date range
			  //strtotime($_StartDate) - strtotime($_EndDate);
			  if  ((strtotime($_StartDate) - strtotime($_EndDate)) > 0)  {				  
				  $hasError = '_Range_error';
				  $_Range_error = 'ui-state-error';
				  //echo "got here";
			  }
				  
			  //If there is no error, Make Request to MB 
			  $response = MB_Request ($_MBService, $_MBRequest, $_useDates, $startdateformat, $startdatetag, $enddateformat, $enddatetag);

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
    
    <?php //When there are no errors
	   if (!(isset($_ResultCount_error))) :?>
            <h3>Please enter Start and End Date to find Seminars! </h3>
    <?php else:?>  
    <h3> Sorry there are no Classes in your date range! </h3>
              <p>Please try your search again. </p>
    <?php endif; ?>		
    
            <form method="post" action="ShowEvents.php">
              <label for="StartDate">Start Date:</label>
<input type="text" size="20" name="_StartDate" maxlength="20" value="<?=$_SESSION['_StartDate'];?>" id="_StartDate" placeholder="Start Date" class="<?=$_StartDate_error;?> ui-corner-all Datepicker"/>
                
                <br />
                <label for="EndDate">End Date:</label>
<input type="text" size="20" name="_EndDate" maxlength="20" value="<?=$_SESSION['_EndDate'];?>" id="_EndDate" placeholder="End Date" class="<?=$_StartDate_error;?> ui-corner-all Datepicker"/>
                
                <input type="submit" value="Search" name="submit"/>
    </form>
    
	<?php //form submitted and no errors
     if ((isset($_POST['submit'])) &&($_ResultCount > 0)) :?>
        <h1>Available Seminars</h1>   
        <?php
		if ($debug) {
			echo "var dump: <br>" ;
			var_dump($response->Classes->Class);
			echo "<br> End var dump: <br>" ;
		}
		?>
        <ul>
			<?php
            //Fix response not being an array for a single returned object 
				if(is_array($response->Classes->Class)){ 
				   $toArray =($response->Classes->Class);
				} else {
				   $toArray = array($response->Classes->Class);
				} 
            ?>
			<?php foreach($toArray as $class): 
			//foreach($response->Classes->Class as $class): ?>
                <li>
                    
                       <h3> <?php echo $class->ClassDescription->Name; ?> </h3>(<?php echo $class->Location->Name; ?>)
                   
                    <p>
                        Class Starts on
                        <?php echo date("F j, Y, g:i a", strtotime($class->StartDateTime)); ?> 
                        and Ends on <?php echo date("F j, Y, g:i a", strtotime($class->EndDateTime)) . "<br>" ;  ?>
                    </p>
                    <p>
                        <?php echo $class->ClassDescription->Description; ?>
                    </p>
                </li>
            <?php endforeach; ?>    
        </ul>
	<?php endif; ?>	
         
    <script type="text/javascript">
	$(function(){
		 $.datepicker.setDefaults( 
		   $.extend($.datepicker.regional[""])
		 );
		 $("#_StartDate").datepicker({ minDate: 0 });
		 $("#_EndDate").datepicker({ minDate: 0 });
	}); 
	</script> 
</body>
</html>
