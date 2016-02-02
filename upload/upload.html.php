<?php 
	

	if (!isset($_SESSION['user_id'])) {
		
		header('Location: ' . $home);
		exit();
	}


 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Página de Prácticas - Subir archivo</title>
</head>
<body>
	<h1>Subir Práctica</h1>
	
	<form action="?upload" method="post" enctype="multipart/form-data">
		<div>
		<label for="name">Nombre:</label>
		<input type="text" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name'];?>">
		<?php if (isset($errores['name']['vacio'])): ?>
			<p style="color: red;">Debes introducir el nombre del archivo.</p>
		<?php endif; ?>
		</div>
		<div>
		<label for="practica">Archivo:</label>
		<input type="file" name="practica">
		<?php if(isset($errores['practica']['nulo'])): ?>
			<p style="color:red;">Debes subir un archivo.</p>
		<?php endif; ?>
		</div>
		<div>
		<input type="submit" value="Subir Archivo">
		</div>
	</form>
</body>
</html>