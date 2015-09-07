<?php


$dsn = 'mysql:host=localhost;dbname=siteweb';
$user = 'root';
$pass = '';

$pdo = new PDO(
	$dsn,
	$user,
	$pass
);

$sql = 'UPDATE articles SET titre = "' . $_POST['titre'] . '", texte = "' . $_POST['texte'] . '" WHERE id = ' . $_POST['id'];
$pdo->query($sql);

header('Location: articles-admin.php');