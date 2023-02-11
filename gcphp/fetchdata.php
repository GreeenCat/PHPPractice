<?php









//connecting to database

// $server = 'localhost';
// $na = 'root';
// $password = '';
// $database = 'contacts';

// $conn = mysqli_connect($server,$na,$password,$database);

// if (!$conn) {
//   die("Sorry the connection was not successfull" . mysqli_connect_error());
// }
// else{
//   //submit entry to database

//   $sql = "SELECT * FROM `contactsus`";



//   $result = mysqli_query($conn,$sql);
// //find number of records returned

// $num =  mysqli_num_rows($result);
// echo $num;
// echo "<br>";
// //display the return by the sql query

// if ($num>0) {
   
// while ($row = mysqli_fetch_assoc($result)) {
//     echo $row;
//     echo "<br>";
  
// }
// }
// }






$server = 'localhost';
$na = 'root';
$password = '';
$database = 'contacts';

$conn = mysqli_connect($server,$na,$password,$database);

if (!$conn) {
  die("Sorry the connection was not successfull" . mysqli_connect_error());
}
else{

$sql = "SELECT * FROM `contactsus`";

$result = mysqli_query($conn,$sql);

$num= mysqli_num_rows($result);
echo $num;
echo "<br>";
if ($num>0) {
    // echo var_dump($output);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['Sr.no'] . " Hello " . $row['name'] . "Your email id is " . $row['email'];
    echo "<br>";
    
}

}




}



?>