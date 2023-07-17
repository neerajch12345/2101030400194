<?php

//create server variables
$servername="localhost";
$username= "root";
$password="";
$dbname="test";

//create connection
$conn= mysqli_connect($servername, $username, $password, $dbname);

//check if connection is done or not
if(!$conn){
    echo "Failed to connect...";
    exit();
} 
echo "Connection success!..."    

?>