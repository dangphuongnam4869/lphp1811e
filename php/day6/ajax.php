<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Ajax</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form>
		<label for="nb1">Number 1</label>
		<input type="text" name="nb1" id="nb1">
		<label for="nb2">Number 2</label>
		<input type="text" name="nb2" id="nb2">
		<label for="result"> = </label>
		<span id="result"></span>
		<br><br>
		<button type="button" id="btnSum">Sum</button>
	</form>
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous">
</script>
<script type="text/javascript">
	$(function(){
		$('#btnSum').click(function(){
			let number1 = $('#nb1').val().trim();
			let number2 = $('#nb2').val().trim();
				// alert(number1 + number2);
				if($.isNumeric(number1) && $.isNumeric(number2)){
					$.ajax({
						url: 'server/total.php',
						type: 'POST',
						data:{num1: number1, num2: number2},
						beforeSend:function(){
							$('#btnSum').text('Loading ...');
						},
						success:function(result){
							// Noi nhan ket qua ben server backend tra ve
							$('#btnSum').text('Sum');
							result = $.trim(result);
							if(result === 'err'){
								alert('Co loi');
							}else{
								$('#result').text(result);
							}
						}
					});
				}else{
					alert('Vui long nhap so');
				}
			});
	});
</script>
</body>
</html>