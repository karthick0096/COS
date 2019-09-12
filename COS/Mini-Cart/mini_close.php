
<?php include 'insertquote.php';?>
<?php include 'quote.php'?>

<?php


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

$sql= "DELETE FROM quotetable WHERE Quoteid='$quoteid[0]';";
//$sql = "INSERT INTO quotetable (Quoteid,Productimage,Productname, Productprice,Totalprice)
//VALUES ('0','$proimg','$proname', '$proprice','$tprice')";

if (mysqli_query($conn, $sql)) {
    echo "<script> location.href='http://localhost/COS/Mini-Cart/pdp.php?productid=2'; </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>