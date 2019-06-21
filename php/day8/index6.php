<?php 
	session_start();
	// Xoa toan bo session trong ung dung
	// session_destroy();
	// Xoa 1 session
	if(isset($_SESSION['age'])){
		unset($_SESSION['age']);
	}

	header("Location:index5.php");
 ?>