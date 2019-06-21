<?php
// vì file chi chua code php nen khong can dong the php 
// Dinh nghia ham trong php
// 1 - Ham su dung cho tat ca cac phien ban khac nhau (thong dung hay su dung nhat)
function myFunction($a,$b){
	// Noi dung - logic xu ly se nam o day
	// echo "Hello world";
	return $a+$b;
}

// Su dung ham trong php
$result = myFunction(4,5);
echo $result;

// Dinh nghia ham php tim boi so chung cua 5,6 tu 1 - 100
function timBoiSoChung($a, $b, $n=1, $m=100){
	$kq = 0;
	for ($i=$n; $i < $m; $i++){ 
		if($i%5==0&&$i%6==0){
			// " . " toan tu noi chuoi trong php
			// " .= " bang chinh no noi voi 1 gia tri khac
			$kq .= empty($kq) ? ', '.$i  : ', ' . $i;
		}
	}
	return $kq;
}
$result2 = timBoiSoChung(5,6);
echo "<br/>";
echo $result2;

// Tinh giai thua cua 1 so bat ky
function timGiaiThua($a, $b=1){
	$kq = 1;
	for($i= $b; $i <= $a; $i++){
		$kq *= $i;
	}
	return $kq;
}
$result3 = timGiaiThua(5);
echo "<br>";
echo $result3;

// Bien toan cuc - bien cuc bo trong ham php

$number = 100; // Bien toan cuc

function checkNumber($a){
	// Muon su dung bien toan cuc vao trong ham can lam nhu sau
	// Su dung keyword "global" dung truoc bien can dung - lap tuc duoc phep su dung bien toan cuc ngoai ham
	global $number;
	// $GLOBALS['myNumber'] = $number;
	if($a > $number){
		return false;
	}
	return true;
}
echo "<br>";
$t = checkNumber(10);
// echo gettype($t);
var_dump($t);

function testStatic(){
	static $count = 0; // bien cuc bo
	// khong the nao dac dong vao no khi ra hoi ham
	$count++;
	echo $count;
}
// luu lai gia tri cua bien cuc bo trong ham sau moi lan goi ham (chung ta co the tac dong nguoc lai bien do o ngoai ham tuy vao logic xu ly o trong ham)
echo "<br>";
testStatic();
echo "<br>";
testStatic();
echo "<br>";
testStatic();

echo "<br>";
// Tham chieu va tham tri trong ham php
// 1 - Them tri : bien truyen vao ham di ra khoi ham khong bi thay doi gia tri

$thamTri = 10;
function testThamTri($thamTri){
	$thamTri -= 5;
	return $thamTri;
}

echo testThamTri($thamTri);
echo "<br>";
echo $thamTri;

echo "<br>";
// 2 - THam chieu:  bien truyen vao ham - di ra khoi ham bi thay doi gia tri theo logic xu ly o trong ham
function testThamChieu(&$thamTri){
	$thamTri -= 5;
	return $thamTri;
}
echo testThamChieu($thamTri);
echo "<br>";
echo $thamTri;