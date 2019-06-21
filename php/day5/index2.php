<?php
// Nhan du lieu tu demo10.php truyen sang bang method GET
// $id = $_GET['id'] ?? 0;
// $name = $_GET['name'] ?? 'test';
// echo "id la: {$id} - name la: {$name}";

// kiem tra xem nguoi dung bam nut login chua 
// if(isset($_GET['btnLogin'])){
// 	$user = $_GET['user'] ?? '';
// 	$user = strip_tags($user);

// 	$pass = trim($_GET['pass'] ?? '');
// 	$pass = strip_tags($pass);

// 	if($user === 'admin' && $pass === '123'){
// 		echo "Login";
// 	}else{
// 		echo "Failed";
// 	}
// }
if(isset($_POST['btnLogin'])){
	$user = $_POST['user'] ?? '';
	$user = strip_tags($user);

	$pass = trim($_POST['pass'] ?? '');
	$pass = strip_tags($pass);

	if($user === 'admin' && $pass === '123'){
		echo "Login";
	}else{
		echo "Failed";
	}
}

?>

