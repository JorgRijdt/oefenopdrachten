

<li class='active' style='float:right;'>
  <?php 
  session_start();
    if($_SESSION['logged']==true){ 
        echo $_SESSION["Naam"];
       
        }
    elseif($_SESSION['logged']==false) 
        
    ?>