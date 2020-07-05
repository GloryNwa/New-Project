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
                        <h3 class="p0" style="text-align:center">Recent & Ongoing Projects</h3>
                      </div><br>
                      <div class="wrapper p4">
                       <?php
                           $query2 = "SELECT * FROM `recentwork`";
                          if ($sql2 = mysqli_query($connection,$query2)) {
                            while($query_row2 = mysqli_fetch_assoc($sql2)){
                                $pic = $query_row2['file'];
                                $catt = $query_row2['year'];
                                $month = $query_row2['month'];
                                $desc = $query_row2['description'];

                            
                          ?>  
                        <article class="grid_4 alpha">
                          <div class="indent-left">
                        
                            <figure class="frame2 p2"><img src='<?php echo "admin/recentFiles /" .$pic;?>' alt="" style="height: 180px; width:250px"></figure>
                            <p><?php echo (substr($desc,0,40)) ;?>
                            <a href="viewrecent.php?description=<?php echo$query_row2['description'];?>&month=<?php echo $query_row2['month'];?>&year=<?php echo $query_row2['year'];?>">
                             <span class="button fright" href="#">See More</span></a></p><br><br>

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
  </section>
  <?php include("includes/footer.php");?>