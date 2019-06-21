<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Birthday</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		*{
			/* border: 0; */
			padding: 0;
			margin: 0;
		}
		.container{
			text-align: center;
			width: 500px;
			margin: 20px auto;
		}
		form{
			border: 1px solid #ccc;
			padding: 30px 10px;
		}
		h3{
			color: red;
		}
	</style>
</head>
<body>
	<?php 
	$state = $_GET['state'] ?? '';
	$mess = $_GET['check'] ?? '';
	?>
	<div class="container">
		<h1>Kiem tra ngay sinh nhat</h1>
		<form action="server/checkBirth.php" method="POST" accept-charset="utf-8">
			<label for="birthday">Moi nhap ngay sinh nhat: </label>
			<?php if($state === 'Fail'): ?> 
				<h3>Vui long nhap ngay thang</h3>
			<?php endif; ?>
			<?php if($mess === 'Pass'): ?>
				<h3>Da qua sinh nhat</h3>
			<?php endif; ?>
			<?php if($mess === 'HPBD'): ?>
				<h3>Chuc mung sinh nhat</h3>
			<?php endif; ?>
			<?php if(is_numeric($mess)): ?>
				<h3>Con <?= $mess ?> ngay nua den sinh nhat</h3>
			<?php endif; ?>
			<input type="date" name="birthday" id="birthday">
			<button type="submit" name="btnCheck">Check</button>
		</form>
	</div>
</body>
</html>