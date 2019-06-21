<?php
	if(isset($_POST['btnLogin'])){
		// Lay dc user va pass
		$user = $_POST['userLog'] ?? ''; 
		// $user = isset($_POST['user']) ? $_POST['user'] : '';
		$user = trim(strip_tags($user));

		$pass = $_POST['passLog'] ?? '';
		$pass = trim(strip_tags($pass));

		if(empty($user) || empty($pass)){
			header('Location:../login.php?state=fail');
		}else{
			// doc du lieu tu file database.txt
			// mo file
			$fp = fopen('../database.txt', 'r');
			if($fp){
				$data = fread($fp, filesize('database.txt'));
				// xu ly login theo chuoi
				$input = $user.''.$pass;
				if(strpos($input, $user) !== false)
				{
					// echo "<script>
					// 	alert('Dang nhap thanh cong');
					// </script>";
					header('Location:../homepage.php');
				}else{
					header('Location:../.php?state=error2');
				}
			}else{
				// ko ket noi dc
				header('Location:../login.php?state=error');
			}
		}
	}
?>