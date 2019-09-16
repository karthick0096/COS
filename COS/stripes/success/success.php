<?php session_start();

 if(!isset($_SESSION['user']))
        {
                 echo "<script> location.href='../../login.php'; </script>";
        } 
              $name=$_SESSION['user'];

?>
<?php include 'insertquote.php';?>



<?php include 'fetchadd.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/respond.js"></script>
    <script src="https://use.fontawesome.com/156c9e7818.js"></script>
    <link rel="stylesheet" type="text/css" href="css/success.css">

</head>

<body>
    <header>
        
            <div class="row">
                <div class="col-xl-2 col-md-2">
                    <div class="header-logo">
                        <a href="http://localhost/COS/stripes/success/delete.php"><img src="images/logo.png" class="img-fluid logo" alt="logo" title="Codem Online Store" ></a>
                    </div>

                </div>
                <div class="col-xl-10 col-md-10">
                    <div class="header-content">
                        <ul class="header-list float-left">
                            <li><a href="http://localhost/COS/stripes/success/delete.php">Home</a></li>
                            <li><a href="http://localhost/COS/stripes/success/delete.php">Shop</a></li>
                        </ul>
                        <ul class="header-list float-right">
                            <li class="register"><a href="#"><?php echo "$name"?>'s Account</a></li>
						<li class="login"><a href="delete2.php">Logout</a></li>
                            <li class="cart"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            <li class="menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                        </ul>
                    
                </div>
            </div>
        </div>
    </header>
    
    
    <!--Success page  content-->
<section class="main pdp">


<div class="body1">
<li>Order Success</li>
</div>

<div class="body2" align="center">
<p><span style="color:black">Home</span><span style="color:#C0C0C0">-Shop</span></p>
</div>

<div class="container">
<div class="row">

<div class="col-md-8">
<P>THANK YOU FOR YOUR PURCHASE!</p>

<br>
<div class="success1">
<p >Your order number is:000002807</p>
<p>We'll email you an order confirmation with details<p>
</div>

<br>
<hr>


   
        <div class="items">

<div class="col-xs-3 ">
<ul class="items-list float-left">
<li>Product</li>
</ul>
</div>


<div class="col-xs-3 col-xs-3 col-xs-3 ">
<ul class="items-list float-right">
<li>Quantity</li>
<li>Price</li>
<li>Total</li>
</ul>
</div>
</div>

<br>
<hr>

<!--<div class="prod details">
<div class="col-xs-3 ">
<ul class="details-list float-left">
<li><img src="images/or1.jpg" width="55px" height="70px"/></li>
</ul>

<ul class="details1">
<li><b>Sigma Beauty</b></li>
<li style="color:Lightgray">Best of Sigma Brush Set</li>
</ul>

</div>

<div class="col-xs-3 col-xs-3 col-xs-3 ">
<ul class="details-list float-right">
<li>1</li>
<li>$26.90</li>
<li>$26.90</li>
</ul>
</div>

</div>-->





    <div class="items">
    <?php for($quoteid=0;$quoteid<$si;$quoteid++){ ?>
    
<div class="col-xs-3 ">
<ul class="items-list float-left">
<li><?php echo "<img src='../../catalog/images/".$minipimage[$quoteid]."' width='55px' height='50px' >";?></li>

   </ul>

<li style="color:Lightgray"><?php echo "$minipname[$quoteid]"?></li>
 
</div>


<div class="col-xs-3 col-xs-3 col-xs-3 ">
<ul class="items-list float-right">
<li>1</li>
<li><?php echo "$minipprice[$quoteid]"?></li>
<li><?php echo "$minipprice[$quoteid]"?></li>
</ul>
</div>
   
<br><hr>
     <?php } ?>

    </div>

<!--div class="items">

<div class="col-xs-3 ">
<ul class="items-list float-left">
<li><img src="images/or3.jpg" width="55px" height="90px"/></li>
</ul>

<li><b>Benefit Cosmetics</b></li>
<li style="color:Lightgray">Chachatint cheeks and lip stain</li>
<li><span><b>size name</b></span><span>:10ml</span></li>


</div>


<div class="col-xs-3 col-xs-3 col-xs-3 ">
<ul class="items-list float-right">
<li>1</li>
<li>$26.90</li>
<li>$26.90</li>
</ul>
</div>
<br><hr>
</div>


<div class="items">

<div class="col-xs-3 ">
<ul class="items-list float-left">
<li><img src="images/or2.jpg" width="55px" height="70px"/></li>
</ul>

<li><b>Dirty Works</b></li>
<li style="color:Lightgray">Collagen on call Overnight Face Lift ,50 ml</li>

</div>


<div class="col-xs-3 col-xs-3 col-xs-3 ">
<ul class="items-list float-right">
<li>1</li>
<li>$26.90</li>
<li>$26.90</li>
</ul>
</div>
<br><hr>
</div>

<div class="items">

<div class="col-xs-3 ">
<ul class="items-list float-left">
<li><img src="images/or4.jpg" width="55px" height="70px"/></li>
</ul>

<li><b>Real Techniques</b></li>
<li style="color:Lightgray">Enchanced Eye Set</li>

</div>


<div class="col-xs-3 col-xs-3 col-xs-3 ">
<ul class="items-list float-right">
<li>1</li>
<li>$26.90</li>
<li>$26.90</li>
</ul>
</div>
<br>
<hr color="black" size="40">
</div-->


<div class="items">
<div class="col-xs-8 col-xs-3 ">
<ul class="items-list float-right">
<li>Cart Subtotal</li>
<li><?php echo "$$tp"?></li>
</ul>
</div>
<br><hr>
</div>


<div class="items">
<div class="col-xs-8 col-xs-3 ">
<ul class="items-list float-right">
<li>Shipping</li>
<li>$0.00</li>
</ul>
</div>
<br><hr>
</div>


<div class="items">
<div class="col-xs-8 col-xs-3 ">
<ul class="items-list float-right">
<li>VAT (12%included)</li>
<li>$26.90</li>
</ul>
</div>
<br><hr>
</div>

<div class="items">
<div class="col-xs-8 col-xs-3 ">
<ul class="items-list float-right">
<li><b>Grand Total</b></li>
<li><b><?php echo "$$tp"?></b></li>
</ul>
</div>
<br><hr color="black" size="40">
</div>



</div>
<div class="col-md-4">
    <form method="post">
<P>SHIP TO</p>
<br>

<div class="address">
  
<table align="left">
<tr><td padding-left="1.5em"><b><?php echo "$firstname"?><?php echo "$lastname"?></b></td></tr>
<tr><td></td</tr>
<tr><td><?php echo "$address"?></td></tr>
<tr><td></td</tr>
<tr><td><?php echo "$country"?></td></tr>
<tr><td></td</tr>
<tr><td><?php echo "$state"?></td></tr>
<tr><td></td</tr>
</table>
<!--
<p><?php echo "$firstname"?></p><p><?php echo "$lastname"?></p>
<p><?php echo "$country"?></p>
<p><?php echo "$address"?></p>
<p><?php echo "$town"?></p>
    <p><?php echo "$state"?></p>
    <p><?php echo "$postcode"?></p>
    <p><?php echo "$phone"?></p>
    <p><?php echo "$email"?></p>-->
   

</div>

<br>
<div>
<button type="submit" formaction="delete.php" class="btn-block">Continue Shopping</button>
</div>
</form>
</div>
</div>

   </div>
   </div> 
   </div>
   
   
   
   
   
  
   <div class="height">
</div>

    </section>
    
    
    
    
    <!--Footer-->
<footer>
  <section class="features">
         <div class="container">
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
     

     
<div class="foot1">
<div class="container">
<div class="row">

<div class="col-md-3">
<ul class="footer-list">
<li><img src="images/footer-logo.jpg" class="img-fluid logo" alt="logo" /></li>
<li>© Copyright 2019</li>
<li><img src="images/footer-payment-icons.jpg" class="img-fluid logo" alt="logo" title="Codem Online Store" /></li>
</ul>
</div>


<div class="col-md-3">
<ul class="footer-list" >
<li><a href="#">About</a></li>
<li><a href="#">Blogs</a></li>
<li><a href="#">Contact</a></li>
 <li><a href="#">FAQs</a></li>
</ul>
</div>

<div class="col-md-3">
<ul class="footer-list" >
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Returns</a></li>
<li><a href="#">Promotions</a></li>
 <li><a href="#">Orders Tracking</a></li>
</ul>
</div>

<div class="col-md-3">
<ul class="footer-list" >
<li><b>+01-3-8888-6868</b></li>
<li>38,BlockStreet,sydney,Australia</li>
<li class="icons"><a href="#"><i class="fa fa-facebook" width: 100px;></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a></li>
</ul>
</div>

</div>
</div>



</div>
</footer>
    </body>
    </html>