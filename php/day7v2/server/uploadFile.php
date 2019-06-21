<?php
// Dinh nghia hang so: duong dan upload file
define('PATH_UPLOAD', 'upload/img/');

if(isset($_POST['btnUpload'])){
		// kiem tra xem nguoi dung co chon file upload hay khong
	if(isset($_FILES['file'])){
			// kiem tra xem $_FILES se chua cac thong tin cua file gui len
			// echo "<pre>";
			// print_r($_FILES);
		$nameFile = $_FILES['file']['name'];
		$tmpFile = $_FILES['file']['tmp_name'];
		$errorFile = $_FILES['file']['error'];
		$typeFile = $_FILES['file']['type'];
		$sizeFile = $_FILES['file']['size'];
		if(validateSizeOfFile($size)){
			if(validateTypeOfFile($typeFile)){
				if($errorFile == 0 && $tmpFile){
				// file khong co loi va ton tai file can upload o may nguoi dung
				// Tien hanh upload file
					if(move_uploaded_file($tmpFile, PATH_UPLOAD . $nameFile)){
						header("Location:../upload.php?state=Success");
					}else{
						header("Location:../upload.php?state=Failed");
					}
				}
			}else{
			// Quay ve lai form upload - voi trang thai that bai
				header("Location:../upload.php?state=KhacDinhDang");
			}
		}else{
			header("Location:../upload.php?state=FileQuaLon");
		}
	}
}
function validateTypeOfFile($type){
	// Khai bao 1 mang chua cac type file hop le
	$arrFile = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'];
	if(in_array($type, $arrFile)){
		return true;
	}else{
		return false;
	}
}
function validateSizeOfFile($size){
	$fileSize = ($size/1024)/1024;
	if($fileSize < 5){
		return true;
	}else{
		return false;
	}
}
?>