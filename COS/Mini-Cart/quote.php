

<?php
include 'quotecall.php';



$servername = "localhost";
$username = "root";
$password = "pass2word";
$dbname = "quote";

if(isset($_POST['addtocart'])){
$proname=$_POST['pname'];
$proprice=$_POST['pprice'];
$proimg=$_POST['pimage'];
$proid=$_POST['pdpid'];
$tprice=$proprice+$lvalue;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO quotetable (Quoteid,Productimage,Productname, Productprice,Totalprice)
VALUES ('0','$proimg','$proname', '$proprice','$tprice')";

if (mysqli_query($conn, $sql)) {
    echo "<script> location.href='http://localhost/COS/Mini-Cart/pdp.php?productid=$proid# ?>'; </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

?>