<?php
// Tiep tuc cac kien thuc ve mang
// Tao 1 mang da chieu luu tru thong tin phong(room)
$room = [
	[
		'maphong' => 113,
		'tenphong' => 'Phong to chuc',
		'ntl' => '2018-06-04',
		'truongphong' => 'NVA'
	],
	[
		'maphong' => 114,
		'tenphong' => 'Phong IT',
		'ntl' => '2017-03-07',
		'truongphong' => 'NVB'
	],
	[
		'maphong' => 115,
		'tenphong' => 'Phong ke toan',
		'ntl' => '2017-01-15',
		'truongphong' => 'NVC'
	]
];

$ranks = [
	[
		'macapbac' => 1,
		'tencapbac' => 'giam doc'
	],
	[
		'macapbac' => 2,
		'tencapbac' => 'truong phong'
	],
	[
		'macapbac' => 3,
		'tencapbac' => 'nhan vien'
	]
];

$staffs = [
	[
		'manv' => 1,
		'id_room' => 113,
		'id_rank' => 2,
		'name' => 'Dang A',
		'money' => 10000,
		'gender' => 1
	],
	[
		'manv' => 2,
		'id_room' => 114,
		'id_rank' => 1,
		'name' => 'Tran C',
		'money' => 50000,
		'gender' => 1
	],
	[
		'manv' => 3,
		'id_room' => 115,
		'id_rank' => 3,
		'name' => 'Nguyen E',
		'money' => 600,
		'gender' => 0
	]
];

// Gan du lieu 'ten phong' sang mang du lieu 'staffs'
foreach ($staffs as $key1 => $value1) {
	# code...
	foreach ($room as $key2 => $value2) {
		# code...
		if($value1['id_room'] == $value2['maphong'])
		{
			// Do du lieu vao mang staff
			$staffs[$key1]['name_room'] = $value2['tenphong'];
		}
	}
}
// echo "<pre>";
// print_r($staffs);

// Gan du lieu "ten cap bac" sang mang du lieu "nhan vien"
foreach ($staffs as $key1 => $value1) {
	# code...
	foreach ($ranks as $key2 => $value2) {
		# code...
		if($value1['id_rank'] == $value2['macapbac'])
		{
			$staffs[$key1]['name_rank'] = $value2['tencapbac'];
		}
	}
}
// print_r($staffs);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		.chan{
			background-color: lightpink;
		}
		.le{
			background-color: mediumaquamarine;
		}
	</style>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<caption>Bảng Thông Tin</caption>
		<thead>
			<tr>
				<th>MNV</th>
				<th>Ten</th>
				<th>Gioi tinh</th>
				<th>Phong</th>
				<th>Chuc vu</th>
				<th>Luong</th>
			</tr>
		</thead>
		<tbody>
			<?php $totalMoney = 0; $i = 1 ?>
			<?php foreach ($staffs as $key => $value): ?>
				<?php $totalMoney += $value['money']; ?>
				<tr class="<?= $key % 2 == 0 ? 'chan' : 'le'; ?>">
					<td>
						<?= $value['manv']; ?> 
						<!-- Cach viet 1 -->
					</td>
					<td>
						<?php echo $value['name']; ?>
						<!-- Cach viet 2  -->
					</td>
					<td>
						<?php echo $value['gender'] == 1 ? 'Nam' : 'Nu' ?>
					</td>
					<td>
						<?= $value['name_room']; ?>
					</td>
					<td>
						<?= $value['name_rank']; ?>
					</td>
					<td>
						<?= $value['money']; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5">Tong tien: </td>
				<td><?php echo number_format($totalMoney) ?></td>
			</tr>
		</tfoot>
	</table>
</body>
</html>