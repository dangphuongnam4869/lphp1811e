<?php 
function checkLogin(){
		// se giup kiem tra nguoi dung dang nhap chua?
		$user = $_SESSION['username'] ?? '';
		$cookie = $_COOKIE['account'] ?? '';
		if($user && $cookie){
			return true;
		}
			return false;
	}
function redirectToLogin(){
	if(!checkLogin()){
		header("Location:login.php");
		die();
	}
}
function redirectToHome(){
	if(checkLogin()){
		header("Location:home.php");
	}
}
?>
