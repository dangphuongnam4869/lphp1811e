<?php 
session_start();
if(isset($_POST['btnLogin'])){
	$user = $_POST['user'] ?? '';
	$user = trim(strip_tags($user));

	$pass = $_POST['pass'] ?? '';
	$pass = trim(strip_tags($pass));

	if(empty($user) || empty($pass)){
		header("Location:../login.php?state=err");
	}else{
		if($user === 'admin' && $pass === '123'){
			// Tao cookie
			$remember = $_POST['remember'] ?? '';
			if($remember === 'on'){
				// Xet cookie theo yeu cau cua nguoi dung
				setcookie('account',$user,time()+3600,'/','',0);
			}else{
				setcookie('account',$user,time()+5,'/','',0);
			}
			// Tao ra cac session luu thon tin cua nguoi dung
			$_SESSION['username'] = $user;
			// Cho di vao trang home
			header("Location:../home.php");
		}else{
			header("Location:../login.php?state=Fail");
		}
	}
}
?>