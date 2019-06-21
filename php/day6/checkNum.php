<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo method GET POST</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		$mess = $_GET['state'] ?? '';
		$number = $_GET['num'] ?? '';
	?>
	<form action="server/checkNumber.php" method="POST" accept-charset="utf-8">
		<label for="number">Nhap so: </label>
		<input type="text" name="number" id="number" value="<?php $number; ?>">
		<br><br>
		<button type="submit" name="checking">Check</button>
	</form>
	<?php if($mess === 'Fail1'): ?>
		<h3>Vui long nhap du lieu va phai la so</h3>
	<?php endif; ?>
	<?php if($mess === 'Fail'): ?>
		<h3>Khong phai so nguyen to</h3>
	<?php endif; ?>
	<?php if($mess === 'TRUE'): ?>
		<h3>La so nguyen to</h3>
	<?php endif; ?>
</body>
</html>