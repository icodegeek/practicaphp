<?php 


	 unset($_SESSION['user']);

	 session_destroy();

	 header('Location: ../home');
	 exit();