<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Upload</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="server/uploadFile.php" method="POST" enctype="multipart/form-data">
		<label for="file"></label>
		<input type="file" name="file" id="file">
		<button type="submit" name="btnUpload">Gửi</button>
	</form>
</body>
</html>