<?php 
	require 'database.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gio hang demo</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			border: 0;
		}
		.container{
			width: 900px;
			margin: 10px auto;
			padding: 5px;
		}
		h1{
			text-align: center;
		}
		.box{
			width: 25%;
			float: left;
			margin-left: 10px;
			border: 1px solid black;
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1>List</h1>
	<div class="container">
		<?php foreach ($data as $key => $value): ?>
		<div class="box">
			<img src="<?= $value['image']; ?>" alt="" width="100" height="200">
			<p><?= $value['name']; ?></p>
			<p><?= $value['price']; ?></p>
			<a href="themgiohang.php?id=<?= $value['id'] ?>">Thêm vào giỏ</a>
		</div>
	<?php endforeach; ?>
	</div>
</body>
</html>