<?php
//operators in php

// Arithmetic 
// assignment
// comparision
// logical



// Arithmetic 

$a =45;
$b=2;

echo "For a + b result is " . $a+$b;
echo "<br>"; 

echo "For a - b result is " . $a-$b;
echo "<br>"; 

echo "For a / b result is " . $a/$b;
echo "<br>"; 

echo "For a % b result is " . $a%$b;
echo "<br>"; 

echo "For a * b result is " . $a*$b;
echo "<br>"; 

echo "For a ** b result is " . $a**$b; //exponential operator
echo "<br>"; 



// assignment

// echo "For x the value is  " . $x;
// echo "<br>";  
// $x = $a;

$a += 6;
echo "For a the value is  " . $a;
echo "<br>";  


$a -= 6;
echo "For a the value is  " . $a;
echo "<br>";  

$a *= 6;
echo "For a the value is  " . $a;
echo "<br>";  

$a /= 6;
echo "For a the value is  " . $a;
echo "<br>";  

$a %= 6;
echo "For a the value is  " . $a;
echo "<br>";  




// comparision

$x = 78;
$y = 7;



echo "For a x == y value is  ";
echo var_dump($x==$y);
echo "<br>";  

echo "For a x > y value is  ";
echo var_dump($x > $y);
echo "<br>";  

echo "For a x <> y value is  "; //not equalto
echo var_dump($x<>$y);
echo "<br>";  

echo "For a x <= y value is  "; //not equalto
echo var_dump($x<=$y);
echo "<br>"; 

echo "For a x >= y value is  "; //not equalto
echo var_dump($x>=$y);
echo "<br>"; 

// logical


 $m = true;
$n = false;


echo "For m and n result is ";
echo  var_dump($m and $n);
echo "<br>";

echo "For m && n result is ";
echo  var_dump($m && $n);
echo "<br>";

echo "For m or n result is ";
echo  var_dump($m or $n);
echo "<br>";


echo "For m || n result is ";
echo  var_dump($m || $n);
echo "<br>";


echo "For !m  result is ";
echo  var_dump(!$m);
echo "<br>";


echo "For !m || n result is ";
echo  var_dump(!$m || $n);
echo "<br>";
?>