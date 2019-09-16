<?php include 'catalogdb.php';?>
<?php include 'quote.php';?>
<?php include 'insertquote.php';?>
<?php
//session_start();
$name=$_SESSION['user'];
$cid=$_SESSION['id'];

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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="css/pdp.css">
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

        <div class="row">
            <div class="col-xl-2 col-md-2">
                <div class="header-logo">
                    <a href="../catalog/indexdum.php"><img src="images/logo.png" class="img-fluid logo" alt="logo" title="Codem Online Store"></a>
                </div>

            </div>
            <div class="col-xl-10 col-md-10">
                <div class="header-content">
                    <ul class="header-list float-left">
                        <li><a href="../catalog/indexdum.php">Home</a></li>
                        <li><a href="../catalog/indexdum.php">Shop</a></li>
                    </ul>
                    <ul class="header-list float-right">
                        <li class="register"><a href="#"><?php echo $name?>'s account</a></li>
                        <li class="login"><a href="../logout.php">Logout</a></li>
                       
                        <li class="cart"><a href="#"><i class="fa fa-shopping-cart bdg" nbr=<?php echo $count ?>  style="font-size:20px" onclick="myFunction()"></i></a></li>
                        
                        <li class="menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>

    </header>



    <section class="main pdp">


        <div class="row">

            <div class="col-md-9">
                
                    <div class="row">
                        <div class="bodycontainer">
                        <div class="body1">  
                          <p style="text-align=center;margin-left=90px;font-size: 30px"><b>Product Details</b></p>
                            <p><span style="color:black">Home</span><span style="color:#C0C0C0">-Shop</span></p>
                        </div>
  



                        <div class="container">
                            <div class="row">
                               <!--div class="col-md-2">

                                    <div class="col-md-3">
                                        <a href="#"><img src="images/new-arrivals-01.jpg" width="83px" height="115px" /></a>
                                    </div><br>
                                    <div class="col-md-3">
                                        <a href="#"><img src="images/new-arrivals-02.jpg" width="83px" height="115px" /></a>
                                    </div><br>
                                    <div class="col-md-3">
                                        <a href="#"><img src="images/new-arrivals-03.jpg" width="83px" height="115px" /></a>
                                    </div>

                                </div!-->

                                <div class="col-md-4">
                                  <input type="hidden" name="pimage" value="<?php echo "$j[$id]"?>" > <a href="#"><?php echo "<img src='../catalog/images/".$j[$id]."' width='100%' >";?></a>
                                </div>


                                <div class="col-md-6">
                                    <div class="container"style="padding-left: 50px">
                                        <table>


                                            <tr>
                                                <td>
                                                    <input type="hidden" name="pname" id="ppname" value="<?php echo "$productname[$id]"?>"><p style="font-size:30px;"><b><?php echo "$productname[$id]"?></b></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="hidden" name="pprice" id="ppprice" value="<?php echo "$productprice[$id]"?>"> <p style="color:tomato; font-size:20px;"><?php echo "$$productprice[$id]"?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="color:lightgray; font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua.</p>
                                                </td>
                                            </tr>
                                        </table>


                                        <div class="sample">
                                            <li>
                                                <div class="btn-group btn-group">

                                                    <button type="button" class="block2">
                                                        <p>-</p>
                                                    </button>
                                                    <button type="button" class="block2">
                                                        <p>1</p>
                                                    </button>
                                                    <button type="button" class="block2">
                                                        <p>+</p>
                                                    </button></div>
                                            </li>

<input type="hidden" name="pdpid" value="<?php echo $id; ?>">

                                         <li><button  type="submit" name="addtocart" id="addcart" class="block1" formaction="quote.php">Add to cart</button></li>
  <span id="response"></span>
                                        </div>

                                        <div class="height1"></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                        <br>


                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <hr>
                                </div>
                                <div class="col-md-4">
                                    <div class="class">

                                        <li>Description</li>
                                        <li style="color:lightgray">Information</li>
                                        <li style="color:lightgray">Reviews(1)</li>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <hr>
                                </div>

                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <p><b>Product Information</b></p>
                                <p>The lorem ipsum text is usually a section of a Latin text by Cicero with words altered,
                                    added and removed to make it nonsensical.[1] Lorem ipsum text is used in mock-ups of visual
                                    design projects before the actual words are put into the finished product.
                                    This is often called greeking. </p>

                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <p><b>Material Used</b></p>
                                <p>The lorem ipsum text is usually a section of a Latin text by Cicero with words altered,
                                    added and removed to make it nonsensical.[1] Lorem ipsum text is used in mock-ups of visual
                                    design projects before the actual words are put into the finished product.
                                    This is often called greeking. </p>

                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <p><b>Product Information</b></p>
                                <p>The lorem ipsum text is usually a section of a Latin text by Cicero with words altered,
                                    added and removed to make it nonsensical.[1] Lorem ipsum text is used in mock-ups of visual
                                    design projects before the actual words are put into the finished product.
                                    This is often called greeking. </p>

                            </div>
                        </div>
                        <div class="height">
                            <div class="container">
                                <div class="row">
                                    <p><b>Material Used</b></p>
                                    <p>The lorem ipsum text is usually a section of a Latin text by Cicero with words altered,
                                        added and removed to make it nonsensical.[1] Lorem ipsum text is used in mock-ups of visual
                                        design projects before the actual words are put into the finished product.
                                        This is often called greeking. </p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="container">
                <div class="mini-cart" id="myDIV" style="display: none;" >

                    <div class="row" style="overflow-y: scroll; height:200px;">
                    <?php for($quoteid=0;$quoteid<$si;$quoteid++){ ?>
                        <div class="col-md-4">
                            <div class="minicart-row2">
                                <li><?php echo "<img src='../catalog/images/".$minipimage[$quoteid]."' width='70%' height='70%' >";?></li>
                            </div>
                        </div>
                         
                        <div class="col-md-5">
                         
                            <div class="minicart-row2">
                            

                                <input type="hidden" name="minicartid" value="<?php echo $qid[$quoteid] ?>"><li class="minicart-li1 text-left"><?php echo "$minipname[$quoteid]"?></li>
                                <li class="minicart-li2 text-left"><?php echo "$$minipprice[$quoteid]"?></li>
                            
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="minicart-row2">
                                <button type="submit" name='delete' formaction="delete.php"> <li class="close-icon"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li></button>
                            </div>
                        </div>

 <?php } ?>
                    </div>
                    <hr>
                    <div class="row">

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
                    </div>

                   
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="check-out">
                                <a href=../UICHECK/Template/index.php>   <li><button type="button" class="checkout">CHECK OUT</button></li></a>
                            </div>
                        </div>
                    </div>










                </div>
                </div>
            </div>






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
    
    </form>
    <!--script>
function addtocart(pname,pprice) {
   var pname=pname;
   var pprice=pprice;
   var httpr=new XMLHttpRequest();
   httpr.open("POST" , "getdata.php",true);
   httpr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   httpr.onreadystatechange=function(){
   if(httpr.readyState == 4 &&  httpr.status == 200){
                    document.getElementById("response").innerHTML = httpr.responseText;
                } 
   }
   httpr.send("pname="+pname+"&pprice="+pprice);
  
    }
</script--!>
  
</body>

</html>



