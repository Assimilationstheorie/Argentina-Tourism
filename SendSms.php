<?php
	session_start();
	//echo $_SESSION["url"];
	$num= $_POST["PhnNumbr"];
	//echo $num;
	// Authorisation details.
	$username = "salonikyal1996@gmail.com";
	$hash = "bc204aa8a304a3eec5504d2da57a4f314a286516";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "Virtual Turismo"; // This is who the message appears to be from.
	$numbers = $num; // A single number or a comma-seperated list of numbers
	$message = "Here is the link of the video to view in VR :-<br>".$_SESSION["url"]."<br>Enjoy the Live Experience!! :)<br>"."Regards,<br>"."Virtual Turismo Team.";
	echo $message;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	if(!empty($sender)&&!empty($numbers)&&!empty($message)){
		$message = urlencode($message);
		$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
		$ch = curl_init('http://api.textlocal.in/send/?');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		// This is the result from the API
		echo $result;
		curl_close($ch);
		$data = json_decode($result ,true);
		if(@$data['status'] === "success"){ 
			echo "Your message has been sent.";
		}
		else{
			echo "Your message could not be sent. Please try again.";
		}
		//echo $data;
		$_SESSION["data"]=$data;
	}
	session_destroy();
	//header('location:Explore/Virtual.php');
?>