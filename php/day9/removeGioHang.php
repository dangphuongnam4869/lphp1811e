<?php 
	session_start();
	$idHang = $_GET['id'] ?? '';
	$idHang = is_numeric($idHang) ? $idHang : 0;
	if(isset($_SESSION['giohang'][$idHang])){
		unset($_SESSION['giohang'][$idHang]);
	}
	header("Location:hienGioHang.php");
 ?>