<?php
$money =[
	[
		'id' => 1,
		'he so' => 3,
		'money' => 30000
	],
	[
		'id' => 2,
		'he so' => 4,
		'money' => 30000
	],
	[
		'id' => 3,
		'he so' => 5,
		'money' => 30000
	]
];

$ranks = [
	[
		'macapbac' => 1,
		'id_money' => 3,
		'tencapbac' => 'giam doc'
	],
	[
		'macapbac' => 2,
		'id_money' => 2,
		'tencapbac' => 'truong phong'
	],
	[
		'macapbac' => 3,
		'id_money' => 1,
		'tencapbac' => 'nhan vien'
	]
];

$staffs = [
	[
		'manv' => 1,
		'id_rank' => 2,
		'name' => 'Dang A',
		'gender' => 1
	],
	[
		'manv' => 2,
		'id_rank' => 1,
		'name' => 'Tran C',
		'gender' => 1
	],
	[
		'manv' => 3,
		'id_rank' => 3,
		'name' => 'Nguyen E',
		'gender' => 0
	]
];
// Lay du lieu: ten cap bac va he so luong va muc luong co ban tu mang rank va mang money do vao mang staff
foreach ($staffs as $key1 => $value1) {
	# code...
	foreach ($ranks as $key2 => $value2) {
		# code...
		if($value1['id_rank'] == $value2['macapbac'])
		{
			$staffs[$key1]['id_money'] = $value2['id_money'];
			$staffs[$key1]['cap bac'] = $value2['tencapbac'];
		}
	}
}
foreach ($staffs as $key1 => $value1) {
	# code...
	foreach ($money as $key3 => $value3) {
				# code...
				if($value1['id_money'] == $value3['id'])
				{
					$staffs[$key1]['he so'] = $value3['he so'];
					$staffs[$key1]['luong co ban'] = $value3['money'];
				}
			}
}
// echo "<pre>";
// print_r($staffs);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Array php</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<caption>Bang Tien Luong</caption>
		<thead>
			<tr>
				<th>MaNV</th>
				<th>Cap bac</th>
				<th>Name</th>
				<th>Gender</th>
				<th>He so</th>
				<th>Luong co ban</th>
				<th>Luong</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($staffs as $key => $value): ?>
			<tr>
				<td><?= $value['manv'];?></td>
				<td><?= $value['cap bac'];?></td>
				<td><?= $value['name'];?></td>
				<td><?= $value['gender'] == 1 ? 'Nam' : 'Nu';?></td>
				<td><?= $value['he so'];?></td>
				<td><?= $value['luong co ban'];?></td>
				<td><?= number_format($value['he so']*$value['luong co ban']);?></td>
			</tr>
		</tbody>
			<?php endforeach; ?>
	</table>
</body>
</html>