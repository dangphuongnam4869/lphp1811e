<?php 
session_start();
require 'checkLogin.php';
	redirectToHome();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo session</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Login</h1>
	<form action="server/handleLogin.php" method="POST" accept-charset="utf-8">
		<label for="user">User: </label>
		<input type="text" name="user" id="user">
		<br><br>
		<label for="pass">Password:</label>
		<input type="password" name="pass" id="pass">
		<br><br>
		<label for="remember">Remember</label>
		<input type="checkbox" name="remember">
		<br><br>
		<button type="submit" name="btnLogin">Login</button>
	</form>
</body>
</html>