<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Cookie</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		// Nhan cookie tu file cookie.php tao ra
		$myCookie = $_COOKIE['LPHP1811'] ?? '';
	?>
	<h1>Cookie : <?= $myCookie ?></h1>
	<br>
	<a href="cookie.php" title="">Back</a>
	<br>
	<a href="index3.php" title="">Go to index3.php</a>
</body>
</html>