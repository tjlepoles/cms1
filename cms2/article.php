<?php


$dsn = 'mysql:host=localhost;dbname=siteweb';
$user = 'root';
$pass = '';

$pdo = new PDO(
	$dsn,
	$user,
	$pass
);

$pdo->query('INSERT INTO articles(titre, texte) VALUES("' . $_POST['titre'] . '", "' . $_POST['texte'] . '");');

header('Location: article.html');