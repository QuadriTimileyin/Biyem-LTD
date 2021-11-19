<?php
if(isset($_POST) && !empty($_POST)){
	$name = (isset($_POST['name']))?$_POST['name']:'';
	$email = (isset($_POST['email']))?$_POST['email']:'';
	$phone = (isset($_POST['Phone']))?$_POST['Phone']:'';
	$message = (isset($_POST['Message']))?$_POST['Message']:'';
	
	$form_type = 'contact';
	$sendMessage = $mailSubject = '';
	
	if($form_type == 'contact'){
		$mailSubject = 'Contact Details';
		$sendMessage = "<p>Hello,</p><p>".$name." has sent a message having </p><p><b>Email id:</b> ".$email."</p><p><b>Phone:</b> ".$phone."</p><p><b>Message:</b> ".$message."</p>";
	}elseif($_POST['form_type'] == 'inquiry'){
		$mailSubject = 'Inquiry Details';
		$sendMessage = '';
	}
	
	if($sendMessage != ''){
		$fromEmail = 'timmyywest007@gmail.com';
		$toEmail = 'timmyywest007@gmail.com';
		
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: <$fromEmail>" . "\r\n";

		if(mail($toEmail , $mailSubject , $sendMessage , $headers )){
		    
			
			echo "<script type='text/javascript'>alert('Successful - Email Sent!'); window.location.href = 'contact.php';</script>";
			
		}else{
			echo "<script type='text/javascript'>alert('Failed - Email submission not received, Try again!'); window.location.href = 'contact.php';</script>";
		}
	}else{
		echo "<script type='text/javascript'>alert('Failed - Email submission not received, Try again!'); window.location.href = 'contact.php';</script>";
	}
}else{
	echo "<script type='text/javascript'>alert('Failed - Email submission not received, Try again!'); window.location.href = 'contact.php';</script>";
}
die();
?>