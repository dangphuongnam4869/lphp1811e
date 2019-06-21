<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Send Mail 2 PHP</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			border: 0;
		}
		.container{
			width: 500px;
			margin: 20px auto;
		}
		form{
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		h1{
			text-align: center;
		}
		.form-group{
			width: 100%;
			display: block;
			margin: 10px 0px;
		}
		.form-control{
			width: 100%;
			height: 35px;
			border: 2px solid #ccc;
			border-radius: 5px;
		}
		.form-control-area{
			width: 100%;
			border: 2px solid #ccc;
			border-radius: 5px;
		}
		button{
			padding: 15px;
			border: 1px solid #ccc;	
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Send mail 2 PHP</h1>
		<form action="server/send2.php" method="POST">
			<div class="form-group">
				<label for="subject">Subject</label>
				<input type="text" name="subject" id="subject" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="content">Content</label>
				<textarea name="content" id="content" class="form-control-area" rows="5"></textarea>
			</div>
			<button type="submit" name="btnSend">Send</button>
		</form>
	</div>
</body>
</html>