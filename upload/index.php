<?php

require_once '../location/url.php';
require_once '../db/connectdb.php';

if (isset($_GET['upload'])) {
	
	$name = $_POST['name'];
	$errores = [];

	$file_name = $_FILES['practica']['name'];
	$file_size = $_FILES['practica']['size'];
	$file_tmp = $_FILES['practica']['tmp_name'];
	$file_type = $_FILES['practica']['type'];
	$file_error = $_FILES['practica']['error'];

	if ($name == "") {
		
		$errores['name']['vacio'] = true;
	}

	if ($_FILES['practica']['error'] > 0) {
		
		$errores['practica']['nulo'] = true;
	}

	if (empty($errores)) {
		
		try {
		
		$sql = "INSERT INTO archivos(titulo) VALUES (:titulo)";

		$ps = $pdo->prepare($sql);
		$ps->bindValue(':titulo', $name);
		$ps->execute();

	} catch (PDOException $e) {

		die("No se ha podido guardar la información en la base de datos:". $e->getMessage());	
	}

	move_uploaded_file($file_tmp, $base_images_path. $file_name);
	header('Location: ' . $home);
	
	}
	
}


require_once 'upload.html.php';
