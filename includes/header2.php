
<?php

session_start();

$cart = (isset($_SESSION['cart'])) ? count($_SESSION['cart']):0;

include("admin/include/db.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Interior Design | Catalogue</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="stylesheet" href="css2/lib/stroke-icon/Pe-icon-7-stroke.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
<script src="js/jquery-1.6.2.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jcarousellite_1.0.1.js"></script>
<script src="js/jquery.galleriffic.js"></script>
<script src="js/jquery.opacityrollover.js"></script>
<script>
$(document).ready(function () {
    $(".jCarouselLite").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
        speed: 400,
        vertical: false,
        circular: true,
        easing: 'easeOutQuart',
        visible: 4,
        start: 0,
        scroll: 1
    });
});
</script>


<!-- <link rel="stylesheet" type="text/css" href="style/css/style.css" media="all">
<link rel="stylesheet" type="text/css" media="screen" href="style/css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'> -->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all">
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all">
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all">
<![endif]-->
<!-- <script src="style/js/jquery-1.6.4.min.js"></script>
<script src="style/js/ddsmoothmenu.js"></script> -->
<script src="style/js/jquery.jcarousel.js"></script>
<script src="style/js/jquery.prettyPhoto.js"></script>
<script src="style/js/carousel.js"></script>
<script src="style/js/jquery.flexslider-min.js"></script>
<!-- <script src="style/js/jquery.masonry.min.js"></script>
<script src="style/js/jquery.slickforms.js"></script>
 -->
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page3">
<!--==============================header=================================-->
<header>
  <div class="row-1">
    <div class="main">
      <div class="container_12">
        <div class="grid_12">
           <nav>
            <ul class="menu">
            <li><a class="active" href="index.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="catalogue.php">Catalogue</a></li>
              <!-- <li><a href="category.php">Products Category</a></li> -->
              <li><a href="shop.php">Shop</a></li>
              <li><a href="contacts.php">Contacts</a></li>
              <a href="cart.php?">
                <i class=" fa fa-shopping-cart fa-1x" style="color:black;margin-top:20px"></i>
                    <?php if($cart > 0){?>
                    <li class="badge" style="color:red;padding:1px;margin-top:0px; font-size:12px"><?=$cart;?></li>
                    <?php } if($cart == 0){?>
                      <li class="badge" style="color:red;padding:1px;margin-top:0px; font-size:12px">0</li>
                      <?php
                    }
                 ?>
               
             <!--    <span class="badge">3</span>  -->                
             </a>
            </ul>
          </nav>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="row-2">
    <div class="main">
      <div class="main">
      <div class="container_12">
      <div class="grid_12" style="color:#722f37;font-size: 19px!important">
      <a class="logo" href="index.html"><img src="images/flogo.jpg" style="width:80px;height:80px;font-size: 16px!important"></a>&nbsp;&nbsp; <i class=" fa fa-phone fa-1x"style="margin-top:5px;"></i>
          <a href="tel:+08032894147">08032894147</a>, <a href="tel:+07052749021">07052749021</a> |&nbsp;
          <!-- <a href="mailto:interiorfrontline@gmail.com">interiorfrontline@gmail.com </a> -->
          <a href="mailto:interiorfrontline@gmail.com?Subject=Welcome to FrontLine Interiors" target="_top">interiorfrontline@gmail.com</a>&nbsp; | Mon - Sat 8am - 10pm
        </div>

        <!-- <div class="grid_3">         
              <i class="fa fa-envelope" style="display:inline">
        </div> -->
        <div class="clear"></div>
      </div>
    </div>
    </div>
  </div>
</header>