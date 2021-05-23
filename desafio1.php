<?php

$imc = "";
$situation = "";

if (isset($_POST["weight"]) && isset($_POST["height"]))	{

	$weight = str_replace(",", ".", $_POST["weight"]);
	$height = str_replace(",", ".", $_POST["height"]);

	$imc = $weight/($height * $height);

	if ($imc < 16)	{
		$situation = "Subpeso severo";
	} else if ($imc < 19.9)	{
		$situation = "Subpeso";
	} else if ($imc < 24.9)	{
		$situation = "Normal";
	} else if ($imc < 29.9)	{
		$situation = "Sobrepeso";
	} else if ($imc < 39.9)	{
		$situation = "Obeso";
	} else {
		$situation = "Obeso Mórbido";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Desafio 1</title>
</head>
<body>
	<h2>Calcular IMC</h2>
	<form action="" method="POST">

		<label for="weight">Peso(Kg):</label>
		<input type="text" name="weight">
		<br/>
		<label for="height">Altura(M):</label>
		<input type="text" name="height">
		<br/>
		<input type="submit" value="Calcular"/>

		<br/><br/>


	</form>

	IMC: <?=$imc?>
	<br/><br/>
	Situação: <?=$situation?>
</body>
</html>