<?php 

require_once '../location/url.php';
require_once '../db/connectdb.php';
require_once '../db/alumnos.php';

session_start();

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

		if ($alumno = alumnoLogin($nombre, $password)) {
			
			$_SESSION['user_id'] = $alumno['id'];
			$_SESSION['user_name'] = $alumno['nombre'];
			$_SESSION['user_email'] = $alumno['email'];

			header('Location: ' . $home);
			exit();
		
		}else{

			require_once 'login.html.php';
			exit();
		}
	}

}

require_once 'login.html.php';