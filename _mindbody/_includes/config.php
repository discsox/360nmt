<?php
        //Personal access IDs for marcello
        $SandBox = false;
        $SourceName = 'MarcelManzardo';
        $Key = '2rBGkyyJ4oddOale/+pG3riO8wg=';
        if ($SandBox) {
         $SiteIDs = '-99';
         $UserName = 'Siteowner';
         $UserPWD = 'apitest1234';
        } else { //the real Thing
         $SiteIDs = '5589';
         $UserName = 'marcello@discsox.com';
         $UserPWD = 'm1475963,M';
        }
			
		function toArray($obj)
		{
		   if (is_array($obj)) { return $obj; } 
		   else { return array($obj); }
		}

		function MB_Request ($_MBService, $_MBRequest, $_useDates = null, $startdateformat = null, $startdatetag = null, $enddateformat = null, $enddatetag = null, $otherservice = null, $otherservicevalue = null, $otherservice2 = null, $otherservicevalue2 = null) {
			global $debug, $debugXML, $SourceName, $Key,  $SiteIDs, $UserName, $UserPWD, $_ResultCount;
			
				if ($debug) {
					echo "_MBService: " . $_MBService . "<br>";
					echo "_MBRequest: " . $_MBRequest . "<br>";
					echo "_useDates: " . $_useDates . "<br>";
					echo "startdateformat: " . $startdateformat . "<br>";
					echo "enddateformat: " . $enddateformat . "<br>";
					echo "otherservice: " . $otherservice . "<br>";
					echo "otherservicevalue: " . $otherservicevalue . "<br>";
					echo "otherservice2: " . $otherservice . "<br>";
					echo "otherservicevalue2: " . $otherservicevalue . "<br>";
				}
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
				if ($debug) {
				   echo "useDates is active: <br>";
				}
			   $request->Request->$startdatetag = $startdateformat;
			   $request->Request->$enddatetag = $enddateformat;
			 }
			 if(isset($otherservice)) {
				if ($debug) {
				   echo "otherservice = " . $otherservice ." otherservicevalue = " . $otherservicevalue ;
				}
				$request->Request->$otherservice = $otherservicevalue;
			 }
			 if(isset($otherservice2)) {
				if ($debug) {
				   echo "otherservice2 = " . $otherservice2 ." otherservicevalue2 = " . $otherservicevalue2 ;
				}
				$request->Request->$otherservice2 = $otherservicevalue2;
			 }
			 
			// Get the response
			
			if ($debugXML) {
				echo "var dump: <br>" ;
				var_dump(($request));
				echo "<br> End var dump: <br>" ;
			}
			$response = $service->$_MBRequest($request);
			
			// Process the response
			if(!isset($response->Status) || $response->Status != "Success")
				die("Oh foo. It didn't work.");
				
			$_ResultCount = trim($response->ResultCount);
			if ($debug) {
				echo 'Result Count: ' . $_ResultCount;
			}
			if ($debugXML) {
				echo "var dump response: <br>" ;
				var_dump($response); 
				echo "<br> End var dump response: <br>" ;
			}
			return $response;
		}
		
?>

