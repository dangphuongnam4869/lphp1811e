<?php
	// Nhung file dataWeather tu model vao day
	require '../model/dataWeather.php';
	// Lay dc cac du lieu tu phia client gui len
	$nameCity = $_POST['nameCity'] ?? '';
	// Xu ly lay thong tin thoi tiet tu model theo ten thanh pho ma nguoi dung gui len
	$data = [];
	$dataWeather = getDataWeather();
	foreach ($dataWeather as $key => $value) {
		# code...
		if($nameCity == $value['name']){
			$data = $value;
		}
	}

	// echo "<pre>";
	require '../view/index.php';
	// print_r($data);
?>