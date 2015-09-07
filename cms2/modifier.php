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

<h1>Modifier un article</h1>
<form action="modifier-update.php" method="post">

<input type="hidden" name="id" value="<?=$result[0]['id']?>" />

<input type="text" name="titre" placeholder="titre" value="<?=$result[0]['titre']?>" />
<br />
<textarea name="texte" placeholder="texte"><?=$result[0]['texte']?></textarea>
<br />
<input type="submit" />

</form>
</body>
</html>