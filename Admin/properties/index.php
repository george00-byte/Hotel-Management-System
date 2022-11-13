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


    <title>Manage Properties</title>
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

                <h2 class="page-title">Manage Properties</h2>

                 <!--Succes message-->
                      <?php include(ROOT_PATH."/app/includes/messages.php"); ?>
                    <!--// Succes message-->

                <div class="table-responsive">

                    <table>
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Price</th>
                                <th>Beds</th>
                                <th>Baths</th>
                                <th>Size</th>
                                <th>Status</th>
                                
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php foreach($properties as $key =>$property): ?>
                            <tr>
                                <td><?php echo $key+1 ?> </td>
                                <td><?php echo $property['name']?> </td>
                                <td><?php echo $property['address']?> </td>
                                <td><?php echo $property['price']?> </td>
                                <td><?php echo $property['beds']?> </td>
                                <td><?php echo $property['baths']?> </td>
                                <td><?php echo $property['size']?> </td>

                                
                                <?php if($property['sold']): ?>
                                    <td><?php echo 'Sold' ?><td>

                                    <?php else: ?>

                                    <td><?php echo 'In progress' ?><td>

                                 <?php endif; ?>



                                <td><a href="edit.php?id=<?php echo $property['id'] ?>" class="edit">edit</a></td>
                                <td><a href="index.php?delete_id=<?php echo $property['id'] ?>" class="delete">delete</a></td>


                            </tr>
                         <?php endforeach; ?>


                        </tbody>





                    </table>
                </div>

            </div>

        </div>

        <!--Admin content-->


    </div>
    <!--// Admin page-wrapper-->
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>


    <!--Custom Script-->
    <script src="../../BlogWebsite.js"></script>



</body>





</html>