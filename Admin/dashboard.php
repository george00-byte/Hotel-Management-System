<?php

include("../path.php");

include(ROOT_PATH."../app/controllers/users.php");
adminOnly();


$tableUsers='users';

$users = selectAll($tableUsers);

$adminPic= selectOne($tableUsers,['username'=>$_SESSION['username']]);

$tableProperties='properties';
$properties = selectAll($tableProperties);

$countCustomers=getNumberOfCustomers();

$CountPropertiesInProgress=getNumberOfPropertiesInprogress();

$numberOfProperties=getNumberOfProperties();



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Admin Dashboard</title>

    <!--Font Awesome css link-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" />

    <!--Sleek carousel-->
    <link type="text/css" rel="stylesheet" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">


    <!--Google fonts -->
    <script href="https://kit.fontawesome.com/95dc93da07.js"></script>

    <!--Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">

    <!--Line awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link rel="stylesheet" href="../assets/css/dashboard.css" />


</head>


<body>

    <input type="checkbox" id="nav-toggle"/>
    <div class="sidebar">
        <div class="sidebar-brand">

            <h2 class="logo"> <span><label>HOTEL.</label>TRANSLVENIA</span></h2>

        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="<?php echo BASE_URL."/admin/dashboard.php"?>" class="active">
                        <span class="las la-igloo"></span>
                        <span>Dashboard</span>
                    </a>

                </li>

                <li>
                    <a href=" <?php echo BASE_URL."/admin/users/index.php"?> ">
                        <span class="las la-users"></span>
                        <span>Customers</span>
                    </a>

                </li>

                <li>
                    <a href="<?php echo BASE_URL."/admin/agents/index.php"?>">
                        <span class="las la-clipboard-list"></span>
                        <span>Agents</span>
                    </a>

                </li>


                <li>
                    <a href="<?php echo BASE_URL."/admin/properties/index.php"?>">
                        <span class="las la-receipt"></span>
                        <span>Hotels</span>
                    </a>

                </li>

                <li>
                    <a href=" <?php echo BASE_URL."/index.php"?> ">
                        <span class="las la-user-circle"></span>
                        <span>Home site</span>
                    </a>

                </li>



            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />

            </div>


        
            <div class="user-wrapper">

            <?php if(isset($_SESSION['id'])): ?>
                <img src="<?php echo BASE_URL."../assets/images/".$adminPic['image']; ?>" width="30px" height="30px" />

                <div class="user-info">
                    <h4> <?php echo $_SESSION['username']?> </h4>
                    
                    <ul>
                        <li><small>Super admin</small></li>
                        <ul>
                            <li>
                                <a href="<?php echo  BASE_URL."/logout.php" ?>">Logout</a>
                            </li>
                        </ul>
                    </ul>

                </div>
            <?php endif; ?>

            </div>

       

        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1><?php echo $countCustomers  ?> </h1>
                        <span>Customers</span>
                    </div>

                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>


                <div class="card-single">
                    <div>
                        <h1><?php echo $numberOfProperties; ?></h1>
                        <span>Hotels</span>
                    </div>

                    <div>
                        <span class="las la-clipboard"></span>
                    </div>
                </div>


                <div class="card-single">
                    <div>
                        <h1><?php echo $CountPropertiesInProgress?></h1>
                        <span>in progress</span>
                    </div>

                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>


                <div class="card-single">
                    <div>
                        <h1>The Best</h1>
                        <span>The Best</span>
                    </div>

                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>



            </div>


            <div class="recent-grid">
                <div class="projects">
                    <div class="card">

                        <div class="card-header">
                            <h3>Properties</h3>

                            <a href="<?php echo BASE_URL."/Admin/properties/index.php"; ?>">See all <span class="las la-arrow-right"></span></a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr class="table-header">
                                            <td>Property Name</td>
                                            <td>Address</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php foreach($properties as $property ):?>
                                            <tr>
                                                <td> <?php echo $property['name']; ?> </td>
                                                <td><?php echo $property['address']; ?> </td>

                                                <?php if($property['sold']): ?>
                                                    <td><span class="status green"></span>Sold</td>

                                                    <?php else: ?>
                                                     <td><span class="status orange"></span>In progress</td>

                                                <?php endif; ?>

                                            </tr>
                                         <?php endforeach; ?>

                                      

                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="customers">
                    <div class="card">

                        <div class="card-header">
                            <h3>New Customer</h3>

                            <a href="<?php echo BASE_URL."/Admin/users/index.php"; ?>" >See all <span class="las la-arrow-right"></span></a>
                        </div>

                        <div class="card-body">

                           <?php foreach($users as $user ): ?>
                                 <?php if(!$user['admin']): ?>
                                    <div class="customer">
                                        <div class="info">
                                    
                                       
                                                <img src="<?php echo BASE_URL."../assets/images/here.jpg" ?>" width="40px" height="40px" alt="" />

                                                <div>
                                                    <h4><?php echo $user['username']; ?></h4>                                   
                                                    <small> <?php echo  $user['email']; ?></small>
                                                </div>
                                        </div>

                                         <div  class="contact">
                                            <span class="las la-user-circle"></span>
                                            <span class="las la-comment"></span>
                                            <span class="las la-phone"></span>
                                         </div>    
                                    
                                    </div>
                                 <?php endif; ?>
                            <?php endforeach; ?>

                        </div>

                    </div>


                </div>

                </div>
        </main>
    </div>



</body>
</html>