<?php
// HOC VE MANG TRONG PHP
// Mang don - tuan tu
$arr = array(1,2,3,4,5,6,'oi','le',10);
$arr2 = [1,2,3,4,5,6,'oi','le',10];

// Mang don(1 chieu) - khong tuan tu
$arr3 = array('mot' => 9, 'hai' => 2, 'name' => 'NVA', 'age' => 20);

echo "<pre>";
// var_dump($arr3);
// print_r($arr3);
// print_r($arr2);

// Mang da chieu
$arr4 = array(
	array(1,2,3),
	array(
		'Info' => array(1,2,3,4,5)
	),
	'name' => 'NVA',
	'age' => 21,
	'work'=> array(
		'name' => 'VCCORP',
		'address' => 'HN',
		'about' => array(
			'gender' => 'Male'
		)
	)
);
print_r($arr4);

// In - lay cac gia tri ham trong mang
// nameArray(key)
echo $arr[7];
echo "<br>";
echo $arr3['age'];
echo "<br>";
echo $arr4[1]['Info'][2];
echo "<br>";
echo $arr4['work']['about']['gender'];
echo "<br>";
// Duyet qua tat ca cac phan tu nam trong mang
$number = [1,2,3,4,5,6,7,8,9,10];
foreach ($number as $key => $value) {
	# code...
	echo "key: {$key} - val: {$value}";
	echo "<br>";
}
echo "<br>";
$infoST = [
	[
		'msv' => 113,
		'name' => 'NVA',
		'money' => 3000000
	],
	[
		'msv' => 114,
		'name' => 'NVB',
		'money' => 35000000
	],
	[
		'msv' => 115,
		'name' => 'NVC',
		'money' => 2000000
	]
];

foreach ($infoST as $key => $value) {
	# code...
	echo $key.': '.$value['money'];
	echo "<br>";	
}

$infoWorker = [
	'name' => 'NVA',
	'age' => 40,
	'family' => [
		'wife' => ['name' => 'NTN'],
		'child' => [
			[
				'name' => 'NVB', 
				'age' => 15
			],
			[
				'name' => 'NVC',
				'age' =>10
			]
		]
	]
];
$sum = 0;
foreach ($infoWorker as $key => $val) {
	if(isset($val['child'])){
		foreach ($val['child'] as $key2 => $val2) {
		// echo $val2['age'];
		// echo "<br>";
			$sum += $val2['age'];
		}
	}
}
echo $sum;
echo "<br>";
$football = []; // Mang rong
// Them cac gia tri vao mang
$football['club'] = 'MU';
$football['name_player'] = 'Lukaku';
$football['goalkeeper'] = 'De gea';

print_r($football);

$number2 = [1,2,3,4,5,6,7,8,9];
$result = [];
foreach ($number2 as $key => $value) {
	# code...
	if($value % 2 != 0){
		$result [] = $value;
	}
}
print_r($result);

$nam = [
	'name' => 'Nam',
	'age' => 20,
	'fav' => [
		'color' => 'black',
		'game' => [
			'dota' => [
				'hero' => 'ember',
				'post' => 'carry'
			],
			'lol' => [
				'hero' => 'reksai',
				'post' => 'jungle'
			]
		],
		'music' => 'EDM' 
	],
	'hate' => ['pink', 'stupid', 'annoying']
];

print_r($nam);
foreach ($nam as $key => $value) {
	if(isset($value['color']))
		echo $value['music'];
	echo "<br>";	
}
echo $nam['name'];
echo "<br>";
echo $nam['age'];
echo "<br>";
foreach ($nam as $key => $value1) {
	# code...
	if(isset($value1['game']))
	{
		foreach ($value1['game'] as $key => $value2) {
			# code...
			echo $value2['hero'];
			echo "<br>";
		}
	}
}

echo "<br>";
$game = [];
$game['dota'] = 'ember';
$game['lol'] = 'thresh';
print_r($game);

echo "<br>";
$study = ['JAVA', '.NET', 'C++', 'C#', 'C'];
$reStudy = [];
foreach ($study as $key => $value) {
	# code...
	$reStudy [] = $value;
}
print_r($reStudy);