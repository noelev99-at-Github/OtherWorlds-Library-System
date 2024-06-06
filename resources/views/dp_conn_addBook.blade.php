<?php

$usename = "localhost";
$email = "root";
$pssword = "";
$db_name = "library_management_system";

$conn = mysqli_connect($usename, $email, $pssword, $db_name);

if(!$conn){
    echo "Connection Failed!";
    exit();
}