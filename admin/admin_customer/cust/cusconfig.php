
<html>

<body>

 

 

<?php

$con = mysqli_connect("localhost","root","pass2word","sample");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }

 


 

$sql="INSERT INTO customer (name, email_address,mobile_no,password)

VALUES

('$_POST[un]','$_POST[email]','$_POST[mn]','$_POST[password]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }


    echo "<script> location.href='http://localhost/admin/admin_customer/ad-cust1.php'; </script>";

 

mysqli_close($con)

?>

</body>

</html>


