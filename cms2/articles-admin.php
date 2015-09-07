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

$request = $pdo->query('SELECT * FROM articles;');
$result = $request->fetchAll();

//print_r($result);

for ( $i = 0; $i < count($result); $i++ ) {
?>

<h2><?=$result[$i]['titre']?></h2>
<a href="modifier.php?id=<?=$result[$i]['id']?>">modifier</a><br />
<a href="supprimer.php?id=<?=$result[$i]['id']?>">supprimer</a>
<br />
<br />

<?php
}

?>
</body>
</html>