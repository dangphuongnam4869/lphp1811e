<?php 
	session_start();
	require 'checkLogin.php';
	redirectToLogin();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<?php 
 	$user = $_SESSION['username'] ?? '';
 	?>
 	 <h1>Wellcome <?= $user; ?> !!!</h1>
 	 <a href="logout.php" title="">Logout</a>
 </body>
 </html>