<?php
// require 'dbconnect.php';
include 'dbconnect.php';

// both will give error
//inclue will help you to procede ahead code
//require will not proceed for furether code




if ($num>0) {
    // echo var_dump($output);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['sr.no'] . " Hello " . $row['ipaddress'] . "Your email id is " . $row['text'];
    echo "<br>";
    
}

}





?>