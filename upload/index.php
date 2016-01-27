<?php

require_once '../db/connectdb.php';

if (isset($_GET['upload'])) {
	
	$name = $_POST['name'];
	$practica = $_POST['practica'];

	$file_name = $_FILES['imagen']['name'];
	$file_size = $_FILES['imagen']['size'];
	$file_tmp = $_FILES['imagen']['tmp_name'];
	$file_type = $_FILES['imagen']['type'];
	$file_error = $_FILES['imagen']['error'];

	try {
		
		$sql = "INSERT INTO archivos(titulo) VALUES (:titulo)";

		$ps = $pdo->prepare($sql);
		$ps->bindValue(':titulo', $titulo);
		$ps->execute();

	} catch (PDOException $e) {

		die("No se ha podido guardar la información en la base de datos:". $e->getMessage());	
	}

	move_uploaded_file($file_tmp, $base_images_path. $file_name);
}



require_once 'upload.html.php';
