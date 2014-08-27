<?php
//Date stuff
 if ($_useDates) {
//	try {
//		$startdate = new DateTime($_StartDate);
//	} catch (Exception $e) {
//		echo $e->getMessage();
//		exit(1);
//	}
//	try {
//		$enddate = new DateTime($_EndDate);
//	} catch (Exception $e) {
//		echo $e->getMessage();
//		exit(1);
//	}
//	$startdateformat = $startdate->format('Y-m-d');
//	$enddateformat = $enddate->format('Y-m-d');
 }
//End Date Stuff

//Define the service to be used
$service = MindbodyAPI\MindbodyClient::service($_MBService);
// add source credentials.
$credentials = $service::credentials( 
	$SourceName,
	$Key,
	array(
		$SiteIDs 
	)
);

// Create the reuest to MindBody
$request = $service::request($_MBRequest, $credentials);

// Add additional optional parameters
 if ($_useDates) {
	 $request->Request->StartDateTime = $startdateformat;
	 $request->Request->EndDateTime = $enddateformat;
 }
 
// Get the response
$response = $service->GetClasses($request);

// Process the response
if(!isset($response->Status) || $response->Status != "Success")
	die("Oh foo. It didn't work.");
	
$_ResultCount = trim($response->ResultCount);
if ($debug) {
	echo 'Result Count: ' . $_ResultCount;
	//	var_dump($response->ClassDescriptions->ClassDescription); 
}
?>