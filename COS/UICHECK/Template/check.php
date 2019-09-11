<?php
$servername = "127.0.0.1";
$username = "root";
$password = "kuttyammu";
$dbname = "checkout";

// Create connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
} 
//if(isset($_POST['submit'])){ 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$address = $_POST['address'];
    $town = $_POST['town'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $phone= $_POST['phone'];
    $email = $_POST['email'];


$sql = "INSERT INTO Billingaddress (Firstname, Lastname,country,address,Town,state,postcode,Phone,Email )VALUES ('$firstname', '$lastname', '$country','$address', '$town','$state' ,'$postcode' ,'$phone','$email')";

if ($conn1->query($sql) === TRUE) {
    echo"Address added";
} else {
    echo "Error: " . $sql . "<br>" . $conn1->error;
}


$conn1->close();

?>



