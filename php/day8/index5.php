<?php 
	session_start();
	$user = $_SESSION['username'] ?? '';
	$age = $_SESSION['age'] ?? '';
	// echo "My name: {$user} - my age: {$age}";
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
 	<h2>My name: <?= $user; ?></h2>
 	<h2>My age: <?= $age; ?></h2>
 	<a href="index6.php" title="">Delete session</a>
 </body>
 </html>
