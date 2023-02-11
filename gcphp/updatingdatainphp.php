<?php


//connecting to database

$server = 'localhost';
$na = 'root';
$password = '';
$database = 'contacts';

$conn = mysqli_connect($server,$na,$password,$database);

if (!$conn) {
  die("Sorry the connection was not successfull" . mysqli_connect_error());
}
else{
  //submit entry to database
echo "connnnnnnnnnnnnnnnnnnnnnnnnnnnn<br>";
$sql = "SELECT * FROM `contactsus` WHERE consern='bihar'";

$result = mysqli_query($conn,$sql);

$num= mysqli_num_rows($result);
echo $num;


if ($num>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo var_dump($row);
        echo "<br>";
    }
}


$sql = "UPDATE `contactsus` SET `name` = 'frombihar' WHERE `contactsus`.`consern` = 'www'";

$result = mysqli_query($conn,$sql);
$aff = mysqli_affected_rows($conn);
echo "<br>Affected rows are" .  $aff; 

if ($result) {
    echo "Updated successfully";
}
else{
    echo "not updated";
}

    }
    






?>