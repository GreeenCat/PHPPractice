<?php



session_start();



if (isset($_SESSION['username'])) {
    echo "welcome " . $_SESSION['username'];
 echo "<br>";
echo "your fav category is " . $_SESSION['favcat'];
echo "we have saved your session"; 

}

else {
    echo "plz login to continue";
}



?>