<?php
 
$dbhost="localhost";  // hostname
$dbuser="root"; // mysql username
$dbpass="pass2word"; // mysql password
$db="sample"; // database you want to use
 
$conn=mysqli_connect( $dbhost, $dbuser, $dbpass, $db ) or die("Could not connect: " .mysqli_error($conn) );
 
//you can also directly write values in mysqli_connect():
 
// $conn=mysqli_connect("localhost", "root", "", "test");
 
?>