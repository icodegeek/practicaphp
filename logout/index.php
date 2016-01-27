<?php 

	require_once '../location/url.php';

	session_start();

	unset($_SESSION['user']);

	session_destroy();

	header('Location: ' . $home);
	 
	exit();