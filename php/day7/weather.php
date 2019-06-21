<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Weather</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			border: 0;
		}
		.wapper{
			width: 900px;
			margin: 20px auto;
			border: 1px solid #ccc;
			padding: 15px;
		}
		.header{
			width: 100%;
			margin:  10px 0px;
		}
		input[name="city"]{
			width: 60%;
			height: 30px;
			border: 1px solid #ccc;
		}
		button[type="button"]{
			padding: 5px 10px;
			border: 1px solid #ccc;
		}
		.loading{
			display: none;
			margin-left: 20%;
		}
	</style>
</head>
<body>
	<div class="wapper">
		<div class="header">
			<input type="text" name="city" id="city">
			<button type="button" id="search">Search</button>
		</div>
		<div class="loading">
			<img src="../picture/tenor.gif" alt="">
		</div>
		<div class="content">
			
		</div>
	</div>
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(function(){
			$('#search').click(function(){
				let city = $('#city').val().trim();
				// alert(city);
				if(city.length > 0){
					// xu ly ajax
					$.ajax({
						url: 'server/appweather.php',
						type: 'POST',
						data: {nameCity: city},
						beforeSend: function(){
							$('.loading').show();
						},
						success: function(data){
							$('.loading').hide();
							$('.content').html(data);
						}
					})
				}
			});
		});
	</script>
</body>
</html>