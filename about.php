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
                        <article class="grid_5 alpha">
                          
                             <h3 class="p2">Company Profile</h3>
                              <?php
                              $query ="SELECT * FROM companyprofile ORDER BY id DESC LIMIT 1";
                               if ($sql = mysqli_query($connection,$query)) {
                                  while($query_row = mysqli_fetch_assoc($sql)){
                             
                                    $pic= $query_row['photo'];
                                                 
                             ?>
                            <figure class="img-indent2 frame2"><img src='<?php echo "admin/sliderFiles /" .$pic;?>' alt="" width="350px" height="480px"></figure>
                          <?php
                           }

                          }

                        ?>
                        </article>
                        <article class="grid_7 omega">
                          <div class="indent-right">
                            <h3 class="p2">Who We Are</h3>
                            <div class="wrapper prev-indent-bot2">
                              
                              <div class="extra-wrap">
                                <p class="prev-indent-bot">We are FrontLine Interiors.We are driven by group of Brilliant, Smart, Intelligent, Strategic Thinkers, Creative Designers that have carried out range of projects such from Hotels, Restaurants, Offices, Residential Apartments etc. Most importantly, We give our clients Quality Products, Excellent Services and Timely Services Delivery that they can hardly find anywhere.
                                At FrontLine Interiors,we are not only concern about selling our products, our clients satisfaction is our Top Priority.</p>
                                <p>With many years of experince in the industry, we have become an expert in what we do. At FrontLine Interiors, we have mastered cutting edge WallPapper Installations, Lightings and Installation, Painting, Screeding, POP Ceiling, Space Management, Blinds, Curtains, Bedding, Motors Interior/ Accessory etc.</p>
                              
                            </div>
                            </div>
                           </div>
                        </article>
                         
                        <br>
                         <article class="grid_12 omega">
                          <div class="indent-right">
                            <div class="extra-wrap">
                               <p>We are known for Quality Products that can withstand Heat and Moisture. Our team of hardworking individuals work round the clock to ensure Excellent and Timely Service Delivery. - We are looking farward to doing business with you.</p>
                                <p>You can contact us anytime anyday. We are always available and our team of young vibrant individuals work tiredlesly to ensure our clents satisfaction at all time.</p>
                            </div>
                           </div>
                        </article>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
                </article>
               
               </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav>
 <?php include("includes/footer3.php");?>
<!-- https://mcgankons.com/c/executive-table-lagos-nigera/ -->


