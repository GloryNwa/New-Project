<?php
session_start();

include("admin/include/db.php");

$cart = (isset($_SESSION['cart'])) ? count($_SESSION['cart']):0;
// var_dump($cart);exit;
// if (isset($_SESSION['cart']['empty'])){
//  unset($_SESSION['cart']);   
//   updateDbcart();
// 

  
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FrontLine : Interiors</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
        
        <!-- Google Font Here -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CLato:300,300i,400,400i,700,700i%7CLobster%7CRaleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css2/lib/stroke-icon/Pe-icon-7-stroke.css">
        <link rel="stylesheet" href="css2/lib/font-awesome/font-awesome.min.css">
        <link rel="stylesheet" href="css2/lib/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css2/lib/megamenu/bootsnav.css">
        <link rel="stylesheet" href="css2/lib/megamenu/style.css">
        <link rel="stylesheet" href="css2/lib/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="css2/lib/owl-carousel/owl.theme.default.min.css">
        <link rel="stylesheet" href="css2/lib/parallax/parallax.css">
        <link rel="stylesheet" href="css2/lib/wow/animate.css">
        <link rel="stylesheet" href="css2/style.css">
        <link rel="stylesheet" href="css2/helper.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
        <script src="js2/lib/jquery/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--Header Section-->
        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                <ul>
                        <li class="dropdown">
                            <a href="cart.php" class="dropdown-toggle" data-toggle="dropdown" >
                                <i class="fa fa-shopping-bag"></i>
                                <?php if($cart > 0){?>                       
                                <span class="badge"><?=$cart;?></span>
                                <?php }else if($cart == 0){?> 
                                <span class="badge">0</span>
                                 <?php
                                    
                                }
                                ?>
                            </a>
                            <ul class="dropdown-menu cart-list">

                                   <?php
                               
                                if ( isset($_SESSION["cart"]) ){
                                    
                                    // $id = $_SESSION["id"];


                                    $glory = "('";
                                    $glory .= implode("','",$_SESSION['cart']);
                                    $glory .= "')";
                                    $query = "SELECT * FROM category WHERE id IN ".$glory;
                                       if ($result = mysqli_query($connection,$query)){
                                          $total = 0;  
                                         while($show = mysqli_fetch_array($result)){

                                        
                                         $title = $show['description'];
                                         $file = $show['picture'];
                                         $amount = $show['price'];
                                         $id = $show['id'];
                                        
                                         $total = $total + $amount;
                                       
                                        ?>
                                    
                                <li>
                                    <a href="cart.php#" class="photo"><img src="<?php echo 'Admin/files/'.$file;?>" alt="" style="width:60px" /></a>
                                    <h6><a href="#"><?=$title ;?></a></h6>
                                    <span class="pull-right"><strong>$</strong><?=$total;?></span>
                                </li>

                                <?php
                                   }
                                 
                                ?>
                                
                                <li class="total">
                                    <span class="pull-right">Total :<strong>$</strong><?=$total;?></span>
                                    <a href="cart.php" class="btn btn-default btn-cart">Cart</a>
                                </li>
                                <?php
                                 }

                                 }

                                ?>
                          
                        </li>
                    </ul>
                      <!--   <li class="search"><a href="index.php"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="index.html#"><i class="fa fa-bars"></i></a></li>-->

                        <!-- <li class="dropdown">
                            <a href="./login.php" class="dropdown-toggle" data-toggle="dropdown">Your Account</a>
                            <ul class="dropdown-menu dropdown-link">                     
                            <a href=""><li><button class="btn btn-warning btn-xl"style="width:120px; border-radius:0px; margin-left:40px;margin-top:10px">LOGIN</li></button></a>
                            <div style="font-size:10px;margin-left:40px;margin-top:10px">New Customer?<a href="./register.php">Sign Up</a></div>
                             <br><br>
                            </ul>
                        </li>                    -->
                       <!-- <a href="cart.php?">
                        <i class="fa fa-shopping-cart fa-2x" style="color:black;padding:15px;">
                            <?php if($cart > 0):?>
                            <li class="badge"style="background-color:red;margin-top:0px"><?=$cart;?></li>
                        <?php endif;  ?>
                        </i> -->
                     <!--    <span class="badge">3</span>  -->                
                    <!-- </a> -->

                 </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
<!--                 <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand nav-logo" href="index.php">Happy Store</a>
                </div> -->
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right custom-menu" data-in="fadeInDown" data-out="fadeOutUp">
                          <li><a class="active" href="index.php">Home</a></li>
                          <li><a href="about.php">About Us</a></li>
                          <li><a href="services.php">Services</a></li>
                          <li><a href="catalogue.php">Catalogue</a></li>
                          <li><a href="category.php">Products Category</a></li>
                          <li><a href="shop.php">Shop</a></li>
                          <li><a href="contacts.php">Contacts</a></li>
                                 
                    </ul>
                     
                </div><!-- /.navbar-collapse -->
                <div class="grid_9" style="color:#722f37">
                <a class="logo" href="index.html"><img src="images/flogo.jpg" style="width:80px;height:80px;font-size: 16px!important"></a>&nbsp;&nbsp; <i class=" fa fa-phone fa-1x"style="margin-top:5px;"></i>
          <a href="tel:+08032894147">08032894147</a>, <a href="tel:+07052749021">07052749021</a> |&nbsp;
          <!-- <a href="mailto:interiorfrontline@gmail.com">interiorfrontline@gmail.com </a> -->
          <a href="mailto:interiorfrontline@gmail.com?Subject=Welcome to FrontLine Interiors" target="_top">interiorfrontline@gmail.com</a>&nbsp; | Mon - Sat 8am - 10pm
        </div>
            </div>

        </nav>
       
        <!-- End Navigation -->
