
<?php
if(isset($_GET['productid'])){
$id = $_GET['productid'];
} else {
echo "failed";
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "pass2word";
$dbname = "sample";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT Name, Price, Thumbnail FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$productname[]=$row["Name"];
$productprice[]=$row["Price"];
$j[]=$row["Thumbnail"];  
}
} else {
echo "0 results";
}
$conn->close();
?>
