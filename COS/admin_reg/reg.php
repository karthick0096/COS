<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/respond.js"></script>
    <script src="https://use.fontawesome.com/156c9e7818.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <header>

        <div class="row">

            <div class="col-xl-2 col-md-2">

                <div class="header-logo float-right">
                    <a href="#"><img src="images/codem-logo.png" class="img-fluid logo" alt="logo" title="Codem Online Store" align="left"></a>
                </div>

            </div>

            <div class="col-xl-10 col-md-10">
                <div class="header-content">

                    <ul class="header-list float-left">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                    </ul>

                    <ul class="header-list float-right">
                        <li class="register"><a href="reg.php">Register</a></li>
                        <li class="login"><a href="../login.php">Login</a></li>
                        <li class="cart"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        <li class="menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>

                </div>
            </div>

        </div>
    </header>

    <section class="main content">
        <div class="body1">
            <li>Account</li>
        </div>
        <div class="body2" align="center">
            <p><span style="color:black">Home</span><span style="color:#C0C0C0">-Shop</span></p>
        </div>

        <div class="body3">
            <span><a style="color:tomato"  href="reg.php">Register</a></span><span style="color:black">-</span><span><a style="color:black" href="../login.php">Login</a></span>
        </div>
        <!--Login-->
        <table align="center">
            <div>
                <form action="" method="post">

                    <div class="form-group">
                        <tr>
                            <td><input type="Name" class="box" id="Name" placeholder="Name" name="name"></td>
                        </tr>
                    </div>


                    <div class="form-group">
                        <tr>
                            <td><input type="email" class="box" id="email" placeholder="Email address" name="email_address">
                            </td>
                        </tr>
                    </div>

                    <div class="form-group">
                        <tr>
                            <td> <input type="Mobile No" class="box" id="Mobile No" placeholder="Mobile No" name="mobile_no"></td>
                        </tr>
                    </div>

                    <div class="form-group">
                        <tr>
                            <td> <input type="password" class="box" id="pwd" placeholder="Password" name="password"></td>
                        </tr>
                    </div>

                    <div class="form-group">
                        <tr>
                            <td> <input type="password" class="box" id="Confirm  pwd" placeholder="Confirm Password" name="Confirm pwd"></td>
                        </tr>
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <tr>
                                <td> <label><input type="checkbox" name="remember" style="display: inline-block;"> Subscribe and receive offers</label></td>
                            </tr>
                        </div>
                    </div>
                    <div class="form-group">

                        <!--<input type = "submit" value = "submit "/><br />-->
                        <tr>
                            <td><input type="submit" name="REGISTER" value="REGISTER" style=" background-color: tomato ; padding:5px 110px; color:white"></td>
                        </tr>
                    </div>
                </form>


            </div>
        </table>
    </section>

    <div class="acc">
    </div>


    <br>

    <!--footer-->
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
                        <ul class="footer-list">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <ul class="footer-list">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Promotions</a></li>
                            <li><a href="#">Orders Tracking</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <ul class="footer-list">
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
<?php

$con = mysqli_connect("localhost","root","pass2word","sample");
if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }
$sql="INSERT INTO customer (name, email_address,mobile_no,password)

VALUES

('$_POST[name]','$_POST[email_address]','$_POST[mobile_no]','$_POST[password]');";

 
if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }
  

echo "<script> location.href='../catalog/indexdum.php'; </script>";
mysqli_close($con);

?>



 	
