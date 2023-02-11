<?php

$name = "madhav is a good boy";
echo $name;
echo "<br>";

echo "The .length of my string is ".strlen($name); // . operator to add two strings
echo "<br>"; 
echo "The reverse of my string is ".strrev($name); 
echo "<br>"; 
echo "The wordcount of my string is ".str_word_count($name);
echo "<br>"; 
echo "The string finding of my string is ".strpos($name,"ma"); // to find a word in an string
echo "<br>"; 
//replacement in string

echo str_replace("good","bad",$name);
echo str_repeat($name,4);


echo "<br>";
echo "<pre>";
echo rtrim("      this is bad word   ");
echo "<br>";

echo ltrim("      this is bad word   ");

echo "</pre>";
?>