<?php 
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
// Su dung cacc thu vien khi duoc require vi cac thu vien duoc viet theo OOP-PHP va co namespace nen can dung use

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
		header("Location:../sendMail2.php?state=Error");
	}else{
			// Thu thi send mail
		$send = mySendMail($email, $subject, $content);
		if($send){
			header("Location:../sendMail2.php?state=Success");
		}else{
			header("Location:../sendMail2.php?state=Fail");
		}

	}
}
function mySendMail($email, $subject, $content){
	// Khoi tao doi tuong phpmailer
	$mail = new PHPMailer(true);
	try {
		 //Server settings
  //  $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.googlemail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'trieuntgvt3h@gmail.com';                     // SMTP username
    $mail->Password   = 'trieunt123';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
     //Recipients
    $mail->setFrom('trieuntgvt3h@gmail.com', 'Demo Mailer PHP');
    $mail->addAddress($email);     // Add a recipient
    $mail->addCC('dangphuongnam4869@gmail.com');

    // Attachments
    $mail->addAttachment('../server/image/fedf9824a6ff2de7b56a6edcc47ff9ab.jpg');         // Add attachments
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $content;
    if($mail->send()){
    	return true;
    }else{
    	return false;
    }
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>