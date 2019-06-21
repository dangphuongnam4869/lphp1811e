<?php 
	session_start();
	if(isset($_SESSION['giohang'])){
		unset($_SESSION['giohang']);
	}
	header("Location:giohang.php");
 ?>