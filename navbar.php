
  <?php
  session_start();

  try
	{
		$pdo = new PDO("mysql:host=localhost;dbname=fastfood;","root","");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
  
  ?>

<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 16px;
  text-align: center;
  background-image: url('schaken.jpg');
  background-repeat: 45;
  background-attachment: fixed;
  background-size: cover;
}


body {
  background-image: url('schaken.jpg');
  background-repeat: 45;
  background-attachment: fixed;
  background-size: cover;
  
  
}


/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
 
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three equal columns that floats next to each other */
.column {
  float: center;
  
  
  margin: 45px;
  

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
   
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 90%;
  }
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="header">
  <h1>SchaakClub de BlauweLoper</h1>
  <p>Gezelligste schaakclub van Nederland</p>
</div>

<div class="topnav">
<a href="hoofdpagine.php">Home</a>
<a href="schakenvoorkids.php">schaken voor kids </a>

  <a href="contact.php">Contact</a>
  <a href="ledenlijst.php">Ledenlijst</a>
  <a href="wedstrijden.php">Wedstrijden</a>
  
  <?php 
  
   if  (isset($_SESSION['level'])) { 
    
    echo '<a href="uitloggen.php">Uitloggen</a>';
    
   } else {
    echo '<a href="inloggen.php">Inloggen</a>';  
   }
   
   
  ?>

</div>