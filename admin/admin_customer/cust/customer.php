<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/respond.js"></script>
    <script src="https://use.fontawesome.com/156c9e7818.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ad-edit.css">

</head>

<body>
    <div class="row">
      <div class="col-md-1">

            <div class="main" style="height:100%">
                <li><a href="http://localhost/admin/product/admin_product/fetch1.php"><i class="fa fa-cube"></i></a></li>
                <li><a href="http://localhost/admin/product/admin_product/fetch1.php">Catalog</a></li>
                <br>
                <li><a href="http://localhost/admin/admin_customer/ad-cust1.php"><i class="fa fa-male"></i></a></li>
                <li><a href="http://localhost/admin/admin_customer/ad-cust1.php">Customers</a></li>
            </div>
        </div>
        <div class="col-md-11">
            <form method="post" action="cusconfig.php">
            <div class="main1">
                <li>Add Customer</li>
               
              
                <ul>
                    <!-- <li ><i style="font-size:15px"  class="fa" >&#xf060;</i></li>
                    <li class="back" ><a href="#"  style="font-size: 20px"> Back</a></li>-->

                    <li><button type="button" class="block3" style="background-color:#f8f8f8"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></button></li>
                    <li><button type="button" class="block2" style="background-color:#f8f8f8">Back</button></li>

                    <!-- <li><button type="button" class="block1" style="background-color: black">Add Attribute</button></li>-->
                    
                    <li><input type="submit" name="submit" value="save" class="block1" onclick="cusconfig.php"></li>
                </ul>
            </div>

            <!-- <ul class="mainpage-list float-left">
                    <li>beauty blender</li>
                    <li> <i class="fa fa-registered"></i></li>
                    <li>Bubble in Light Pink</li>
                    </ul>
                    <ul class="mainpage-list float-right">
                        <li><button type="button" class="block">Add Attribute</button></li>
                        <li><button type="button" class="block">save</button></li>
                  </ul>-->
            <br>
            <div class="page" style="margin-top: 20px;">
                <table>
                    <tr>
                        <td style="padding-left:  270px;">
                            <ul style="list-style-type: none">
                                <li>First Name<span class="error" style="color: tomato">*</span></li>
                                <li class="store-view text-center" style="font-size:9px">[Store view]</li>
                            </ul>
                        </td>


                        <td style="margin: 40px; padding-left:  50px;"><input type="text" name="fn" value="" style="width: 550px"></td>


                    </tr>


                    <tr>
                        <td style="margin: 40px; padding-left:  270px;">
                            <ul style="list-style-type: none">
                                <li>Last Name</li>
                                <li style="font-size:9px">[global]</li>
                            </ul>

                        </td>


                        <td style="margin: 40px; padding-left:  50px;"><input type="text" name="ln" value="" style="width: 550px"></td>
                    </tr>


                    <tr>
                        <td style="margin: 40px; padding-left:  270px;">
                            <ul style="list-style-type: none">
                                <li>User Name<span class="error" style="color: tomato">*</span></li>
                                <li style="font-size:9px">[global]</li>
                            </ul>

                        </td>


                        <td style="margin: 40px; padding-left:  50px;"><input type="text" name="un" value="" style="width: 550px"></td>
                    </tr>


                    <tr>
                        <td style="margin: 40px; padding-left:  270px;">
                            <ul style="list-style-type: none">
                                <li>Email Address<span class="error" style="color: tomato">*</span></li>
                                <li style="font-size:9px">[global]</li>
                            </ul>
                        </td>


                        <td style="margin: 40px; padding-left:  50px;"><input type="text" name="email" value="" style="width: 550px"></td>
                    </tr>

                    <tr>
                        <td style="margin: 40px; padding-left:  270px;">
                            <ul style="list-style-type: none">
                                <li>Mobile_Number<span class="error" style="color: tomato">*</span></li>
                                <li style="font-size:9px">[global]</li>
                            </ul>
                        </td>


                        <td style="margin: 40px; padding-left:  50px;"><input type="text" name="mn" value="" style="width: 550px"></td>
                    </tr>

                    <tr>
                        <td style="margin: 40px; padding-left:  270px;">
                            <ul style="list-style-type: none">
                                <li>Password<span class="error" style="color: tomato">*</span></li>
                                <li style="font-size:9px">[global]</li>
                            </ul>
                        </td>


                        <td style="margin: 40px; padding-left:  50px;">  <input type="password" id="pass" name="password" minlength="8" required style="width: 550px"></td>
                    </tr>






                </table>


            </div>
            </form>

            <div class="hgt"></div>
            


            <div class="foot">
                <li>Copyright</li>
                <li><i class="fa fa-copyright">2019.</i></li>
                <li>All Rights Reserved. </li>
            </div>




        </div>

    </div>










</body>

</html>
