<?php  

require_once '../location/url.php';

if( isset($_SESSION['user']) ){

        header("Location: ". $home);
        exit();
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Página de Prácticas - Login</title>
</head>
<body>
	<h1>Login</h1>
	<form action="?login" method="post">
		<div>
		<label for="user">Usuario:</label>
		<input type="text" name="user">
		<?php if(!empty($errores['nombre']['vacio'])): ?>
			<p style="color:red;">Debes introducir un nombre.</p>
		<?php endif; ?>
		</div>
		<div>
		<label for="password">Contraseña:</label>
		<input type="password" name="password">
		<?php if(!empty($errores['password']['vacio'])): ?>
			<p style="color: red;">Debes introducir una contraseña</p>
		<?php endif; ?>
		</div>
		<div>
			<?php if(empty($errores)): ?>
				<p style="color:red;">El usuario o contraseña no coinciden.</p>
			<?php endif; ?>
		</div>
		<div>
		<input type="submit" value="Entrar">
		</div>
	</form>
</body>
</html>