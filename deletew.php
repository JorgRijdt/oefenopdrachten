<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>15 nov 2022</title>
</head>
<body>
<?php
include "navbar.php ";




//dit gebeurd alleen wanneer de knop van het formulier is ingedrukt
if(isset($_GET[ 'ID']))
{
	$sth = $pdo->prepare("DELETE FROM wedstrijden WHERE ID =:ID");

    $sth->bindParam("ID", $_GET['ID']);
    if($sth->execute()){
	echo "<h1> Het item is succesvol verwijderd</h1>";}

}

//dit gebeurd altijd
$parameters = array("ID" => $_GET["ID"]);
$sth = $pdo->prepare('select * from wedstrijden WHERE ID=:ID');

$sth->execute($parameters);

$row = $sth->fetch();


?>


</form>
<?php header("Refresh:1; wedstrijden.php"); ?>

	
