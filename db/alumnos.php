<?php 

/**
* Función que comprueba si los datos de acceso son correctos.
*
* @param $nombre String Nombre de usuario.
* @param $password String Passwotd del usuario (sin hashear);
*/

function alumnoLogin($nombre, $password){

	global $pdo;
	global $salt;

	$hash_password = md5($password.$salt);

	try {
		
		$sql = 'SELECT * FROM alumnos WHERE nombre = :nombre AND password = :password';
		$ps = $pdo->prepare($sql);
		$ps->bindValue(':nombre', $nombre);
		$ps->bindValue(':password', $hash_password);
		$ps->execute();


	} catch (PDOException $e) {

		die("No se ha podido extraer información de la base de datos: " . $e->getMessage());
		
	}

	$alumno = $ps->fetch(PDO::FETCH_ASSOC);

	return $alumno;
}