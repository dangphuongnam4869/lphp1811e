<?php
if(isset($_POST['btnDangNhap'])){
	$user2 = $_POST['user2'] ?? '';
	$user2 = trim(strip_tags($user2));
	$pass2 = $_POST['pass2'] ?? '';
	$pass2 = trim(strip_tags($pass2));
	// if($user2 ===  && $pass2 === ){
	// 	echo "Login";
	// }else{
	// 	echo "Failed";
	// }
}
?>