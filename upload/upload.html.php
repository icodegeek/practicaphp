<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Página de Prácticas - Subir archivo</title>
</head>
<body>
	<h1>Subir Práctica</h1>
	
	<form action="?upload" method="post">
		<div>
		<label for="name">Nombre:</label>
		<input type="text" name="name">
		</div>
		<div>
		<label for="practica">Archivo:</label>
		<input type="file" name="practica">
		</div>
		<div>
		<input type="submit" value="Subir Archivo">
		</div>
	</form>
</body>
</html>