<?php
//include_once('dbConfig.php');
//$query="select * from product";
//$result=mysqli_query($query);

$con = mysqli_connect("localhost","root","pass2word","sample");


if (!$con)

  {

  die('Could not connect: ' . mysqli_error());
}

$query="select * from products";
$result=mysqli_query($con,$query);
//if (!mysqli_query($con,$query))

  //{

 // die('Error: ' . mysqli_error($con));

  //}
echo "connected";

    echo"<table border=1 >";
                   echo "<tr><td>ID</td>
                   <td>Thumbnail</td>
                            <td>Name</td>
                            <td>Type</td>
                            <td>AttributeSet</td>
                            <td>SKU</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td> Visibility</td>
                            <td>Status</td>
                            <td>Websites</td>
                            <td>ProductSize</td>
                            <td>Action</td></tr>\n";
  while($rows=mysqli_fetch_assoc($result))
  {
      
   echo "<tr>

        <td> {$rows['ID']}</td>
        <td>  {$rows['Thumbnail']}</td>
        <td>  {$rows['Name']}</td>
        <td>  {$rows['Type']}</td>
        <td>  {$rows['AttributeSet']}</td>
        <td>  {$rows['SKU']}</td>
        <td>  {$rows['Price']}</td>
        <td> {$rows['Quantity']}</td>
        <td>{$rows['Visibility']}</td>
        <td>  {$rows['Status']}</td>
        <td> {$rows['Websites']}</td>
        <td>  {$rows['ProductSize']}</td>
</tr>\n";
  }
echo "<table>";
?>