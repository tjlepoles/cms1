<?php

session_start();

if ( empty($_SESSION['user']) ) {
	header('Location: connection.html');
	die();
}

echo "Bonjour " . $_SESSION['user']['email'];