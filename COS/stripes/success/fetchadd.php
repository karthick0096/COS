<?php
$cid=$_SESSION['id'];
$servername = "localhost";
$username = "root";
$password = "pass2word";
$dbname = "checkout";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Firstname, Lastname,country,address,Town,state,postcode,Phone,Email FROM Billingaddress where customerid ='$cid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $firstname=$row["Firstname"];
        $lastname=$row["Lastname"];
        $country=$row["country"];
       $address = $row['address'];
    $town = $row['Town'];
    $state = $row['state'];
    $postcode = $row['postcode'];
    $phone= $row['Phone'];
    $email = $row['Email'];
  
    }
} else {
    $si=0;
    $quoteid=0;
    $tp=0;
}

mysqli_close($conn);
?>