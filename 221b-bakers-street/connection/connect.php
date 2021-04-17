<?php

//main connection file for both admin & front end
$servername = ""; //server
$username = ""; //username
$password = ""; //password
$dbname = "";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>