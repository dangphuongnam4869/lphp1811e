<?php
	// De phong truong hop trinh duyet khong doc hieu cac phong chu khac khi ma khong co cac ma html ho tro
	header('Content-Type: text/html; charset = utf-8');
	echo "Hôm nay có đá bóng";
	// Dieu huong trang
	// header('Location:../day7/weather.php');
	$url = "http://facebook.com";
	echo "<br>";
	// Kiem tra xem 1 bien co phai dung dinh dang url hay ko?
	if(filter_var($url, FILTER_VALIDATE_URL)){
		echo "YES";
	}else{
		echo "NO";
	}
	$email = "nam@gmail.com";
	echo "<br>";
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "YES";
	}else{
		echo "NO";
	}
	// Kiem tra xem co phai boolean
	$check = true;
	echo "<br>";
	if(filter_var($check, FILTER_VALIDATE_BOOLEAN)){
		echo "YES";
	}else{
		echo "NO";
	}

	// Loc - xoa du lieu khong hop le
	$errEmail = "côngty@gmail.com";
	$newEmail = filter_var($errEmail, FILTER_SANITIZE_EMAIL);
	echo "<br>";
	echo $newEmail;
	echo "<br>";

	$errFacebook = "http://facebook*(#$*.com";
	$newFacebook = filter_var($errFacebook, FILTER_SANITIZE_URL);
	echo $newFacebook;
	echo "<br>";
	$numberString = "abc123";
	$number = filter_var($numberString, FILTER_SANITIZE_NUMBER_INT);
	echo $number;
?>