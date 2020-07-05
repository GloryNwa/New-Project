<?php include("includes/header.php");?>
<!-- content -->
<section id="content">
  <div class="bg-top">
    <div class="bg-top-2">
      <div class="bg">
        <div class="bg-top-shadow">
          <div class="main">
            <div class="box p3">
              <div class="padding">

                <div class="container_12">
                  <div class="wrapper">
                    <div class="grid_12">
                      <div class="wrapper">
                       
                        <article class="grid_12 omega">
                          <div class="indent-right">
                            <h3 class="p2" style="text-align:center">What We Do</h3>
                            <div class="wrapper prev-indent-bot2">
                              <div class="extra-wrap">
                                <p class="prev-indent-bot">We are FrontLine Interiors, with many years of experince in the industry, 
                                we have become an expert in what we do. At FrontLine Interiors, we have mastered cutting 
                                edge WallPapper Installations, Lightings and Installation, Painting, Screeding, POP Ceiling, 
                                Rising Damp Treatment, 
                                Space Management, Blinds, Curtains, Bedding, Motors Interior/Accessory etc.
                                At FrontLine,we are not only concern about selling our products, our clients
                                 satisfaction is our Top Priority.</p></div>
                            </div>
                         </div>
                        </article>
                        
                         <article class="grid_6 alpha">
                          
                             <h3 class="p2">Company Profile</h3>
                              <?php
                              $query ="SELECT * FROM companyprofile ORDER BY id DESC LIMIT 1";
                               if ($sql = mysqli_query($connection,$query)) {
                                  while($query_row = mysqli_fetch_assoc($sql)){
                             
                                   $pic= $query_row['photo'];
                                                 
                             ?>
                            <figure class="img-indent2 frame2"><img src='<?php echo "admin/sliderFiles /" .$pic;?>' alt="" width="450px" height="350px"></figure>
                          <?php
                           }

                          }

                        ?>
                        </article>

                         <article class="grid_4 alpha">
                           <div class="indent">
                            <h3 class="prev-indent-bot2" style="">Our Services</h3><br>
                            <ul class="list-2">
                             <li><a href="#">Furniture & Fixtures</a></li>
                              <li><a href="#">WallPapper, WallPanel + Installation etc.</a></li>
                              <li><a href="#">Painting, Screeding, POP Ceiling</a></li>
                              <li><a href="#">Interior Advisory</a></li>
                              <li><a href="#">Lightings</a></li>
                              <li><a href="#">Space Management</a></li>
                              <li><a href="#">Rising Damp Treatment</a></li>
                              <li><a href="#">Blinds, Curtains & Bedding</a></li>
                              <li><a href="#">Motors Interior/ Accessories</a></li>                
                            </ul>
                          </div>
                        </article>
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