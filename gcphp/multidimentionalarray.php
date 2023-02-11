<?php
echo "Multidimentional array<br>";
$array = array(
array(1,2,3,4),
array(5,6,7,8),
array(9,10,11,12)

);

for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j < 4; $j++) { 
       echo $array[$i][$j];
       echo "<br>";
    }
}

?>