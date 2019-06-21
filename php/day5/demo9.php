<?php
// Cac kiem thuc xu ly file
// 1, Mo file (open file)
$fp = fopen('inside/demo10.txt', 'r+');
// Mo file voi qui tac chi dc doc file
if($fp){
	// echo "Mo file thanh cong";
	// Doc du lieu o trong file
	$data = fread($fp, filesize('inside/demo10.txt'));
	// echo $data;
	// Ghi file
	// fwrite($fp, 'Hello World');
	// Dong file
	fclose($fp);
}else {
	echo "Khong the mo file";
}

/* Cac ham xu ly ve file khac */
// 1, Kiem tra file co ton tai hay ko?
if(file_exists('inside/demo10.txt')){
	echo "Yes";
}else {
	echo "No";
}
echo "<br>";

// 2, Kiem tra file co quyen ghi khong?
if(is_writable('inside/demo10.txt')){
	echo "Yes";
	// Se ghi de noi dung cu - khong giu lai
	file_put_contents('inside/demo10.txt', 'Halo');
}else {
	echo "No";
}
echo "<br>";
// 3, Doi ten file
// if(rename('inside/demo10.txt', 'inside/rename.txt')){
// 	echo "Doi ten dc";
// }else{
// 	echo "Ko doi ten dc";
// }

// 4, Copy file
// if(copy('inside/demo10.txt','inside/copy.txt'){
// 	echo "Copy dc";
// }else{
// 	echo "Ko copy dc";
// }

// 5, Xoa file
// if(unlink('copy.txt')){
// 	echo "Xoa file";
// }else{
// 	echo "Ko xoa dc";
// }

// 6, Kiem tra 1 duong dan folder co ton tai hay ko?
// if(is_dir('inside')){
// 	echo "Ton tai duong dan foler";
// }else {
// 	echo "Ko ton tai duong dan folder";
// }

// 7, Tao 1 folder moi
// if(mkdir('New Folder')){
// 	echo "Tao dc";
// }else{
// 	echo "Ko tao dc";	
// }
?>