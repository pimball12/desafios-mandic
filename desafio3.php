<?php

$translation = "";

if (isset($_POST["word"]))	{

	$translation = strtolower($_POST["word"]);
	$translation = preg_replace('/[0-9]+/', '', $translation);
	$translation = preg_replace(array("/(á|à|ã|â|ä)/","/(é|è|ê|ë)/","/(í|ì|î|ï)/","/(ó|ò|õ|ô|ö)/","/(ú|ù|û|ü)/","/(ñ)/"),"",$translation);
	$translation = str_replace("c", "3", $translation);
	$translation = str_replace("f", "6", $translation);
	$translation = str_replace("i", "9", $translation);
	$translation = str_replace("l", "12", $translation);
	$translation = str_replace("o", "15", $translation);
	$translation = str_replace("r", "18", $translation);
	$translation = str_replace("u", "21", $translation);
	$translation = str_replace("x", "24", $translation);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Desafio 3</title>
	<meta charset="UTF-8"/>
</head>
<body>

	<h1> Tradutor de Palavras </h1>

	<form action="" method="POST">

		<label for="word">Insira a palavra a ser Traduzida</label>
		<input type="text" name="word"/>
		<br/>
		<input type="submit" value="Traduzir"/>

	</form>

	<br/><br/>

	Palavra Traduzida: <?=$translation?>

</body>
</html>