<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "pass2word", "quote");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['addtocart'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	
  	$des= mysqli_real_escape_string($db, $_POST['Description']);
  	$sku=mysqli_real_escape_string($db, $_POST['SKU']);
  	$price=mysqli_real_escape_string($db, $_POST['Price']);
  	$quantity=mysqli_real_escape_string($db, $_POST['Quantity']);
  	// Get text
  	

  	// image file directory
  	
  	$target = "images/".basename($image);
  
  	$sql = "INSERT INTO quotetable (Name, Description, SKU, Price,Quantity) VALUES ('$image', '$des', '$sku' ,'	$price','$quantity')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
 
?>