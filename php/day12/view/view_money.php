<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table class="table">
		<p><?= $infoTitle['v11']; ?></p>
		<p><?= $infoTime['v11']; ?></p>
		<thead>
			<tr>
				<?php foreach($infoBank as $key => $title): ?>
				<th><?= $title; ?></th>
			<?php endforeach; ?>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($infoMoney as $key => $m): ?>
			<tr>
				<td><?= $m['v01'] ?></td>
				<td><?= $m['v11'] ?></td>
				<td><?= $m['v21'] ?></td>
				<td><?= $m['v31'] ?></td>
				<td><?= $m['v41'] ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>