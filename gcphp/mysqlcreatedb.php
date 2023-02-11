<?php

$server = 'localhost';
$username = 'root';
$password = '';

$conn = mysqli_connect($server,$username,$password);
echo "connection success";

$sql = "CREATE DATABASE dbgreencat4";

//check for db success

$result = mysqli_query($conn,$sql);
echo var_dump($result);








?>