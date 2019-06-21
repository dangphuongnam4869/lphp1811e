<?php
if(isset($_POST['btnDangKy'])){
	$user = $_POST['user'] ?? '';
	$user = trim(strip_tags($user));
	$pass = $_POST['pass'] ?? '';
	$pass = trim(strip_tags($pass));

	if(empty($user) || empty($pass)){
		header('Location:dangky.php?state=dangkylai');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dang nhap</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Dang nhap</h1>
	<form action="thucthi2.php" method="POST">
		<label for="">User</label>
		<!-- <input type="text" name="user2" value="<?php echo $_POST['user'] ?>"> -->
		<input type="text" name="user2">
		<label for="">Password</label>
		<!-- <input type="password" name="pass2" value="<?php echo $_POST['pass'] ?>"> -->
		<input type="password" name="pass2">
		<br><br>
		<button type="submit" name="btnDangNhap">Dang nhap</button>
	</form>
</body>
</html>