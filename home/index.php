<?php 

require_once 'location/url.php';
require_once 'db/connectdb.php';

session_start();

try {
	
	$sql = "SELECT * FROM archivos";
	$ps = $pdo->prepare($sql);
	$ps->execute();
	
} catch (PDOException $e) {
	
	die("No se puede mostrar la información: ".$e->getMessage());
}

while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {
	
	$archivos[] = $row;
}

require_once 'home.html.php';