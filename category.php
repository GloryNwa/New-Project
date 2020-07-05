<?php include("includes/header2.php");?>
<!-- content -->
<section id="content">
  <div class="bg-top">
    <div class="bg-top-2">
      <div class="bg">
        <div class="bg-top-shadow">
          <div class="main">
            <div class="gallery p3">
              <div class="wrapper indent-bot">
                <div id="gallery" class="content">
                  <div class="wrapper">
                    <div class="slideshow-container">
                      <div id="slideshow" class="slideshow"></div>
                    </div>
                  </div>
                </div>
                <div id="thumbs" class="navigation">
                  <ul class="thumbs noscript">
                    <li> <a class="thumb" href="images/gallery-img1.jpg"> <img src="images/thumb-1.jpg" alt=""><span></span> </a> </li>
                    <li> <a class="thumb" href="images/furniture.jpg"> <img src="images/thumb-6.jpg" alt=""> <span></span></a> </li>
                    <li> <a class="thumb" href="images/gallery-img3.jpg"> <img src="images/thumb-3.jpg" alt=""> <span></span></a> </li>
                    <li> <a class="thumb" href="images/gallery-img4.jpg"> <img src="images/thumb-4.jpg" alt=""> <span></span></a> </li>
                    <li> <a class="thumb" href="images/gallery-img5.jpg"> <img src="images/thumb-5.jpg" alt=""> <span></span></a> </li>
                    <li> <a class="thumb" href="images/gallery-img6.jpg"> <img src="images/thumb-6.jpg" alt=""> <span></span></a> </li>
                    <li> <a class="thumb" href="images/slide.jpg"> <img src="images/thumb-6.jpg" alt=""> <span></span></a> </li>
                    <li> <a class="thumb" href="images/pic.jpg"> <img src="images/thumb-6.jpg" alt=""> <span></span></a> </li>
                  </ul>
                </div>
              </div>
              <div class="inner-2">
                <div class="wrapper"> <span class="title t2 img-indent3">Hello</span>
                   <div class="extra-wrap indent-top2"> <p>
                   We are FrontLine Interiors.We are driven by group of Brilliant, Smart, Intelligent, Creative ,
                    Strategic Thinkers,that have carried out divers range of projects ranging from Hotels, 
                    Restaurants, Offices, Residential 
                    Apartments etc. Most importantly, We give our clients Quality Products, 
                    Excellent and Timely Services Delivery that they can rarely find anywhere</p>

                   <p>You Love what you see?&nbsp; <a  href="contacts.php"><button class="button"style="border:none">Contact Us</button></a></p>
                    </div>
                </div>
              </div>
            </div>
          </div>

         <br>
          <h3 class="color-1 p2" style="text-align: center; font-size:36px">Product Category</h3><br>
       <?php
           $query = "SELECT * FROM productcategory group BY category";
             if ($sql = mysqli_query($connection,$query)) {
                     while($query_row = mysqli_fetch_assoc($sql)){
                       $cat = $query_row['category'];
              ?>
              <div class="carousel">
             
              <h3 class="color-1 p2"><?php echo  $cat; ?></h3>
              <a class="prev" href="#">Prev</a> <a class="next" href="#">Next</a> 
                <ul id="carousel">
                  <?php
                    $query2 = "SELECT * FROM `productcategory` WHERE `category` = '$cat' ORDER BY category DESC LIMIT 30";

                    if ($sql2 = mysqli_query($connection,$query2)) {
                      while($query_row2 = mysqli_fetch_assoc($sql2)){
                        $pic = $query_row2['file'];
                        $catt = $query_row2['category'];
                   ?>   
                  <li><a href="viewCategory.php?category=<?php echo $query_row['category']; ?>"><img src='<?php echo "admin/categoryFiles /" .$pic;?>' alt="" style="height: 120px; width: 200px"></a></li>

                  <?php

                    }

                 }

                ?>

                </ul>
            
            </div>
            <?php

          }

        }

        ?>
      </div>
      </div>
    </div>
  </div>
  <?php include("includes/footer4.php");?>