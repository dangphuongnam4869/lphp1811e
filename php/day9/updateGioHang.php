<?php 
	session_start();
	$idHang = $_POST['id'] ?? '';
	$idHang = is_numeric($idHang) ? $idHang : 0;

	$qty = $_POST['qty'] ?? '';
	$qty = is_numeric($qty) ? $qty : 1;

	if(isset($_SESSION['giohang'])){
		if(isset($_SESSION['giohang'][$idHang])){
			$_SESSION['giohang'][$idHang]['qty'] = $qty;
			$money = number_format($qty * $_SESSION['giohang'][$idHang]['price']);
			// json_code: bien mang ve chuoi json - object trong js
			echo json_encode(['qty' => $qty,'money' => $money]);
		}else{
			echo "FAIL";
		}
	}else{
		echo "FAIL";
	}
 ?>