<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "pass2word", "sample");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
    $name= mysqli_real_escape_string($db, $_POST['Product_Name']);
  	$des= mysqli_real_escape_string($db, $_POST['Description']);
    $aset=mysqli_real_escape_string($db, $_POST['Attribute_set']);
    $tax=mysqli_real_escape_string($db, $_POST['Taxclass']);
  	$sku=mysqli_real_escape_string($db, $_POST['SKU']);
  	$price=mysqli_real_escape_string($db, $_POST['Price']);
  	$quantity=mysqli_real_escape_string($db, $_POST['Quantity']);
    $status=mysqli_real_escape_string($db, $_POST['status']);
    $cata=mysqli_real_escape_string($db, $_POST['categories']);
    $visi=mysqli_real_escape_string($db, $_POST['visibility']);
      
  	// Get text
  	// image file directory
  	
  	$target = "images/".basename($image);
    
  
  	$sql = "INSERT INTO products(Thumbnail,Name, Description, AttributeSet,Taxclass,SKU, Price,Quantity,Status,categories,visibility) VALUES ('$image','$name','$des','$aset','$tax','$sku','$price','$quantity','$status','$cata','$visi')";
  	// execute query
    // $sql = "INSERT INTO products2(Thumbnail,Name, Description, AttributeSet,Taxclass,SKU, Price,Quantity,Status,categories,visibility) 
//VALUES ('$image','$name','$des','$aset','$tax','$sku','$price','$quantity','$status','$cata','$visi');";
  	mysqli_query($db, $sql);
      //echo $sql;

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
         echo "<script> location.href='http://localhost/admin/product/admin_product/fetch1.php'; </script>";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }

 
?>








