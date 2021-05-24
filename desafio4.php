<?php

// apenas um detalhe, esqueci que podia usar a tag <pre>, mas quando lembrei
// disso já tinha arrumado todo o alfabeto.

$alphabet = [];

$alphabet["a"] = 
"<br/>
&nbsp;&nbsp;/\  <br/>
/~~\ <br/>" ;
$alphabet["b"] =
"__  <br/>
|__) <br/>
|__) <br/>";
$alphabet["c"] =
"&nbsp;__  <br/>
/&nbsp;&nbsp;&nbsp;&nbsp;` <br/>
\__, <br/>" ;
$alphabet["d"] = 
"__  <br/>
|&nbsp;&nbsp;&nbsp;&nbsp;\ <br/>
|__/ <br/>" ;
$alphabet["e"] = 
"&nbsp;___ <br/>
|__  <br/>
|___ <br/>" ;
$alphabet["f"] = 
"___ <br/>
|__  <br/>
|    <br/>"; 
$alphabet["g"] = 
"__  <br/>
/&nbsp;_` <br/>
\__> <br/>" ;
$alphabet["h"] = 
"     <br/>
|__| <br/>
|&nbsp;&nbsp;&nbsp;&nbsp;| <br/>" ;
$alphabet["i"] = 
"     <br/>
|    <br/>
|    <br/>" ;
$alphabet["j"] = 
"     <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| <br/>
\__/ <br/>" ;
$alphabet["k"] = 
"     <br/>
|__/ <br/>
|&nbsp;&nbsp;&nbsp;&nbsp;\ <br/>" ;
$alphabet["l"] = 
"     <br/>
|    <br/>
|___ <br/>" ;
$alphabet["m"] = 
"     <br/>
 |\/|<br/>
 |&nbsp;&nbsp;|<br/>";
$alphabet["n"] = 
"     <br/>
|\&nbsp;&nbsp;| <br/>
|&nbsp;&nbsp;\| <br/>" ;
$alphabet["o"] = 
"__  <br/>
/&nbsp;&nbsp;&nbsp;&nbsp;\ <br/>
\__/ <br/>" ;
$alphabet["p"] = 
"__  <br/>
|__) <br/>
|    <br/>" ;
$alphabet["q"] = 
"__  <br/>
/&nbsp;&nbsp;&nbsp;&nbsp;\ <br/>
\__X <br/>" ;
$alphabet["r"] = 
"__  <br/>
|__) <br/>
|  \ <br/>" ;
$alphabet["s"] = 
"__  <br/>
/__` <br/>
.__/ <br/>" ;
$alphabet["t"] = 
"___  <br/>
&nbsp;&nbsp; |   <br/>
&nbsp;&nbsp; |   <br/>" ;
$alphabet["u"] = 
"     <br/>
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| <br/>
\__/ <br/>" ;
$alphabet["v"] = 
"     <br/>
\&nbsp;&nbsp;/ <br/>
&nbsp; \/  <br/>" ;
$alphabet["w"] = 
"     <br/>
|&nbsp;&nbsp;| <br/>
|/\| <br/>" ;
$alphabet["x"] = 
"     <br/>
\_/  <br/>
/&nbsp;&nbsp;\  <br/>" ;
$alphabet["y"] = 
"     <br/>
\&nbsp;/  <br/>
 &nbsp;|   <br/>" ;
$alphabet["z"] = 
"__   <br/>
&nbsp;/   <br/>
/_   <br/>" ;
$alphabet[" "] = 
"     <br/>
     <br/>
&nbsp; &nbsp; &nbsp; &nbsp; <br/>" ;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Desafio 4</title>
</head>
<body>
	<h1>Tradutor em ascii</h1>

	<form action="" method="POST">

		<label for="word">Palavra</label>
		<input type="text" name="word">
		<input type="submit" value="transformar"/>
	</form>

	<br/><br/><br/>

	<?php 

	if (isset($_POST["word"]))	{

		$letters = str_split(strtolower($_POST["word"]));

		foreach ($letters as $letter) {
			echo "<div style='display: inline-block'>" . $alphabet[$letter] . "</div>";
			echo "&nbsp; &nbsp; ";
		}
	}

	?>
</body>
</html>