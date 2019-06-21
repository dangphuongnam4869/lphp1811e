<?php 
	// Xu ly ngay thang php
	// Lay ra ngay thang hien tai
	// $date = date('y-m-d h:i:s');
	// echo $date;
	// date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date = date('y-m-d H:i:s'); // H:24h, h:12h, Y:day du nam, y:2 so cuoi, M:Ten thang, m:So thang, D:Ten ngay, d:So ngay.
	echo $date;
	echo "<br>";
	$yesterday = '2019-04-08';
	$today = '2019-04-09';
	// con chuyen doi ngay thang ve so duoi dang timestamp (giay)
	// Lay ra so giay tinh tu 1/1/1970 den ngay can kiem tra
	$timeYesterday = strtotime($yesterday);
	// Lay ra so giay tinh tu 1/1/1970 den thoi diem hien tai
	$time = time();
	$timeToday = strtotime($today);
	if($timeYesterday < $timeToday){
		echo "Dung";
	}else{
		echo "Sai";
	}
	echo "<br>";
	$d = mkTime(0,0,0,11,(20+12),2019);
	// Chuyen doi so giay ra dinh dang ngay thang
	// echo $d;
	echo date('Y-m-d',$d);
	echo "<br>";
	$tom = date('Y-m-d', strtotime("+1day")); // +# day,month,year
	echo $tom;
	echo "<br>";
 ?>