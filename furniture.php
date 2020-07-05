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
                        <h3 class="p0">Furnitures</h3>
                        <hr>
                      </div>
                      <div class="wrapper p4">
                   <?php
                        $query ="SELECT* FROM newarrivals ORDER BY id DESC LIMIT 21";
                      
                         if ($sql = mysqli_query($connection,$query)) {
                         
                            while($query_row = mysqli_fetch_assoc($sql)){
                             
                              $price = $query_row['price'];
                              $desc = $query_row['description'];
                              $pic = $query_row['picture'];       
                              $pid = $query_row['product_id'];   
                              $cat = $query_row['category']; 
                              $id= $query_row['id'];           
                       ?>
                        <article class="grid_4 omega">
                        <div class="indent-right">
                        <figure class="frame2 p2"><img src='<?php echo "admin/newArrivalsFiles /" .$pic;?>'alt=""style="height:200px;width:250px"></figure>
                        <p class=" prev-indent-bot"><?php echo substr($desc,0,30) ;?></p>
                        <p style="font-size:18px"><strong>Product ID:</strong><?php echo $pid;?>
                         <p style="font-size:22px"><span class="price">₦<?php echo number_format($price);?></span>
                        <a  href="furniture.php?id=<?php echo $query_row['id'];?>" class="button" style="margin:5px" data-toggle="modal" data-target="#myModal">Buy Now</a> </p>
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
  <?php include("includes/footer2.php");?>