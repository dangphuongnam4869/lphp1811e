<?php
// Su dung method GET de truyen tai va nhan du lieu
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo method GET</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="index2.php?id=10&name=abc" title="send data">Send Data</a>
	<br><br>
	<form action="index2.php" method="POST" accept-charset="utf-8">
		<label for="">User</label>
		<input type="text" name="user">
		<label for="">Pass</label>
		<input type="password" name="pass">
		<br><br>
		<button type="submit" name="btnLogin">Login</button>
	</form>
</body>
</html>