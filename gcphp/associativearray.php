<?php


// this is called indexed array

// echo "Associative array";
// $arr = array('this','that','wht');
// echo "<br>";

// foreach ($arr as $value) {
//     echo $value;
//     echo "<br>";
// }



 
$favcolor = array('madhav' => 'red','shivangi' => 'greeb','samosa' => 'blue', 8 => 'haha');

// echo $favcolor['madhav'];
// echo "<br>";
// echo $favcolor['shivangi'];
// echo "<br>";
// echo $favcolor['samosa'];
// echo "<br>";
// echo $favcolor[8];

foreach ($favcolor as $key => $value) {
    echo 'Fav color of  ' . $key .' is ' . $value;
    echo "<br>";
}


?>