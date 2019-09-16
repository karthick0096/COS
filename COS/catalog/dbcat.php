<?php 
$servername = "localhost";
$username = "root";
$password = "pass2word";
$dbname = "sample";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT ID, Name, Price,Thumbnail FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$productnames[]=$row["Name"];
$productprice[]=$row["Price"];
$id[]=$row["ID"];
$j[]=$row['Thumbnail'];
}
} else {
echo "0 results";
}
$conn->close();
?>