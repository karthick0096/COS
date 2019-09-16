<?php
$cid=$_SESSION['id'];
$servername = "localhost";
$username = "root";
$password = "pass2word";
$dbname = "quote";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Quoteid, Productname, Productprice FROM quotetable where customerid ='$cid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $minipname[]=$row["Productname"];
        $minipprice[]=$row["Productprice"];
        $quoteid[]=$row["Quoteid"];
        //$minipimage[]=$row["Productimage"];
        $tp=array_sum($minipprice);
              $si=sizeof($quoteid);
  
    }
} else {
    $si=0;
    $quoteid=0;
    $tp=0;
}

mysqli_close($conn);
?>