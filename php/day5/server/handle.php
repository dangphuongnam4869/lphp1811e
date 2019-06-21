<?php
	// Xu ly viec dang ky thanh vien
	// Kiem tra xem nguoi dung bam nut dki chua
	if(isset($_POST['btnRegister'])){
		// Lay cac gia tri tu form gui len
		$user = $_POST['user'] ?? '';
		$user = trim(strip_tags($user));

		$pass = $_POST['pass'] ?? '';
		$pass = trim(strip_tags($pass));

		$email = $_POST['email'] ?? '';
		$email = trim(strip_tags($email));

		if(empty($user) || empty($pass) || empty($email)){
			// Dieu huong trang
			header('Location: ../register.php?state=fail');
		}else{
			// Luu thong tin cua nguoi dung vao database
			// mo file
			$fp = fopen('../database.txt', 'a+');
			if($fp){
				$data = $user.'/'.$pass.'/'.$email.'; ';
				if(fwrite($fp, $data))
				{
					header('Location: ../login.php');
				}else{
					header('Location: ../register.php?state=fail1');
				}
			}else{
				header('Location: ../register.php?state=fail2');
			}
		}
	}
?>