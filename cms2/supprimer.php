<?php

$dsn = 'mysql:host=localhost;dbname=siteweb';
$user = 'root';
$pass = '';

$pdo = new PDO(
	$dsn,
	$user,
	$pass
);

$pdo->query('DELETE FROM articles WHERE id = ' . $_GET['id']);

header('Location: articles-admin.php');