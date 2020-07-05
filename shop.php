<?php include("includes/header.php");?>
<!-- content -->
<section id="content">
  <div class="bg-top">
    <div class="bg-top-2">
      <div class="bg">
        <div class="bg-top-shadow">
          <div class="main">
            <div class="box">
              <div class="padding">


                <div class="container_12">
                  <div class="wrapper">
                    <div class="grid_12">


                      <div class="indent-left p2">
                        <h3 class="p0">New Arrivals</h3>
                      </div>
                      <div class="wrapper p4">
                   <?php
                        $query ="SELECT * FROM newarrivals ORDER BY id DESC LIMIT 30";
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
                            <figure class="frame2 p2"><img src='<?php echo "admin/newArrivalsFiles /" .$pic;?>'  alt="image"style="height:200px;width:250px"></figure>
                            <p class=" prev-indent-bot"><?php echo (substr($desc,0,30)) ;?></p>
                            <div class="wrapper"><span class="price fleft">₦<?php echo number_format($price);?></span>
                            <a class="button fright" href="viewProduct.php?category=<?php echo $query_row['category'];?>" style="margin:5px">Buy Now</a></div><hr>
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
  <?php include("includes/footer4.php");?>