<?php 
	// Bieu thuc chinh quy trong php
	$string = 'Giỏi';
	$btcq = '/^[A-Z]{1}[a-z\W]{1,10}$/';
	// Kiem tra xem trong chuoi $string ki tu dung dau co dung ko
	if(preg_match($btcq, $string)){
		echo "OK";
	}else{
		echo "WRONG";
	}
	echo "<br>";
	$number = 12; // ab
	// btcq kiem tra 1 so la so va co 2 chu so
	$btcq2 = '/^[1-9]{1}[0-9]{1}$/';
	if(preg_match($btcq2,$number)){
		echo "Yes";
	}else{
		echo "No";
	}
	echo "<br>";
	$btcq3 = '/^[1-9][0-9][0-9][0-9][0,5]$/';
	$number2 = 12340;
	if(preg_match($btcq3, $number2)){
		echo "Yes";
	}else{
		echo "No";
	}
	echo "<br>";
	$btcq4 = '/^[1,3,5,7,9][^1,3,5,7,9][0,5][0-9]$/';
	$number3 = 1305;
	if(preg_match($btcq4, $number3)){
		echo "Yes";
	}else{
		echo "No";
	}
	echo "<br>";
	$btcq5 = '/^[1-9][1,3,5,7,9]$|^[1-9][0-9][0,2,4,6,8]$/';
	$number4 = 124;
	if(preg_match($btcq5, $number4)){
		echo "Yes";
	}else{
		echo "No";
	}
	echo "<br>";
	// Viet bieu thuc chinh quy kiem tra sdt co 10 chu so cua nha mang vietteil
	$btcq6 = '/^[0](3[2-9-3]|9[6-8]|8[0])[0-9]{7}$/';
	$number5 = '033';
	if(preg_match($btcq6, $number5)){
		echo "Yes";
	}else{
		echo "No";
	}
	echo "<br>";
	$btcq7 = '/^(0[1-9]|1[0-9]|2[0-9]|3[0-9])\/(0[0-9]|1[0-2]|)\/([1-9][0-9]{3})$/';
	$myDate = '29/02/2017';
	if(preg_match($btcq7, $myDate, $match)){
		// echo "<pre>";
		// print_r($match); // Luon luon la 1 mang
		if($match){
			$month = (int)$match[2];
			$day = (int)$match[1];
			$year = (int)$match[3];
			if($month === 2){
				// Danh rieng cho thang 2 vi co nam nhuan
				if($day >= 1 && $day <= 28){
					echo "Ngay thang hop le";
				}elseif ($day === 29) {
					if($year%400 == 0){
						echo "Ngay thang hop le";
					}elseif($year%4 == 0 && $year%100 != 0){
						echo "Ngay thang hop le";
					}else{
						echo "Ngay thang khong hop le";
					}
				}else{
					echo "Ngay thang khong hop le";
				}
			}
			// Tu xu ly 11 thang con lai voi switch case
		}
	}else{
		echo "Fail";
	}
	// Kiem tra 1 so co 5 chu so tro len va co it nhat 1 so chan
	// ?=: theo sau no phai la 1 luat - qui tac tuong ung nao do
	// ?=ab
	echo "<br>";
	$btcq8 = '/^(?=.*[2,4,6,8])\d{5,}$/';
	$number6 = '32125';
	if(preg_match($btcq8, $number6, $match)){
		echo "<pre>";
		print_r($match);
	}else{
		echo "NO";
	}
	$btcq9 = '/^(?=.*[A-Z]).{5,}$/';
	// $btcq9 = '/^(?=.*[A-Z])\w{5,}$/' la \w = [a-zA-Z0-9] va \W != [a-zA-Z0-9]
	$chuoi1 = 'asZq..//';
	if(preg_match($btcq9, $chuoi1, $match)){
		echo "<pre>";
		echo "YES";
		echo "<br>";
		print_r($match);
	}else{
		echo "NO";
	}
	// \d = [0-9]
	// \D != [0-9]
	// \w = [a-zA-Z0-9]
	// \W != [a-zA-Z0-9]
	// \s = '     '	(space)
	// \S != '    ' (space)
	$btcq10 = '/^29-[P|T|C|G|H][1]\s\d{2}\.\d{3}$/';
	$bienXe = '29-T1 50.129';
	if(preg_match($btcq10, $bienXe, $match)){
		echo "YES";
		echo "<pre>";
		print_r($match);
	}else{
		echo "NO";
	}
	echo "<br>";
	// mat khau 8 ki tru tro len 1 so 1 chu hoa 1 chu thuong 1 ki tu dac biet
	$btcq11 = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W).{8,}$/';
	$pass = 'abcdefg@0A';
	if(preg_match($btcq11, $pass, $match)){
		echo "YES";
		echo "<pre>";
		print_r($match);
	}else{
		echo "NO";
	}
 ?>