<?php   
session_start(); //to ensure you are using same session
 //destroy the session              
session_destroy();
header("Location:index.php"); //to redirect back to "index.php" after logging out

exit();
?>