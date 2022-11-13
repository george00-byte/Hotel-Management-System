<?php

include("../../path.php");
include(ROOT_PATH."/app/controllers/booking.php");
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


    <title>Booking Info</title>
</head>

<body>
   
   <!--Include the Header-->

   <?php include(ROOT_PATH."/app/includes/adminHeader.php")  ?>

   <!--end of the Header-->

    <!--Admin page-wrapper-->
    <input type="checkbox" id="nav-toggle" />
    <div class="admin-wrapper">

        <!--Left sidebar-->

        
        <!--Left sidebar-->
       
        <?php include(ROOT_PATH."/app/includes/adminSidebar.php")   ?>
        <!--//Left sidebar-->

        <!--//Left sidebar-->

        <!--Admin content-->
        <div class="admin-content">
            

            <div class="content">

                <h2 class="page-title">Booking Info</h2>

                 <!--Succes message-->
                      <?php include(ROOT_PATH."/app/includes/messages.php"); ?>
                    <!--// Succes message-->

                <div class="table-responsive">

                    <table>
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>checkIn</th>
                                <th>checkOut</th>
                               
                                
                               
                            </tr>
                        </thead>

                        <tbody>

                        <?php foreach($bookingInfo as $key =>$booking): ?>
                            <tr>
                                <td><?php echo $key+1 ?> </td>
                                <td><?php echo $booking['username']?> </td>
                                <td><?php echo $booking['email']?> </td>
                                 <td><?php echo $booking['address']?> </td>
                                  <td><?php echo $booking['checkIn']?> </td>
                                   <td><?php echo $booking['checkOut']?> </td>

                                
                               





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