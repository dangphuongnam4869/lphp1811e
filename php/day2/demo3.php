<?php
declare(strict_types=1); // Giup thong bao khi code theo cu phap cua php 7 tro len (dat tren dau file)
// Dinh nghia ham theo phien ban php 7 tro len
// Cac cu phap nay thi tu phien ban 5 tro xuong khong su dung duoc
function kiemTraChanLe(int $a = 20){
	if($a%2==0)
	{
		return true;
	}
	return false;
}
$check = kiemTraChanLe(10);
var_dump($check);
echo "<br>";

// Rang buoc kieu du lieu ma return cua ham ve
function checkNumber(int $a) : bool{
	if($a > 100){
		return true;
	}
	return false;
} 
$test = checkNumber(99);
var_dump($test);

// Viet ham theo chuan php 7 kiem tra so nguyen to
echo "<br>";
function kiemTraSoNguyenTo(int $a) : bool{
	if($a==2){
		return true;
	}
	for($i = 2; $i < $a/2; $i++){
		if($a%$i==0){
			return false;
		} else{
			return true;
		}
	}
}
$result4 = kiemTraSoNguyenTo(15);
var_dump($result4);

// Viet ham theo chuan php 7 giai ptb2
echo "<br>";
function ptBac2(float $a,float $b,float $c) : string{
	$delta = $b*$b - 4*$a*$c;
	if($delta<0){
		return "Phuong trinh vo nghiem";
	}
	else if($delta == 0){
		$x = (-$b) / (2*$a);
		return "$x";
	}
	else if($delta > 0 ){
		$x1 = (-$b - sqrt($delta))/(2*$a);
		$x2 = (-$b + sqrt($delta))/(2*$a);
		return "$x1 va $x2 ";
	}
}
$result5 = ptBac2(4,6,2);
var_dump($result5);