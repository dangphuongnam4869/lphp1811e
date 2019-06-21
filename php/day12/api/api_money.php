<?php

function getInfoMoneyApiByCurrency($currency){
	// Su dung CURL php de lay du lieu tu api
	// api : https://tygia.com/tygia-all.json?nganhang=VIETCOM&currency=EUR
	// Khoi tao CURL
	$curl = curl_init();
	// Cau hinh cac thon tin cho CURL
	curl_setopt($curl, CURLOPT_URL, "https://tygia.com/tygia-all.json?&currency={$currency}");
	// Quy uoc thoi gian (doi) lay du lieu api
	curl_setopt($curl, CURLOPT_TIMEOUT, 100);
	// Se khong hien thi ket qua ngay ma doi exec cua curl thuc thi
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	// Thu thi lay du lieu ve
	$result = curl_exec($curl);
	$data = [];
	if($result){
		$data = json_decode($result, true);
	}
	return $data;
}	
?>
