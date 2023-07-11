<?php

include("path.php");
include(ROOT_PATH.'/app/database/db.php');


$agents=getRealEstateAgent();

$clients=getClientTestimonials();


$properties=getPublishedProperty();




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Font Awesome csss link-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" />

    <!--Sleek carousel-->
    <link type="text/css" rel="stylesheet" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">


    <!--The css link--->
    <link rel="stylesheet" href="assets/css/styles.css" type="text/css" />

    <!--Google fonts -->
    <script href="https://kit.fontawesome.com/95dc93da07.js"></script>

    <!--Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">

     <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">

    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>

    <!--Sleek carousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link type="text/css" rel="stylesheet" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">



    <title>Hotels Page</title>
</head>
    
<body>
    <div id="header-hero-container">
        <header>
            <div class="flex container">
                <a id="logo" href="#"><span>HOTEL.</span>TRANSLVENIA</a>

                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                   

                    <ul id="nav-menu" class="ls-sticky">
                
                        <li> <a class="active" href="<?php echo BASE_URL."/properties.php"?>">Hotels</a></li>
                        <li> <a href="#">Agents</a></li>
                        <li> <a href="#">About</a></li>
                        <li> <a href="#">News</a></li>
                        <li> <a href="#">Contact</a></li>

                        <?php if(isset($_SESSION['id'])): ?>
                             <li> <a class="logout" href="<?php echo  BASE_URL."/logout.php" ?>">Logout</a></li>
                        <?php endif; ?>
           
                       
                        <li id="close-flyout"><span class="fas fa-times"></span></li>

                    </ul>
                </nav>
            </div>

        </header>

        <section id="hero">
            <div class="fade"></div>

            <div class="hero-text">
                <h1 class="byzantium-properties">HOTEL TRANSLVENIA</h1>

   

                    <div class="info">

                    <?php if(isset($_SESSION['id'])): ?> 
                        <span><?php echo $_SESSION['username']  ?> </span>
                        <br>
                         <a class="logout"   href="<?php echo  BASE_URL."/logout.php" ?>" >Logout</a>

                        <?php if($_SESSION['admin']): ?>
                            <a href="<?php echo BASE_URL."/Admin/dashboard.php" ?>">Dashboard</a>
                         <?php endif; ?>

                           

                       <?php else: ?>
                            <a class=""  href="<?php echo  BASE_URL."/login.php" ?>"/> Login / </a>

                            <a  class=""  href="<?php echo  BASE_URL."/register.php" ?>" > Sign up </a>
                      

                        
                    <?php endif; ?>


                    </div>
                 

            </div>
        </section>

    </div>


    </section>

    <section id="properties">
        <div class="container">
            <h2>Hotels</h2>

            <i class="fas fa-chevron-left slick-prev"></i>

            <i class="fas fa-chevron-right slick-next"></i>

            <div id="properties-slider" class="slick">

                    <?php foreach($properties as $property): ?>

                        <div class="property-details clearfix">
                            <img class="image" src="<?php echo BASE_URL."/assets/images/".$property['image'];  ?>" alt="property 1" />
                            <p class="price"><?php echo "Ksh" .$property['discountedprice']; ?> </p>
                            <span class="beds">  <?php echo $property['beds']." Beds";  ?></span>
                            <span class="baths">   <?php echo $property['baths']." Baths";  ?> </span>
                            <span class="sqft">  <?php echo $property['size']." sqft"; ;  ?></span>
                            <address>
                                <?php echo $property['address'];  ?>
                            </address>
                             <a href="property-detail.php?id=<?php echo $property['id'];?>"  class="round">View</a>

                        </div>

                     <?php endforeach; ?>
                     
             </div>
           

        </div>

        

    </section>
 
   
    </section>

    <section id="the-best">
        <div class="flex container">
            <img src="<?php echo BASE_URL."/assets/images/1653121248_background.jpg" ?>" alt="property 1" />

            <div>
                <h2>We are the Best</h2>
                <p class="large-paragraph">We are the best Hotel Company.We are one number away from your Desire</p>

                <ul>
                    <li>What do we do?</li>
                    <li>Whom do we serve and how?</li>
                    <li>What poblem are we solving ?</li>
                    <li>Our hopes and dreams</li>
                </ul>
                <a class="rounded">Learn More</a>
            </div>

        </div>
    </section>

    

    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>

            <div class="flex">
                <div id="form-container">
                    <h3>Contact Form</h3>
                    <form>
                        <label for="name">Name</label>
                        <input type="text" id="name" />

                        <label for="email">Email</label>
                        <input type="email" id="subject" />

                        <label for="subject">Subject</label>
                        <input type="text" id="name" />

                        <label for="message">Message</label>
                        <textarea id="message" &nbsp>Write your message here...</textarea>

                        <a class="rounded">Send Messsage</a>
                    </form>

                </div>

  
        </div>

    </section>


    <footer>

        <div class="flex container">

            <div class="footer-about">
                <h5>About Stated</h5>
                <p>We are the best Hotel providers, We are always here for you</p>
            </div>

            <div class="footer-quick-links">
                <h5>Qiuck Links</h5>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            
            <div class="footer-subscribe">
                <h5>Subscribe to our Newsletter</h5>
                <div id="subscribe-container">
                    <input type="text" placeholder="Enter Email" />
                    <button class="right-rounded">Send</button>
                </div>

                <h5 class="follow-us">Follow Us</h5>
                <ul class="links">
                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>

            </div>
        </div>

        <small>copyright &copy; 2019 All rights reserved | The template is made with 
            <span class="fa fa-heart"></span> by Georges
        </small>

    </footer>

    <script src="assets/js/index.js"></script>

</body>
    

</html>