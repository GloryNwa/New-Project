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


                      <div class="">
                        <h3 class="p0" style=""></h3><br>
                      </div>
                       <?php
                        if(isset($_GET['year'])){
                         $year  = $_GET['year']; 
                          $query = "SELECT * FROM productarchive WHERE year='$year' LIMIT 1";
                             

                             if ($sql = mysqli_query($connection,$query)) {
                                  

                              while($query_row = mysqli_fetch_assoc($sql)){
                     

                          
                            $cat = $query_row['year'];
                     
                            // echo "strzwwwwwzzing";exit; 
                        ?>
                           <h3 class="p0"><?php echo  $cat; ?> Projects</h3><br>
                       
                      <div class="wrapper p4">
                       <?php
                       
                           $query2 = "SELECT * FROM `productarchive` WHERE `year` = '$year' AND year ='$cat' ORDER BY month LIMIT 12";




                           if ($sql2 = mysqli_query($connection,$query2)) {

                              while($query_row2 = mysqli_fetch_assoc($sql2)){
                              
                                $pic = $query_row2['file'];
                                $desc = $query_row2['description'];
                                $id = $query_row2['month'];
                                $sum = $query_row2['summary'];

                            
                                ?>
                    
                        <article class="grid_4 omega">
                        <div class="indent-right">
                        <figure class="frame2 p2"><img src='<?php echo "admin/archiveFiles /" .$pic;?>'  alt=""style="height:200px;width:250px"></figure>
                            <p class=" prev-indent-bot"><?php echo substr($desc,0,55) ;?>&nbsp;<a href="projectArchive.php?month=<?php echo $query_row2['month'];?>&year=<?php echo $query_row2['year'];?>&summary=<?php echo $query_row2['summary'];?>" style="text-decoration:none">see more</a></p>
                         </div>
                         </article>
                        <?php
                         }

                       }

                    

                    ?>
                      </div>
                       <?php
                        
                     }

                       

                    ?>
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
  <?php include("includes/footer2.php");?>