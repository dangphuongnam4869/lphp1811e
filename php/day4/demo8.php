<?php
declare(strict_types=1);
// Cac ham lam viec voi mang trong php
// Cac ham co san
$infoST = [
	'age' => 20,
	'name' => 'NVA',
	'address' => 'Ha Noi'
];

$infoST = array_change_key_case($infoST, CASE_UPPER);
// 1: CASE_UPPER : viet hoa
// 2: CASE_LOWER : viet thuong

echo "<pre>";
// print_r($infoST);

//////////////////////////////////////
$arrNumber = [1,2,3,4,1,1,1,4,4,2,3,3,5,6,5,7];
$arrNew = array_count_values($arrNumber);
// print_r($arrNew);

/////////////////////////////
// array_push($arrNumber, 100); // Them phan tu o vi tri cuoi cung
// print_r($arrNumber);
// array_pop($arrNumber); // Xoa phan tu o vi tri cuoi cung
// print_r($arrNumber);
array_unshift($arrNumber, 99); // Them phan tu o vi tri dau tien
print_r($arrNumber);
array_shift($arrNumber); // Xoa phan tu o vi tri dau tien
print_r($arrNumber);

////////////////////////////////
$arrChunk = array_chunk($arrNumber, 3); // Tach mang ra theo size minh quy dinh
print_r($arrChunk);

/////////////////////////////////
// Kiem tra xem co phai la mang ko
if(is_array($arrChunk)){
	echo "yes";
}else {
	echo "no";
}
echo "<br>";

$fruit = [
	'tao',
	'oi',
	'man',
	'le'
];

// Kiem tra xem 1 phan tu co nam trong mang hay ko ?
if(in_array('oi', $fruit))
{
	echo "yes";
}else{
	echo "no";
}
echo "<br>";

// Kiem tra 1 gia tri co phai la key nam trong mang hay ko 
$worker = ['name' => 'NVA', 'age' => 40];
if(array_key_exists('age', $worker)){
	echo "Y";
}else{
	echo "N";
}
echo "<br>";

////////////////////
$arrNumber2 = [1,3,5,6,8,2,4,9,1,1,1,1,3,3,3];
// Loai bo cac gia tri trung nhau trong mang
$arrNumber3 = array_unique($arrNumber2);
print_r($arrNumber3);

////////////////////
// Chuyen mang ko tuan tu thanh mang tuan tu
// Tinh tong cac phan tu am trong mang
$sum = array_sum($arrNumber2);
echo $sum;
echo "<br>";

///////////////////////////////////
// Cat mang
$myNumber = [1,2,3,4,5,6,7,8,9];
$childArr = array_slice($myNumber, 4, 3, true);
// true : giu nguyen key tu  mang cha truyen xuong
print_r($childArr);
echo "<br>";

/* Sap xep mang trong PHP */
// 1, Sap xep dua vao gia tri(value)
$randomArr = [100,32,51,67,55,42,1,3,2];
// arsort($randomArr); // Sap xep giam dan
asort($randomArr); // Sap xep tang dan
print_r($randomArr);
echo "<br>";

// 2, Sap xep dua vao key nam trong mamng

$randomArr2 = [
	'z' => 100,
	'g' => 2,
	'a' => 7,
	'o' => 24,
	'r' => 10
];
// krsort($randomArr2); // Sap xep giam dan
ksort($randomArr2); // Sap xep tang dan
print_r($randomArr2);
echo "<br>";

// Khong su dung ham co san
// Tu xay dung 1 ham de sap xep mang
$randomArr3 = [123,42,555,63,7,5,1,9];
function sapxepMangPhp1($arr){
	$count = count($arr); // Dem so luong phan tu nam trong mang count();
	for($i = 0; $i <= $count; $i++ ){
		for($j = $i + 1; $j < $count; $j++){
			if($arr[$i] < $arr[$j]){
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $temp;
			}
		}
	}
	return $arr;
}
print_r(sapxepMangPhp1($randomArr3));
// function sapxepMangPhp2($arr){
// 	foreach ($arr as $key1 => $value1) {
// 		# code...
// 		foreach ($arr as $key2 => $value2) {
// 			# code...
// 			if($arr[$key1] > $arr[$key2]){
// 				$temp = $arr[$key1];
// 				$arr[$key1] = $arr[$key2];
// 				$arr[$key2] = $temp; 
// 			}
// 		}
// 	}
// 	return $arr;
// }
// print_r(sapxepMangPhp2($randomArr3));

// Tim kiem 1 phan tu nam trong mang ma khong can dung ham co san
// Tim kiem tuyen tinh
$randomArr4 = [123,42,5534,123,657,4];
function searchElementInArray(int $a, array $arr): bool{
	$count = count($arr);
	for($i = 0; $i < $count; $i++ ){
		if($arr[$i] == $a){
			return true;
		}
	}
	return false;
}

var_dump(searchElementInArray(123,$randomArr4));