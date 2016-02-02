<?php

$home = 'http://'.$_SERVER['HTTP_HOST'].'/practicaphp/';
$base_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$base_path = $_SERVER['DOCUMENT_ROOT'].'/practicaphp/';
$base_images_path = $base_path . 'files/';

// Cadena salt para guardar las contraseñas
$salt = "cBU5wWO0LgKGw2UUwk1g";