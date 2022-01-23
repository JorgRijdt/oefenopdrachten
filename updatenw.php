<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Schaakclub</title>
</head>
<body>
<?php

include "navbar.php";



//dit gebeurd alleen wanneer de knop van het formulier is ingedrukt
if(isset($_POST["Send"]))
{
	$parameters = array(':ID' => $_GET['ID'],
						':speler1' => $_POST['speler1'],
						':speler2' => $_POST['speler2'],
						':winnaar' => $_POST['winnaar']);

	$sth = $pdo->prepare('UPDATE wedstrijden SET speler1=:speler1,speler2=:speler2,winnaar=:winnaar,WHERE ID = :ID');

	$sth->execute($parameters);

	$Message = "Het is succesvol aangepast";
}

//dit gebeurd altijd
$parameters = array("ID" => $_GET["ID"]);
$sth = $pdo->prepare('select * from wedstrijden WHERE ID=:ID');

$sth->execute($parameters);

$row = $sth->fetch();


?>

<h1> Pas de gegevens van de leden aan </h1>

<form method="post" action="">

Speler 1 <input type="text" name="speler1" value="<?php echo $row['speler1'];?>" /><br />
Speler 2 <input type ="text" name="speler2" value="<?php echo $row['speler2'];?>"><br />
Winnar <input type="text" name="winnaar" value="<?php echo $row['winnaar']?>" /><br />

<input type="submit" name="Send" value="Aanpassen!" action="wedstrijden.php"/><br />

<button type="submit" formaction="wedstrijden.php"Bekijk hier de tabel>Bekijk hier de tabel</button>
</form>



	
