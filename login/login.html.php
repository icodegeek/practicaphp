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
		</div>
		<div>
		<label for="password">Contraseña:</label>
		<input type="password" name="password">
		</div>
			<?php if(isset($errores)): ?>
				<p style="color:red;">El usuario o contraseña no coinciden.</p>
			<?php endif; ?>
		<div>
		<input type="submit" value="Entrar">
		</div>
	</form>
</body>
</html>