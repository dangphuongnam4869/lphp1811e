<?php
define('PATH_UPLOAD', 'multiUpload/img/');
if(isset($_POST['btnUpload'])){
	if(isset($_FILES['file'])){
			// echo "<pre>";
			// print_r($_FILES);
		$arrErrorFile = $_FILES['file']['error'];
		$flagUpload = false;
		foreach ($arrErrorFile as $key => $value) {
				# code...
			if($value == 0 ){
					// Kiem tra cac file khong co loi moi upload
					// Lay name cua tung file
				$nameFile = $_FILES['file']['name'][$key];
					// echo "{$nameFile}";
					// echo "<br>";
				$tmpNameFile = $_FILES['file']['tmp_name'][$key];
				$typeFile = $_FILES['file']['type'][$key];
				$sizeFile = $_FILES['file']['size'][$key];
				if(validateSize($sizeFile)){
					if(validateType($typeFile)){ 
						if($tmpNameFile){
							if(move_uploaded_file($tmpNameFile, PATH_UPLOAD.$nameFile)){
								$flagUpload = true;
							}
						}
					}
				}
			}
		}
	}
	if($flagUpload){
		header("Location:../multiUpload.php?state=Success");
	}else{
		header("Location:../multiUpload.php?state=Failed");
	}
}
function validateType($type){
	$arrFile = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'];
	if(in_array($type, $arrFile)){
		return true;
	}else{
		return false;
	}
}
function validateSize($size){
	$fileSize = ($size/1024)/1024;
	if($fileSize < 5){
		return true;
	}else{
		return false;
	}
}
?>