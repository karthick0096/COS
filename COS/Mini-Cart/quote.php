
<?php session_start();
$customerid=$_SESSION['id'];
$servername = "localhost";
$username = "root";
$password = "pass2word";
$dbname = "quote";
if(isset($_POST['addtocart'])){
$proname=$_POST['pname'];
$proprice=$_POST['pprice'];
$proimg=$_POST['pimage'];
$proid=$_POST['pdpid'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO quotetable (customerid,Productimage,Productname, Productprice)
VALUES ('$customerid','$proimg','$proname', '$proprice')";
if (mysqli_query($conn, $sql)) {
    echo "<script> location.href='../Mini-Cart/pdp.php?productid=$proid# ?>'; </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>