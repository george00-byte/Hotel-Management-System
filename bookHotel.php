<?php
    
    include("path.php");
    include(ROOT_PATH."/app/controllers/booking.php");


if(isset($_GET['id']))
{
    $property= selectOne('properties',['id'=>$_GET['id']]);
    
}



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
    <link rel="stylesheet" href="assets/css/admin.css" />
    <link rel="stylesheet" href="assets/css/header.css" />

    <!--Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">


    <title>Register </title>
</head>

<body>

    <!--facebook plugin-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="vbGbVe53"></script>
    <!--//facebook plugin-->

    <header>
        <div class="logo">
            <h1 class="logo-text"><span>HOTEL.</span>TRANSLVENIA</h1>
        </div>
        <i class="fa fa-bars menu-toggle"> </i>


    </header>

    <!--page-wrapper-->
    <div class="auth-content">

          <form  action="bookHotel.php" method=post enctype="multipart/form-data" >

                     <!--Display of errors -->

                    <?php include(ROOT_PATH."/app/helpers/formErrors.php");?>
 
                    <!-- // Display of errors -->

                    <div>
                        <label>First Name</label>
                        <input type="text" name="username" class="text-input" value="<?php echo $username; ?>"  />
                    </div>


                    <div>
                        <label>Second Name</label>
                        <input type="text" name="secondName" class="text-input" value="<?php echo $secondName; ?>"/>
                    </div>


                    <div>
                        <label>Email</label>
                        <input type="email" name="email" class="text-input" value="<?php echo $email ?>" />
                    </div>

                    
                    <div>
                        <label>Hotel Address</label>
                        <input type="text" name="address" placeholder="copy and paste the address here" class="text-input" value="<?php echo $address ?>" />
                    </div>


                    <div>
                        <label>Phone Number</label>
                        <input type="text" name="phone" class="text-input" value="<?php echo $phone ?>" />
                    </div>

                
                    <div>
                        <label>Check In</label>
                        <input name="checkIn" type="date" class="text-input" value="<?php echo $checkIn ?>">

                    </div>

                    <div>
                        <label>Check Out</label>
                        <input name="checkOut" type="date" class="text-input"   value="<?php echo $checkOut ?>">

                    </div>


                    <div>
                        <button type="submit" name="booking-btn"  class="btn btn-big">Book Hotel</button>

                    </div>



                </form>



    </div>




</body>





</html>