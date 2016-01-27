<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Página de Prácticas</title>
</head>
<body>
	<h1>Página de prácticas</h1>
	<?php if (isset($_SESSION['user'])): ?> 
		<a href="<?=$home.'upload'?>">Subir práctica</a> - 
		<a href="<?=$home.'logout'?>">Salir</a>
	<?php else: ?>
		<a href="login">Login</a>
	<?php endif; ?>
	<?php if(!empty($archivos)): ?>
		<ul>
			<?php foreach ($archivos as $archivo): ?>
				<li>#<?=$archivo['id']?> - <?=$archivo['titulo']?></li>
			<?php endforeach; ?>
		</ul>
	<?php else: ?>
		<h2>No existe ningún archivo subido.</h2>
	<?php endif; ?>
</body>
</html>