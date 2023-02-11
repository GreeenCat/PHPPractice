<?php

echo "creating tables with php in my sql<br>";


$server = "localhost";
$username = "root";
$password = '';
$database = 'timepass';

$connect = mysqli_connect($server,$username,$password,$database);

if(!$connect){
    die("sorry we failed to connect: <br>" . mysqli_connect_error());
}
else {
    echo "Connection was successfull";
}


// $sql = "CREATE DATABASE greentryal";
// $result = mysqli_query($connect,$sql);


// if ($result) {
//     echo "DB WAS CREATED SUCCESSFULLLY";
// }
// else{
//     echo "db exist" . mysqli_error($connect);
// }

//creating table in db


$sql = "CREATE TABLE `tingu` (`wsrno` INT NOT NULL AUTO_INCREMENT , `dsd` INT NOT NULL , `ds` VARCHAR(11) NOT NULL , `ii` INT NOT NULL , `iii` INT NOT NULL , PRIMARY KEY (`wsrno`))";

$reult = mysqli_query($connect,$sql);

if ($reult) {
    echo "TABLE CREATED";
}
else{
    echo "NOT CREATED" . mysqli_connect_error($connect);
}
?>