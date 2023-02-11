<?php




// what is session

// session is used to manage information across different pages 

//if user is veritfy userlogin info
session_start();
  $_SESSION['username'] = "madhav";

$_SESSION['favcat'] = "samosa";
echo "we have saved your session"; 


?>