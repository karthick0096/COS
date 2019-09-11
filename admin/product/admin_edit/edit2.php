<?php include 'dbconfigs.php';?>
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

            <div class="main">
                <li><a href="http://localhost/admin/product/admin_product/fetch1.php"><i class="fa fa-cube"></i></a></li>
                <li><a href="http://localhost/admin/product/admin_product/fetch1.php">Catalog</a></li>
                <br>
                <li><a href="http://localhost/admin/admin_customer/ad-cust.php"><i class="fa fa-male"></i></a></li>
                <li><a href="http://localhost/admin/admin_customer/ad-cust1.php">Customers</a></li>
            </div>
        </div>

        <div class="col-md-11">
            <div class="abc">
            <div id="content">
                <form method="post" action="dbconfigs.php" enctype="multipart/form-data">
                    <div class="main1">



                        <li>beauty blender</li>
                        <li> <i class="fa fa-registered"></i></li>
                        <li>Bubble in Light Pink</li>
                        <ul>
                            <!-- <li ><i style="font-size:15px"  class="fa" >&#xf060;</i></li>
                    <li class="back" ><a href="#"  style="font-size: 20px"> Back</a></li>-->

                            <li><button type="button" class="block3" style="background-color:#f8f8f8"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></button></li>
                            <li><button type="button" class="block2" style="background-color:#f8f8f8">Back</button></li>

                            <li><button type="button" class="block1" style="background-color: black">Add Attribute</button></li>
                            <li><input type="submit" name="submit" value="save" class="block1" onclick="dbconfigs.php"></li>
                        </ul>

                    </div>
                  
                    <br>
                    <div class="page" style="margin-top: 20px;">

                        <table>

                            <tr>
                                <td style="padding-left:  200px;">
                                    <ul style="list-style-type: none">
                                        <li>Product Name<span class="error" style="color: tomato">*</span></li>
                                        <li class="store-view text-center" style="font-size:9px">[Store view]</li>
                                    </ul>
                                </td>


                                <td style="margin: 40px; padding-left:  50px;"><input type="text" name="Product_Name" style="width: 550px"></td>


                            </tr>
   
                            
 
                             <tr>
                              
                      
                                <td style="padding-left:  200px;">
                                    <ul style="list-style-type: none">
                                        <li>Product image<span class="error" style="color: tomato">*</span></li>
                                        <li class="store-view text-center" style="font-size:9px">[Store view]</li>
                                    </ul>
                                </td>


                                <td style="margin: 40px; padding-left:  50px;"><input type="file" name="image" style="width: 550px"></td> 

                            </tr>
         
                           
                               <tr>
                                <td style="padding-left:  200px;">
                                    <ul style="list-style-type: none">
                                        <li>Description<span class="error" style="color: tomato">*</span></li>
                                        <li class="store-view text-center" style="font-size:9px">[Store view]</li>
                                    </ul>
                                </td>


                                <td style="margin: 40px; padding-left:  50px;"><textarea name="Description" cols="65" rows="10"></textarea>
</td>


                            </tr>

                            <tr>
                                <td style="margin: 40px; padding-left:  270px;">
                                    <ul style="list-style-type: none">
                                        <li>SKU<span class="error" style="color: tomato">*</span></li>
                                        <li style="font-size:9px">[global]</li>
                                    </ul>

                                </td>


                                <td style="margin: 40px; padding-left:  50px;"><input type="text" name="SKU" value="" style="width: 550px"></td>
                            </tr>


                            <tr>
                                <td style="margin: 40px; padding-left:  270px;">
                                    <ul style="list-style-type: none">
                                        <li>Price<span class="error" style="color: tomato">*</span></li>
                                        <li style="font-size:9px">[global]</li>
                                    </ul>
                                </td>


                                <td style="margin: 40px; padding-left:  50px;"><input type="text" name="Price" value="" style="width: 150px"></td>
                            </tr>
                            <tr>
                                <td style="margin: 40px; padding-left:  200px;">
                                    <ul style="list-style-type: none">
                                        <li>Enable product<span class="error" style="color: tomato">*</span></li>
                                        <li class="store-view text-right" style="font-size:9px">[Website]</li>
                                    </ul>
                                </td>


                                <td style="margin: 40px; padding-left:  50px;"> <label class="switch"> <input type="checkbox"> <span class="slider round"></span></label></td>
                            </tr>

                            <tr>
                                <td style="margin: 40px; padding-left:  255px;">
                                    <p>Attribute Set</p>
                                </td>


                                <td style="margin: 40px; padding-left:  50px;"><input type="text" name="Attribute_set" list="attribute" style="width: 550px"><datalist id="attribute"> <select name="Attribute_set">
                                    <option value="Bag"></option>
                                            <option value="Jackets"></option>
                                    <option value="Room Fresher"></option>
                                        </select></datalist>

                                </td>
                            </tr>


                            <tr>
                                <td style="margin: 40px; padding-left:  240px;">
                                    <ul style="list-style-type: none">
                                        <li>Tax class<span class="error" style="color: tomato">*</span></li>
                                        <li class="store-view text-center" style="font-size:9px">[Website]</li>
                                    </ul>
                                </td>


                                <td style="margin: 40px; padding-left:  50px;"><input type="text" name="Taxclass" list="tax" style="width: 550px"><datalist id="tax"> <select name="Taxclass">
                                    <option value="None"></option>
                                            <option value="Tax"></option>
                                        </select></datalist>

                                </td>
                            </tr>

                            <tr>
                                <td style="margin: 40px; padding-left:  240px;">
                                    <ul style="list-style-type: none">
                                        <li>Quantity<span class="error" style="color: tomato">*</span></li>
                                        <li class="store-view text-center" style="font-size:9px">[global]</li>
                                    </ul>
                                </td>


                                <td style="margin: 40px; padding-left:  50px;"><input type="text" name="Quantity" value=" " style="width: 150px"></td>
                            </tr>
                            <tr>
                                <td style="margin: 40px; padding-left:  210px;">
                                    <ul style="list-style-type: none">
                                        <li>Stock Status<span class="error" style="color: tomato">*</span></li>
                                        <li class="store-view text-center" style="font-size:9px">[global]</li>
                                    </ul>
                                </td>


                                <td style="margin: 40px; padding-left:  50px;">
                                <input type="text" name="status" list="stock" style="width: 150px">
                                <datalist id="stock"> <select name="status"><option disabled="disabled" selected="selected">Select an option.</option>
                                    <option value="Out of stock"></option>
                                            <option value="In stock"></option>
                                        </select></datalist>

                                </td>
                            </tr>

                            <tr>
                                <td style="margin: 40px; padding-left:  220px;">
                                    <ul style="list-style-type: none">
                                        <li>Categories<span class="error" style="color: tomato">*</span></li>
                                        <li class="store-view text-center" style="font-size:9px">[global]</li>
                                    </ul>
                                </td>


                                <td style="margin: 40px; padding-left:  50px;">
                                <input type="text" name="categories" list="categories" style="width: 350px">
                                <datalist id="category"> <select name="categories"><option disabled="disabled" selected="selected">Select an option.</option>
                                            <option value="Women"></option>
                                            <option value="Default"></option>
                                        </select></datalist>
                                <span><button type="button" class="block" style="background-color: black" "color: white" "margin-left: 50px">New Category</button></span>
                              

                                </td>
                            </tr>

                            <tr>
                                <td style="margin: 40px; padding-left:  235px;">
                                    <ul style="list-style-type: none">
                                        <li>Visibility<span class="error" style="color: tomato">*</span></li>
                                        <li class="store-view text-center" style="font-size:9px">[store view]</li>
                                    </ul>
                                </td>


                                <td style="margin: 40px; padding-left:  50px;">
                                <input type="text" name="visibility" list="visibility" style="width: 350px">
                                <datalist id="vis"> <select name="visibility"><option disabled="disabled" selected="selected">Select an option.</option>
                                    
                                    <option value="Catalog search"></option>
                                            <option value="Default"></option>
                                        </select></datalist>

                                </td>
                            </tr>
                           


                        </table>
                       
                    </div>
                </form>
 </div>

            </div>
        </div>





    </div>
    <div class="hgt"></div>

    <div class="foot">
        <li>Copyright</li>
        <li><i class="fa fa-copyright">2019.</i></li>
        <li>All Rights Reserved. </li>
    </div>




</body>
<!--<script>
    var sBtn = document.querySelector(".block1");
    sBtn.addEventListener("click",function(){document.querySelector("#pdt-edit").submit();})
</script>-->

</html>
