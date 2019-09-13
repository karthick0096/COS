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
  
$sql = "SELECT * FROM customer ORDER BY ID ASC LIMIT $start_from, $limit";  
$rs_result = $conn->query($sql);

if ($rs_result->num_rows > 0) {
// output data of each row
while($row = $rs_result->fetch_assoc()) {
    $id[]=$row["ID"];
    $name[]=$row["name"];
     $email[]=$row["email_address"];
     $mobile[]=$row["mobile_no"];
     
   
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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/ad-cust.css">

</head>

<body>
    <div class="row">
        <div class="col-md-1">

            <div class="main" style="height:100%">
                <li><a href="http://localhost/admin/product/admin_product/fetch1.php" style="font-size: 15px;"><i class="fa fa-cube"></i></a></li>
                <li><a href="http://localhost/admin/product/admin_product/fetch1.php">Catalog</a></li>
                <br>
                <li><a href="http://localhost/admin/admin_customer/ad-cust1.php#"><i class="fa fa-male"></i></a></li>
                <li><a href="http://localhost/admin/admin_customer/ad-cust1.php#" style="font-size: 15px;">Customers</a></li>
            </div>
        </div>

        <div class="col-md-11">
            <div class="main1">
                <p>Customers
                    <button type="button" class="block"><a href="http://localhost/admin/admin_customer/cust/customer.php">Add New Customer</a></button>
                </p>
            </div>
            <br>
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
                  <!--  <div class="actionblock1">

                        <a href="#" class="previous" style="margin-left: 30px">&#8249; </a>

                        <li class="border"style="margin-left: 20px" >1</li><span style="margin-left: 10px">of 3</span>
                        <a href="#" class="next"  style="margin-right: 10px"> &#8250;</a>


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

    
    
$sql = "SELECT COUNT(id) FROM customer";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class=' pagination float-right'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<a href='ad-cust1.php?page=".$i."'>".$i."</a>";
  
};  
echo $pagLink . "</div>";  
?>




                </div>
            </div>


            <br>

            <div class="main3">
                <table class="table table-striped">
                    <thead bgcolor="black">
                        <tr>
                            
                            <th scope="col">ID<span style="padding:0.2px"><i class="fa fa-long-arrow-down"></i></span></th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Group</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Zip</th>
                            <th scope="col">Country</th>
                            <th scope="col">State/Province</th>
                            <th scope="col">Customer Since</th>
                            <th scope="col">Website</th>
                            <th scope="col">Confirmed Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0;$i<$si;$i++){ ?>
                        <tr>

                           
                            <td><?php  echo "$id[$i]"?></td>
                            <td><?php echo" $name[$i]"?></td>
                            <td><?php echo" $email[$i]"?></td>
                            <td>General</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Dec 17,2018 5:35:49 PM</td>
                            <td>Main Website</td>
                            <td>Confirmation Not Required</td>
                            <td><a href="http://localhost/admin/admin_customer/cust/customer.php">Edit</a></td>
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
