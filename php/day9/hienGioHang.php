<?php 
session_start();
$giohang = $_SESSION['giohang'] ?? [];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Show</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Information Cart</h1>
	<a href="giohang.php" title="">Buy</a>
	<a href="deleteGioHang.php" title="">Delete</a>
	<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Image</th>
				<th>QTY</th>
				<th>Price</th>
				<th>Money</th>
				<th colspan="2">Action</th>		
			</tr>
		</thead>
		<tbody>
			<?php foreach ($giohang as $key => $value): ?>
				<tr>
					<td><?= $value['id']; ?></td>
					<td><?= $value['id']; ?></td>
					<td><img src="<?= $value['image']; ?>" alt="" width="100" height="200"></td>
					<td>
						<input id="qty_<?= $value['id']?>" type="number" name="" value="<?= $value['qty'];?>">
					</td>
					<td><?= number_format($value['price']); ?></td>
					<td id="m_<?= $value['id'];?>">
						<?= number_format($value['qty']*$value['price']); ?>
					</td>
					<td>
						<a href="removeGioHang.php?id=<?= $value['id']; ?>" title="">Remove</a>
					</td>
					<td>
						<button id="<?= $value['id']; ?>" class="update">Update</button>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(function(){
			$('.update').click(function(){
				let idHang = $.trim($(this).attr('id'));
				let qty = $.trim($('#qty_'+idHang).val());
				let self = $(this);
				if($.isNumeric(idHang)){
					$.ajax({
						url:"updateGioHang.php",
						type:"POST",
						data: {id: idHang, qty: qty},
						beforesend: function(){
							self.text('Loading ...');
						},
						success: function(result){
							self.text('UPDATE');
							result = $.trim(result);
							if(result === 'FAIL'){
								alert('Khong the UPDATE');
							}else{
								// tai vi ben phia server tra ve 1 chuoi json php chinh la object trong js thi can parseJSON
								let obj = $.parseJSON(result);
								$('#qty_'+idHang).val(obj.qty);
								$('#m_'+idHang).text(obj.money);
							}
						}
					});
				}
			});
		});
	</script>

</body>
</html>