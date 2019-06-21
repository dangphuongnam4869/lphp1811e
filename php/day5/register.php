<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="server/handle.php" method="POST" accept-charset="utf-8">
		<label for="">User</label>
		<input type="text" name="user">
		<label for="">Password</label>
		<input type="password" name="pass">
		<label for="">Email</label>
		<input type="email" name="email">
		<br><br>
		<button type="submit" name="btnRegister">Register</button>
	</form>
</body>
</html>