<?php

//Moose's Code
$servername = "localhost";
$username ="root";
$password="";
$dbname ="AMAdb";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection if established or not
if($conn->connect_error){
    die("connection failed : ". $conn->connect_error); //"->" aka "this operator"
}else{
    echo "Woow! mubarmij kabeer";
}
//create database
$sql = "create DATABASE if not exists myDB";
if($conn->query($sql) === TRUE){//true and datatype as true, so if hacker trying to SQL injection, then it will be a string so it won't work.
    echo "Database created successfuly";
}else{
    echo "problem with database";
}

//Banoob's code

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "try1";

// $conn = new mysqli($servername, $username, $password, $dbname);
/*if($conn){
    echo "success";
}else{
    echo "an error";
}*/


?>