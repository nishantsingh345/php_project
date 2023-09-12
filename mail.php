<?php
date_default_timezone_set('Asia/Calcutta');
$msg='';
if (isset($_POST['submit'])) {
   $name=$_REQUEST['name'];
   $email=$_REQUEST['email'];
   $phone=$_REQUEST['phone'];
   $msgm=$_REQUEST['message'];

    $to = "travel@amaavi.com";
	$subject = "Amaavi Experiences contact form";
	$msg .="Full Name: ". $name . "\r\n";
	$msg .="Email: " . $email . "\r\n";
	$msg .="Phone No: " . $phone . "\r\n";
	$msg .="Message: ".$msgm . "\r\n";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers = "From: amaavi.com" . "\r\n" ."CC: tedtechno123@gmail.com";
    
   
	if(mail($to,$subject,$msg,$headers)){
		header("location:reachus.html?m=1");
	}
	else
	{
		header("location:reachus.html?m=0");
	}

  }

?>