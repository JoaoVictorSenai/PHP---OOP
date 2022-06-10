<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		require_once "class/Users.php";

		if (isset($_POST['insertUser'])) {
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];

			$insertUser = new Users();
			$insert = $insertUser->insertUser($name, $email, $pass);
		}
	?>
	<form method="POST">
		<div>
			<label>Digite o seu nome:</label>
			<input type="text" name="name">
		</div>
		<div>
			<label>Digite o seu e-mail:</label>
			<input type="text" name="email">
		</div>
		<div>
			<label>Digite sua senha:</label>
			<input type="text" name="pass">
		</div>
		<div>
			<input type="submit" name="insertUser" value="CADASTRAR">
		</div>
	</form>
</body>
</html>