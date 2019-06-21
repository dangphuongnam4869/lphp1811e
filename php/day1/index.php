<?php
// Chi co the mo php
// Khong can the dong php
// Khi trong file khong chua bat ky ngon ngu nao khac ngoai php

echo "Lop PHP1811E";
// localhost/lphp1811e/php/index.php
// localhost/lphp1811e/php
// 127.0.0.1/lphp1811e/php
// echo : keyword hien thi "chuoi" du lieu ra ngoai trinh duyet

//------------------- Bien trong PHP -------------------------
// Luon luon bat dau bang ki tu $
// Theo ngay sau ki tu $ khong duoc phep so
// Theo ngay sau ki tu $ khong duoc phep la khoang trang
// Bien khong hop le: $1asas, $ a
// Bien hop le:
echo "<br>";
$myName = 'Dang Phuong Nam';
$a123;
$_myAge = 21;  // gan gia tri cho bien

echo $myName;  // in gia tri cua bien
echo "<br>";
echo $_myAge;
echo "<br>";
$b = "Hello";  // bien don binh thuong
$a = "b";
echo $$a; // tham chieu toi gia tri cua 1 bien khac

// Bien trong php se phan biet chu hoa va chu thuong
$money;
$Money;
// 2 bien tren khac nhau hoan toan
$myMoney;
// Khai bao hang so trong php
define('MY_ADDRESS', 'Ha Noi');
const MY_AGE =20;
// Khac nhau: trong class OOP thi chi dc dung const khong dung define
// Su dung hang so
echo "<br>";
echo MY_ADDRESS;
echo "<br>";
echo MY_AGE;

echo "<br>";
//------------------------------ Kieu du lieu trong PHP -----------------------------
// Kieu int
$a = 10;
echo gettype($a); // in ra kieu du lieu cua bien
echo "<br>";

// Kieu boolean
$b = true;
echo gettype($b); 

// Kieu chuoi
echo "<br>";
$c = "123";
echo gettype($c);

// Kieu so thuc
echo "<br>";
$d = 3.14;
echo gettype($d);

// Kieu null
$e = null;
echo "<br>";
echo gettype($e);

echo "<br>";
$num1 = 10;
$num2 = '20'; //number string
$num3 = $num1 + $num2;
echo $num3;

//-------------------------- Cac ham lam viec voi bien trong php ----------------------------

echo "<br>";
$test = 10;
settype($test, 'string'); // Chuyen doi kieu du lieu cho bien
echo gettype($test);

echo "<br>";
$number = 100.98;
// echo intval($number); // in ra phan nguyen
// echo floatval($number); // in so thuc
echo strval($number); // in ra chuoi

echo "<br>";
// $empty = ''; //bien rong
// $empty = null; //bien rong
// $empty = false; //bien rong
// $empty = 0; // bien rong
// Kiem tra bien rong hay ko - chi quan tam den gia tri cua bien ko quan tam kieu du lieu cua bien
$empty = 100; // ko phai bien rong
if(empty($empty)){
	echo "YES";
} else{
	echo "NO";
}

echo "<br>";
// Kiem tra 1 bien co ton tai hay ko?
// $lphp1811e = '';
$lphp1811e = null;
if(isset($lphp1811e)){
	echo "OK";
} else{
	// vi $lphp1811e chua dc khai bao
	// vi $lphp1811e gan bang null
	echo "Fail";
}

echo "<br>";
$numberString = '100'; //chuoi so
// if(is_int($numberString)){
// 	echo "Y";
// } else{
// 	echo "N";
// }
if(is_numeric($numberString)){
	echo "Y";
}else {
	echo "N";
}

echo "<br>";
$i = 10;
$j;
if($i == 10){
	$j = ($i++) - (++$i) + ($i--) - (--$i);
}
echo $j;

echo "<br>";
$i = 10;
$j = 9;
$i = (($i+$j)%2 !=0) ? (($i+$j)%2 == 0) ? ($j - $i) : ($i-$j) : ($i>$j) ? ($i - $j) : ($j-$i);
echo $i;
echo "<br>";

// Null Coalescing Operator 
$k = ($m) ?? 10;
// $k = (isset(m)) ? $m :10
echo $k;

//Spaceship Operator 
echo "<br>";
$q = 60;
$p = 100;
$t = $q <=> $p;
// Bien ben phia trai nho hon la -1
// Bien ben phia trai lon hon la 1
// Bang nhau la 0
echo $t;