<?php
// Hoc ve chuoi(string) trong php
$myString = 'Chung ta dang hoc php';
$myString2 = 'Hom nay la chu nhat';

// Toan tu noi chuoi trong php la dau " . "
echo $myString2 ." ". $myString; 
// Khi trong chuoi khong chua bien thi nen dung nhay don
// Khi trong chuoi co chua bien thi dung nhay kep

echo "<br>";
$number = 10;
$string3 = '$number la so chan'; // $number: khong phai la bien
echo $string3;
echo "<br>";
$string4 = "$number la so chan"; // $number la bien
echo $string4;

echo "<br>";
// long nhay don vao nhay don
echo 'Chung ta dang hoc \'PHP\' buoi 2';

echo "<br>";
echo "Chung ta dang hoc \"PHP\" buoi 2";
echo "<br>";
echo 'Chung ta dang hoc "PHP" buoi 2';
echo"<br>";
echo "Chung ta dang hoc 'PHP' buoi 2";

// ---------------------------------- Cac ham xu ly chuoi trong PHP (cac ham co san)-----------------
echo "<br>";
$fruit = 'tao, man, oi, le, dua';
$arrFruit = explode(',', $fruit);  // Chuyen chuoi thanh mang
print_r($arrFruit);

echo "<br>";
$strFruit = implode(', ', $arrFruit); // Chuyen mang ve chuoi
echo $strFruit;

echo "<br>";
$string5 = 'Sap duoc tan hoc roi';
echo strlen($string5); // Dem so ki tu nam trong chuoi

echo "<br>";
$string6 = 'Tao đói quá mày ơi';
echo strlen($string6);
echo "<br>";
echo mb_strlen($string6);

echo "<br>";
echo str_word_count($string6); // Dem so tu trong chuoi

echo "<br>";
echo str_repeat($string6, 3);

echo "<br>";
echo str_replace('php', 'JS', $myString);

echo "<br>";
$password = '123456789';
echo md5($password); // ma hoa chuoi - khong quan tam dau vao cua chuoi dai hay ngan ma luon luon ma hoa ve 32 ki tu - ham ma hoa 1 chieu (chua co thuat toan giai ma)
echo "<br>";
$password2 = '123';
echo md5($password2);

/****************** Tiep cac ham lam viec voi chuoi ******************/

$myScript = "<script>alert('Hello')</script>";
// echo $myScript;
echo "<br>";
$myTitle = '<h1><i>PHP1811E</i></h1>';
echo $myTitle;

$myScript = htmlentities($myScript);
echo $myScript;
echo "<br>";

$myTitle = htmlentities($myTitle);
echo $myTitle;
echo "<br>";

echo html_entity_decode($myTitle);
echo "<br>";

$mySapo = "<h1><u>This is tag HTML</u></h1>";
echo strip_tags($mySapo,'<h1>');

$myString3 = 'PHP la ngon ngu server side';
$subString = substr($myString3,7,8);
echo $subString;
echo "<br>";

$myString4 = 'Khong giong php, js chuyen xu ly phia client side';
$subString2 = strstr($myString4, 'js');
echo $subString2;

echo "<br>";
$pos = strpos($myString4, 'php');
if($pos !== false){
	echo $pos;
}else {
	echo "Khong ton tai trong chuoi";
}

echo "<br>";
$myString5 = "$ Luong cua dev moi ra truong tam 300$";
echo trim($myString5, '$'); //xoa ki tu dau hoac cuoi chuoi truyen vao 
// truong hop khong truyen gi thi no se hieu la xoa khoang trang

echo "<br>";
echo rtrim($myString5, '$');
echo "<br>";
echo ltrim($myString5, '$');