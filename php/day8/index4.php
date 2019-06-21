<?php 
	// Khoi dong session
	session_start();
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
 	<?php 
 		// Tao ra session
 		$_SESSION['username'] = 'ABC';
 		$_SESSION['age'] = 20;
 	 ?>
 	 <!-- index5.php se nhan duoc session ma index4 tao ra -->
 	 <a href="index5.php" title="">Go to index5.php</a>
 </body>
 </html>