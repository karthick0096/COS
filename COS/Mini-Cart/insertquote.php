<?php //session_start();
$custid=$_SESSION['id'];
$servername = "localhost";
$username = "root";
$password = "pass2word";
$dbname = "quote";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT Quoteid,Productimage, Productname, Productprice FROM quotetable where customerid ='$custid'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $minipname[]=$row["Productname"];
        $minipprice[]=$row["Productprice"];
        $quoteid[]=$row["Quoteid"];
         $qid[]=$row["Quoteid"];
        $minipimage[]=$row["Productimage"];
        $tp=array_sum($minipprice);
        $count=count($quoteid);
        $si=sizeof($quoteid);
       
    }
} else {
   
    $count=0;
        $tp=0;
    $quoteid=0;
    $si=0;
}
 mysqli_close($conn);
?>