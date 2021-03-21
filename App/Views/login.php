<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title> Login page</title>
	</head>
	<body>

		<form class="" action="/orm/login" method="post">
			<input name="name" /><br>
			<input type="password" name="pass"><br>
			<button type="submit"> Entrar </button>
		</form>
		<?php echo $args['logged']; ?>
	</body>
</html>
