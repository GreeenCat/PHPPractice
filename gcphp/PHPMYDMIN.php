<?php
// echo "connectinggggg to DB";

// //ways to connect to my sql database

// // 1. MYSQLi extension  - procedural way,object oriented
// // 2. PDO = PHP DATA OBJECT 
// // PDO CAN WORK WITH MANY DATA BASE AND MYSQLi WORKS WITHIN MYSQLi DB


// //CONNECTING TO DATABASE
// $servername = "localhost";
// $username = "root";
// $password = "";

// // create a connection
// $conn = mysqli_connect($servername,$username,$password);
// if(!$conn){
//     die("Sorry we failed to coonnect" . mysqli_connect_error());
// }
// else{
//     echo "Connection was successfull";
// }
?>
<?php
echo "Practive<br>";

$server = "localhost";
$password = "";
$username = "root";

$connect = mysqli_connect($server,$username,$password);

echo "connection w as subbecnd";


?>