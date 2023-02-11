<?php
echo "Scope in PHP";

$a = 5; //global variable
function printtvalue(){
// $a = 50; //locaalvariable


global $a; //give me the access of global variabel
$a = 50000000000;
echo "<br> The value is " . $a;
}

printtvalue();
echo "<br> I am out of function and my value is $a";

echo "<br>";

echo var_dump($GLOBALS[$a]);
?>