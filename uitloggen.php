<?php
include "navbar.php";

session_destroy();
header('Refresh:2;URL=hoofdpagine.php');
?>