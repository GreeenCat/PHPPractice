<?php








$server = 'localhost';
$na = 'root';
$password = '';
$database = 'contacts';

$conn = mysqli_connect($server,$na,$password,$database);

if (!$conn) {
  die("Sorry the connection was not successfull" . mysqli_connect_error());
}
else{

$sql = "DELETE FROM `contactsus` WHERE `contactsus`.`consern` = 'bihar'";

$result = mysqli_query($conn,$sql);
$aff = mysqli_affected_rows($conn);
echo "number of aaffected rows are " . $aff;
echo "<br>";

if ($result) {
    echo "deleated baby";
}
else{
    echo "nahi hoaga";
}

}



?>