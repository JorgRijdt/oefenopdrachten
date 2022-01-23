<!DOCTYPE html>


<?php
include "navbar.php";




//Controleren of de knop van het formulier is ingedrukt
if(isset($_POST["Send"]))
{
	
	$parameters = array(':Naam' => $_POST["Naam"],
						':Email' => $_POST["Email"],
						':Prijs' => $_POST["Prijs"]);

	$sth = $pdo->prepare('INSERT INTO snacks (Naam,Email,Prijs) VALUES (:Naam,:Email,:Prijs)');

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
	

<h1> Vul hier uw nieuwe leden in </h1>
<form method="post" action="">

Naam  <input type="text" name="Naam" /><br />
 E-mail<input type="text" name="Email" /><br />
   Telefoon <input type="text" name="Prijs" /><br />

<input type="submit" name="Send" value="Toevoegen!" /><br />
</form>
<form action="update.php" method="get">
<button type="submit" formaction="ledenlijst.php"Bekijk hier de tabel>Bekijk hier alle leden</button>