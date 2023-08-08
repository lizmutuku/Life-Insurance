<?php

//EDIT Your Database name, Username and Password here
$servername = "localhost";
$username   = "applefix_liz";
$password   = "Elizabeth_987";
$dbname     = "applefix_liz";


 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("User/password is wrong");
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>