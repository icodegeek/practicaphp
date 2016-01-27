<?php 

require_once '../db/connectdb.php';

session_start();

try {
	
	$sql = "SELECT * FROM alumnos";
	$ps = $pdo->prepare($sql);
	$ps->execute();
	
} catch (PDOException $e) {
	
	die("No se puede mostrar la información: ".$e->getMessage());
}

while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {
	
	$alumnos[] = $row;
}

if (isset($_GET['login'])) {
	
	$nombre = $_POST['user'];
	$password = $_POST['password'];
	$errores = [];

	if ($nombre == "") {
		
		$errores['nombre']['vacio'] = true;
	}

	if ($password == "") {
		
		$errores['password']['vacio'] = true;
	}

	if (empty($errores)) {
		
		foreach ($alumnos as $alumno) {

		if (strcmp($alumno['nombre'], $nombre) == 0 && strcmp($alumno['password'], $password) == 0) {
			
			$_SESSION['user'] = $nombre;
			header('Location: ../home/index.php');
			exit();
		}
	}

	}else{

		require_once 'login.html.php';
		exit();

	}

}

require_once 'login.html.php';