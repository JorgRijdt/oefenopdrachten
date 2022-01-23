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
						':Naam' => $_POST['Naam'],
						':Email' => $_POST['Email'],
						':Prijs' => $_POST['Prijs']);

	$sth = $pdo->prepare('UPDATE snacks SET Naam=:Naam,Email=:Email,Prijs=:Prijs WHERE ID = :ID');

	$sth->execute($parameters);

	$Message = "Het is succesvol aangepast";
}

//dit gebeurd altijd
$parameters = array("ID" => $_GET["ID"]);
$sth = $pdo->prepare('select * from snacks WHERE ID=:ID');

$sth->execute($parameters);

$row = $sth->fetch();


?>

<h1> Pas de gegevens van de leden aan </h1>

<form method="post" action="">

Naam  <input type="text" name="Naam" value="<?php echo $row['Naam'];?>" /><br />
E-mail<input type ="text" name="Email" value="<?php echo $row['Email'];?>"><br />
Telefoonnummer <input type="text" name="Prijs" value="<?php echo $row['Prijs']?>" /><br />

<input type="submit" name="Send" value="Aanpassen!" action="ledenlijst.php"/><br />

<button type="submit" formaction="ledenlijst.php"Bekijk hier de tabel>Bekijk hier de tabel</button>
</form>



	
