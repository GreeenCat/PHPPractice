<?php


$server = "localhost";
$username = "root";
$password = '';
$database = 'greentryal';

$connect = mysqli_connect($server,$username,$password,$database);

if(!$connect){
    die("sorry we failed to connect: <br>" . mysqli_connect_error());
}
else {
    echo "Connection was successfull<br>";
}

$email = "shahamadhav29@gmail.com";
$name = "madhav";
$password  = "1234";


$sql = "INSERT INTO `inserting` (`SRNUMBER`, `email`, `name`, `password`) VALUES (NULL, '$email', '$name', '$password')";


$result = mysqli_query($connect,$sql);


if($result){
    echo "Data has been inserded successfullt<br>";
}
else{
    echo "The is someting fishy" . mysqli_connect_error($connect);
}






?>