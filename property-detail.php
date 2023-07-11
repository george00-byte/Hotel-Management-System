<?php

include("path.php");
include(ROOT_PATH."/app/controllers/properties.php");

if(isset($_GET['id']))
{
    $property= selectOne('properties',['id'=>$_GET['id']]);
    
}




$properties=selectAll('properties',['published'=>1]);


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


    <!--The css link-->
    <link rel="stylesheet" href="assets/css/property-styles.css" type="text/css" />

    <!--font Awesome -->
    <script href="https://kit.fontawesome.com/95dc93da07.js"></script>

    <!--Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">

    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>

    <!--Sleek carousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link type="text/css" rel="stylesheet" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">



    <title><?php echo $property['address']." Byzantium Listing"?></title>
</head>

<body>
    <main>

        <header>
            <div class="flex container">
                <a id="logo" href="#">Translvenia Listing</a>
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>

                    </button>


                    <ul id="nav-menu">
               
                        <li> <a href="<?php echo BASE_URL."/properties.php"?>">Hotels</a></li>
                        <li> <a href="#">Agents</a></li>
                        <li> <a href="#">About</a></li>
                        <li> <a href="#">News</a></li>
                        <li> <a href="#">Contact</a></li>
                        <li id="close-flyout"><span class="fas fa-times"></span></li>

                    </ul>

                </nav>

            </div>

        </header>


        <section id="main-property">
            <div id="property-details" class="flex container">
                <div class="address-container flex">
                    <div class="home-icon">
                        <span class="fa fa-home"></span>
                    </div>

                    <address>
                        <strong><?php echo $property['name'] ?></strong>
                        <small><?php echo $property['address'] ?></small>
                    </address>
                    <small class="status"><span class="for-sale"></span>For Booking</small>

                    <small class="year-built-sm">Built: <?php echo $property['name'] ?> Listed on xyz Reality: 9 days </small>
                </div>




                <div class="property-stats-container flex">

                    <div class="price">
                        <div class="padded-inner-container">
                            <strong>Ksh<?php echo $property['discountedprice'] ?></strong>
                            <small>Booking price</small>

                        </div>
                    </div>


                    <div class="beds">
                        <div class="padded-inner-container">
                            <strong><?php echo $property['beds'] ?></strong>
                            <small>Beds</small>

                        </div>
                    </div>


                    <div class="baths">
                        <div class="padded-inner-container">
                            <strong><?php echo $property["baths"] ?></strong>
                            <small>Baths</small>

                        </div>
                    </div>


                    <div class="sqft">
                        <div class="padded-inner-container">
                            <strong><?php echo $property['size'] ?> <small>Sq. ft</small></strong>
                            <small><?php echo $property['size'] ?></small>

                        </div>
                    </div>

                    <small class="year-built">Built: <?php echo $property['year'] ?>- Listed on Byzantium: <?php echo date('F j ,Y',strtotime($property['created_at'] ));?> </small>


                </div>

                <div class="actions-container flex">
                    <div class="favourite">
                        <button><span class="fa fa-heart"></span></button>
                        <small>Favourite</small>
                    </div>

                    <div class="share">
                        <button><span class="fa fa-share"></span></button>
                        <small>Share</small>
                    </div>

                </div>
            </div>




            <!--start: Image slider-->
            <div id="property-image-slider" class="slick">

                <i class="fas fa-chevron-left prev"></i>

                <i class="fas fa-chevron-right next"></i>

                <div class="slick-slide">

                    <div>
                        <img onerror='this.style.display = "none"' id="myImg" src="<?php echo BASE_URL."/assets/images/".$property['image'];  ?>" alt="show Image" />
                    </div>

                    <div>
                        <img onerror='this.style.display = "none"' id="myImg" src="<?php echo BASE_URL."/assets/images/".$property['img1'];  ?>" alt=" show Image" />
                    </div>
                    <div>
                        <img  onerror='this.style.display = "none"' id="myImg" src="<?php echo BASE_URL."/assets/images/".$property['img2'];  ?>" alt=" show Image" />
                    </div>

                    <div>
                        <img onerror='this.style.display = "none"' id="myImg" src="<?php echo BASE_URL."/assets/images/".$property['img3'];  ?>" />
                    </div>
                    
                    <div>
                        <img onerror='this.style.display = "none"' id="myImg" src="<?php echo BASE_URL."/assets/images/".$property['img4'];  ?>" />
                    </div>

                    <div>
                        <img onerror='this.style.display = "none"' id="myImg" src="<?php echo BASE_URL."/assets/images/".$property['img5'];  ?>" />
                    </div>

                      <div>
                        <img onerror='this.style.display = "none"' id="myImg" src="<?php echo BASE_URL."/assets/images/".$property['img6'];  ?>" />
                    </div>

                </div>

            </div>


            <!--End: image slider-->

          


        </section>

    </main>

    <section id="property-description">
        <div class="flex-container">
            <div class="description">
                <h3>Overview</h3>
                <p>
                    <?php echo html_entity_decode($property['overview']); ?>
                </p>

            </div>

            <div class="listed-by-container">
                <h3>Listed by</h3>
                <img src="<?php echo BASE_URL."/assets/images/".$property['agentimage'];  ?>" alt=" show Image" />

                <div>
                    <a href=""><?php echo $property['agentname'];  ?></a>
                    <small>Hotel Manager</small>

                </div>
                <button id="ask-a-question">Ask a question</button>

            </div>
        </div>

    </section>

    <a    href="bookHotel.php"  class="rounded">Book This Hotel Now</a>


    <section id="property-info" class="container">
        <div class="price-insights">
            <h3>Price Insights</h3>

            <div class="flex">
                <div>
                    <label>Booking Price</label>
                    <strong><?php echo $property['discountedprice']; ?></strong>
                </div>



                <div>
                    <label>Call or Email us for more Information</label>

                </div>
            </div>
        </div>


        <div class="home-facts">
            <h3>Hotel Facts</h3>

            <div class="flex">
                <div>
                    <label>Status</label>
                    <strong>For Booking</strong>
                </div>

                <div>
                    <label>Year Built</label>
                    <strong><?php echo $property['year']; ?></strong>
                </div>

                <div>
                    <label>Community</label>
                    <strong><?php echo $property['community']; ?></strong>
                </div>

            </div>
        </div>


    </section>

    <section id="nearby-similar-homes">
        <div class="container">
            <h2>Similar Hotels</h2>


            <i class="fas fa-chevron-left slick-prev"></i>

            <i class="fas fa-chevron-right slick-next"></i>

            <div id="properties-slider" class="slick">


            <?php foreach($properties as $property_slider): ?>

                <a class="property-details" href="property-detail.php?id=<?php echo $property_slider['id'];?>">
                    <img src="<?php echo BASE_URL."/assets/images/".$property_slider['image'];?>" alt=" show Image" />


                    <div class="property-details">
                       <p class="price">Ksh<?php echo $property_slider['price']; ?></p>
                        <span class="beds"><?php echo $property_slider['beds']." "."beds"; ?></span>
                        <span class="baths"><?php echo $property_slider['baths']." "."baths"; ?></span>
                        <span class="sqft"><?php echo $property_slider['size'];?> </span>

                        <address>
                            <?php echo $property_slider['address']; ?>
                        </address>


                    </div>
                </a>

            <?php endforeach; ?>
    



            </div>

        </div>

    </section>


    <section id="property-info-details">
        <div class="container">
            <h2>Hotel Details for <?php echo $property['address'];?></h2>

            <div class="flex main-details">
                <div>
                    <label><span class="fa fa-home"></span>Type:</label>
                    <span><?php echo $property['family'];?></span>
                </div>

                <div>
                    <label><span class="fa fa-car"></span>Parking</label>
                    <span><?php echo $property['parking']." spaces";?></span>
                </div>


                <div>
                    <label><span class="fa fa-thermometer-full"></span>Heating:</label>
                    <span><?php echo $property['heating'];?></span>
                </div>

                <div>
                    <label><span class="fa fa-square"></span>Lot Size</label>
                    <span><?php echo $property['size']. ' sq.ft';?> </span>
                </div>


                <div>
                    <label><span class="fa fa-thermometer-empty"></span>Cooling</label>
                    <span><?php echo $property['cooling'];?> </span>
                </div>
            </div>

            <h3>Interior details</h3>
            <div class="flex">
                <div>
                    <strong>Bedrooms and bathrooms</strong>
                    <ul>
                        <li>Bedrooms: <?php echo $property['beds'];?> </li>
                        <li>Full Bathrooms: <?php echo $property['baths'];?> </li>
                        
                    </ul>
                </div>


                <div>
                    <strong>Appliances</strong>
                    <ul>
                        <li>Appliances included: <?php echo $property['appliances'];?> </li>

                    </ul>
                </div>

                <div>
                    <strong>Basement</strong>
                    <ul>
                        <li><?php echo $property['basement']?> </li>
                    </ul>
                </div>


                <div>
                    <strong>Flooring</strong>
                    <ul>
                        <li>Flooring: <?php echo $property['flooring']?> </li>
                    </ul>
                </div>


                <div>
                    <strong>Other interior feautures</strong>
                    <ul>
                        <li><?php echo $property['interiorfeautures'] ?></li>
                        
                    </ul>
                </div>

            </div>


            <h3>Exterior detail</h3>
            <div class="flex">
                <div>
                    <strong>Parking</strong>
                    <ul>
                        <li>Attached Garage</li>
                        <li>Garage spaces: <?php echo $property['parking']?> </li>
                    </ul>
                </div>


                <div>
                    <strong>Lot</strong>
                    <ul>
                        <li>Lot size: <?php echo $property['size'] ?> sq.ft</li>
                    </ul>
                </div>

                <div>
                    <strong>Property</strong>
                    <ul>
                        <li>Stories <?php echo $property['stories'] ?></li>
                        <li>Exterior feautures: <?php echo $property['exteriorfeautures'] ?></li>
                        <li>Fencing: <?php echo $property['fencing'] ?></li>
                    </ul>
                </div>

            </div>

            <h3>Construction details</h3>
            <div class="flex">
                <div>
                    <strong>Type and style</strong>
                    <ul>
                        <li><?php echo $property['family'] ?></li>
                    </ul>
                </div>


                <div>
                    <strong>Condition</strong>
                    <ul>
                        <li>New Construction: <?php echo $property['newconstruction'] ?></li>
                        <li>Year built: <?php echo $property['year'] ?></li>
                    </ul>
                </div>

            </div>

        </div>

    </section>


    <section id="price-history">
        <div class="container">
            <h3>Booking History</h3>

            <div class="price-history-container">
                <div class="flex header-row">
                    <span>EVENT</span>
                    <span>PRICE</span>

                </div>

                <div class="flex">
                    <span>Booked at</span>
                    <span class="price-change decrease">Ksh<?php echo $property['price'] ?><i ></i></span>
                </div>


                <div class="flex">
                    <span>Discounted Booking  price</span>
                    <span class="price-change price">Ksh<?php echo $property['discountedprice'] ?></span>
                </div>


            </div>


        </div>

    </section>


    <section id="neighbourhood">
        <div class="container">
            <h2>Neighbourhood</h2>

            <div class="walk-score-container">
                <div>
                    <span class="fa fa-heart"></span>
                    <strong>Walking:</strong><h1>(<?php echo $property['walking'] ?>)</h1>

                </div>

                <div>
                    <span class="fa fa-bus"></span>
                    <strong>Transit:</strong><h1>(<?php echo $property['transit'] ?>)</h1>

                </div>

            </div>


            <h3>Rating</h3>

            <div class="ratings-container">
                <div>
                    <div class="rating good"><span><?php echo $property['rating'] ?></span>/10</div>
                    <div class="rating-info">
                        <div><a href="#"></a>Rating out of 10</div>
                        <span>Rated: <strong><?php echo $property['rating'] ?></strong></span>
                        <span>Out of: <strong>10</strong></span>


                    </div>
                </div>

                

            </div>


        </div>

    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact</h2>

            <div id="form-container">
                <h3>Contact the Listing Agent</h3>
                <form>
                    <label for=" name">Name</label>
                    <input type="text" id="name" />

                    <label for=" name">Email</label>
                    <input type="text" id="email" />


                    <label for=" name">Phone</label>
                    <input type="text" id="phone" />

                    <label for=" name">Message</label>
                    <textarea>I'm interested in purchasing 234 Evergreen Terrrace in san Fransisco, CA....</textarea>

                    <button class="rounded">Contact Agent</button>
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
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>

            </div>
        </div>

        <small>
            copyright &copy; 2019 All rights reserved | The template is made with
            <span class="fa fa-heart"></span> by Georges
        </small>




    </footer>

    <!--Start: Google maps API-->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9iNcMaPsiIYoMmXmxrRZYzVqS83OuKv0&callback=initMap"></script>

    <!--End: Google maps API-->


    <script src="assets/js/property-detail.js"></script>
    <script src="assets/js/error.js"></script>

</body>


</html>