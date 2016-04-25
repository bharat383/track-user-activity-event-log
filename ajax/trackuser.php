<?php

class TrackUser{
	function SaveScreenshot(){

		$event_log_array = array(
				'click'=>'User has clicked on the Web Page',
				'form-submit'=>'User has submitted Form Submit.',
				'form-clear'=>'User has reset the form data.',
				'link-click'=>'User has clicked the link.',
				'right-click'=>'User has clicked Right Button of the Mouse.',
				'copy'=>'User has copied web page content.',
			);
			
		$filteredData=substr($_POST['image_code'], strpos($_POST['image_code'], ",")+1);

		//Decode the string
		$unencodedData=base64_decode($filteredData);

		//Save the image
		if(!file_exists("../screenshot/")) {
			mkdir("../screenshot");
		}
		$file_path="../screenshot/";

		$filename = date("Y-m-d-H-i-s").".png";

		file_put_contents($file_path."/".$filename, $unencodedData);

		//SAVE EVENT LOG
		$file_content = @file_get_contents("../screenshot/event-log.log");
		$file_content.="\n ".$event_log_array[$_POST['event_name']].". Image : ".$filename.". Time : ".date("Y-m-d-H-i-s").". IP Address : ".$_SERVER['REMOTE_ADDR'];

		file_put_contents("../screenshot/event-log.log", $file_content);
	}

}

$TrackUser  = new TrackUser();
if(isset($_REQUEST['image_code']) && $_REQUEST['image_code']!="")
{
	$TrackUser->SaveScreenshot();
}
?>
