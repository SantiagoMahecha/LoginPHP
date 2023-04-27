<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="login-page">
		<div class="form">
			<h2>Login</h2>
			<form action="actividad_2.php" method="post" class="login-form">
				<label for="username">Usuario:</label>
				<input type="text" id="username" name="username" required pattern="^[a-zA-Z]+$">
				<label for="password">Contraseña:</label>
				<input type="password" id="password" name="password" required pattern="^[a-zA-Z0-9]+$">
				<button>Iniciar sesión</button>
			</form>
		</div>
	</div>
</body>
</html>





<?php
	$valid_username = "Bryan";
	$valid_password = "1013";

	$username = $_POST["username"];
	$password = $_POST["password"];

	if ($username == $valid_username && $password == $valid_password) {
		header("Location: bienvenido.php");
		exit();
	} else {
		echo "Usuario o contraseña incorrectos.";
	}
?>
