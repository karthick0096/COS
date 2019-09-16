<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "pass2word";
$dbname = "quote";

$custid=$_SESSION['id'];
    
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "DELETE from quotetable where customerid='$custid' ";
    if (mysqli_query($conn, $sql)) {
    echo "<script> location.href='http://localhost/COS/logout.php'; </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();

?>