<?php
$servername = "localhost";
$username = "root";
$password = "pass2word";
$dbname = "sample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 


$limit =10;  
if (isset($_GET["page"])) 
{ $page  = $_GET["page"]; } 
else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM products ORDER BY ID ASC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql);  

//$sql = "SELECT * FROM products";
//$result = $conn->query($sql);

if ($rs_result->num_rows > 0) {
// output data of each row
while($row = $rs_result->fetch_assoc()) {
    $id[]=$row["ID"];
    $image[]=$row["Thumbnail"];
     $name[]=$row["Name"];
     $des[]=$row["Description"];
       $aset[]=$row["AttributeSet"];
       $tax[]=$row["Taxclass"];
        $sku[]=$row["SKU"];
       $price[]=$row["Price"];
       $quan[]=$row["Quantity"];
       $status[]=$row["Status"];
       $categories[]=$row["categories"];
       $visi[]=$row["visibility"];
      
   
}
    
   
} else {
echo "0 results";
}
$conn->close();
$si=sizeof($id);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/respond.js"></script>
    <script src="https://use.fontawesome.com/156c9e7818.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ad-product.css">

</head>

<body>
    <div class="row">
        <div class="col-md-1">

            <div class="main" style="height:100%">
                <li><a href="http://localhost/admin/product/admin_product/fetch1.php"><i class="fa fa-cube"></i></a></li>
                <li><a href="http://localhost/admin/product/admin_product/fetch1.php" style="font-size: 15px;">Catalog</a></li>
                <br>
                <li><a href="http://localhost/admin/admin_customer/ad-cust1.php"><i class="fa fa-male"></i></a></li>
                <li><a href="http://localhost/admin/admin_customer/ad-cust1.php" style="font-size: 15px;">Customers</a></li>
            </div>
        </div>

        <div class="col-md-11">
            <div class="main1">
                <p>product
                    <!--<button type="button" class="block">Add product</button>-->
                    <button onclick="window.location.href = 'http://localhost/admin/product/admin_edit/edit2.php';" style="float: right">Add Product</button>
                </p>
            </div>
            <br>

            <!--<div class="main2">
                <li><i class="fa fa-angle-right"></i></li>
                <li><input type="text" name="" value=""></li>
                <li>of 3</li>
                <li><i class="fa fa-angle-left"></i></li>
                
                    
            </div>
            <div class=leftarrow>
                <a href="#"><i class="fa fa-angle-right"></i></a>
            </div>-->

            <div class="second float-left">
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-outline-secondary">Action</button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>

                        </div>
                    </div>
                    <div class="actionblock">
                        <li style="list-style-type: none ""margin-left: 100px"> 49 Records found</li>
                    </div>

                </div>
            </div>

            <div class="second float-right">
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-outline-secondary" style="width:50px">10</button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <!--<span style="border-bottom: 40px">per page</span>-->
                        <span style="margin-left: 20px">per page</span>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Edit</a>
                        </div>
                    </div>
                   <!-- <div class="actionblock1">

                        <a href="#" class="previous" style="margin-left: 30px">&#8249; </a>

                        <li class="border" style="margin-left: 20px">1</li><span style="margin-left: 10px">of 3</span>
                        <a href="#" class="next" style="margin-right: 10px"> &#8250;</a>


                    </div>-->
                    <div class="actionblock1">
<?php 
    $servername = "localhost";
$username = "root";
$password = "pass2word";
$dbname = "sample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

    
    
$sql = "SELECT COUNT(id) FROM products";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class=' pagination float-right'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<a href='fetch1.php?page=".$i."'>".$i."</a>";
  
};  
echo $pagLink . "</div>";  
?>
    
                       

                    </div>

                </div>
            </div>


            <br>


            <div class="main3">
                <table class="table table-striped">
                    <thead bgcolor="black">
                        <tr>

                            <th scope="col">ID</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">AttributeSet</th>
                            <th scope="col">Taxclass</th>
                            <th scope="col">SKU</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>

                            <th scope="col">status</th>
                            <th scope="col">categories</th>
                            <th scope="col"> visibility</th>
                            <th scope="col"> Action</th>
                        </tr>

                    </thead>
                    <tbody> <?php for($i=0;$i<$si;$i++){ ?>
                                                <tr>


                            <td><?php  echo "$id[$i]"?></td>
                            <td><?php echo "<img src='../admin_edit/images/".$image[$i]."' style=' height: 50px; width: 50px;'>";?></td>
                            <td> <?php echo" $name[$i]"?></td>
                            <td> <?php echo" $des[$i]"?></td>
                            <td> <?php echo" $aset[$i]"?></td>
                            <td> <?php echo" $tax[$i]"?></td>
                            <td> <?php echo" $sku[$i]"?></td>
                            <td> <?php echo" $price[$i]"?></td>
                            <td> <?php echo" $quan[$i]"?></td>
                            <td> <?php echo" $status[$i]"?></td>
                            <td>  <?php echo" $categories[$i]"?></td>
                            <td>  <?php echo" $visi[$i]"?></td>
                            <td><a href="http://localhost/admin/product/admin_edit/edit2.php#">Edit</a></td>
                        </tr>
                                                
 <?php }?>

                        
                    </tbody>
                </table>
            </div>
            <div class="hgt">

            </div>

            <div class="foot">
                <li>Copyright</li>
                <li><i class="fa fa-copyright">2019.</i></li>
                <li>All Rights Reserved. </li>
            </div>


        </div>

    </div>

</body>

</html>