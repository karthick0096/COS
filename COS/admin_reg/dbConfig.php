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

('$_POST[name]','$_POST[email_address]','$_POST[mobile_no]','$_POST[password]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "1 record added";

 

mysqli_close($con)

?>

</body>

</html>


