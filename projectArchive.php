

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
                          
                            <div class="wrapper prev-indent-bot2">
                              
                             
                            </div>
                            <?php
                              $desc= $_GET['summary'];
                              $mth= $_GET['month'];
                              $yr= $_GET['year'];
                              
                                 $query = "SELECT `description`, `month`, `year` FROM `productarchive` WHERE `month`='$mth' AND`year`='$yr' AND `summary`='$desc'";
                                  if ($query_run = mysqli_query($connection,$query)) {
                                  ?><h3 class="p0"  style=""> Project Archive</h3><br>
                                   
                                    <strong>Project Summary: </strong> <?php echo $desc . '<br>'; ?>
                                    <strong>Month: </strong> <?php echo $mth . '<br>'; ?>
                                    <strong>Year: </strong> <?php echo $yr . '<br><br>'; ?>
                                    <?php
                                     }
                                   ?>
                                  <?php
                                      $query2 = "SELECT * FROM `productarchive` WHERE `month`='$mth' AND `year`='$yr' AND `summary`='$desc'";
                                       
                                      if ($query_run1 = mysqli_query($connection,$query2)) {
                                          while($query_row2 = mysqli_fetch_assoc($query_run1)){
                                            $day = $query_row2['day'];
                                            $time = $query_row2['time'];
                                            $yr2 = $query_row2['year'];  
                                            $pic = $query_row2['file'];  
                                            $month = $query_row2['month'];
                                            $desc2 = $query_row2['description'];

                                      ?>
                                     
                                      <img src='<?php echo "admin/archiveFiles /" .$pic;?>' alt=""style="height:500px;width:100%">
                                       <p style="font-size:18px"><strong><?php echo $day;?></strong></p>
                                      <p style="font-size:18px"><strong>Description:</strong> <?php echo $desc2;?></p>
                                      <p style="font-size:18px"><strong>Time:</strong> <?php echo $time;?></p><hr><br>
                                     
                                      <?php
                                      }
                                   }
                                
                             ?>
                            <p style="font-size:18px"><strong>You Love what you see?</strong> &nbsp;&nbsp;<a  href="contacts.php" style="text-decoration:none">Contact Us</a><br><strong>Or Call Us -</strong> 08032894147, 07052749021 </p>
                          <br>                                   
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
  <?php include("includes/footer2.php");?>