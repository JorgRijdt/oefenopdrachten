<?php

include "navbar.php";



if(isset($_POST["Send"]))
{
	//maak unieke salt
	$Salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));

	//hash het paswoord met de Salt
	$Password = hash('sha512', $_POST['Password'] . $Salt);


	$parameters = array(':Naam' => $_POST["Naam"],
						':Adres' => $_POST["Adres"],
						':Postcode' => $_POST["Postcode"],
						':Plaats' => $_POST["Plaats"],
						':Email' => $_POST["Email"],
						':Salt' => $Salt,
						':Wachtwoord' => $Password,
						':Level' => 1 );

	$sth = $pdo->prepare('INSERT INTO gebruikers (Naam,Adres,Postcode,Plaats,Email,Salt,Wachtwoord,Level) VALUES (:Naam,:Adres,:Postcode,:Plaats,:Email,:Salt,:Wachtwoord,:Level)');

	$sth->execute($parameters);

	

}

?>




<h1>Registreren</h1>
	<form name="RegistratieFormulier" action="inloggen.php" method="post">
		<label for="Name">Naam:</label>
		<input type="text" id="Name" name="Naam"required />
		<br />
		<label for="Adres">Adres:</label>
		<input type="text" id="Adres" name="Adres"required  />
		<br />
		<label for="ZipCode">Postcode:</label>
		<input type="text" id="ZipCode" name="Postcode"required  />
		<br />		
		<label for="City">Plaats:</label>
		<input type="text" id="City" name="Plaats"required  />
		<br />
		<label for="Email">E-mail:</label>
		<input type="text" id="Email" name="Email"required  />
		<br />		
		<label for="Password">Wachtwoord:</label>
		<input type="password" id="Password" name="Wachtwoord"required  />
		<br />		
		<input type="submit" name="Send" action="inloggen.php" value="Registreer!" />
     
	</form>

