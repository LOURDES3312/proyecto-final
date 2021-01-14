<?php 
	session_start();
	if (isset($_SESSION['nombre'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body bgcolor="#78C1A7"><center>
	<h1>Inicia Sesion</h1>
<div class="fondo">

	
	<hr>
	<br><br><br>
		<form method="POST" action="loginProceso.php">
			<label>Usuario: </label>
			<input type="text" name="txtUsu">
			<br><br><br>
			<label>Contraseña: </label>
			<input type="password" name="txtPass">
			<br><br><br>
			<input type="submit" value="Iniciar sesión">
		</form>
</div>
	</center>
</body>
</html>