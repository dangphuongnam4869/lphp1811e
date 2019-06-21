<?php
function getDataWeather(){
	$data = [
		[
			'name' => 'Ha Noi',
			'nd' => '37 C',
			'da' => '60%',
			'sg' => '10m/s',
			'mt' => 'Troi nhieu may, co mua bay'
		],
		[
			'name' => 'Hai Phong',
			'nd' => '34 C',
			'da' => '50%',
			'sg' => '15m/s',
			'mt' => 'Troi mua to'
		],
		[
			'name' => 'Mai Chau',
			'nd' => '30 C',
			'da' => '80%',
			'sg' => '20m/s',
			'mt' => 'Troi mua giong, gio giat manh'
		]
	];
	return $data;
}