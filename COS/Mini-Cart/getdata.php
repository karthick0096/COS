<?php
if(isset($_POST['pname'])){
$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$db = mysqli_connect("localhost", "root", "pass2word", "quote");
$sql = "INSERT INTO quotetable (Productname,Productprice) VALUES ('$pname', '$pprice')";
$result=mysqli_query($db, $sql);
if($result==true){
echo "inserted ";
}
}
?>