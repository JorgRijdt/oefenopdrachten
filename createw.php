<!DOCTYPE html>


<?php
include "navbar.php";



//Controleren of de knop van het formulier is ingedrukt
if(isset($_POST["Send"]))
{
	
	$parameters = array(':speler1' => $_POST["speler1"],
						':speler2' => $_POST["speler2"],
						':winnaar' => $_POST["winnaar"]);

	$sth = $pdo->prepare('INSERT INTO wedstrijden (speler1,speler2,winnaar) VALUES (:speler1,:speler2,:winnaar)');

	$sth->execute($parameters);

	if($pdo->lastInsertId() != 0)
	{
		echo" toevoegen geslaagd met Lidnummer:";
		echo $pdo->lastInsertId();
	}

}


?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="Style.css" />
	<title>15 nov 2022</title>
</head>
<body>
	

<h1> Vul hier de wedstrijden in</h1>
<form method="post" action="">

Speler 1  <input type="text" name="speler1" /><br />
Speler 2 <input type="text" name="speler2" /><br />
Winnaar <input type="text" name="winnaar" /><br />

<input type="submit" name="Send" value="Toevoegen!" /><br />
</form>
<form action="updatew.php" method="get">
<button type="submit" formaction="wedstrijden.php"Bekijk hier de tabel>Bekijk hier alle wedstrijden</button>