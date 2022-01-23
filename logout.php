
<?php
include "navbar.php";




session_destroy();
 header('Refresh:1;URL= hoofdpagine.php');
 echo" U bent succesvol uitgelogd!";
?>