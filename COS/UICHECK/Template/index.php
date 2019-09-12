<?php include 'quotecall.php';?>
<?php include 'insertquote.php';?>
<?php $si=sizeof($quoteid);?>
<?php session_start();

 if(!isset($_SESSION['user']))
        {
                 echo "<script> location.href='../../login.php'; </script>";
        } 
              $name=$_SESSION['user'];

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

     <link rel="stylesheet" type="text/css" href="css/style.css">
     <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
     <script type="text/javascript" src="js/country.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
     <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/additional-methods.js"></script>

     

     <!--    <script type="text/javascript" src="js/bootstrap.min.js"></script>-->

 </head>

 <body>
     <header>
         <!--div class="codem-header"-->
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
						<li class="login"><a href="../../logout.php">Logout</a></li>
                         <li class=""><a href="#"><i class=""></i></a></li>
                         <li class="menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                     </ul>
                 </div>
             </div>
         </div>


     </header>

     <div class="body1">
         <li>Order Checkout</li>
     </div>
     <div class="body2" align="center">
         <p><span style="color:black">Home</span><span style="color:#C0C0C0">-Shop</span></p>

     </div>
     <div class="container">

         <div class="row">
             <div class="col-md-9">
                 <div class="billing">
                     <p align="left"><b>Billing Details:</b></p>
                 </div>
                 <hr>
                 <form id="validate" method="post" >
                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="firstname">First name </label><span class="error">*</span>
                             <input type="text" class="form-control" id="firstname" name="firstname">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="Last name">Last name</label><span class="error">*</span>
                             <input type="text" class="form-control" id="lastname" name="lastname">
                         </div>
                         <div class="form-group col-md-12">
                             <label for="Country">Country</label><span class="error">*</span>
                             <!--select id="country" name="country" class="form-control" onclick="function()"!-->


                             <select id="country" class="form-control" name="country">
                                 <option> --please select---</option>
                             </select>






                         </div>
                         <div class="form-group col-md-12">
                             <label for="Address">Address</label><span class="error">*</span>
                             <input type="text" class="form-control" id="address" name="address">
                             <br>

                         </div>
                         <div class="form-group col-md-12">
                             <label for="Town/City">Town/City</label><span class="error">*</span>
                             <input type="text" class="form-control" id="town" name="town" data-validate="{required: true,lettersonly: true}">
                         </div>
                         <div class="form-group col-md-12">
                             <label for="State">State</label><span class="error">*</span>


                             <select class="form-control" id="state" name="state">
                             </select>
                         </div>




                         <div class="form-group col-md-12">
                             <label for="Post/Zip code">Post/Zip code</label><span class="error">*</span>
                             <input type="text" class="form-control" id="postcode" name="postcode">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="Phone">Phone</label><span class="error">*</span>
                             <input type="text" class="form-control" id="phone" name="phone">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="E-mail">E-mail</label><span class="error">*</span>
                             <input type="e-mail" class="form-control" id="email" name="email" type="email">
                         </div>
                       
                             <!--input class="block" type="submit" value="Save Address" name="submit" id="submit" /-->
                   
                         
                         <div class="checkbox">
                             <input type="checkbox"name="create an account">
                             <label> Create an account ?</label>

                             <br>
                             <p> Create an account by entering the information below.If you are returning customer please login</p>
                         </div>

                         <div class="form-group col-md-12">
                             <label for="Account Password">Account Password</label><span class="error">*</span>
                             <input type="Password" class="form-control" id="Account password" name="password">
                         </div>
                         <div class="checkbox">
                             <input type="checkbox" name="Ship to a Different Address"> <label>Ship to Different Address?</label>
                         </div>
                         <div class="form-group col-md-12">
                             <div class="space">
                                 <label for="Order Notes">Order Notes</label><span class="error">*</span>
                                 <input type="text" class="form-control" id="Notes" name="notes">
                             </div>
                         </div>



                     </div>

                 </form>





             </div>

             <div class="col-md-3">
                <div class="cart1">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="Order">
                                <p align="left"><b>Your Order</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>

                    <!--form-->

                    <div class="row">


                        <div class="col-md-9">


                            <label for="Products"><b>Products</b> </label>
                        </div>
                        <div class="col-md-3">
                            <label for="Total"><b>Total </b></label>
                        </div>
                    </div>

                    <div class="row">
                        <?php for($quoteid=0;$quoteid<$si;$quoteid++){ ?>

                        <div class="col-md-8">


                            <label for="Products"><?php echo "$minipname[$quoteid]"?></label>
                        </div>

                        <div class="col-md-4">

                            <label for="Total" style="color:tomato"> <?php echo "$minipprice[$quoteid]"?></label>

                        </div>
                        <?php } ?>
                    </div>

                    <!--div class="form-group col-9">


                                     <label for="Products">Pocket linen shirt </label>
                                 </div>

                                 <div class="form-group col-3">
                                     <label for="Total" style="color:tomato">$151.59 </label>
                                 </div>


                                 <div class="form-group col-9">


                                     <label for="Products">bukle wrap shirt </label>
                                 </div>

                                 <div class="form-group col-3">
                                     <label for="Total" style="color:tomato">$53.99</label>

                                 </div-->
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">


                            <label for="Products">Subtotal </label>
                        </div>

                        <div class="col-md-4">
                            <label for="Total" style="color:tomato"><?php echo "$$totprice"?> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-8">
                            <label for="Products">Total </label>
                        </div>

                        <div class="col-md-4">
                            <label for="Total" style="color:tomato"><?php echo "$$totprice"?> </label>
                        </div>

                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="create an account"><label> Create an account ?</label><br>
                        <p><b>The lorem ipsum text is usually a section of a Latin text by Cicero with words altered,
                                added and removed to make it nonsensical.[1] </b></p>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" name="create an account"><label>Stripe payment </label><br>

                    </div>


                    <button type="button" class="block" id="submit">Place Order</button>





                    <!--/form-->
                </div>
             </div>
         </div>
     </div>

     <div class="footer">
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
         <div class="container">
             <div class="row">
                 <div class="col-md-3">
                     <ul class="footer-list">
                         <li><img src="images/footer-logo.jpg" class="img-fluid logo" alt="logo" title="Codem Online Store" /></li>
                         <li>© Copyright 2019</li>
                         <li><img src="images/footer-payment-icons.jpg" class="img-fluid logo" alt="logo" /></li>
                     </ul>
                 </div>


                 <div class="col-md-3">
                     <ul class="footer-list">
                         <li><a href="#">About</a></li>
                         <li><a href="#">Blogs</a></li>
                         <li><a href="#">Contact</a></li>
                         <li><a href="#">FAQs</a></li>
                     </ul>
                 </div>

                 <div class="col-md-3">
                     <ul class="footer-list">
                         <li><a href="#">PrivacyPolicy</a></li>
                         <li><a href="#">Returns</a></li>
                         <li><a href="#">Promotions</a></li>
                         <li><a href="#">Orders Tracking</a></li>
                     </ul>
                 </div>

                 <div class="col-md-3">
                     <ul class="footer-list">
                         <li><b>+01-3-8888-6868</b></li>
                         <li>38 Block Street ,sydney,Australia</li>
                         <li> <a href="#"><i class="fa fa-facebook"></i></a>
                             <a href="#"><i class="fa fa-twitter"></i></a>
                             <a href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                 </div>

             </div>
         </div>
     </div>

 </body>
 <script type="text/javascript" src="js/main.js"></script>


 </html>



 <!--<header>
<div class="codem-header">
<div class="row">
<div class="col-xl-2 col-md-2">
<div class="header-logo">
<a href="index.html"><img src="images/logo.png" class="img-fluid logo" alt="logo" title="Codem Online Store"></a>
</div>

</div>
<div class="col-xl-10 col-md-10">
<div class="header-content">
<ul class="header-list float-left">
<li><a href="#">Home</a></li>
<li><a href="#">Shop</a></li>
</ul>
<ul class="header-list float-right">
<li class="register"><a href="#">Register</a></li>
<li class="login"><a href="#">Login</a></li>
<li class="cart"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
<li class="menu"><a href="#"><i class="fa fa-bars"></i></a></li>
</ul> 
</div>
</div>
</div>
</div>
</header>
