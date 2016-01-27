<?php 

session_start();

if (isset($_GET['upload'])) {

	require_once 'upload/index.php';
	exit();

}


if (isset($_GET['logout'])) {
	 
	 require_once '../logout/index.php';
	 exit();

}

require_once 'home.html.php';