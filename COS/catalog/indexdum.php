
<?php
session_start();
$name=$_SESSION['user'];
$cid=$_SESSION['id'];

include 'dbcat.php';   

$servername = "localhost";
$username = "root";
$password = "pass2word";
$dbname = "quote";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT customerid, Quoteid,Productimage, Productname, Productprice FROM quotetable where customerid ='$cid'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $custid[]=$row["customerid"];
        $minipname[]=$row["Productname"];
        $minipprice[]=$row["Productprice"];
        $quoteid[]=$row["Quoteid"];
        $qid[]=$row["Quoteid"];
        $minipimage[]=$row["Productimage"];
        $pi=sizeof($quoteid);
        $tp=array_sum($minipprice);
        
$count=count($quoteid);
    }
} else {

    $count=0;
    $pi=0;
    $tp=0;
    
}
mysqli_close($conn);


$si=sizeof($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Codem Online Store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<body>
<form method="post">
<header>
<div class="codem-header">
<div class="row">
<div class="col-xl-2 col-md-2">
<div class="header-logo">
<a href="#"><img src="images/logo.png" class="img-fluid logo" alt="logo" title="Codem Online Store"></a>
</div>
</div>
<div class="col-xl-10 col-md-10">
<div class="header-content">
<ul class="header-list float-left">
<li><a href="http://localhost/COS/catalog/indexdum.php">Home</a></li>
<li><a href="http://localhost/COS/catalog/indexdum.php">Shop</a></li>
</ul>
<ul class="header-list float-right">
<li class="register"><a href="#"><?php echo $name?>'s Account</a></li>
<li class="login"><a href="../logout.php">Logout</a></li>
<li class="cart"><a href="#"><i class="fa fa-shopping-cart bdg" nbr=<?php echo $count ?>  style="font-size:20px" onclick="myFunction()"></i></a></li>
<li class="menu"><a href="#"><i class="fa fa-bars"></i></a></li>
</ul> 
</div>
</div>
</div>
</div>
</header>
<div class="row">
<div class="col-md-9">
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
</div>
<div class="col-md-3">      
<div class="container">
   
<div class="mini-cart" id="myDIV" style="display: none;" >
 <div class="row" style="overflow-y: scroll; height:200px;">
<?php for($quoteid=0;$quoteid<$pi;$quoteid++){ ?>
<div class="col-md-4">
<div class="minicart-row2">
<li><?php echo "<img src='../catalog/images/".$minipimage[$quoteid]."' width='70%' height='70%' >";?></li>
</div>
</div>                         
<div class="col-md-5">                         
<div class="minicart-row2">
  <input type="hidden" name="minicartid" value="<?php echo $qid[$quoteid]; ?>">
    <li class="minicart-li1 text-left"><?php echo "$minipname[$quoteid]"?></li>
<li class="minicart-li2 text-left"><?php echo "$$minipprice[$quoteid]"?></li>                            
</div>
</div>
<div class="col-md-3">
<div class="minicart-row2">
    <button type="submit" name='delete' formaction="delete.php"><li class="close-icon"><a href="#"><i class="fa fa-times" aria-hidden="true" ></i></a></li></button>
</div>
</div>
<?php  }?>
</div>
<hr><?php if($count!=0){?> 
<div class="row" id="total">
<div class="col-md-4">
<div class="minicart-row3">
<li>TOTAL:</li>
</div>
</div>
<div class="col-md-4">
</div>
<div class="col-md-4">
<div class="minicart-row3">
<li><?php echo "$$tp"?></li>
</div>
</div>
</div> <?php } 
    else {?>  
    <script type="text/javascript">document.getElementById('total').style.display = 'none';</script>
    <li>You have no items in the cart</li>
<?php }?>
    <?php if($count!=0){?>                  
<div class="row">
<div class="col-md-12 text-center">
<div class="check-out">
<a href=../UICHECK/Template/index.php>   <li><button type="button" class="checkout">CHECK OUT</button></li></a>
</div>
</div>
</div>
     <?php } 
    else {?>  
    <script type="text/javascript">document.getElementById('checkout').style.display = 'none';</script>
<?php }?>
</div>
</div>                                
</div>
</div>
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