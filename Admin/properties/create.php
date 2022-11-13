<?php

include("../../path.php");
include(ROOT_PATH."/app/controllers/properties.php");
adminOnly();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Font Awesome csss link-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" />

    <!--The css link-->
    <link rel="stylesheet" href="../../assets/css/header.css" />

    <!--Admin styling-->
    <link rel="stylesheet" href="../../assets/css/admin.css" />

    <!--Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">


    <title>Add Property</title>
</head>

<body>
   <!--Include the Header-->

   <?php include(ROOT_PATH."/app/includes/adminHeader.php")  ?>

   <!--end of the Header-->


    <!--Admin page-wrapper-->
    <input type="checkbox" id="nav-toggle" />
    <div class="admin-wrapper">

        <!--Left sidebar-->
       
        <?php include(ROOT_PATH."/app/includes/adminSidebar.php")   ?>
        <!--//Left sidebar-->   


        <!--Admin content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Property</a>
                <a href="index.php" class="btn btn-big">Manage</a>
            </div>

            <div class="content">

                <h2 class="page-title">Add Property</h2>

                <form  action="create.php" method=post enctype="multipart/form-data" >

                     <!--Display of errors -->

                    <?php include(ROOT_PATH."/app/helpers/formErrors.php");?>
 
                    <!-- // Display of errors -->

                    <div>
                        <label>Property Name</label>
                        <input type="text" name="name" class="text-input" value="<?php echo $name; ?>"  />
                    </div>

                    
                    <div>
                        <label>Year Built</label>
                        <input type="text" name="year" class="text-input" value="<?php echo $year; ?>"  />
                    </div>

                     <div>
                        <label>Size</label>
                        <input type="text" name="size" class="text-input" value="<?php echo $year; ?>"  />
                    </div>

                    <div>
                        <label>Listed By</label>
                         <input name="agentimage" type="file" class="text-input">
                    </div>

                    <div>
                        <label>Agent's Name</label>
                          <input type="text" name="agentname" class="text-input" value="<?php echo $agentname; ?>"  />
                    </div>

                     <div>
                        <label>Price</label>
                        <input type="text" name="price" class="text-input"  value="<?php echo $price; ?>" />
                    </div>

                     <div>
                        <label>Discounted Price</label>
                        <input type="text" name="discountedprice" class="text-input"  value="<?php echo $discountedprice; ?>" />
                    </div>


                    <div>
                        <label>Rent</label>
                        <input type="text" name="rent" placeholder="Non rental" class="text-input" value="<?php echo $rent; ?>"  />
                    </div>


                    <div>
                        <label>Community</label>
                        <input type="text" name="community" class="text-input" value="<?php echo $community; ?>"/>
                    </div>

                     <div>
                        <label>Location Adress</label>
                        <input name="address" type="text" class="text-input" value="<?php echo $address; ?>"/>

                    </div>

                    <div>
                        <label>Family Type</label>
                        <input type="text" name="family" class="text-input" placeholder="Not Specified" value="<?php echo $family; ?>" />
                    </div>

                    <div>
                        <label>Baths</label>
                        <input type="text" name="baths" class="text-input" value="<?php echo $baths; ?>" />
                    </div>

                    <div>
                        <label>Beds</label>
                        <input type="text" name="beds" class="text-input" value="<?php echo $beds; ?>" />
                    </div>


                    <div>
                        <label>Appliances Included</label>
                        <input type="text" name="appliances" class="text-input" placeholder="Heater, micowave or Not added" value="<?php echo $appliances; ?>" />
                    </div>


                    <div>
                        <label>Flooring </label>
                        <input type="text" name="flooring" class="text-input" placeholder="Tiles" value="<?php echo $flooring; ?>" />
                    </div>


                    <div>
                        <label>Cooling </label>
                        <input type="text" name="cooling" class="text-input" placeholder="Natural" value="<?php echo $cooling; ?>" />
                    </div>


                    <div>
                        <label>Heating</label>
                        <input type="text" name="heating" class="text-input" placeholder="Natural" value="<?php echo $heating; ?>" />
                    </div>


                    <div>
                        <label>Interior Feautures</label>
                        <input type="text" name="interiorfeautures" class="text-input" value="<?php echo $interiorfeautures; ?>" />
                    </div>

                     <div>
                        <label>New Construction</label>
                        <input type="text" name="newconstruction" class="text-input" value="<?php echo $newconstruction	; ?>" />
                    </div>

                    
                    <div>
                        <label>Parking</label>
                        <input type="text" name="parking" class="text-input" value="<?php echo $parking; ?>" />
                    </div>

                    
                    <div>
                        <label>Basement</label>
                        <input type="text" name="basement" class="text-input" value="<?php echo $basement; ?>" />
                    </div>

                    <div>
                        <label>Exterior Feautures</label>
                        <input type="text" name="exteriorfeautures" class="text-input" value="<?php echo $exteriorfeautures; ?>" />
                    </div>

                    <div>
                        <label>Fencing</label>
                        <input type="text" name="fencing" class="text-input" value="<?php echo $fencing; ?>" />
                    </div>

                    <div>
                        <label>Stories</label>
                        <input type="text" name="stories" class="text-input" value="<?php echo $stories; ?>" />
                    </div>


                    <div>
                        <label>Walking</label>
                        <input type="text" name="walking" class="text-input" value="<?php echo $walking; ?>" />
                    </div>

                    <div>
                        <label>Transit</label>
                        <input type="text" name="transit" class="text-input" value="<?php echo $transit; ?>" />
                    </div>


                    <div>
                        <label>Rating out of Ten</label>
                        <input type="text" name="rating" class="text-input" value="<?php echo $rating; ?>" />
                    </div>


                      <div>
                        <label>Overview</label>
                        <textarea  name="overview"  id="body"><?php echo $overview; ?></textarea>

                    </div>

                    <div>
                        <label>Property Main Image</label>
                        <input name="image" type="file" class="text-input">
                    </div>



                    <div>
                        <label>Property compound Image</label>
                        <input name="img1" type="file" class="text-input">
                    </div>


                    <div>
                        <label>Property Dining Room Image</label>
                        <input name="img2" type="file" class="text-input">
                    </div>


                    <div>
                        <label> Property Sitting Room Image </label>
                        <input name="img3" type="file" class="text-input">
                    </div>


                     <div>
                        <label> Property Toilet Image </label>
                        <input name="img4" type="file" class="text-input">
                    </div>

                     <div>
                        <label> Property Parking Lot Image </label>
                        <input name="img5" type="file" class="text-input">
                    </div>


                     <div>
                        <label>Additional  Image</label>
                        <input name="img6" type="file" class="text-input">
                    </div>

                    <div>
                       
                        <label>
                            
                        <?php if(isset($published)):  ?>
                                <input type="checkbox" name="published"  checked>
                                Publish
                        <?php else: ?>

                                <input type="checkbox" name="published" >
                                Publish
                        <?php endif;  ?>

                        </label>


                              <label>
                            
                        <?php if(isset($sold)):  ?>
                                <input type="checkbox" name="sold"  checked>
                               Sold
                        <?php else: ?>

                                <input type="checkbox" name="sold" >
                                Sold
                        <?php endif;  ?>

                        </label>


                    </div>

                    <div>
                        <button name="create-property" class="btn btn-big">Add Property</button>

                    </div>



                </form>


            </div>

        </div>

        <!--Admin content-->


    </div>
    <!--// Admin page-wrapper-->
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>


    <!--Ck editor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

    <!--Custom Script-->
    <script src="../../assets/js/index.js"></script>



</body>



</html>