<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo CURL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<h1 class="text-center">Xem ti gia ngoai te</h1>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<div class="col-lg-12 col-md-12">
					<label for="currency">Don vi ngoai te</label>
					<select name="currency" id="currency" class="form-control">
						<option value="USD">USD</option>
						<option value="EUR">EUR</option>
					</select>
				</div>
				<button class="btn btn-primary" id="btnSearch">Xem Thong Tin</button>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div id="result"></div>
			</div>
		</div>
	</div>
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(function(){
			$('#btnSearch').click(function(){
				let money = $('#currency').val().trim();
				if(money){
					$.ajax({
						url: "controller/money.php",
						type: "POST",
						data: {money: money},
						beforeSend: function(){
							$('#btnSearch').text('Loading...');
						},
						success: function(result){
							$('#btnSearch').text('Xem Thong Tin');
							$('#result').html(result);
						}
					});
				}else{
					alert('Vui long them don vi tien')
				}
			});
	});
	</script>
</body>
</html>