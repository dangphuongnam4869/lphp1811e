<?php
session_start();
require 'database.php';
$id = $_GET['id'] ?? '';
$id = is_numeric($id) ? $id : 0;
	// Xu ly lay thong tin chi tiet cua san pham dua theo id
$info = [];
foreach ($data as $key => $value) {
		# code...
	if($value['id'] == $id){
		$info = $value;
	}
}
	// echo "<pre>";
	// print_r($info);
	// Add san pham vao gio hang
	// Kiem tra gio hang da ton tai chua?
if($info){
	if(isset($_SESSION['giohang'])){
		// Truong hop san pham da ton tai trong gio hang
		if($_SESSION['giohang'][$id]['id'] == $id){
			// da ton tai
			$_SESSION['giohang'][$id]['qty'] += 1;
		}else{
			// chua ton tai
			$_SESSION['giohang'][$id]['id'] = $id;
			$_SESSION['giohang'][$id]['name'] = $info['name'];
			$_SESSION['giohang'][$id]['image'] = $info['image'];
			$_SESSION['giohang'][$id]['price'] = $info['price'];
			$_SESSION['giohang'][$id]['qty'] = 1;
		}
	}else{
	// Tao ra gio hang
		$_SESSION['giohang'][$id]['id'] = $id;
		$_SESSION['giohang'][$id]['name'] = $info['name'];
		$_SESSION['giohang'][$id]['image'] = $info['image'];
		$_SESSION['giohang'][$id]['price'] = $info['price'];
		$_SESSION['giohang'][$id]['qty'] = 1;
	}
}
header("Location:hienGioHang.php");
// echo "<pre>";
// print_r($_SESSION['giohang']);
?>