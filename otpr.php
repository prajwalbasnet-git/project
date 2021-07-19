<?php
    session_start();
	$otp=rand(111111,999999);
	$_SESSION['otp']=$otp;
	$html="Your OTP verification code is \n " .$otp. " \nPLEASE USE THIS CODE TO VERIFY YOUR EMAIL";

	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="project.noticepurc@gmail.com";
	$mail->Password="bpps05212241";
	$mail->SetFrom("project.noticepurc@gmail.com");
	$mail->addAddress($_SESSION['em']);
	$mail->IsHTML(true);
	$mail->Subject="EMAIL VERIFICATION";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		
	  header ("Location:verifyr.php");
	}else{
	 echo "Error occur";
	}
?>