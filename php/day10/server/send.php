<?php 
if(isset($_POST['btnSend'])){
		// lay cac thong tin tu form gui len
	$subject = $_POST['subject'] ?? '';
	$subject = strip_tags($subject);

	$email = $_POST['email'] ?? '';
	$email = strip_tags($email);

	$content = $_POST['content'] ?? '';

	$checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
		// validate form
	if(empty($subject) || empty($content) || !$checkEmail){
		header("Location:../sendMail.php?state=Error");
	}else{
			// Thu thi send mail
		$send = mySendMail($email, $subject, $content);
		if($send){
			header("Location:../sendMail.php?state=Success");
		}else{
			header("Location:../sendMail.php?state=Fail");
		}

	}
}
function mySendMail($email, $subject, $content){
	// $header = "From:abc@somedomain.com \r\n"; // Nguoi nhan
	$header = "Cc:dangphuongnam4869@gmail.com \r\n"; // Cho them nguoi nhan
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n"; 
	$send = mail($email, $subject, $content, $header);
	if($send){
		return true;
	}else{
		return false;
	}
}
?>