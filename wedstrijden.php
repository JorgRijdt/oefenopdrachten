<?php
include "navbar.php";

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>15 nov 2022</title>
</head>
<body>
<!--
<h1> Vul hier uw nieuwe snack in </h1>

<form method="post" action="">

Naam snack: <input type="text" name="Naam" /><br />
Omschrijving: <input type="text" name="Omschrijving" /><br />
Prijs: <input type="text" name="Prijs" /><br />

<input type="submit" name="Send" value="Toevoegen!" /><br />
</form>
-->

<?php






$parameters = array();
$sth = $pdo->prepare('select * from wedstrijden');

$sth->execute($parameters);

?>
<style>
	.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
table, td, th {
  border: 1px solid black;
}
h1{
	text-align: center;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
<h1>Wedstrijden</h1>
<table width=100%>
	<tr>
		            
		<th> Speler 1  </th>
		<th> Speler 2 </th>
		<th> Winaar</th>
		<th></th>
	</tr>
	
<?php

while($row = $sth->fetch())
{
	
	?>
	
	<tr>
		<td><?php echo $row["speler1"];?></td>
		<td><?php echo $row["speler2"];?></td>
		<td><?= $row["winnaar"];?></td>
		<?php

		if ($_SESSION['level'] >= 2) {
		?>	
		<td><a href="updatenw.php?ID=<?php echo $row["ID"]?>"> aanpassen</a></td>
        <td><a href="deletew.php?ID=<?php echo $row["ID"]?>">verwijderen</a></td>
		<td><a href="createw.php?ID=<?php echo $row["ID"]?>">toevoegen</a></td>
		<?php
		}

		?>
	</tr>

	<?php
}

echo "</table>";

/*
//Controleren of de knop van het formulier is ingedrukt
if(isset($_POST["Send"]))
{
	
	$parameters = array(':Naam' => $_POST["Naam"],
						':Omschrijving' => $_POST["Omschrijving"],
						':Prijs' => $_POST["Prijs"]);

	$sth = $pdo->prepare('INSERT INTO snacks (Naam,Omschrijving,Prijs) VALUES (:Naam,:Omschrijving,:Prijs)');

	$sth->execute($parameters);

	if($pdo->lastInsertId() != 0)
	{
		echo" toevoegen geslaagd met nr.: ";
		echo $pdo->lastInsertId();
	}

}


*/






?>





