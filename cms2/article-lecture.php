<html>
<head>
</head>
<body>
<?php


$dsn = 'mysql:host=localhost;dbname=siteweb';
$user = 'root';
$pass = '';

$pdo = new PDO(
	$dsn,
	$user,
	$pass
);

$request = $pdo->query('SELECT * FROM articles WHERE id = ' . $_GET['id'] . ';');
$result = $request->fetchAll();

?>

<h1><?=$result[0]['titre']?></h1>
<p><?=$result[0]['texte']?></p>

</body>
</html>