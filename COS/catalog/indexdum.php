<?php session_start();

 if(!isset($_SESSION['user']))
        {
                 echo "<script> location.href='../login.php'; </script>";
        } 
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

$sql = "SELECT ID, Name, Price,Thumbnail FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
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

$si=sizeof($id);

//session_start();
//var_dump($_SESSION);
        
        $name=$_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<title>Codem Online Store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<form method="post">
<header>
<div class="codem-header">
<div class="row">
<div class="col-xl-2 col-md-2">
<div class="header-logo">
<a href="http://localhost/COS/catalog/indexdum.php"><img src="images/logo.png" class="img-fluid logo" alt="logo" title="Codem Online Store"></a>
</div>

</div>
<div class="col-xl-10 col-md-10">
<div class="header-content">
<ul class="header-list float-left">
<li><a href="http://localhost/COS/catalog/indexdum.php">Home</a></li>
<li><a href="http://localhost/COS/catalog/indexdum.php">Shop</a></li>
</ul>
<ul class="header-list float-right">
<li class="register"><a href="#"><?php echo "$name"?>'s Account</a></li>
<li class="login"><a href="../logout.php">Logout</a></li>
<li class="cart"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
<li class="menu"><a href="#"><i class="fa fa-bars"></i></a></li>
</ul> 
</div>
</div>
</div>
</div>
</header>
<section class="main-title">
<div class="container">
<h3>Shop Default</h3>
<p>Home - Shop</p>
</div>
</section>
<section class="pagination">
<div class="container">
<ul>
<li>Showing 1-12 of 45 results</li>
<li>View : 12 24 All</li>
</ul>
</div>
</section>
<section class="products-list">
<div class="codem-container">
<div class="row">
<?php for($id=0;$id<$si;$id++){ ?>
<div class="col-md-3"><a href="../Mini-Cart/pdp.php?productid=<?php echo $id ?>"style="
width: inherit;">
<?php echo "<img src='images/".$j[$id]."' >";?></a>
<p class="name float-left"><?php echo" $productnames[$id]"?></p>
<p class="price float-right"><?php echo" $$productprice[$id]"?></p>
</div>
<?php } ?>
</div> 


</div> 

</section>



<section class="features">
<div class="codem-container">
<div class="row">
<div class="col-xl-3 col-md-3">
<i class="fa fa-dollar fa-icon"></i>
<p><strong>Free Delivery</strong></p>
<p>For all order over 99$</p>
</div>
<div class="col-xl-3 col-md-3">
<i class="fa fa-exchange fa-icon"></i>
<p><strong>30 Days Return</strong></p>
<p>If goods have Problems</p>
</div>
<div class="col-xl-3 col-md-3">
<i class="fa fa-credit-card fa-icon"></i>
<p><strong>Secure Payment</strong></p>
<p>100% Secure payment</p>
</div>
<div class="col-xl-3 col-md-3">
<i class="fa fa-question-circle fa-icon"></i>
<p><strong>24/7 Support</strong></p>
<p>Dedicated support</p>
</div>
</div>

</div>

</section>
<footer>
<div class="codem-footer">
<div class="codem-container">
<div class="row">
<div class="col-xl-4 col-md-4">
<a href="#"><img class="logo" src="images/logo.png"></a>
<p class="footer-copyright">© Copyright 2019 Capie</p>
<ul class="payment-logos">
<li><a href="#"><img src="images/footer/skrill.jpg"></a></li>
<li><a href="#"><img src="images/footer/bitcoin.jpg"></a></li>
<li><a href="#"><img src="images/footer/american-express.jpg"></a></li>
<li><a href="#"><img src="images/footer/paypal.jpg"></a></li>
<li><a href="#"><img src="images/footer/master-card.jpg"></a></li>
<li><a href="#"><img src="images/footer/visa.jpg"></a></li>
</ul>
</div>
<div class="col-xl-2 col-md-2 footer-second">
<ul>
<li><a href="#">About</a></li>
<li><a href="#">Blogs</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">FAQs</a></li>
</ul>
</div>
<div class="col-xl-2 col-md-2 footer-third">
<ul>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Returns</a></li>
<li><a href="#">Promotions</a></li>
<li><a href="#">Orders Tracking</a></li> 
</ul>
</div>
<div class="col-xl-4 col-md-4">
<p class="footer-phone">+01-3-8888-6868</p>
<p>38 Block Street, Sydney, Australia</p>
<i class="fa fa-facebook"></i>
<i class="fa fa-twitter"></i>
<i class="fa fa-instagram"></i>
</div>
</div>
</div>
</div>
</footer>
</form>
</body> 
</html>