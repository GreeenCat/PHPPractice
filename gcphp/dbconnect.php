<?php





$server = "localhost";
$password = "";
$username = "root";
$database = 'greenchat';

$connect = mysqli_connect($server,$username,$password,$database);

echo "connection w as subbecnd<br>";

$sql = "SELECT * FROM `greenchat`";
$result = mysqli_query($connect,$sql);


$num = mysqli_num_rows($result);
echo "number of rows aare " . $num;
echo "<br>";


?>