<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo GET POST</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		$mess = $_GET['state'] ?? '';
		$year = $_GET['year'] ?? '';
	?>
	<form action="server/myCheckYear.php" method="POST" accept-charset="utf-8">
		<label for="year">Moi nhap nam: </label>
		<input type="text" name="year">
		<br><br>
		<button type="submit" name="checking">Check</button>
	</form>
	<?php if($mess === 'Error'): ?>
		<h3>Moi nhap du lieu va phai la so</h3>
	<?php endif; ?>
	<?php if($mess === 'False'): ?>
		<h3>Khong phai nam nhuan</h3>
	<?php endif; ?>
	<?php if($mess === 'True'): ?>
		<h3>La nam nhuan</h3>
	<?php endif; ?>
</body>
</html>