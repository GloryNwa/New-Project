<?php include("includes/header.php");
//  if(isset( $_SERVER['HTTP_REFERER'])){
//      $_SESSION['referrer']  = $_SERVER['HTTP_REFERER'];


//   }
 ?>  
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
                   <p>You Love what you see?&nbsp;<a  href="contacts.php"><button class="button"style="border:none">Contact Us</button></a></p>
                   </div>
                </div>
              </div>

            </div>

            <div class="container_12">
              <div class="wrapper">
                <article class="grid_5"><br>
                  <h3>Our Services List</h3>
                  <div class="wrapper">
                    <article class="grid_5 alpha">
                    <?php
                      $query ="SELECT * FROM recentwork ORDER BY id DESC LIMIT 1";
                       if ($sql = mysqli_query($connection,$query)) {
                          while($query_row = mysqli_fetch_assoc($sql)){
                     
                            $pic = $query_row['file'];

                      ?>
                      <figure class="img-indent frame"><img src='<?php echo "admin/recentFiles /" .$pic;?>' alt=""style="height:160px;width:120px"></figure>
                     
                      <div class="extra-wrap">
                        <div class="">
                          <ul class="list-1">
                            <li>Furniture & Fixtures</a></li>
                            <li>WallPapper,WallPanel, Etc</a></li>
                            <li class="last">Painting, Screeding, POP Ceiling</a></li>
                              <li class="last">Interior Advisory</a></li>
                          </ul>
                        </div>
                        <p></p>
                        <a class="button" href="services.php">See More</a>
                      </div>
                      <div class="clear"></div>
                       <?php
                          }

                        }


                        ?>
                    </article>
                  </div>
                </article>
                 <article class="grid_4"><br>
                  <h3>Our Mission</h3>
                  <div class="wrapper">
                   <div class="extra-wrap">
                    <span>
                 Frontline Interiors is dedicated to be the best choice in the "Interior Decoration Industry" through our commitment, cost-competitive, innovative and excellence execution. To creating interiors that reflect our client's personality and lifestyle, by capturing their design dreams and making them a reality. <!--   To earn a lifetime loyalty of our customers by consistently delivering frequent high quality standard interior design services which offers excentent values. --></span>
                 </div><br>
                  </div>
                </article>        
                  <article class="grid_3"><br>
                  <h3>Consultation</h3>
                  <div class="wrapper">
                   <div class="extra-wrap">
                    <span>We are open from <br>8am-10pm, Mon-Sat. <br>You are free to consult us within the above hours. We are available for you always and we will do our posible best to attain to you as fast as we can.</span>
                 </div>
                  <article class="grid_3 omega"> 
                  <p></p>                  
                      <a class="button" href="contacts.php">Consult</a>               
                      <div class="clear"></div>
                    </article>
                  </div>
                </article>  
           
              <div class="bg-bot">
                <div class="main">               
                  <div class="container_12">
                  <h3 class="p2">New Arrivals</h3>
                    <div class="wrapper">
                    <?php
                        $query ="SELECT * FROM newarrivals ORDER BY id DESC LIMIT 6";
                         if ($sql = mysqli_query($connection,$query)) {
                            while($query_row = mysqli_fetch_assoc($sql)){
                       
                              $price = $query_row['price'];
                              $desc = $query_row['description'];
                              $pic = $query_row['picture']; 
                              $id = $query_row['id'];
                              $cat = $query_row['category']; 
                                          
                       ?>
                        <article class="grid_4 omega">
                          <div class="indent-right">
                            <figure class="frame2 p2"><img src='<?php echo "admin/newArrivalsFiles /" .$pic;?>'  alt="furniture"style="height:200px;width:250px"></figure>
                            <p class="prev-indent-bot" style="font-size:20px"><?php echo (substr($desc,0,30)) ;?></p>
                            <div class="wrapper"><span class="price fleft">₦<?php echo number_format($price);?></span>
                            <a class="button fright" href="viewProduct.php?category=<?php echo $query_row['category']; ?>" style="margin:5px">Buy Now</a> </div><hr>
                          </div>
                        </article>
                        <?php
                         }

                       }
                   
                     ?>
                    </div>
                  </div>
                </div>
              </div>      
               </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

  </div>

<?php include("includes/footer.php");?>