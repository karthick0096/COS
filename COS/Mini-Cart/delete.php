<?php 
$servername = "localhost";
$username = "root";
$password = "pass2word";
$dbname = "quote";
if(isset($_POST['delete'])){
$miniid=$_POST['minicartid'];
    $proid=$_POST['pdpid'];
    
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "DELETE from quotetable where quoteid='$miniid' ";
    if (mysqli_query($conn, $sql)) {
    echo "<script> location.href='../Mini-Cart/pdp.php?productid=$proid# ?>'; </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
}
?>